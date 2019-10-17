<?php

/*
 * This file is part of [package name].
 *
 * (c) Manfred Gipp
 *
 * @license LGPL-3.0-or-later
 */

namespace Gwworg\ContaoCalJourneyBundle\Tests;

use Gwworg\ContaoCalJourneyBundle\ContaoCalJourneyBundle;
use PHPUnit\Framework\TestCase;

class ContaoCalJourneyBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoCalJourneyBundle();

        $this->assertInstanceOf('Gwworg\ContaoCalJourneyBundle\ContaoCalJourneyBundle', $bundle);
    }
}
