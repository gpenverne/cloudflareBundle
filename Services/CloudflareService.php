<?php

namespace Gpenverne\CloudflareBundle\Services;

use Cloudflare\Api;
use Cloudflare\Zone\Cache;
use Cloudflare\Zone;
use Cloudflare\Zone\Analytics;
use Cloudflare\Zone\CustomPages;
use Cloudflare\Zone\CustomSSL;
use Cloudflare\Zone\Dns;
use Cloudflare\Zone\LoadBalancers;
use Cloudflare\Zone\Pagerules;
use Cloudflare\Zone\Plan;
use Cloudflare\Zone\Settings;
use Cloudflare\Zone\SSL;

class CloudflareService
{
    /**
     * @var Api
     */
    private $cloudflareClient;

    public function __construct(string $api_email, string $api_key)
    {
        $this->cloudflareClient = new Api($api_email, $api_key);
    }

    public function getApi(): Api
    {
        return $this->cloudflareClient;
    }

    public function getZone(): Zone
    {
        return new Zone($this->getApi());
    }

    public function getDns(): Dns
    {
        return new Dns($this->getApi());
    }

    public function getPagerules(): Pagerules
    {
        return new Pagerules($this->getApi());
    }

    public function getSettings(): Settings
    {
        return new Settings($this->getApi());
    }

    public function getCustomPages(): CustomPages
    {
        return new CustomPages($this->getApi());
    }

    public function getPlan(): Plan
    {
        return new Plan($this->getApi());
    }

    public function getSSL(): SSL
    {
        return new SSL($this->getApi());
    }

    public function getLoadBalancers(): LoadBalancers
    {
        return new LoadBalancers($this->getApi());
    }

    public function getCustomSSL(): CustomSSL
    {
        return new CustomSSL($this->getApi());
    }

    public function getAnalytics(): Analytics
    {
        return new Analytics($this->getApi());
    }

    public function getCache(): Cache
    {
        return new Cache($this->getApi());
    }
}
