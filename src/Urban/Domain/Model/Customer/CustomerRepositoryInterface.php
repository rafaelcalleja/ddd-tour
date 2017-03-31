<?php

namespace Urban\Domain\Model\Customer;

interface CustomerRepositoryInterface
{
    public function find(string $identifier): Customer;
}
