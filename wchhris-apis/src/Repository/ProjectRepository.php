<?php

namespace App\Repository;

use App\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\Query\Expr\Join;
/**
 * @extends ServiceEntityRepository<Project>
 */
class ProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Project::class);
    }

    public function findOneByCodeOrName(string $code): ?Project
    {
        return $this->createQueryBuilder('s')
            ->where('s.archived IS NULL OR s.archived = false')
            ->andWhere('s.code = :code')
            ->setParameter('code', $code)
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

    public function findNotArchivedWithRelations(int $limit = 50, int $offset = 0): array
    {
        return $this->createQueryBuilder('p')
            ->addSelect('s', 'ph', 'b', 'c', 'cb', 'cl', 'm')
            ->leftJoin('p.subdivision', 's')
            ->leftJoin('s.phases', 'ph')
            ->leftJoin('ph.blocks', 'b')
            ->leftJoin('p.categories', 'c')
            ->leftJoin('c.blocks', 'cb')
            ->leftJoin('c.lots', 'cl')
            ->leftJoin('c.model', 'm')
            ->where('(p.archived = false OR p.archived IS NULL)')
            ->andWhere('(s.archived = false OR s.id IS NULL)')
            ->andWhere('(ph.archived = false OR ph.id IS NULL)')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findByNotArchived(): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.archived IS NULL OR e.archived = false')
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

    public function findOneByNotArchived($id): array
    {
        return $this->createQueryBuilder('e')
            ->leftJoin('e.employeeProjects', 'emp_project')
            ->leftJoin('emp_project.empTasks', 'emp_task' )
            ->where('e.archived IS NULL OR e.archived = false AND (emp_task.archived IS NULL)')
            ->andWhere('e.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
    
//    /**
//     * @return Project[] Returns an array of Project objects
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

//    public function findOneBySomeField($value): ?Project
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
