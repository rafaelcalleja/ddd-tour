<?php

namespace Urban\Domain\Servie\Tour\AccessRule;

use Urban\Domain\Model\Customer\Customer;

class LegalAge implements AccessRuleConstraintInterface
{
    public function __construct()
    {
    }

    public function __invoke(Customer $customer): bool
    {
    }
}
