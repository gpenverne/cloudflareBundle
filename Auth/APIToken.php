<?php
/**
 * User: czPechy
 * Date: 30/07/2018
 * Time: 22:42
 *
 * @see https://github.com/cloudflare/cloudflare-php/pull/101/files
 */
namespace Gpenverne\CloudflareBundle\Auth;

use Cloudflare\API\Auth\Auth;

class APIToken implements Auth
{
    private $apiToken;

    public function __construct($apiToken)
    {
        $this->apiToken = $apiToken;
    }

    public function getHeaders(): array
    {
        return [
            'Authorization' => sprintf('Bearer %s', $this->apiToken),
        ];
    }
}
