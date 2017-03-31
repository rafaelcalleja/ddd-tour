<?php

namespace Urban\Domain\Model\Tour;

class AccessRules
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

    /**
     * @return string
     */
    public function identifier(): string
    {
        return $this->identifier;
    }
}