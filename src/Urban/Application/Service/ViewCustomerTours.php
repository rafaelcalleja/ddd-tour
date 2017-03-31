<?php

namespace Urban\Domain\Model\Customer;

use Urban\Domain\Model\Tour\TourRepositoryInterface;

class ViewCustomerTours
{
    /**
     * @var TourRepositoryInterface
     */
    private $tourRepository;

    public function __construct(TourRepositoryInterface $tourRepository)
    {
        $this->tourRepository = $tourRepository;
    }

    /**
     * @param string $identifier
     */
    public function execute(string $identifier)
    {
        $tours = $this->tourRepository->ofCustomer($identifier);
        //...
    }
}
