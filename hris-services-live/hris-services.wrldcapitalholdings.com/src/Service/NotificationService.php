<?php
namespace App\Service;
use DateTimeZone;
use App\Entity\User;
use DateTimeImmutable;
use App\Entity\Division;
use App\Entity\Department;
use App\Entity\AuditTrailLog;
use App\Entity\Notifications;
use App\Entity\EmployeeRecords;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class NotificationService
{
    private $tokenStorage;
    private $entityManager;
    private $mailer;

    public function __construct(EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage, MailerInterface $mailer)
    {
        $this->tokenStorage = $tokenStorage;
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
    }

    public function createNotification($division, $department, $actionMsg, $description, $datetime, $type)
    {
        $token              = $this->tokenStorage->getToken();
        $user               = $token->getUser();

        if ($user instanceof User) {
            $senderEmployeeRecordId = $this->entityManager->getRepository(EmployeeRecords::class)->findOneBy(['user' => $user->getId()]);
            if ($senderEmployeeRecordId) {
                $senderEmployee     = $this->entityManager->getRepository(EmployeeRecords::class)->find($senderEmployeeRecordId);
                switch ($type) {
                    case 'ALL':
                        $notifType = 0;
                        $recipientEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active', 'division' => $division, 'department' => $department]);
                        foreach($recipientEmployees as $employees){
                            $this->setNewNotification($employees, $senderEmployee, $department, $division, $actionMsg, $description, $datetime, $notifType);
                        }
                        break;
                    case 'DEP_ONLY':
                        $notifType = 1;
                        $recipientEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active', 'department' => $department]);
                        foreach($recipientEmployees as $employees){
                            $this->setNewNotification($employees, $senderEmployee, $department, $division, $actionMsg, $description, $datetime, $notifType);
                        }
                        break;
                    case 'DIV_ONLY':
                        $notifType = 2;
                        $recipientEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active', 'division' => $division]);
                        foreach($recipientEmployees as $employees){
                            $this->setNewNotification($employees, $senderEmployee, $department, $division, $actionMsg, $description, $datetime, $notifType);
                        }
                        break;
                    case 'DIV_DEP':
                        $notifType = 2;
                        $recipientEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active', 'department' => $department]);
                        foreach($recipientEmployees as $employees){
                            $this->setNewNotification($employees, $senderEmployee, $department, $division, $actionMsg, $description, $datetime, $notifType);
                        }
                        break;
                    default:
                        $notifType = 0;
                }
    
                $this->entityManager->flush();
            }
        }
    }

    public function createNotificationUsingToken($actionMsg, $description, $datetime, $type)
    {
        $token  = $this->tokenStorage->getToken();
        $user   = $token->getUser();

        if ($user instanceof User) {
            $senderEmployeeRecordId = $this->entityManager->getRepository(EmployeeRecords::class)->findOneBy(['user' => $user->getId()]);
            if ($senderEmployeeRecordId) {
                $senderEmployee     = $this->entityManager->getRepository(EmployeeRecords::class)->find($senderEmployeeRecordId);
                $senderDepartment   = $senderEmployee->getDepartment();
                $senderDivision     = $senderEmployee->getDivision();
                switch ($type) {
                    case 'ALL':
                        $notifType = 0;
                        $recipientEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active', 'division' => $senderDivision, 'department' => $senderDepartment]);
                        foreach($recipientEmployees as $employees){
                            $this->setNewNotification($employees, $senderEmployee, $senderDepartment, $senderDivision, $actionMsg, $description, $datetime, $notifType);
                        }
                        break;
                    case 'DEP_ONLY':
                        $notifType = 1;
                        $recipientEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active', 'department' => $senderDepartment]);
                        foreach($recipientEmployees as $employees){
                            $this->setNewNotification($employees, $senderEmployee, $senderDepartment, $senderDivision, $actionMsg, $description, $datetime, $notifType);
                        }
                        break;
                    case 'DIV_ONLY':
                        $notifType = 2;
                        $recipientEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active', 'division' => $senderDivision]);
                        foreach($recipientEmployees as $employees){
                            $this->setNewNotification($employees, $senderEmployee, $senderDepartment, $senderDivision, $actionMsg, $description, $datetime, $notifType);
                        }
                        break;
                    case 'DIV_DEP':
                        $notifType = 3;
                        $recipientEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active', 'department' => $senderDepartment]);
                        foreach($recipientEmployees as $employees){
                            $this->setNewNotification($employees, $senderEmployee, $senderDepartment, $senderDivision, $actionMsg, $description, $datetime, $notifType);
                        }
                        break;
                    default:
                        $notifType = 0;
                }
    
                $this->entityManager->flush();
            }
        }
    }

    public function createNotificationForSpecificUser($recipientEmployee, $actionMsg, $description, $datetime)
    {
        $token  = $this->tokenStorage->getToken();
        $user   = $token->getUser();

        if ($user instanceof User) {
            $senderEmployeeRecordId = $this->entityManager->getRepository(EmployeeRecords::class)->findOneBy(['user' => $user->getId()]);
            if ($senderEmployeeRecordId) {
                $senderEmployee     = $this->entityManager->getRepository(EmployeeRecords::class)->find($senderEmployeeRecordId);
                $senderDepartment   = $senderEmployee->getDepartment();
                $senderDivision     = $senderEmployee->getDivision();
                $this->setNewNotification($recipientEmployee, $senderEmployee, $senderDepartment, $senderDivision, $actionMsg, $description, $datetime, "4");
                $this->entityManager->flush();
            }
        }
    }

    private function setNewNotification($recipientEmployee, $senderEmployee, $department, $division, $actionMsg, $description, $datetime, $notifType){
        $newNotification = new Notifications();
        $newNotification->setRecipientDepartment($department);
        $newNotification->setRecipientDivision($division);
        $newNotification->setAction($actionMsg);
        $newNotification->setDescription($description);
        $newNotification->setDatetime($datetime);
        $newNotification->setNotificationType($notifType);
        $newNotification->setRecipientEmployeeRecord($recipientEmployee);
        $newNotification->setSenderEmployeeRecord($senderEmployee);
        $this->sendNotificationEmail($recipientEmployee->getEmail(), $actionMsg, $recipientEmployee->getLastName(), $actionMsg);
        $this->entityManager->persist($newNotification);
        
    }

    private function sendNotificationEmail($email, $subject, $employeeName, $message)
    {
        $emailContent = (new Email())
            ->from('noreply@example.com')
            // ->to($email)
            ->to('lquisim@techrostrum.com')
            ->subject($subject)
            ->html('<h3>Hello '.$employeeName.',</h3><br><p>'.$message.'</p><br><br>');
        $this->mailer->send($emailContent);
    }
}