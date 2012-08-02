<?php

namespace Jbl\RedactorBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\NodeBuilder;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * RedactorBundle configuration structure.
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('jbl_redactor', 'array');

        $rootNode
            ->children()
                ->scalarNode('lang')->end()
                ->booleanNode('toolbar')->end()
                ->variableNode('buttons')->end()
                ->scalarNode('path')->end()
                ->scalarNode('css')->end()
                ->booleanNode('focus')->end()
                ->booleanNode('resize')->end()
                ->booleanNode('fixed')->end()
                ->booleanNode('autoformat')->end()
                ->booleanNode('cleanUp')->end()
                ->booleanNode('convertDivs')->end()
                ->booleanNode('removeclasses')->end()
                ->booleanNode('removeStyles')->end()
                ->booleanNode('convertLinks')->end()
                ->booleanNode('autoresize')->end()
                ->scalarNode('autosave')->end()
                ->scalarNode('interval')->end()
                ->scalarNode('imageGetJson')->end()
                ->scalarNode('imageUpload')->end()
                ->scalarNode('fileUpload')->end()
                ->scalarNode('direction')->end()
                ->booleanNode('fullscreen')->end()
                ->booleanNode('overlay')->end()
                ->booleanNode('xhtml')->end()
                ->booleanNode('observeImages')->end()
            ->end();

        return $treeBuilder;
    }
}