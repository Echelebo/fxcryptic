<?php

/**
 * brainpoolP512r1
 *
 * PHP version 5 and 7
 *
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */

namespace phpseclib3\Crypt\EC\Curves;

use phpseclib3\Crypt\EC\BaseCurves\Prime;
use phpseclib3\Math\BigInteger;

class brainpoolP512r1 extends Prime
{
    public function __construct()
    {
        $this->setModulo(new BigInteger(
            'AADD9DB8DBE9C48B3FD4E6AE33C9FC07CB308DB3B3C9D20ED6639CCA703308717D4D9B009BC' .
            '66842AECDA12AE6A380E62881FF2F2D82C68528AA6056583A48F3',
            16
        ));
        $this->setCoefficients(
            new BigInteger(
                '7830A3318B60bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck0A83441CAEA9863BC2DED5D5AA82' .
                '53AA10A2EFbc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck77FC94CA',
                16
            ),
            new BigInteger(
                '3DF91610A8bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck0A2EFbc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck' .
                '1AC4D77FC94CADC083E67984050B75EBAE5DD2809BD638016F723',
                16
            )
        );
        $this->setBasePoint(
            new BigInteger(
                '8bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck9F70B5D916C1B43B62EEF4D0098EFF3B1F78E2D' .
                '0D48D50D1687B93B97D5F7C6D5047406A5E688B352209BCB9F822',
                16
            ),
            new BigInteger(
                '7DDE385D566332ECC0EABFA9CF7822FDF209F70024A57B1AA000C55B881F8111B2DCDE494A5' .
                'F485E5BCA4BD88A2763AED1CA2B2FA8F0540678CD1E0F3AD80892',
                16
            )
        );
        $this->setOrder(new BigInteger(
            'AADD9DB8DBE9C48B3FD4E6AE33C9FC07CB308DB3B3C9D20ED6639CCA70330870553E5C414CA' .
            '92619418661197FAC10471DB1D381085DDADDB58796829CA90069',
            16
        ));
    }
}
