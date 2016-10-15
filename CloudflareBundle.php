<?php

namespace Gpenverne\cloudflareBundle;

use Gpenverne\DependencyInjection\CloudflareExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CloudflareBundle extends Bundle
{
    /**
     * @return CloudflareExtension
     */
    public function getContainerExtension(): CloudflareExtension
    {
        return new CloudflareExtension();
    }
}
