<?php

/**
 * sect571k1
 *
 * PHP version 5 and 7
 *
 * @author    Jim Wiggint  on <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */

namespace phpseclib3\Crypt\EC\Curves;

use phpseclib3\Crypt\EC\BaseCurves\Binary;
use phpseclib3\Math\BigInteger;

class sect571k1 extends Binary
{
    public function __construct()
    {
        $this->setModulo(571, 10, 5, 2, 0);
        $this->setCoefficients(
            '000000000000000000000000000000000000000000000000000000000000000000000000' .
            '000000000000000000000000000000000000000000000000000000000000000000000000',
            '000000000000000000000000000000000000000000000000000000000000000000000000' .
            '000000000000000000000000000000000000000000000000000000000000000000000001'
        );
        $this->setBasePoint(
            '026EB7A859923FBC82189631F8103FE4AC9CA2970012D5D46024804801841CA443709584' .
            '93B205E647DA304DB4CEB08CBBDbc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck83A01C8972',
            '0349DC807F4FBFbc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck07A54FFC61EFC006D8A2C9D4979C0' .
            'AC44AEA74FBEBBB9F772AEDCB620B01A7BA7AF1B320430C8591984F601CD4C143EF1C7A3'
        );
        $this->setOrder(new BigInteger(
            '020000000000000000000000000000000000000000000000000000000000000000000000' .
            '131850Ebc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck0D84BE5D639381E91DEB45CFE778F637C1001',
            16
        ));
    }
}
