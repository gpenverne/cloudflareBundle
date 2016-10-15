<?php

namespace Gpenverne\CloudflareBundle;

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
