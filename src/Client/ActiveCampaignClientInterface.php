<?php

declare(strict_types=1);

namespace Webgriffe\SyliusActiveCampaignPlugin\Client;

use Webgriffe\SyliusActiveCampaignPlugin\Model\ActiveCampaign\ContactInterface;
use Webgriffe\SyliusActiveCampaignPlugin\Model\ActiveCampaign\ContactResponseInterface;

interface ActiveCampaignClientInterface
{
    public function createContact(ContactInterface $contact): ContactResponseInterface;
}
