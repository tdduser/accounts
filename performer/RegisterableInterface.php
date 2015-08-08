<?php
/**
 * Created by PhpStorm.
 * User: Bali
 * Date: 2015.08.08.
 * Time: 16:11
 */

namespace Performer;


interface RegisterableInterface
{
    /**
     * @param \EntityInterface $entity
     * @return mixed
     */
    public function signUp(\EntityInterface $entity);
}