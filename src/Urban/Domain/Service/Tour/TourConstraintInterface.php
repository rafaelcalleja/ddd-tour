<?php

namespace Urban\Domain\Servie\Tour;

use Urban\Domain\Model\Customer\Customer;
use Urban\Domain\Model\Tour\AccessRules;

interface TourConstraintInterface
{
    /**
     * @param Customer $customer
     * @param AccessRules $accessRules
     *
     * @return bool
     */
    public function allowedFor(Customer $customer, AccessRules $accessRules): bool;
}
