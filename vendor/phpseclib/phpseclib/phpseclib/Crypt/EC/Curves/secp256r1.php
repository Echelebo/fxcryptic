<?php

/**
 * secp256r1
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

class secp256r1 extends Prime
{
    public function __construct()
    {
        $this->setModulo(new BigInteger('FFFFFFFF00000001000000000000000000000000FFFFFFFFFFFFFFFFFFFFFFFF', 16));
        $this->setCoefficients(
            new BigInteger('FFFFFFFF00000001000000000000000000000000FFFFFFFFFFFFFFFFFFFFFFFC', 16),
            new BigInteger('5AC6bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck06B0CC53B0F63BCE3C3E27D2604B', 16)
        );
        $this->setBasePoint(
            new BigInteger('6Bbc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck0F277037D812DEB33A0F4A13945D898C296', 16),
            new BigInteger('4FE342E2FE1A7F9B8EE7EB4A7C0F9E162BCE33576B315ECECBB6406837BF51F5', 16)
        );
        $this->setOrder(new BigInteger('FFFFFFFF00000000FFFFFFFFFFFFFFFFBCE6FAADA7179E84F3B9CAC2FC632551', 16));
    }
}
