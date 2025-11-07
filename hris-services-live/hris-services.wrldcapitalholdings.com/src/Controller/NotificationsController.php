<?php

namespace App\Controller;

use App\Entity\Division;
use App\Entity\Department;
use App\Entity\Notifications;
use App\Entity\EmployeeRecords;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api/notifications')]
class NotificationsController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/list', name: 'list_notifications', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $notifications = $this->entityManager->getRepository(Notifications::class)->findAll();
        $data = [];

        foreach ($notifications as $notification) {
            $data[] = [
                'id' => $notification->getId(),
                'recipient_department' => $notification->getRecipientDepartment()?->getId(),
                'recipient_division' => $notification->getRecipientDivision()?->getId(),
                'action' => $notification->getAction(),
                'description' => $notification->getDescription(),
                'datetime' => $notification->getDatetime()?->format('Y-m-d H:i:s'),
                'notification_type' => $notification->getNotificationType(),
                'recipient_employee_record' => $notification->getRecipientEmployeeRecord()?->getId(),
                'sender_employee_record' => $notification->getSenderEmployeeRecord()?->getId(),
            ];
        }

        return new JsonResponse($data);
    }

    #[Route('/create', name: 'create_notification', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return new JsonResponse(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $notification = new Notifications();
        $notification->setRecipientDepartment($this->entityManager->getRepository(Department::class)->find($data['recipient_department'] ?? null));
        $notification->setRecipientDivision($this->entityManager->getRepository(Division::class)->find($data['recipient_division'] ?? null));
        $notification->setAction($data['action'] ?? null);
        $notification->setDescription($data['description'] ?? null);
        $notification->setDatetime(isset($data['datetime']) ? new \DateTime($data['datetime']) : null);
        $notification->setNotificationType($data['notification_type'] ?? null);
        $notification->setRecipientEmployeeRecord($this->entityManager->getRepository(EmployeeRecords::class)->find($data['recipient_employee_record'] ?? null));
        $notification->setSenderEmployeeRecord($this->entityManager->getRepository(EmployeeRecords::class)->find($data['sender_employee_record'] ?? null));

        $this->entityManager->persist($notification);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Notification created'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/find/{id}', name: 'find_notification', methods: ['GET'])]
    public function find(int $id): JsonResponse
    {
        $notification = $this->entityManager->getRepository(Notifications::class)->find($id);

        if (!$notification) {
            return new JsonResponse(['message' => 'Notification not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = [
            'id' => $notification->getId(),
            'recipient_department' => $notification->getRecipientDepartment()?->getId(),
            'recipient_division' => $notification->getRecipientDivision()?->getId(),
            'action' => $notification->getAction(),
            'description' => $notification->getDescription(),
            'datetime' => $notification->getDatetime()?->format('Y-m-d H:i:s'),
            'notification_type' => $notification->getNotificationType(),
            'recipient_employee_record' => $notification->getRecipientEmployeeRecord()?->getId(),
            'sender_employee_record' => $notification->getSenderEmployeeRecord()?->getId(),
        ];

        return new JsonResponse($data);
    }

    #[Route('/find-by-employee/{userId}', name: 'find_notification', methods: ['GET'])]
    public function findByEmployee(int $userId): JsonResponse
    {
        $employeeRecord = $this->entityManager->getRepository(EmployeeRecords::class)->findOneBy(['user' => $userId]);
        $notification = $this->entityManager->getRepository(Notifications::class)->findBy(['recipient_employee_record' => $employeeRecord->getId()]);

        $data = [];

        foreach ($notification as $notif) {
            $data[] = [
                'id' => $notif->getId(),
                'recipient_department' => $notif->getRecipientDepartment()?->getId(),
                'recipient_division' => $notif->getRecipientDivision()?->getId(),
                'action' => $notif->getAction(),
                'description' => $notif->getDescription(),
                'datetime' => $notif->getDatetime()?->format('Y-m-d H:i:s'),
                'notification_type' => $notif->getNotificationType(),
                'recipient_employee_record' => $notif->getRecipientEmployeeRecord()?->getId(),
                'recipient_fullname' => $notif->getRecipientEmployeeRecord()?->getLastName() . ', ' . $notif->getRecipientEmployeeRecord()?->getFirstName(),
                'sender_employee_record' => $notif->getSenderEmployeeRecord()?->getId(),
                'sender_fullname' => $notif->getSenderEmployeeRecord()?->getLastName() . ', ' . $notif->getSenderEmployeeRecord()?->getFirstName(),
            ];
        }

        return new JsonResponse($data);
    }

    #[Route('/update/{id}', name: 'update_notification', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $notification = $this->entityManager->getRepository(Notifications::class)->find($id);

        if (!$notification) {
            return new JsonResponse(['message' => 'Notification not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $notification->setRecipientDepartment($this->entityManager->getRepository(Department::class)->find($data['recipient_department'] ?? null));
        $notification->setRecipientDivision($this->entityManager->getRepository(Division::class)->find($data['recipient_division'] ?? null));
        $notification->setAction($data['action'] ?? $notification->getAction());
        $notification->setDescription($data['description'] ?? $notification->getDescription());
        $notification->setDatetime(isset($data['datetime']) ? new \DateTime($data['datetime']) : $notification->getDatetime());
        $notification->setNotificationType($data['notification_type'] ?? $notification->getNotificationType());
        $notification->setRecipientEmployeeRecord($this->entityManager->getRepository(EmployeeRecords::class)->find($data['recipient_employee_record'] ?? null));
        $notification->setSenderEmployeeRecord($this->entityManager->getRepository(EmployeeRecords::class)->find($data['sender_employee_record'] ?? null));

        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Notification updated'], JsonResponse::HTTP_OK);
    }

    #[Route('/delete/{id}', name: 'delete_notification', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $notification = $this->entityManager->getRepository(Notifications::class)->find($id);

        if (!$notification) {
            return new JsonResponse(['message' => 'Notification not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($notification);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Notification deleted'], JsonResponse::HTTP_OK);
    }
}
