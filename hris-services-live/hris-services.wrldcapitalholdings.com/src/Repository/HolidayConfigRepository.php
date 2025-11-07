<?php

namespace App\Repository;

use App\Entity\HolidayConfig;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HolidayConfig>
 */
class HolidayConfigRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HolidayConfig::class);
    }

    /**
     * @return HolidayConfig[] Returns an array of HolidayConfig objects that are not archived or have null archived value
     */
    public function findNotArchived(): array
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.archived IS NULL OR h.archived = false')
            ->orderBy('h.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return HolidayConfig[] Returns an array of HolidayConfig objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('h.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?HolidayConfig
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
