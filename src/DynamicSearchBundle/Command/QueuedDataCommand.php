<?php

namespace DynamicSearchBundle\Command;

use DynamicSearchBundle\Queue\DataProcessorInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class QueuedDataCommand extends Command
{
    protected DataProcessorInterface $dataProcessor;

    public function __construct(DataProcessorInterface $dataProcessor)
    {
        parent::__construct();

        $this->dataProcessor = $dataProcessor;
    }

    protected function configure()
    {
        $this
            ->setHidden(true)
            ->setName('dynamic-search:check-queue')
            ->setDescription('For internal use only');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->dataProcessor->process([]);

        return 0;
    }
}
