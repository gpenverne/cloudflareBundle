<?php

namespace Gpenverne\cloudflareBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Gpenverne\DependencyInjection\CloudflareExtension;

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
