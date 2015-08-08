<?php

use \Performer\RegisterableInterface;

/**
 * Created by PhpStorm.
 * User: Bali
 * Date: 2015.08.08.
 * Time: 16:10
 */
class Register
{
    /**
     * @var RegisterableInterface
     */
    protected $registerStartegy;

    public function __construct(RegisterableInterface $registerStrategy)
    {
        $this->registerStartegy = $registerStrategy;
    }

    /**
     *
     */
    public function signUp()
    {
        $this->registerStartegy->signUp();
    }
}