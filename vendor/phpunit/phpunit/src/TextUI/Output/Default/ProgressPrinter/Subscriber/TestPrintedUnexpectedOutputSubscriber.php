<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Output\Default\ProgressPrinter;

use PHPUnit\Event\Test\PrintedUnexpectedOutput;
use PHPUnit\Event\Test\PrintedUnexpectedOutputSubscriber;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16ber extends Subscriber implements PrintedUnexpectedOutputSubscriber
{
    public function notify(PrintedUnexpectedOutput $event): void
    {
        $this->printer()->testPrintedOutput($event);
    }
}
