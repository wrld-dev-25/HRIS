<?php

namespace App\Repository;

use App\Entity\PayrollGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PayrollGroups>
 */
class PayrollGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PayrollGroups::class);
    }

    public function findByDateRange(\DateTimeInterface $dateStart, \DateTimeInterface $dateEnd): ?PayrollGroups
    {
        return $this->createQueryBuilder('p')
            ->where('p.date_start <= :dateEnd')
            ->andWhere('p.date_end >= :dateStart')
            ->setParameter('dateStart', $dateStart)
            ->setParameter('dateEnd', $dateEnd)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findByDateStartYear(int $year): array
    {
        $startOfYear = new \DateTime("$year-01-01");
        $endOfYear = new \DateTime("$year-12-31 23:59:59");

        return $this->createQueryBuilder('p')
            ->where('p.date_start BETWEEN :startOfYear AND :endOfYear')
            ->setParameter('startOfYear', $startOfYear)
            ->setParameter('endOfYear', $endOfYear)
            ->getQuery()
            ->getResult();
    }

    public function findLatestPayrollGroup(): ?PayrollGroups
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.date_end', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    //    /**
    //     * @return PayrollGroups[] Returns an array of PayrollGroups objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?PayrollGroups
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

}
