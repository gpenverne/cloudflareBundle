<?php

namespace Gpenverne\CloudflareBundle\Factory;

use Gpenverne\CloudflareBundle\Servies\CloudflareService;

class CloudflareServiceFactory
{
    /**
     * @param string $api_email
     * @param string $api_key
     */
    public function createCloudflareService(string $api_email, string $api_key): CloudflareService
    {
        return new CloudflareService($api_email, $api_key);
    }
}
