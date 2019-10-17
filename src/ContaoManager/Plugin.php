<?php

/*
 * This file is part of gwworg/contao-cal-journey-bundle.
 *
 * (c) Manfred Gipp
 *
 * @license LGPL-3.0-or-later
 */

namespace Gwworg\ContaoCalJourneyBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Gww\ContaoCalJourneyBundle\ContaoCalJourneyBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoCalJourneyBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
