<?php

namespace Gpenverne\CloudflareBundle;

use Gpenverne\CloudflareBundle\DependencyInjection\CloudflareExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CloudflareBundle extends Bundle
{
    public function getContainerExtension(): CloudflareExtension
    {
        return new CloudflareExtension();
    }
}
