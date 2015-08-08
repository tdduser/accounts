<?php

use \Performer\RegistrationStrategy as PerformerRegistrationStrategy;
use \Performer\RegistrationTaskObserver as PerformerRegistrationTaskObserver;
use \Performer\Bo as PerformerBo;
use \Performer\DataObject as PerformerDo;
/**
 * Created by PhpStorm.
 * User: Bali
 * Date: 2015.08.08.
 * Time: 16:04
 */

include_once('autoload.php');

$performerDo = new PerformerDo();
$performerDo->setEmail('test@test.com');
$performerDo->setPassword('xcvbn123456');

$performerBo = new PerformerBo();
$performerBo->setDo($performerDo);

$performerRegister = new PerformerRegistrationStrategy();
$performerRegister->setEntity($performerBo);
$performerRegister->addObserver('signup', new PerformerRegistrationTaskObserver());

$register = new Register($performerRegister);
$register->signUp();