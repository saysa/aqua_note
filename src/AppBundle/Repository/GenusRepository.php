<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    public function findAllPublishedOrderedBySize()
    {
        return $this->createQueryBuilder('genus')
                    ->andWhere('genus.isPublished = :isPublished')
                    ->setParameter('isPublished', true)
                    ->orderBy('genus.speciesCount', 'DESC')
                    ->getQuery()
                    ->execute();
    }
}