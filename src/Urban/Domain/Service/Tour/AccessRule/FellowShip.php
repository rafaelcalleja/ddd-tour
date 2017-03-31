<?php

namespace Urban\Domain\Servie\Tour\AccessRule;

use Urban\Domain\Model\Customer\Customer;

class FellowShip implements AccessRuleConstraintInterface
{
    public function __construct()
    {
    }

    public function __invoke(Customer $customer): bool
    {
    }
}
