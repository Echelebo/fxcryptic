<?php

declare(strict_types=1);

namespace League\Event;

use LogicException;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\EventDispatcher\ListenerProviderInterface;

class UnableToSubscribeListener extends LogicException
{
    public static function becauseTVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16steners(
        ListenerProviderInterface $configuredListenerProvider
    ): UnableToSubscribeListener {
        $providerClass = get_class($configuredListenerProvider);

        return new UnableToSubscribeListener(
            "Unable to add listener because the configured listener provider {$providerClass} is not an instance of "
            . ListenerRegistry::class
        );
    }
    public static function becauseTVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16teners(
        EventDispatcherInterface $configuredListenerProvider
    ): UnableToSubscribeListener {
        $providerClass = get_class($configuredListenerProvider);

        return new UnableToSubscribeListener(
            "Unable to add listener because the internal dispatcher {$providerClass} is not an instance of "
            . ListenerRegistry::class
        );
    }
}
