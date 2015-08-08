<?php
/**
 * Created by PhpStorm.
 * User: Bali
 * Date: 2015.08.08.
 * Time: 15:46
 */

namespace Performer;


class RegistrationStrategy extends \AccountAbstract implements RegisterableInterface
{
    use \ObserverableTrait;

    /**
     * @param \EntityInterface $entity
     * @return mixed
     */
    public function signUp(\EntityInterface $entity)
    {
        // TODO: Implement signUp() method.
        $this->notifyAll('signup');
    }
}