<?php

namespace App\Repository;

use App\Entity\YearlyEmployeeLeave;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<YearlyEmployeeLeave>
 */
class YearlyEmployeeLeaveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, YearlyEmployeeLeave::class);
    }

    //    /**
    //     * @return YearlyEmployeeLeave[] Returns an array of YearlyEmployeeLeave objects
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

    //    public function findOneBySomeField($value): ?YearlyEmployeeLeave
    //    {
    //        return $this->createQueryBuilder('y')
    //            ->andWhere('y.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
