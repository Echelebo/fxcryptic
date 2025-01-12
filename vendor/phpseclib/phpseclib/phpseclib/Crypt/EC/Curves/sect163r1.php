<?php

/**
 * sect163r1
 *
 * PHP version 5 and 7
 *
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */

namespace phpseclib3\Crypt\EC\Curves;

use phpseclib3\Crypt\EC\BaseCurves\Binary;
use phpseclib3\Math\BigInteger;

class sect163r1 extends Binary
{
    public function __construct()
    {
        $this->setModulo(163, 7, 6, 3, 0);
        $this->setCoefficients(
            '07B6882CAAEFA84F9554FF8428BD88E246D2782AE2',
            '0713612DCDDCB40AAB946BDA29CA91F73AF958AFD9'
        );
        $this->setBasePoint(
            '0bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck76A654',
            '004bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck0988F41FF883'
        );
        $this->setOrder(new BigInteger('0bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck10279B', 16));
    }
}
