<?php

/**
 * Created by PhpStorm.
 * User: Bali
 * Date: 2015.08.08.
 * Time: 15:49
 */
trait ObserverableTrait
{
    /**
     * Observers.
     *
     * @var ObserverInterface[]
     */
    protected $observers;

    /**
     * Add observer.
     *
     * @param string            $action     Action.
     * @param ObserverInterface $observer   Observer object.
     *
     * @return void
     */
    public function addObserver($action, ObserverInterface $observer)
    {
        $this->observers[$action][] = $observer;
    }

    /**
     * Remove observer.
     *
     * @param string            $action     Action.
     * @param ObserverInterface $observer   Observer object.
     *
     * @return void
     */
    public function removeObserver($action, ObserverInterface $observer)
    {
        foreach ($this->observers[$action] as $key => $savedObserver)
        {
            if (get_class($savedObserver) === get_class($observer))
            {
                unset($this->observers[$action][$key]);
            }
        }
    }

    /**
     * Notify all.
     *
     * @param string $action   Action.
     *
     * @return void
     */
    protected function notifyAll($action)
    {
        foreach ($this->observers[$action] as $observer)
        {
            $observer->update();
        }
    }
}