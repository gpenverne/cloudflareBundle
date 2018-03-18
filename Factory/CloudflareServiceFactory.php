<?php

namespace Gpenverne\CloudflareBundle\Factory;

use Gpenverne\CloudflareBundle\Services\CloudflareService;

class CloudflareServiceFactory
{
    public function createCloudflareService(string $api_email, string $api_key): CloudflareService
    {
        return new CloudflareService($api_email, $api_key);
    }
}
