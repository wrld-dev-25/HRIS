<?php

namespace App\Repository;

use App\Entity\WorkerLogs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WorkerLogs>
 */
class WorkerLogsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkerLogs::class);
    }

    public function getLastWorkerLog(): ?WorkerLogs
    {
        $qb = $this->createQueryBuilder('wl');
        $query = $qb->orderBy('wl.loginDate', 'DESC')
                    ->setMaxResults(1)
                    ->getQuery();

        return $query->getOneOrNullResult();
    }

    public function countLogs(): int
    {
        $query = $this->createQueryBuilder('w')
            ->select('COUNT(w.id)')
            ->getQuery();

        return (int) $query->getSingleScalarResult();
    }

    public function countTodayLogs(): int
    {
        $today = new \DateTime('today'); // Current date at midnight
        $tomorrow = (clone $today)->modify('+1 day'); // Tomorrow's date at midnight
    
        $query = $this->createQueryBuilder('w')
            ->select('COUNT(w.id)')
            ->where('w.loginDate >= :today')
            ->andWhere('w.loginDate < :tomorrow')
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery();
    
        return (int) $query->getSingleScalarResult();
    }

    public function findByUserAndLoginDate(int $userId, string $loginDate): array
    {
        $qb = $this->createQueryBuilder('wl')
            ->where('wl.user = :userId')
            ->setParameter('userId', $userId);
    
        if ($loginDate !== null) {
            // Extract the date part from loginDate and compare
            $qb->andWhere('wl.loginDate LIKE :loginDate')
               ->setParameter('loginDate', $loginDate.'%');
        }
    
        return $qb->getQuery()->getResult();
    }

    public function findByUserAndDateRange($workerId, $startDate, $endDate)
    {
        return $this->createQueryBuilder('l')
            ->where('l.user = :workerId')
            ->andWhere('l.loginDate BETWEEN :startDate AND :endDate')
            ->setParameter('workerId', $workerId)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('l.loginDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByDateRange($startDate, $endDate)
    {
        return $this->createQueryBuilder('l')
            ->leftJoin('l.user', 'worker')
            ->leftJoin('worker.emp_record', 'emp_record')
            ->where('l.loginDate BETWEEN :startDate AND :endDate')
            ->andWhere('emp_record IS NOT NULL') // Ensure there is an associated employee record
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('l.loginDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByDateRangeWithWorkerId($startDate, $endDate, $workerId)
    {
        return $this->createQueryBuilder('l')
            ->leftJoin('l.user', 'worker')
            ->where('l.loginDate BETWEEN :startDate AND :endDate')
            ->andWhere('worker = :workerId') // Ensure there is an associated employee record
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->setParameter('workerId', $workerId)
            ->orderBy('l.loginDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function searchIfExisitingDate($startDate, int $workerId)
    {
        return $this->createQueryBuilder('l')
            ->where('l.loginDate LIKE :startDate')
            ->andWhere('l.user = :workerId') // Changed from > to = for exact match
            ->setParameter('workerId', $workerId)
            ->setParameter('startDate', $startDate . '%')
            ->orderBy('l.loginDate', 'DESC')
            ->setMaxResults(1) // Limits the results to 1
            ->getQuery()
            ->getOneOrNullResult(); // Still returns one result or null
    }

    public function findAllLogsForActiveEmployees(string $status = 'active', ?\DateTimeInterface $dateFrom = null, ?\DateTimeInterface $dateTo = null)
    {
        $qb = $this->createQueryBuilder('wl')
            ->join('wl.user', 'w')
            ->join('w.emp_record', 'er')
            ->andWhere('er.employee_status = :status') // Filter by active employee status
            ->setParameter('status', $status)
            ->orderBy('w.id, wl.loginDate', 'DESC');  // Group by user, order by loginDate

        // Apply date filters if provided
        if ($dateFrom) {
            $qb->andWhere('wl.loginDate >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom->format('Y-m-d H:i:s'));
        }

        if ($dateTo) {
            $qb->andWhere('wl.loginDate <= :dateTo')
               ->setParameter('dateTo', $dateTo->format('Y-m-d H:i:s'));
        }

        return $qb->getQuery()->getResult();
    }


//    /**
//     * @return WorkerLogs[] Returns an array of WorkerLogs objects
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

//    public function findOneBySomeField($value): ?WorkerLogs
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
