<?php

namespace Urban\Domain\Model\Route;

class Route
{
    /**
     * @var string
     */
    private $location;

    /**
     * @param string $location
     */
    public function __construct(string $location)
    {
        $this->location = $location;
    }
}