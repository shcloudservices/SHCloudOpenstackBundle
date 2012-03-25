<?php

namespace SHCloud\OpenstackBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('sh_cloud_openstack');

        $rootNode
            ->children()
                ->scalarNode('username')
                    ->isRequired()
                ->end()
                ->scalarNode('password')
                    ->isRequired()
                ->end()
                ->scalarNode('auth_url')
                    ->isRequired()
                ->end()
            ->end();
        return $treeBuilder;
    }
}
