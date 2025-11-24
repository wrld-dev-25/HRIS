<?php

namespace App\Controller;

use App\Service\AuditLog;
use App\Entity\SalaryAdjustment;
use App\Service\UserAccessValidation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\SalaryAdjustmentRepository;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class SalaryAdjustmentController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validateAccess;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, UserAccessValidation $validateAccess)
    {
        $this->entityManager = $entityManager;
        $this->passhasher = $passhasher;
        $this->jwtManager = $jwtManager;
        $this->auditlog = $auditLog;
        $this->validateAccess = $validateAccess;
    }
    
    #[Route('/api/salary/adjustment', name: 'app_salary_adjustment_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $salaryAdjustment = new SalaryAdjustment();
        $salaryAdjustment->setDailyRate($data['daily_rate'])
                         ->setRegularDays($data['regular_days'])
                         ->setRegularDaysPay($data['regular_days_pay'])
                         ->setRegularNdotHours($data['regular_ndot_hours'])
                         ->setOtMealSubsidy($data['ot_meal_subsidy'])
                         ->setOtMealSubsidyAmount($data['ot_meal_subsidy_amount'])
                         ->setAboveFourHours($data['above_four_hours'])
                         ->setAboveFourHoursAmount($data['above_four_hours_amount'])
                         ->setTempAllowanceAmount($data['temp_allowance_amount'])
                         ->setWellness($data['wellness'])
                         ->setSalaryAdjustment($data['salary_adjustment'])
                         ->setTotalSalaryAdjustment($data['total_salary_adjustment']);

        $entityManager->persist($salaryAdjustment);
        $entityManager->flush();

        return new JsonResponse(['status' => 'Salary adjustment created'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/salary/adjustments', name: 'app_salary_adjustment_list', methods: ['GET'])]
    public function list(SalaryAdjustmentRepository $salaryAdjustmentRepository): JsonResponse
    {
        $salaryAdjustments = $salaryAdjustmentRepository->findAll();

        return $this->json($salaryAdjustments, JsonResponse::HTTP_OK, [], ['groups' => 'salary_adjustment']);
    }

    #[Route('/salary/adjustment/{id}', name: 'app_salary_adjustment_show', methods: ['GET'])]
    public function show(SalaryAdjustmentRepository $salaryAdjustmentRepository, int $id): JsonResponse
    {
        $salaryAdjustment = $salaryAdjustmentRepository->find($id);

        if (!$salaryAdjustment) {
            return new JsonResponse(['status' => 'Salary adjustment not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        return $this->json($salaryAdjustment, JsonResponse::HTTP_OK, [], ['groups' => 'salary_adjustment']);
    }

    #[Route('/salary/adjustment/{id}', name: 'app_salary_adjustment_update', methods: ['PUT'])]
    public function update(Request $request, EntityManagerInterface $entityManager, SalaryAdjustmentRepository $salaryAdjustmentRepository, int $id): JsonResponse
    {
        $salaryAdjustment = $salaryAdjustmentRepository->find($id);

        if (!$salaryAdjustment) {
            return new JsonResponse(['status' => 'Salary adjustment not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);

        $salaryAdjustment->setDailyRate($data['daily_rate'])
                         ->setRegularDays($data['regular_days'])
                         ->setRegularDaysPay($data['regular_days_pay'])
                         ->setRegularNdotHours($data['regular_ndot_hours'])
                         ->setOtMealSubsidy($data['ot_meal_subsidy'])
                         ->setOtMealSubsidyAmount($data['ot_meal_subsidy_amount'])
                         ->setAboveFourHours($data['above_four_hours'])
                         ->setAboveFourHoursAmount($data['above_four_hours_amount'])
                         ->setTempAllowanceAmount($data['temp_allowance_amount'])
                         ->setWellness($data['wellness'])
                         ->setSalaryAdjustment($data['salary_adjustment'])
                         ->setTotalSalaryAdjustment($data['total_salary_adjustment']);

        $entityManager->flush();

        return new JsonResponse(['status' => 'Salary adjustment updated'], JsonResponse::HTTP_OK);
    }

    #[Route('/salary/adjustment/{id}', name: 'app_salary_adjustment_delete', methods: ['DELETE'])]
    public function delete(EntityManagerInterface $entityManager, SalaryAdjustmentRepository $salaryAdjustmentRepository, int $id): JsonResponse
    {
        $salaryAdjustment = $salaryAdjustmentRepository->find($id);

        if (!$salaryAdjustment) {
            return new JsonResponse(['status' => 'Salary adjustment not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $entityManager->remove($salaryAdjustment);
        $entityManager->flush();

        return new JsonResponse(['status' => 'Salary adjustment deleted'], JsonResponse::HTTP_NO_CONTENT);
    }
}
