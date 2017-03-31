<?php

namespace Urban\Domain\Model\Tour;

interface TourRepositoryInterface
{
    public function ofCustomer(string $identifier): array;
}
