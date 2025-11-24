<?php

namespace App\Repository;

use App\Entity\YearlyHoliday;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<YearlyHoliday>
 */
class YearlyHolidayRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, YearlyHoliday::class);
    }

    /**
     * @return YearlyHoliday[] Returns an array of YearlyHoliday objects that are not archived or have null archived value
     */
    public function findNotArchived(): array
    {
        return $this->createQueryBuilder('y')
            ->andWhere('y.archived IS NULL OR y.archived = false')
            ->orderBy('y.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return YearlyHoliday[] Returns an array of YearlyHoliday objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('y')
    //            ->andWhere('y.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('y.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?YearlyHoliday
    //    {
    //        return $this->createQueryBuilder('y')
    //            ->andWhere('y.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
