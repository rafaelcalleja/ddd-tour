<?php

namespace Urban\Infrastructure\Domain\Service\Customer;

use Urban\Domain\Model\Customer\Customer;
use Urban\Domain\Model\Tour\AccessRules;
use Urban\Domain\Servie\Tour\AccessRuleLocatorInterface;
use Urban\Domain\Servie\Tour\TourConstraintInterface;

class TourConstraint implements TourConstraintInterface
{
    /**
     * @var AccessRuleLocatorInterface
     */
    private $locator;

    /**
     * @param AccessRuleLocatorInterface $locator
     */
    public function __construct(AccessRuleLocatorInterface $locator)
    {
        $this->locator = $locator;
    }

    /**
     * @param Customer $customer
     * @param AccessRules $accessRules
     *
     * @return bool
     */
    public function allowedFor(Customer $customer, AccessRules $accessRules): bool
    {
        $domainService = $this->locator->find($accessRules->identifier());

        return call_user_func($domainService, $customer);
    }
}
