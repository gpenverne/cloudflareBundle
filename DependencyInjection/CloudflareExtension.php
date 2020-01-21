<?php

namespace Gpenverne\CloudflareBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Gpenverne\CloudflareBundle\Services\CloudflareService;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Debug\Exception\FatalThrowableError;

class CloudflareExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.yml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        if (!isset($config['api_token'])) {
            return;
        }
        $definition = $container->getDefinition(CloudflareService::class);
        $definition->replaceArgument(0, $config['api_token']);
    }
}
