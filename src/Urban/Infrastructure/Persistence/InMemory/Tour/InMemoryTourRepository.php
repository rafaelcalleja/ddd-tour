<?php

namespace Urban\Infrastructure\Persistence\InMemory\Tour;

use Urban\Domain\Model\Customer\CustomerRepositoryInterface;
use Urban\Domain\Model\Tour\Tour;
use Urban\Domain\Model\Tour\TourRepositoryInterface;
use Urban\Domain\Servie\Tour\TourConstraintInterface;

class InMemoryTourRepository implements TourRepositoryInterface
{
    /**
     * @var TourConstraintInterface
     */
    private $tourConstraint;

    /**
     * @var \Urban\Domain\Model\Tour\Tour[]
     */
    private $tours;

    /**
     * @var CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * @param CustomerRepositoryInterface $customerRepository
     * @param TourConstraintInterface $tourConstraint
     * @param \Urban\Domain\Model\Tour\Tour[] ...$tours
     */
    public function __construct(
        CustomerRepositoryInterface $customerRepository,
        TourConstraintInterface $tourConstraint,
        Tour ...$tours
    ) {
        $this->customerRepository = $customerRepository;
        $this->tourConstraint = $tourConstraint;
        $this->tours = $tours;
    }

    public function ofCustomer(string $identifier): array
    {
        $user = $this->customerRepository->find($identifier);

        return
            array_values(
                array_filter(
                    $this->tours,
                    function (Tour $tour) use ($user) {
                        foreach ($tour->accessRules() as $accessRule) {
                            if (false === $this->tourConstraint->allowedFor($user, $accessRule)) {
                                return null;
                            }
                        }

                        return $tour;
                    }
                )
            );
    }
}
