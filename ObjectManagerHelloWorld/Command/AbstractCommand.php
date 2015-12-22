<?php
namespace Gemtoo\ObjectManagerHelloWorld\Command;
use Symfony\Component\Console\Command\Command;
use \Magento\Framework\ObjectManagerInterface;

/**
 * Class AbstractCommand
 * @package Gemtoo\ObjectManagerHelloWorld\Command
 */
class AbstractCommand extends Command
{
    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @param ObjectManagerInterface $manager
     */
    public function __construct(ObjectManagerInterface $manager)
    {
        $this->objectManager = $manager;
        parent::__construct();
    }

    /**
     * @return ObjectManagerInterface
     */
    protected function getObjectManager()
    {
        return $this->objectManager;
    }
    
}