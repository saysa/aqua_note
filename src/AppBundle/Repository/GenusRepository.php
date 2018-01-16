<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    public function findAllPublishedOrderedBySize()
    {
        return $this->createQueryBuilder('genus');
    }
}