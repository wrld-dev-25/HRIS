<?php

namespace App\Controller;

use App\Entity\ContractTypes;
use App\Repository\ContractTypesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api/contract-types')]
class ContractTypesController extends AbstractController
{
    private $entityManager;
    private $contractTypesRepository;

    public function __construct(EntityManagerInterface $entityManager, ContractTypesRepository $contractTypesRepository)
    {
        $this->entityManager = $entityManager;
        $this->contractTypesRepository = $contractTypesRepository;
    }

    #[Route('/list', name: 'contract_types_list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $contractTypes = $this->contractTypesRepository->findAll();
        $data = [];

        foreach ($contractTypes as $contractType) {
            $data[] = [
                'id' => $contractType->getId(),
                'name' => $contractType->getName(),
                'code' => $contractType->getCode(),
                'archived' => $contractType->isArchived(),
            ];
        }

        return new JsonResponse($data);
    }

    #[Route('/create', name: 'contract_types_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return new JsonResponse(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $contractType = new ContractTypes();
        $contractType->setName($data['name'] ?? '');
        $contractType->setCode($data['code'] ?? '');
        $contractType->setArchived($data['archived'] ?? false);

        $this->entityManager->persist($contractType);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Contract type created!'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/find/{id}', name: 'contract_types_show', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        $contractType = $this->contractTypesRepository->find($id);

        if (!$contractType) {
            return new JsonResponse(['message' => 'Contract type not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = [
            'id' => $contractType->getId(),
            'name' => $contractType->getName(),
            'code' => $contractType->getCode(),
            'archived' => $contractType->isArchived(),
        ];

        return new JsonResponse($data);
    }

    #[Route('/update/{id}', name: 'contract_types_update', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $contractType = $this->contractTypesRepository->find($id);

        if (!$contractType) {
            return new JsonResponse(['message' => 'Contract type not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        $contractType->setName($data['name'] ?? $contractType->getName());
        $contractType->setCode($data['code'] ?? $contractType->getCode());
        $contractType->setArchived($data['archived'] ?? $contractType->isArchived());

        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Contract type updated!']);
    }

    #[Route('/delete/{id}', name: 'contract_types_delete', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $contractType = $this->contractTypesRepository->find($id);

        if (!$contractType) {
            return new JsonResponse(['message' => 'Contract type not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($contractType);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Contract type deleted!']);
    }
}
