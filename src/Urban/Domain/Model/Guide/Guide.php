<?php

namespace Urban\Domain\Model\Guide;

class Guide
{
    /**
     * @var string
     */
    private $identifier;

    /**
     * @param string $identifier
     */
    public function __construct(string $identifier)
    {
        $this->identifier = $identifier;
    }
}
