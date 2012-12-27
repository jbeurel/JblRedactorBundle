<?php

namespace Jbl\RedactorBundle\DependencyInjection;

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
                ->scalarNode('direction')->end()
                ->variableNode('buttons')->end()
                ->booleanNode('source')->end()
                ->booleanNode('focus')->end()
                ->booleanNode('autoresize')->end()
                ->booleanNode('fixed')->end()
                ->booleanNode('convertLinks')->end()
                ->booleanNode('convertDivs')->end()
                ->scalarNode('autosave')->end()
                ->scalarNode('interval')->end()
                ->scalarNode('imageGetJson')->end()
                ->scalarNode('imageGetJsonRoute')->end()
                ->scalarNode('imageUpload')->end()
                ->scalarNode('imageUploadRoute')->end()
                ->scalarNode('fileUpload')->end()
                ->booleanNode('overlay')->end()
                ->booleanNode('observeImages')->end()
                ->scalarNode('colors')->end()
                ->booleanNode('air')->end()
                ->variableNode('airButtons')->end()
                ->variableNode('allowedTags')->end()
                ->booleanNode('mobile')->end()
            ->end();

        return $treeBuilder;
    }
}
