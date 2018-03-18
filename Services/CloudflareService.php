<?php

namespace Gpenverne\CloudflareBundle\Services;

use Cloudflare\API\Adapter\Guzzle;
use Cloudflare\API\Endpoints;

class CloudflareService
{
    /**
     * @var Guzzle
     */
    private $client;

    /**
     * @var \Cloudflare\API\Endpoints\AccessRules
     */
    public $accessRules;

    /**
     * @var \Cloudflare\API\Endpoints\DNS
     */
    public $dns;

    /**
     * @var \Cloudflare\API\Endpoints\IPs
     */
    public $ips;

    /**
     * @var \Cloudflare\API\Endpoints\PageRules
     */
    public $pageRules;

    /**
     * @var \Cloudflare\API\Endpoints\Railgun
     */
    public $railGun;

    /**
     * @var \Cloudflare\API\Endpoints\UARules
     */
    public $uaRules;

    /**
     * @var \Cloudflare\API\Endpoints\User
     */
    public $user;

    /**
     * @var \Cloudflare\API\Endpoints\WAF
     */
    public $waf;

    /**
     * @var \Cloudflare\API\Endpoints\Zones
     */
    public $zones;

    /**
     * @var \Cloudflare\API\Endpoints\ZonesLockDown
     */
    public $zonesLockDown;

    public function __construct(Guzzle $client)
    {
        $this->client = $client;
        $this->dns = $this->get('DNS');
        $this->ips = $this->get('IPs');
        $this->pageRules = $this->get('PageRules');
        $this->railGun = $this->get('Railgun');
        $this->uaRules = $this->get('UARules');
        $this->user = $this->get('User');
        $this->waf = $this->get('WAF');
        $this->zones = $this->get('Zones');
        $this->zonesLockDown = $this->get('ZonesLockDown');
    }

    public function __get($endpoint): Endpoints\API
    {
        return $this->get($endpoint);
    }

    public function get($endpoint): Endpoints\API
    {
        $className = sprintf('\Cloudflare\API\Endpoints\%s', $endpoint);

        return new $className($this->client);
    }
}
