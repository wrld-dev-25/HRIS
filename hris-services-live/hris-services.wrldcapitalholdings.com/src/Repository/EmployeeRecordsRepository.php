<?php

namespace App\Repository;

use App\Entity\EmployeeRecords;
use App\Entity\EmployeeProjects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;
/**
 * @extends ServiceEntityRepository<EmployeeRecords>
 */
class EmployeeRecordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmployeeRecords::class);
    }

    public function findAllPaginated(int $page = 1, int $perPage = 10)
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
     * Find all employees with pagination and optional search.
     *
     * @param int $page
     * @param int $limit
     * @param string|null $search
     * @return Paginator
     */
    public function findBySearchPaginated(?string $search = null, int $page = 1, int $perPage = 10)
    {
        $query = $this->createQueryBuilder('e');

        $query
            ->where('e.archived IS NULL OR e.archived = false');

        if ($search) { // Handle search query
            $query
                ->andWhere('e.first_name LIKE :search')
                ->orWhere('e.last_name LIKE :search')
                ->orWhere('e.employee_code LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        $query
            ->setFirstResult(($page - 1) * $perPage)
            ->setMaxResults($perPage);

        return new Paginator($query);
    }

    public function findBySearchPaginatedWithFilter(?string $search = null, int $page = 1, int $perPage = 10, array $filters = [])
    {
        $query = $this->createQueryBuilder('e')
            ->leftJoin('e.user', 'u')
            ->addSelect('u')
            ->where('e.archived IS NULL OR e.archived = false')
            ->andWhere('e.user IS NOT NULL'); // Ensure only EmployeeRecords with a connected User are shown

        if ($search) { // Handle search query
            $query
                ->andWhere('e.first_name LIKE :search OR e.last_name LIKE :search OR e.employee_code LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        if (!empty($filters)) {
            if (in_array('active', $filters) && in_array('not_active', $filters)) {
                
            }
            elseif (in_array('active', $filters)) {
                $query->andWhere('u.is_active = true');
            }
            elseif (in_array('not_active', $filters)) {
                $query->andWhere('u.is_active = false');
            }
        }

        $query
            ->setFirstResult(($page - 1) * $perPage)
            ->setMaxResults($perPage);

        return new Paginator($query);
    }

    public function countFilteredEmployees(?string $search = null, array $filter_status = [])
    {
        $query = $this->createQueryBuilder('e')
            ->select('COUNT(e.id)')
            ->leftJoin('e.user', 'u')
            ->where('e.archived IS NULL OR e.archived = false')
            ->andWhere('e.user IS NOT NULL'); // Ensure only EmployeeRecords with a connected User are shown

        if ($search) { // Handle search query
            $query
                ->andWhere('e.first_name LIKE :search OR e.last_name LIKE :search OR e.employee_code LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        if (!empty($filter_status)) {
            if (in_array('active', $filter_status) && in_array('not_active', $filter_status)) {
                // No additional filter needed if both 'active' and 'not_active' are selected
            } elseif (in_array('active', $filter_status)) {
                $query->andWhere('u.is_active = true');
            } elseif (in_array('not_active', $filter_status)) {
                $query->andWhere('u.is_active = false');
            }
        }

        return $query->getQuery()->getSingleScalarResult();
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

    public function findByCode($employeeCode)
    {
        return $this->createQueryBuilder('e')
            ->where('e.employee_code = :code')
            ->setParameter('code', $employeeCode)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /* public function countAllRows()
    {
        $qb = $this->createQueryBuilder('e')
            ->where('e.archived IS NULL OR e.archived = false')
            ->select('COUNT(e.id)');

        return $qb->getQuery()->getSingleScalarResult();
    } */

    /**
     * Count all rows with optional search.
     *
     * @param string|null $search
     * @return int
     */
    public function countAllRows(?string $search = null): int
    {
        $queryBuilder = $this->createQueryBuilder('e')
            ->select('COUNT(e.id)')
            ->where('e.archived IS NULL OR e.archived = false');

        if ($search) {
            $queryBuilder
                ->andWhere('e.first_name LIKE :search')
                ->orWhere('e.last_name LIKE :search')
                ->orWhere('e.employee_code LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        return (int) $queryBuilder->getQuery()->getSingleScalarResult();
    }

    public function findEmployeesWithoutSpecificProject(int $projectId)
    {
        $subquery = $this->createQueryBuilder('excludedEmployee')
            ->select('excludedEmployee.id')
            ->from('App\Entity\EmployeeProjects', 'excludedEmployees')
            ->where('excludedEmployees.project = :projectId')
            ->setParameter('projectId', $projectId)
            ->getQuery();
    
        return $this->createQueryBuilder('e')
            ->leftJoin('e.employeeProjects', 'p')
            ->where('e.archived IS NULL OR e.archived = false')
            ->andWhere('e.id NOT IN (:excludedIds)')
            ->setParameter('excludedIds', $subquery->getDQL())
            ->getQuery()
            ->getResult();
    }
    //    /**
    //     * @return EmployeeRecords[] Returns an array of EmployeeRecords objects
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

    //    public function findOneBySomeField($value): ?EmployeeRecords
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
