<?php

namespace Urban\Domain\Servie\Tour\AccessRule;

use Urban\Domain\Model\Customer\Customer;

interface AccessRuleConstraintInterface
{
    public function __invoke(Customer $customer): bool;
}
