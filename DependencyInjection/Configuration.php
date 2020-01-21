<?php
namespace Gpenverne\CloudflareBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('cloudflare');

        $treeBuilder->getRootNode()
            ->children()
	            ->scalarNode('api_token')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
