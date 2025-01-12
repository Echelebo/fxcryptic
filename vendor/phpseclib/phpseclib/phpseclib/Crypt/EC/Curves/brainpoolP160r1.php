<?php

/**
 * brainpoolP160r1
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

class brainpoolP160r1 extends Prime
{
    public function __construct()
    {
        $this->setModulo(new BigInteger('E95E4A5F737059DC60DFC7AD95B3D8139515620F', 16));
        $this->setCoefficients(
            new BigInteger('340E7BE2A280EB74E2BE61BADA745D97E8F7C300', 16),
            new BigInteger('bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck75E58', 16)
        );
        $this->setBasePoint(
            new BigInteger('BED5AFbc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck', 16),
            new BigInteger('bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ckA6321', 16)
        );
        $this->setOrder(new BigInteger('E95E4A5F737059DC60DF5991D45029409E60FC09', 16));
    }
}
