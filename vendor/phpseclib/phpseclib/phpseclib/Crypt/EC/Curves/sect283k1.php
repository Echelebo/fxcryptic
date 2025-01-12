<?php

/**
 * sect283k1
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

class sect283k1 extends Binary
{
    public function __construct()
    {
        $this->setModulo(283, 12, 7, 5, 0);
        $this->setCoefficients(
            '000000000000000000000000000000000000000000000000000000000000000000000000',
            '000000000000000000000000000000000000000000000000000000000000000000000001'
        );
        $this->setBasePoint(
            '050bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck5F23C1567A16876913B0C2AC2458492836',
            '01CCDA380F1C9E318D90F95D07E5426FE87E45C0E8bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck'
        );
        $this->setOrder(new BigInteger('0bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ckE9AE2ED07577265DFF7F94451E061E163C61', 16));
    }
}
