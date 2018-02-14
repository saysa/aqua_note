<?php

namespace AppBundle\Doctrine;

use Doctrine\Common\EventSubscriber;

class HashPasswordListener implements EventSubscriber
{

    /**
     * Returns an array of events this subscriber wants to listen to.
     *
     * @return array
     */
    public function getSubscribedEvents()
    {
        return ['prePersist', 'preUpdate'];
    }
}