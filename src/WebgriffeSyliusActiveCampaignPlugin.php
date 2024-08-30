<?php

declare(strict_types=1);

namespace Webgriffe\SyliusActiveCampaignPlugin;

use function dirname;
use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Sylius\Bundle\ResourceBundle\AbstractResourceBundle;
use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;

final class WebgriffeSyliusActiveCampaignPlugin extends AbstractResourceBundle
{
    use SyliusPluginTrait;

    public function getSupportedDrivers(): array
    {
        return [
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM,
        ];
    }

    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    protected function getModelNamespace(): string
    {
        return 'Webgriffe\SyliusActiveCampaignPlugin\Model';
    }

    protected function getConfigFilesPath(): string
    {
        return sprintf(
            '%s/config/doctrine/%s',
            $this->getPath(),
            strtolower($this->getDoctrineMappingDirectory()),
        );
    }
}
