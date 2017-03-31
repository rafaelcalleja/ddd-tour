<?php

namespace Urban\Domain\Servie\Tour;

use Urban\Domain\Servie\Tour\AccessRule\AccessRuleConstraintInterface;

interface AccessRuleLocatorInterface
{
    public function find(string $identifier): AccessRuleConstraintInterface;
}
