<?php

namespace Urban\Domain\Model\Tour;

use Urban\Domain\Model\Guide\Guide;
use Urban\Domain\Model\Route\Route;

class Tour
{
    /**
     * @var Route
     */
    private $route;

    /**
     * @var Guide
     */
    private $guide;

    /**
     * @var AccessRules[]
     */
    private $accessRules;

    /**
     * @param Route $route
     * @param Guide $guide
     * @param AccessRules[] $accessRules
     */
    public function __construct(Route $route, Guide $guide, AccessRules...$accessRules)
    {
        $this->guide = $guide;
        $this->route = $route;
        $this->accessRules = $accessRules;
    }

    /**
     * @return Route
     */
    public function route(): Route
    {
        return $this->route;
    }

    /**
     * @return Guide
     */
    public function guide(): array
    {
        return $this->guide;
    }

    /**
     * @return AccessRules[]
     */
    public function accessRules(): array
    {
        return $this->accessRules;
    }
}
