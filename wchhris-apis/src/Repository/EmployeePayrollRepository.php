<?php

namespace App\Repository;

use App\Entity\EmployeePayroll;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmployeePayroll>
 */
class EmployeePayrollRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmployeePayroll::class);
    }

    // public function findByPayrollProfileAndDateRange(int $payrollProfileId, \DateTimeInterface $dateFrom, \DateTimeInterface $dateTo): ?EmployeePayroll
    // {
    //     return $this->createQueryBuilder('ep')
    //         ->andWhere('ep.payroll_profile = :payrollProfile')
    //         ->andWhere('ep.date_generated BETWEEN :dateFrom AND :dateTo')
    //         ->setParameter('payrollProfile', $payrollProfileId)
    //         ->setParameter('dateFrom', $dateFrom->format('Y-m-d H:i:s'))
    //         ->setParameter('dateTo', $dateTo->format('Y-m-d H:i:s'))
    //         ->orderBy('ep.date_generated', 'DESC') // Order by date generated in descending order
    //         ->setMaxResults(1) // Limit the results to 1
    //         ->getQuery()
    //         ->getOneOrNullResult(); // Get a single result or null
    // }

    public function findByPayrollProfileAndDateRange(int $payrollProfileId, \DateTimeInterface $dateFrom, \DateTimeInterface $dateTo): ?EmployeePayroll
    {
        return $this->createQueryBuilder('ep')
            ->andWhere('ep.payroll_profile = :payrollProfile')
            ->andWhere('ep.date_start >= :dateFrom')
            ->andWhere('ep.date_end <= :dateTo')
            ->setParameter('payrollProfile', $payrollProfileId)
            ->setParameter('dateFrom', $dateFrom->format('Y-m-d'))
            ->setParameter('dateTo', $dateTo->format('Y-m-d'))
            ->orderBy('ep.date_start', 'DESC') // Order by date_start in descending order
            ->setMaxResults(1) // Limit the results to 1
            ->getQuery()
            ->getOneOrNullResult(); // Get a single result or null
    }

    public function findByPayrollProfileAndDateRangeList(int $payrollProfileId, \DateTimeInterface $dateFrom, \DateTimeInterface $dateTo): array
    {
        return $this->createQueryBuilder('ep')
            ->andWhere('ep.payroll_profile = :payrollProfile')
            ->andWhere('ep.date_start >= :dateFrom')
            ->andWhere('ep.date_end <= :dateTo')
            ->setParameter('payrollProfile', $payrollProfileId)
            ->setParameter('dateFrom', $dateFrom->format('Y-m-d'))
            ->setParameter('dateTo', $dateTo->format('Y-m-d'))
            ->orderBy('ep.date_start', 'DESC')
            ->getQuery()
            ->getResult(); // Returns an array of EmployeePayroll objects
    }

//    /**
//     * @return EmployeePayroll[] Returns an array of EmployeePayroll objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EmployeePayroll
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
