<?php

namespace  Urban\Infrastructure\Container\Application\Tour;

use Urban\Domain\Servie\Tour\AccessRule\CollegueStudent;
use Urban\Domain\Servie\Tour\AccessRule\FellowShip;
use Urban\Domain\Servie\Tour\AccessRule\LegalAge;
use Urban\Infrastructure\Domain\Service\Customer\TourConstraint;
use Urban\Infrastructure\Domain\Service\Tour\MemoryLocator;

class TourConstraintFactory
{
    public function __invoke()
    {
        $memoryLocator = new MemoryLocator();

        $memoryLocator->add(
            'access_rule.legal_age',
            new LegalAge()
        );

        $memoryLocator->add(
            'access_rule.collegue_student',
            new CollegueStudent()
        );

        $memoryLocator->add(
            'access_rule.fellowship',
            new FellowShip()
        );

        return new TourConstraint($memoryLocator);
    }
}
