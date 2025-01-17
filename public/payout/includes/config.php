<?php

/************************

	CryptoConverter
	
	Configuration-file
	
************************/

/*
	General configuration
*/

	// The name of the site, will be shown in the header and title-bar
	$siteName = 'CryptoConverter';
	
	// A simple description of the site, used by search engines
	$siteDescription = 'Convert hundreds of Crypt Currencies instantly!';
	
	// Footer text
	$footerText = '&copy; 2017 - shared on  <a href="">c o d e l i s t . c c</a>';

    // About text
	$aboutText = 'Add some information about you, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.';

    // Contact links
	$contactLinks = '
    <li><a href="#" class="text-white">Like on Facebook</a></li>
    <li><a href="#" class="text-white">Like on Twitter</a></li>
    ';
	
	// Default language which is beeing used if language can not be determined from browser or the browser language doesn't exist
	$defaultLanguage = 'en';
	
	// Which standard currency should be used by default?
	$defaultStandardCurrency = 'USD';
	
	// Which crypto currency should be used by default?
	$defaultCryptoCurrency = 'BTC';
	
	// How often should the data be updated from the API? (Provided in seconds, lower values will cause website to run slower)
	$apiUpdateInterval = 60;
	
/*
	Culture information
*/

	// How many decimals should the amounts contain?
	$amountDecimals = 2;
	
	// What is the thousand separator?
	$amountThousandSeparator = '.';
	
	// What is the decimal separator?
	$amountDecimalSeparator = ',';
	
/*
	Monetization
*/

	// Ad-code generated from Google Adsense or similar, remember to make it flexible in order for the website to be responsive
	$adCode = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client=""
					 data-ad-slot=""
					data-ad-format="auto"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>';
				
	// Bitcoin wallet address for donations, leave empty if you don't wan't the donation button
	$bitcoinWallet = '55445';
	

?>