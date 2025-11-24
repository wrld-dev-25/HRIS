<?php

namespace App\Repository;

use App\Entity\Phase;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @extends ServiceEntityRepository<Phase>
 */
class PhaseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Phase::class);
    }

    public function findOneByCodeOrName(string $code, string $name, int $subdivision_id): ?Phase
    {
        return $this->createQueryBuilder('s')
            ->leftJoin('s.subdivision', 'sub')
            ->where('s.code = :code OR s.name = :name')
            ->andWhere('sub.id = :subdivision_id')
            ->setParameter('code', $code)
            ->setParameter('name', $name)
            ->setParameter('subdivision_id', $subdivision_id)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findAllPaginated($page = 1, $perPage = 10)
    {
        $query = $this->createQueryBuilder('e')
            ->where('e.archived IS NULL OR e.archived = false')
            ->getQuery()
            ->setFirstResult(($page - 1) * $perPage)
            ->setMaxResults($perPage);
        $paginator = new Paginator($query);
        return $paginator;
    }

    public function findByNotArchived(): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.archived IS NULL OR e.archived = false')
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Phase[] Returns an array of Phase objects
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

//    public function findOneBySomeField($value): ?Phase
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
