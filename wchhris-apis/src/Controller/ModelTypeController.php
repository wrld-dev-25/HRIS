<?php

namespace App\Controller;

use App\Entity\Blocks;
use App\Entity\Category;
use App\Entity\Lots;
use App\Entity\Model;
use App\Entity\ModelTypes;
use App\Entity\Owner;
use App\Entity\Phase;
use App\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Subdivision;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use App\Service\AuditLog;
use App\Entity\UserType;

class ModelTypeController extends AbstractController
{

    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;

    public function __construct(EntityManagerInterface $entityManager,  UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog)
    {
        $this->entityManager    = $entityManager;
        $this->passhasher       = $passhasher;
        $this->jwtManager       = $jwtManager;
        $this->auditlog         = $auditLog;
    }

    #[Route('/api/model/type', name: 'app_model_type'  , methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        // Deserialize JSON data from the request body
        $data = json_decode($request->getContent(), true);

        // Validate and handle data (assuming 'name' and 'code' are required fields)
        $name = $data['name'] ?? null;
        $code = $data['code'] ?? null;

        if (!$name || !$code) {
            return $this->json(['error' => 'Name and code are required.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Create a new ModelTypes entity
        $modelType = new ModelTypes();
        $modelType->setName($name);
        $modelType->setCode($code);

        // Persist the entity
        $this->entityManager->persist($modelType);
        $this->entityManager->flush();

        // Return a success response
        return $this->json(['message' => 'Model type created successfully', 'id' => $modelType->getId()]);
    }

    #[Route('/api/model/update/{id}', name: 'app_model_type' , methods: ['PUT'])]
    public function update(Request $request , string $id): JsonResponse
    {
        // Deserialize JSON data from the request body
        $data = json_decode($request->getContent(), true);
        $modelTypeRepo = $this->entityManager->getRepository(ModelTypes::class);
        $modelTypeItem = $modelTypeRepo->findOneBy(["id" => $id]);
        // Update entity fields if provided in request data
        if (isset($data['name'])) {
            $modelTypeItem->setName($data['name']);
        }
        if (isset($data['code'])) {
            // validate code if existing and not same as the current one
            $modelTypeRepo = $this->entityManager->getRepository(ModelTypes::class);
            $modelTypeItem = $modelTypeRepo->findOneBy(["code" => $data['code']]);
            if($modelTypeItem && $modelTypeItem->getId() != $id){
                return $this->json(['message' => 'Code already exists.'], JsonResponse::HTTP_BAD_REQUEST);
            }
            $modelTypeItem->setCode($data['code']);
        }

        // Persist the updated entity
        $this->entityManager->persist($modelTypeItem);
        $this->entityManager->flush();

        // Return a success response
        return $this->json(['message' => 'Model type updated successfully', 'id' => $modelTypeItem->getId()]);
    }

    #[Route('/api/model/delete/{id}', name: 'app_model_type' , methods: ['DELETE'])]
    public function delete(Request $request, string $id): JsonResponse
    {
        // Delete the entity
        $modelTypeRepo = $this->entityManager->getRepository(ModelTypes::class);
        $modelTypeItem = $modelTypeRepo->findOneBy(["id" => $id]);
        $this->entityManager->remove($modelTypeItem);
        $this->entityManager->flush();

        // Return a success response
        return $this->json(['message' => 'Model type deleted successfully']);
    }
}
