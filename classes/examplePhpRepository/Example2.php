<?php
/**
 * Example2 class
 */
namespace examplePhpRepository;
class Example2 extends Example
{

    public $intNumberOne;

    /**
     * Class constructor
     */
    public function __construct()
    {

    }

    public function setIntNumberOne($newValue)
    {
        $this->intNumberOne += $newValue;
    }
}