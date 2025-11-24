<?php

namespace App\Repository;

use App\Entity\Worker;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Worker>
 */
class WorkerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Worker::class);
    }

    public function findAllWithEmpRecord()
    {
        return $this->createQueryBuilder('w')
            ->where('w.emp_record IS NOT NULL')
            ->andWhere('w.emp_record != :empty')
            ->setParameter('empty', '')
            ->getQuery()
            ->getResult();
    }

    public function findAllWithEmpRecordAndLogs()
    {
        return $this->createQueryBuilder('w')
            ->leftJoin('w.emp_record', 'e') // Assuming 'emp_record' is the name of the relationship field in Worker entity
            ->leftJoin('w.workerLog', 'l') // Assuming 'workerLogs' is the name of the relationship field in Worker entity
            ->where('e IS NOT NULL') // Ensure there is an associated employee record
            ->andWhere('l IS NOT NULL') // Ensure there are associated logs
            ->getQuery()
            ->getResult();
    }

    public function findOneWithEmpRecordAndLogs(int $worker_id)
    {
        return $this->createQueryBuilder('w')
            ->leftJoin('w.emp_record', 'e') // Assuming 'emp_record' is the name of the relationship field in Worker entity
            ->leftJoin('w.workerLog', 'l') // Assuming 'workerLogs' is the name of the relationship field in Worker entity
            ->where('e IS NOT NULL') // Ensure there is an associated employee record
            ->andWhere('l IS NOT NULL')
            ->andWhere('w.id = :worker_id') // Ensure there are associated logs
            ->setParameter('worker_id', $worker_id)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Worker[] Returns an array of Worker objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Worker
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
