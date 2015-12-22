<?php
namespace Gemtoo\ObjectManagerHelloWorld\Command;


use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Testbed
 * @package Gemtoo\ObjectManagerHelloWorld\Command
 */
class Testbed extends AbstractCommand
{

    protected function configure()
    {
        $this->setName('gemtoo:object-manager-helloworld');
        $this->setDescription('A cli for testing commands');
        parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $manager = $this->getObjectManager();
        $object  = $manager->create('Gemtoo\ObjectManagerHelloWorld\Model\Example');
        $output->writeln(
            $object->getHelloMessage()
        );
    }
}