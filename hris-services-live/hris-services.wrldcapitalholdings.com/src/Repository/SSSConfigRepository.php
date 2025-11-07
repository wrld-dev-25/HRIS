<?php

namespace App\Repository;

use App\Entity\SSSConfig;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SSSConfig>
 */
class SSSConfigRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SSSConfig::class);
    }

    /**
     * @return SSSConfig[] Returns an array of SSSConfig objects that are not archived or have null archived value
     */
    public function findNotArchived(): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.isArchived IS NULL OR s.isArchived = false')
            ->orderBy('s.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return SSSConfig|null Returns a single SSSConfig object by id that is not archived or null if not found
     */
    public function findOneByIdAndNotArchived(int $id): ?SSSConfig
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.id = :id')
            ->andWhere('s.isArchived IS NULL OR s.isArchived = false')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }

//    /**
//     * @return SSSConfig[] Returns an array of SSSConfig objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SSSConfig
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
