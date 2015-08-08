<?php

/**
 * Created by PhpStorm.
 * User: Bali
 * Date: 2015.08.08.
 * Time: 15:51
 */
interface ObserverInterface
{
    public function update(EntityInterface $entity);
}