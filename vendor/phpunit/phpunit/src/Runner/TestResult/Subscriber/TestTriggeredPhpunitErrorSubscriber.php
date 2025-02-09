<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestRunner\TestResult;

use PHPUnit\Event\Test\PhpunitErrorTriggered;
use PHPUnit\Event\Test\PhpunitErrorTriggeredSubscriber;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16r extends Subscriber implements PhpunitErrorTriggeredSubscriber
{
    public function notify(PhpunitErrorTriggered $event): void
    {
        $this->collector()->testTriggeredPhpunitError($event);
    }
}
