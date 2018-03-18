<?php

namespace Gpenverne\CloudflareBundle\Factory;

use Gpenverne\CloudflareBundle\Services\CloudflareService;
use Cloudflare\API\Auth\APIKey;
use Cloudflare\API\Adapter\Guzzle;
use Cloudflare\API\Endpoints\User;

class CloudflareServiceFactory
{
    public function createCloudflareService(string $api_email, string $api_key): CloudflareService
    {
        $key = new APIKey($api_email, $api_key);
        $adapter = new Guzzle($key);
        
        return new CloudflareService($adapter);
    }
}
