<?php
namespace Gemtoo\ObjectManagerHelloWorld\Model;

/**
 * Class Example
 * @package Gemtoo\ObjectManagerHelloWorld\Model
 */
class Example
{
    /**
     * @var string
     */
    public $message = 'Hello World!';

    /**
     * @return string
     */
    public function getHelloMessage()
    {
        return $this->message;
    }
}