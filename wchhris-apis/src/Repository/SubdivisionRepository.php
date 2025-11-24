<?php

namespace App\Repository;

use App\Entity\Subdivision;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @extends ServiceEntityRepository<Subdivision>
 */
class SubdivisionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subdivision::class);
    }

    public function findOneByCodeOrName(string $code, string $name): ?Subdivision
    {
        return $this->createQueryBuilder('s')
            ->where('s.subdivision_code = :code')
            ->orWhere('s.name = :name')
            ->andWhere('s.archived IS NULL OR s.archived = false')
            ->setParameter('code', $code)
            ->setParameter('name', $name)
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

    /**
     * @return Subdivision[] Returns an array of Subdivision objects
     */
    public function findByCode($code): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.subdivision_code = :val')
            ->setParameter('val', $code)
            ->orderBy('s.id', 'ASC')
            //->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByNotArchived(): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.archived != :archived')
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

//    public function findOneBySomeField($value): ?Subdivision
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
