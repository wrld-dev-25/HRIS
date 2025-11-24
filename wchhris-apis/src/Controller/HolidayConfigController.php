<?php

namespace App\Controller;

use App\Entity\HolidayConfig;
use App\Entity\YearlyHoliday;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\HolidayConfigRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HolidayConfigController extends AbstractController
{
    private $entityManager;
    private $holidayConfigRepository;

    public function __construct(EntityManagerInterface $entityManager, HolidayConfigRepository $holidayConfigRepository)
    {
        $this->entityManager = $entityManager;
        $this->holidayConfigRepository = $holidayConfigRepository;
    }

    #[Route('/api/holiday/config/list', name: 'app_holiday_config_list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $holidayConfigs = $this->holidayConfigRepository->findNotArchived();
        $data = [];

        foreach ($holidayConfigs as $holidayConfig) {
            $data[] = [
                'id' => $holidayConfig->getId(),
                'name' => $holidayConfig->getName(),
                'date' => $holidayConfig->getDate()->format('Y-m-d'),
                'multiplier_regular' => $holidayConfig->getMultiplierRegular(),
                'multiplier_overtime' => $holidayConfig->getMultiplierOvertime(),
            ];
        }
        return new JsonResponse($data);
    }

    #[Route('/api/holiday/config/create', name: 'app_holiday_config_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!$data) {
            return new JsonResponse(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $year = $data['year'];
        if(!$year){
            return new JsonResponse(['message' => 'Year is missing.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $holiday_config = $this->entityManager->getRepository(HolidayConfig::class)->findAll();
        foreach($holiday_config as $holiday){
            $findexisting = $this->entityManager->getRepository(YearlyHoliday::class)->findOneBy(['holiday_config' => $holiday->getId(), 'year' => $year]);
            if($findexisting){
                continue;
            }
            else{
                $new_yearly_holiday = new YearlyHoliday();
                $new_yearly_holiday->setHolidayConfig($holiday);
                $new_yearly_holiday->setDate($holiday->getDate());
                $new_yearly_holiday->setYear($year);
                $this->entityManager->persist($new_yearly_holiday);
            }
        }
        
        $this->entityManager->flush();
        return new JsonResponse(['status' => 'Yearly Holiday created!'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/api/holiday-config/create-holidays', name: 'create_multiple_holidays', methods: ['POST'])]
    public function createYearlyHolidays(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $holidayConfig = new HolidayConfig();
        $holidayConfig->setName($data['name']);
        $holidayConfig->setDate(new \DateTime($data['date']));
        $holidayConfig->setMultiplierRegular($data['multiplier_regular']);
        $holidayConfig->setMultiplierOvertime($data['multiplier_overtime']);

        $this->entityManager->persist($holidayConfig);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Holiday config created!'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/api/holiday/config/find/{id}', name: 'app_holiday_config_show', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        $holidayConfig = $this->holidayConfigRepository->find($id);

        if (!$holidayConfig) {
            return new JsonResponse(['status' => 'Holiday config not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = [
            'id' => $holidayConfig->getId(),
            'name' => $holidayConfig->getName(),
            'date' => $holidayConfig->getDate()->format('Y-m-d'),
            'multiplier_regular' => $holidayConfig->getMultiplierRegular(),
            'multiplier_overtime' => $holidayConfig->getMultiplierOvertime(),
        ];

        return new JsonResponse($data);
    }

    #[Route('/api/holiday/config/update/{id}', name: 'app_holiday_config_update', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $holidayConfig = $this->holidayConfigRepository->find($id);
        if (!$holidayConfig) {
            return new JsonResponse(['status' => 'Holiday config not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        $holidayConfig->setName($data['name']);
        $holidayConfig->setDate(new \DateTime($data['date']));
        $holidayConfig->setMultiplierRegular($data['multiplier_regular']);
        $holidayConfig->setMultiplierOvertime($data['multiplier_overtime']);

        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Holiday config updated!']);
    }

    #[Route('/api/holiday/config/delete/{id}', name: 'app_holiday_config_delete', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $holidayConfig = $this->holidayConfigRepository->find($id);

        if (!$holidayConfig) {
            return new JsonResponse(['status' => 'Holiday config not found!'], JsonResponse::HTTP_NOT_FOUND);
        }
        
        $holidayConfig->setArchived(true);
        $this->entityManager->persist($holidayConfig);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Holiday config deleted!']);
    }
}
