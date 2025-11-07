<?php

namespace App\Repository;

use App\Entity\DTRAdjutments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DTRAdjutments>
 */
class DTRAdjutmentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DTRAdjutments::class);
    }

    public function findByEmpRecordAndDateRange(int $empRecordId, \DateTimeInterface $dateStart, \DateTimeInterface $dateEnd): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.emp_record = :empRecord')
            ->andWhere('d.adjusted_date BETWEEN :dateStart AND :dateEnd')
            ->setParameter('empRecord', $empRecordId)
            ->setParameter('dateStart', $dateStart)
            ->setParameter('dateEnd', $dateEnd)
            ->orderBy('d.adjusted_date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return DTRAdjutments[] Returns an array of DTRAdjutments objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('d.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?DTRAdjutments
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
