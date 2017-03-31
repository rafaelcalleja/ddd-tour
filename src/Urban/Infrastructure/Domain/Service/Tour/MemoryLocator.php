<?php

namespace Urban\Infrastructure\Domain\Service\Tour;

use Urban\Domain\Servie\Tour\AccessRule\AccessRuleConstraintInterface;
use Urban\Domain\Servie\Tour\AccessRuleLocatorInterface;

final class MemoryLocator implements AccessRuleLocatorInterface
{
    private $handlers = [];

    public function add($key, callable $handler)
    {
        $this->handlers[$key] = $handler;
    }

    public function find(string $key): AccessRuleConstraintInterface
    {
        return $this->handlers[$key];
    }
}
