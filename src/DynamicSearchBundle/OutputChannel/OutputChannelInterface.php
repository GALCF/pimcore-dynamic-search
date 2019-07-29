<?php

namespace DynamicSearchBundle\OutputChannel;

use DynamicSearchBundle\EventDispatcher\OutputChannelModifierEventDispatcher;
use DynamicSearchBundle\OutputChannel\RuntimeOptions\RuntimeOptionsProviderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

interface OutputChannelInterface
{
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver);

    /**
     * @param array $options
     */
    public function setOptions(array $options);

    /**
     * @param array $indexProviderOptions
     */
    public function setIndexProviderOptions(array $indexProviderOptions);

    /**
     * @param OutputChannelModifierEventDispatcher $eventDispatcher
     */
    public function setEventDispatcher(OutputChannelModifierEventDispatcher $eventDispatcher);

    /**
     * @param RuntimeOptionsProviderInterface $runtimeOptionsProvider
     */
    public function setRuntimeParameterProvider(RuntimeOptionsProviderInterface $runtimeOptionsProvider);

    /**
     * @return mixed
     */
    public function getQuery();

    /**
     * @param mixed $query
     *
     * @return mixed
     */
    public function getResult($query);

    /**
     * @param mixed $result
     *
     * @return array
     */
    public function getHits($result);
}
