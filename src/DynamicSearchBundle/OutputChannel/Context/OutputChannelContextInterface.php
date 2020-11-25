<?php

namespace DynamicSearchBundle\OutputChannel\Context;

use DynamicSearchBundle\Context\ContextDefinitionInterface;
use DynamicSearchBundle\OutputChannel\Allocator\OutputChannelAllocatorInterface;
use DynamicSearchBundle\OutputChannel\RuntimeOptions\RuntimeQueryProviderInterface;

interface OutputChannelContextInterface
{
    /**
     * @return ContextDefinitionInterface
     */
    public function getContextDefinition();

    /**
     * @return RuntimeQueryProviderInterface
     */
    public function getRuntimeQueryProvider();

    /**
     * @return \ArrayObject
     */
    public function getRuntimeOptions();

    /**
     * @return array
     */
    public function getIndexProviderOptions();

    /**
     * @return OutputChannelAllocatorInterface
     */
    public function getOutputChannelAllocator();

    /**
     * @return string
     */
    public function getOutputChannelServiceName();
}
