<?php

namespace Gpenverne\CloudflareBundle\Services;

use Cloudflare\Api;
use Cloudflare\Cache;
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

    /**
     * @return Api
     */
    public function getApi(): Api
    {
        return $this->cloudflareClient;
    }

    /**
     * @return Zone
     */
    public function getZone(): Zone
    {
        return new Zone($this->getApi());
    }

    /**
     * @return Dns
     */
    public function getDns(): Dns
    {
        return new Dns($this->getApi());
    }

    /**
     * @return Pagerules
     */
    public function getPagerules(): Pagerules
    {
        return new Pagerules($this->getApi());
    }

    /**
     * @return Settings
     */
    public function getSettings(): Settings
    {
        return new Settings($this->getApi());
    }

    /**
     * @return CustomPages
     */
    public function getCustomPages(): CustomPages
    {
        return new CustomPages($this->getApi());
    }

    /**
     * @return Plan
     */
    public function getPlan(): Plan
    {
        return new Plan($this->getApi());
    }

    /**
     * @return SSL
     */
    public function getSSL(): SSL
    {
        return new SSL($this->getApi());
    }

    /**
     * @return LoadBalancers
     */
    public function getLoadBalancers(): LoadBalancers
    {
        return new LoadBalancers($this->getApi());
    }

    /**
     * @return CustomSSL
     */
    public function getCustomSSL(): CustomSSL
    {
        return new CustomSSL($this->getApi());
    }

    /**
     * @return Analytics
     */
    public function getAnalytics(): Analytics
    {
        return new Analytics($this->getApi());
    }

    /**
     * @return Cache
     */
    public function getCache(): Cache
    {
        return new Cache($this->getApi());
    }
}
