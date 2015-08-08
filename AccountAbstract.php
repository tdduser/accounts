<?php

/**
 * Created by PhpStorm.
 * User: Bali
 * Date: 2015.08.08.
 * Time: 16:44
 */
class AccountAbstract
{
    protected $entity;

    public function setEntity(EntityInterface $entity)
    {
        $this->entity = $entity;
    }
}