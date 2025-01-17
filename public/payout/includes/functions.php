<?php

/************************

	CryptoConverter
	
	Functions-file
	
************************/

	// This function writes the options for the different crypto currencies
	function cryptoCurrencyOptions($crptCurr = 'BTC') {
	
		global $lang;
		
		// Open list of currencies
		$cryptoCurrencies = fopen("./cache/cryptoCurrencies.txt", "r");
		$timeStamp = fgets($cryptoCurrencies);
		$cryptoCurrenciesFile = fread($cryptoCurrencies, filesize("./cache/cryptoCurrencies.txt"));
		fclose($cryptoCurrencies);
		
		// Removes the timestamp from the cache file
		$JSON = str_replace($timeStamp, '', $cryptoCurrenciesFile);
		
		// Converts the JSON to an array
		$cryptoCurrencies = json_decode($JSON, TRUE)['Data'];
		
		// Sorts the currencies based on the API order
		function cmp_by_optionNumber($a, $b) {
		  return $a["SortOrder"] - $b["SortOrder"];
		}
		
		usort($cryptoCurrencies, 'cmp_by_optionNumber');
		
		// Writes an disabled option counting the number of crypto currencies
		$cryptoCurrencyOptions = '<option disabled>'.count($cryptoCurrencies).' '.$lang['currencies'].'</option>';
		
		// Writes the option list
		foreach ($cryptoCurrencies as &$subArr) {
			$cryptoCurrencyOptions .= '<option value="'.$subArr['Name'].'"'; 
			if($subArr['Name'] == $crptCurr) { $cryptoCurrencyOptions .= ' selected'; }
			$cryptoCurrencyOptions .= '>'.$subArr['FullName'].'</option>';
		}
		
		return $cryptoCurrencyOptions;
		
	}
		
	// This function updates the list of available crypto currencies to the cache
	function updateCryptoCurrencies () {
		
		// Open cache of current currencies
		$cryptoCurrencies = fopen("./cache/cryptoCurrencies.txt", "r");
		$timeStamp = fgets($cryptoCurrencies);
		fclose($cryptoCurrencies);
		
		// Checks if the current list of crypto currencies should be updated (Runs maximum every 24 hours)
		if($timeStamp < (time()-(60*60*24))) {
			
			// Retrieves new list of available crypto currencies
			$newCryptoCurrencies = file_get_contents("https://www.cryptocompare.com/api/data/coinlist/");
			
			// Checks if the new list is valid, and writes to file
			if(!empty($cryptoCurrencies)) {
				$cryptoCurrencies = fopen("./cache/cryptoCurrencies.txt", "w+");
				fwrite($cryptoCurrencies, time()."\r\n");
				fwrite($cryptoCurrencies, $newCryptoCurrencies);
				fclose($cryptoCurrencies);
				
				return 'Crypto currencies updated.';
			} else {
				
				return 'Error: Could not retrieve list of currencies from API!';
				
			}
		} else {
		
			return 'Error: There is no need to update the list yet, as it is fresher than 24 hours.';
			
		}
	
	}
	
	// This function converts crypto currencies to standard currencies and returns the converted amount
	function fromCryptoToStandard ($amt, $crptCurr, $stdCurr) {
	
		global $amountDecimals;
		global $amountDecimalSeparator;
		global $amountThousandSeparator;
		global $apiUpdateInterval;
		
		// Open cache of current exchange rate
		$exchangeRateFile = fopen("./cache/".$crptCurr."-".$stdCurr.".txt", "r");
		$timeStamp = fgets($exchangeRateFile);
		
		// Checks if the current exchange rate should be updated, interval defined in config.php
		if($timeStamp < (time()-$apiUpdateInterval)) {
		
			// Close current file connection
			fclose($exchangeRateFile);
		
			// The exchange rate is outdated, retrieve new rate		
			$exchangeRateFromAPI = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=".$crptCurr."&tsyms=".$stdCurr);
			
			// Convert exchange rate to array
			$exchangeRate = json_decode($exchangeRateFromAPI, TRUE);
			
			// Write new exchange rate to file
			$exchangeRateFile = fopen("./cache/".$crptCurr."-".$stdCurr.".txt", "w+");
			fwrite($exchangeRateFile, time()."\r\n");
			fwrite($exchangeRateFile, $exchangeRateFromAPI);
			fclose($exchangeRateFile);
		
		// Since the current cached exchange rate is still good, we will use the current file
		} else {
			
			// Read the full cached exchange rate
			$exchangeRateFileRaw = fread($exchangeRateFile, filesize("./cache/".$crptCurr."-".$stdCurr.".txt"));
			
			// Close the file connection
			fclose($exchangeRateFile);
			
			// Removes the timestamp from the cache file
			$JSON = str_replace($timeStamp, '', $exchangeRateFileRaw);
			
			// Convert exchange rate to array
			$exchangeRate = json_decode($JSON, TRUE);
		}
		
		// Calculate the result
		$calculatedResult = ($exchangeRate[$stdCurr]*$amt);
		
		// Format the amount
		$calculatedResult = number_format($calculatedResult, $amountDecimals, $amountDecimalSeparator, $amountThousandSeparator);
		
		// Remove .00
		$calculatedResult = str_replace($amountDecimalSeparator."00", "", $calculatedResult);
	
		return $calculatedResult;
	
	}
	
	// This function writes the options for the different standard currencies
	function standardCurrencyOptions ($stdCurr = 'USD') {
	
		$standardCurrencies = array (
            'ALL' => 'Albania Lek',
            'AFN' => 'Afghanistan Afghani',
            'ARS' => 'Argentina Peso',
            'AWG' => 'Aruba Guilder',
            'AUD' => 'Australia Dollar',
            'AZN' => 'Azerbaijan New Manat',
            'BSD' => 'Bahamas Dollar',
            'BBD' => 'Barbados Dollar',
            'BDT' => 'Bangladeshi taka',
            'BYR' => 'Belarus Ruble',
            'BZD' => 'Belize Dollar',
            'BMD' => 'Bermuda Dollar',
            'BOB' => 'Bolivia Boliviano',
            'BAM' => 'Bosnia and Herzegovina Convertible Marka',
            'BWP' => 'Botswana Pula',
            'BGN' => 'Bulgaria Lev',
            'BRL' => 'Brazil Real',
            'BND' => 'Brunei Darussalam Dollar',
            'KHR' => 'Cambodia Riel',
            'CAD' => 'Canada Dollar',
            'KYD' => 'Cayman Islands Dollar',
            'CLP' => 'Chile Peso',
            'CNY' => 'China Yuan Renminbi',
            'COP' => 'Colombia Peso',
            'CRC' => 'Costa Rica Colon',
            'HRK' => 'Croatia Kuna',
            'CUP' => 'Cuba Peso',
            'CZK' => 'Czech Republic Koruna',
            'DKK' => 'Denmark Krone',
            'DOP' => 'Dominican Republic Peso',
            'XCD' => 'East Caribbean Dollar',
            'EGP' => 'Egypt Pound',
            'SVC' => 'El Salvador Colon',
            'EEK' => 'Estonia Kroon',
            'EUR' => 'Euro Member Countries',
            'FKP' => 'Falkland Islands (Malvinas) Pound',
            'FJD' => 'Fiji Dollar',
            'GHC' => 'Ghana Cedis',
            'GIP' => 'Gibraltar Pound',
            'GTQ' => 'Guatemala Quetzal',
            'GGP' => 'Guernsey Pound',
            'GYD' => 'Guyana Dollar',
            'HNL' => 'Honduras Lempira',
            'HKD' => 'Hong Kong Dollar',
            'HUF' => 'Hungary Forint',
            'ISK' => 'Iceland Krona',
            'INR' => 'India Rupee',
            'IDR' => 'Indonesia Rupiah',
            'IRR' => 'Iran Rial',
            'IMP' => 'Isle of Man Pound',
            'ILS' => 'Israel Shekel',
            'JMD' => 'Jamaica Dollar',
            'JPY' => 'Japan Yen',
            'JEP' => 'Jersey Pound',
            'KZT' => 'Kazakhstan Tenge',
            'KPW' => 'Korea (North) Won',
            'KRW' => 'Korea (South) Won',
            'KGS' => 'Kyrgyzstan Som',
            'LAK' => 'Laos Kip',
            'LVL' => 'Latvia Lat',
            'LBP' => 'Lebanon Pound',
            'LRD' => 'Liberia Dollar',
            'LTL' => 'Lithuania Litas',
            'MKD' => 'Macedonia Denar',
            'MYR' => 'Malaysia Ringgit',
            'MUR' => 'Mauritius Rupee',
            'MXN' => 'Mexico Peso',
            'MNT' => 'Mongolia Tughrik',
            'MZN' => 'Mozambique Metical',
            'NAD' => 'Namibia Dollar',
            'NPR' => 'Nepal Rupee',
            'ANG' => 'Netherlands Antilles Guilder',
            'NZD' => 'New Zealand Dollar',
            'NIO' => 'Nicaragua Cordoba',
            'NGN' => 'Nigeria Naira',
            'NOK' => 'Norway Krone',
            'OMR' => 'Oman Rial',
            'PKR' => 'Pakistan Rupee',
            'PAB' => 'Panama Balboa',
            'PYG' => 'Paraguay Guarani',
            'PEN' => 'Peru Nuevo Sol',
            'PHP' => 'Philippines Peso',
            'PLN' => 'Poland Zloty',
            'QAR' => 'Qatar Riyal',
            'RON' => 'Romania New Leu',
            'RUB' => 'Russia Ruble',
            'SHP' => 'Saint Helena Pound',
            'SAR' => 'Saudi Arabia Riyal',
            'RSD' => 'Serbia Dinar',
            'SCR' => 'Seychelles Rupee',
            'SGD' => 'Singapore Dollar',
            'SBD' => 'Solomon Islands Dollar',
            'SOS' => 'Somalia Shilling',
            'ZAR' => 'South Africa Rand',
            'LKR' => 'Sri Lanka Rupee',
            'SEK' => 'Sweden Krona',
            'CHF' => 'Switzerland Franc',
            'SRD' => 'Suriname Dollar',
            'SYP' => 'Syria Pound',
            'TWD' => 'Taiwan New Dollar',
            'THB' => 'Thailand Baht',
            'TTD' => 'Trinidad and Tobago Dollar',
            'TRY' => 'Turkey Lira',
            'TRL' => 'Turkey Lira',
            'TVD' => 'Tuvalu Dollar',
            'UAH' => 'Ukraine Hryvna',
            'GBP' => 'United Kingdom Pound',
            'USD' => 'United States Dollar',
            'UYU' => 'Uruguay Peso',
            'UZS' => 'Uzbekistan Som',
            'VEF' => 'Venezuela Bolivar',
            'VND' => 'Viet Nam Dong',
            'YER' => 'Yemen Rial',
            'ZWD' => 'Zimbabwe Dollar'
        );
		
		// Writes the option list
		foreach ($standardCurrencies as $currencyCode => $currencyName) {
			$standardCurrencyOptions .= '<option value="'.$currencyCode.'"'; 
			
			if($currencyCode == $stdCurr) { $standardCurrencyOptions .= ' selected'; }
			
			$standardCurrencyOptions .= '>'.$currencyName.' ('.$currencyCode.')</option>';
		}
		
		return $standardCurrencyOptions;
	
	}
	