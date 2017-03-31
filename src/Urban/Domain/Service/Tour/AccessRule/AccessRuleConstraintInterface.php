<?php

namespace Urban\Domain\Servie\Tour\AccessRule;

interface AccessRuleConstraintInterface
{
    public function __invoke(): bool;
}
