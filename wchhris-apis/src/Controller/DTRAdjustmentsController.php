<?php

namespace App\Controller;

use App\Entity\DTRAdjutments;
use App\Entity\EmployeeRecords;
use App\Entity\PayrollGroups;
use App\Entity\WorkerLogs;
use App\Repository\DTRAdjutmentsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api/dtr-adjustments')]
class DTRAdjustmentsController extends AbstractController
{
    private $entityManager;
    private $dtrAdjustmentsRepository;

    public function __construct(EntityManagerInterface $entityManager, DTRAdjutmentsRepository $dtrAdjustmentsRepository)
    {
        $this->entityManager = $entityManager;
        $this->dtrAdjustmentsRepository = $dtrAdjustmentsRepository;
    }

    #[Route('/list', name: 'dtr_adjustments_list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $adjustments = $this->dtrAdjustmentsRepository->findAll();
        $data = [];

        foreach ($adjustments as $adjustment) {
            $data[] = [
                'id' => $adjustment->getId(),
                'worker_logs_id' => $adjustment->getWorkerLogs()?->getId(),
                'emp_record_id' => $adjustment->getEmpRecord()?->getId(),
                'adjusted_date' => $adjustment->getAdjustedDate()?->format('Y-m-d'),
            ];
        }

        return new JsonResponse($data);
    }

    #[Route('/create', name: 'dtr_adjustments_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return new JsonResponse(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $emp_record = $this->entityManager->getRepository(EmployeeRecords::class)->find($data['emp_record_id']);
        if(!$emp_record){
            return new JsonResponse(['message' => 'Employee Record not found'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $worker_logs = $this->entityManager->getRepository(WorkerLogs::class)->find($data['workerlogs_id']);
        if(!$worker_logs){
            return new JsonResponse(['message' => 'Workerlogs not found'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $latest_payroll_date = $this->entityManager->getRepository(PayrollGroups::class)->findLatestPayrollGroup();
        $latestDate = '';
        if ($latest_payroll_date) {
            $latestDate = $latest_payroll_date->getDateEnd();
            if ($latestDate instanceof \DateTime) {
                $latestDate->modify('+1 day'); // Add one day
            } else {
                return new JsonResponse(['message' => 'Invalid Date'], JsonResponse::HTTP_BAD_REQUEST);
            }
        } else {
            return new JsonResponse(['message' => 'Payrollgroup not found'], JsonResponse::HTTP_BAD_REQUEST);
        }
        

        $adjustment = new DTRAdjutments();
        // You may need to fetch WorkerLogs and EmployeeRecords entities by their IDs
        $adjustment->setWorkerLogs($worker_logs);
        $adjustment->setEmpRecord($emp_record);
        $adjustment->setAdjustedDate($latestDate);

        $this->entityManager->persist($adjustment);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'DTR Adjustment created!'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/find/{id}', name: 'dtr_adjustments_show', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        $adjustment = $this->dtrAdjustmentsRepository->find($id);

        if (!$adjustment) {
            return new JsonResponse(['message' => 'DTR Adjustment not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = [
            'id' => $adjustment->getId(),
            'worker_logs_id' => $adjustment->getWorkerLogs()?->getId(),
            'emp_record_id' => $adjustment->getEmpRecord()?->getId(),
            'adjusted_date' => $adjustment->getAdjustedDate()?->format('Y-m-d'),
        ];

        return new JsonResponse($data);
    }

    #[Route('/update/{id}', name: 'dtr_adjustments_update', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $adjustment = $this->dtrAdjustmentsRepository->find($id);

        if (!$adjustment) {
            return new JsonResponse(['message' => 'DTR Adjustment not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        if (isset($data['adjusted_date'])) {
            $adjustment->setAdjustedDate(new \DateTime($data['adjusted_date']));
        }

        $this->entityManager->flush();

        return new JsonResponse(['status' => 'DTR Adjustment updated!']);
    }

    #[Route('/delete/{id}', name: 'dtr_adjustments_delete', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $adjustment = $this->dtrAdjustmentsRepository->find($id);

        if (!$adjustment) {
            return new JsonResponse(['message' => 'DTR Adjustment not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($adjustment);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'DTR Adjustment deleted!']);
    }
}
