<?php

namespace App\Repository;

use App\Entity\Blocks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Blocks>
 */
class BlocksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blocks::class);
    }

    public function findBlockWithLotsWithoutCategory(int $blockId): ?Blocks
    {
        return $this->createQueryBuilder('b')
        ->leftJoin('b.lots', 'l')
        ->leftJoin('l.category', 'c')
        ->addSelect('l')
        ->addSelect('c')
        ->andWhere('b.id = :blockId')
        ->setParameter('blockId', $blockId)
        ->andWhere('c.id IS NULL') // Ensure lots with categories are excluded
        ->getQuery()
        ->getOneOrNullResult();
    }

//    /**
//     * @return Blocks[] Returns an array of Blocks objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Blocks
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
