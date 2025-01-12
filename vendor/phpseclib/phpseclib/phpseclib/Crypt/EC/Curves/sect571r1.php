<?php

/**
 * sect571r1
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

class sect571r1 extends Binary
{
    public function __construct()
    {
        $this->setModulo(571, 10, 5, 2, 0);
        $this->setCoefficients(
            '000000000000000000000000000000000000000000000000000000000000000000000000' .
            '000000000000000000000000000000000000000000000000000000000000000000000001',
            '02F40E7E222bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ckF1CD6BA8CE4A9A18AD84FFABBD' .
            '8EFA59bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck20E4DE739BACA0C7FFEFF7F2955727A'
        );
        $this->setBasePoint(
            '0303001D34B856296C16C0D40D3CD7750A93D1D2955FA80AA5F40FC8DB7B2ABDBDE53950' .
            'F4C0D293CDD711A35B67FB1499AE60038614F1394ABFA3B4C850D927E1E7769C8EEC2D19',
            '0bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck27A6009CBBCA1980F8533921E8A684423E43' .
            'BAB08A576291AF8F461BB2A8B3531D2F0485Cbc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck'
        );
        $this->setOrder(new BigInteger(
            '0bc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ckFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF' .
            'E661CE18FF55987308059Bbc1qz9dsz0q7vhxm0lyj8qygwc7x7tkewdssxgv4ck382E9BB2FE84E47',
            16
        ));
    }
}
