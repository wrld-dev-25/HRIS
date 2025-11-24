<?php

namespace App\Repository;

use App\Entity\EmployeeProjects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmployeeProjects>
 */
class EmployeeProjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmployeeProjects::class);
    }

    public function findByNotArchived(): array
    {
        return $this->createQueryBuilder('e')
            ->leftJoin('e.emp_record', 'emp_task')
            ->where('e.archived != :archived')
            ->andwhere('emp_task.archived != :archived')
            ->setParameter('archived', true)
            ->getQuery()
            ->getResult();
    }

    public function countByNotArchived(): int
    {
        return (int) $this->createQueryBuilder('e')
            ->select('COUNT(e.id)')
            ->where('e.archived IS NULL OR e.archived = false')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findByNotArchivedDateRange(): array
    {
        return $this->createQueryBuilder('e')
            ->leftJoin('e.emp_record', 'emp_task')
            ->where('e.archived != :archived')
            ->andwhere('emp_task.archived != :archived')
            ->setParameter('archived', true)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return EmployeeProjects[] Returns an array of EmployeeProjects objects
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

//    public function findOneBySomeField($value): ?EmployeeProjects
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
