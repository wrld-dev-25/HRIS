<?php

namespace App\Repository;

use App\Entity\EmpTask;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmpTask>
 */
class EmpTaskRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmpTask::class);
    }

    public function findByNotArchived(): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.archived IS NULL OR e.archived = false')
            ->getQuery()
            ->getResult();
    }

    public function findOneByNotArchived($emp_proj_id): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.archived IS NULL OR e.archived = false')
            ->andWhere('e.emp_project = :id')
            ->setParameter('id', $emp_proj_id)
            ->getQuery()
            ->getResult();
    }

    public function findOneByNotArchivedWithDate($emp_proj_id, $startDate, $endDate): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.archived IS NULL OR e.archived = false')
            ->andWhere('e.emp_project = :id')
            ->andWhere('e.date BETWEEN :startDate AND :endDate')
            ->setParameter('id', $emp_proj_id)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('e.date', 'ASC')
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return EmpTask[] Returns an array of EmpTask objects
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

//    public function findOneBySomeField($value): ?EmpTask
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
