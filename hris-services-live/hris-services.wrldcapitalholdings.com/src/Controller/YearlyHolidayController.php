<?php

namespace App\Controller;

use App\Entity\HolidayConfig;
use App\Entity\YearlyHoliday;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\YearlyHolidayRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api/yearly-holiday', name: 'yearly_holiday_')]
class YearlyHolidayController extends AbstractController
{
    private $em;
    private $repository;

    public function __construct(EntityManagerInterface $em, YearlyHolidayRepository $repository)
    {
        $this->em = $em;
        $this->repository = $repository;
    }

    #[Route('/create-list', name: 'create', methods: ['POST'])]
    public function create(Request $request, ValidatorInterface $validator): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $year = $data['year'] ?? null;
    
        if (empty($year)) {
            return new JsonResponse(['message' => 'Year not found.'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        $holidays = $this->em->getRepository(HolidayConfig::class)->findAll();
    
        // Validate each holiday item
        foreach ($holidays as $holiday_item) {
            $errors = $validator->validate($holiday_item);
            if (count($errors) > 0) {
                return new JsonResponse((string) $errors, JsonResponse::HTTP_BAD_REQUEST);
            }
    
            // Get the date from holiday_item and adjust the year
            $originalDate = $holiday_item->getDate();
            if ($originalDate instanceof \DateTimeInterface) {
                // Adjust the date to use the provided year with the same month and day
                $adjustedDate = \DateTime::createFromFormat('Y-m-d', $year . '-' . $originalDate->format('m-d'));
    
                $newYearlyHoliday = new YearlyHoliday();
                $newYearlyHoliday->setHolidayConfig($holiday_item);
                $newYearlyHoliday->setDate($adjustedDate);
                $newYearlyHoliday->setYear($year); 
                $this->em->persist($newYearlyHoliday);
            }
        }
    
        $this->em->flush();
    
        return new JsonResponse(['message' => 'Creation successful'], JsonResponse::HTTP_CREATED);
    }
    

    #[Route('/list', name: 'list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $holidays = $this->repository->findNotArchived();
        $data = [];
    
        foreach ($holidays as $holiday) {
            $data[] = [
                'id' => $holiday->getId(),
                'holiday_config_id' => $holiday->getHolidayConfig()->getId(), // assuming holiday_config has an id getter
                'holiday_name' => $holiday->getHolidayConfig()->getName(),
                'holiday_multiplier_regular' => $holiday->getHolidayConfig()->getMultiplierRegular(),
                'holiday_multiplier_ot' => $holiday->getHolidayConfig()->getMultiplierOvertime(),
                'date' => $holiday->getDate()?->format('Y-m-d'), // format the date
                'year' => $holiday->getYear(),
            ];
        }
    
        return new JsonResponse($data, JsonResponse::HTTP_OK);
    }
    

    #[Route('/find/{id}', name: 'read', methods: ['GET'])]
    public function read(int $id, SerializerInterface $serializer): JsonResponse
    {
        $holiday = $this->repository->find($id);
        if (!$holiday) {
            return new JsonResponse(['error' => 'Holiday not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        return new JsonResponse($serializer->serialize($holiday, 'json'), JsonResponse::HTTP_OK, [], true);
    }

    #[Route('/update/{id}', name: 'update', methods: ['PUT'])]
    public function update(int $id, Request $request, SerializerInterface $serializer, ValidatorInterface $validator): JsonResponse
    {
        $holiday = $this->repository->find($id);
        if (!$holiday) {
            return new JsonResponse(['error' => 'Holiday not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        $holidayId = $data['holiday_config_id'] ?? null;
        
        // validate if holidayId is provided
        if (empty($holidayId)) {
            return new JsonResponse(['error' => 'Holiday ID not found'], JsonResponse::HTTP_BAD_REQUEST);
        }
        else{
            $holidayConfig = $this->em->getRepository(HolidayConfig::class)->find($holidayId);
            if (!$holidayConfig) {
                return new JsonResponse(['error' => 'Holiday Config not found'], JsonResponse::HTTP_NOT_FOUND);
            }
            $holiday->setHolidayConfig($holidayConfig);
        }

        $errors = $validator->validate($holiday);
        if (count($errors) > 0) {
            return new JsonResponse($errors, JsonResponse::HTTP_BAD_REQUEST);
        }

        $this->em->flush();
        return new JsonResponse(['message' => 'Yearly holiday updated'], JsonResponse::HTTP_OK);
    }

    #[Route('/delete/{id}', name: 'delete', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $yearlyHoliday = $this->repository->find($id);
        if (!$yearlyHoliday) {
            return new JsonResponse(['error' => 'Yearly Holiday not found'], JsonResponse::HTTP_NOT_FOUND);
        }
        $yearlyHoliday->setArchived(true);
        $this->em->persist($yearlyHoliday);
        $this->em->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }
}
