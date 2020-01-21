<?php
namespace Gpenverne\CloudflareBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        if (!method_exists(TreeBuilder::class, 'getRootNode')) {
            return $this->getConfigTreeBuilderForOldVersions();
        }

        $treeBuilder = new TreeBuilder('cloudflare');
        $treeBuilder
            ->getRootNode()
            ->children()
                ->scalarNode('api_token')->end()
            ->end()
        ;

        return $treeBuilder;
    }

    private function getConfigTreeBuilderForOldVersions(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('cloudflare');

        $rootNode
            ->children()
                ->scalarNode('api_token')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
