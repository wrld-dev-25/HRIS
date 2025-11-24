<?php

namespace App\Controller;

use App\Entity\Blocks;
use App\Entity\Category;
use App\Entity\Lots;
use App\Entity\Model;
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
use Symfony\Component\Serializer\SerializerInterface;

class BlocksController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $serializer;
    

    public function __construct(EntityManagerInterface $entityManager,  UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, SerializerInterface $serializer)
    {
        $this->entityManager    = $entityManager;
        $this->passhasher       = $passhasher;
        $this->jwtManager       = $jwtManager;
        $this->auditlog         = $auditLog;
        $this->serializer         = $serializer;
    }

    #[Route('api/blocks', name: 'view_blocks_list', methods: ['GET'])]
    public function viewBlocksList(Request $request): JsonResponse
    {
        try {
            $blocksRepo = $this->entityManager->getRepository(Blocks::class);
            //$paginator = $phaseRepo->findAllPaginated(1,300);
            // Get the items from the Paginator
            $blocksItem = $blocksRepo->findAll();
            $blocksArray = $this->serializer->serialize($blocksItem, 'json', ['groups' => 'blocks']);
            $this->auditlog->addAuditLog($request, json_encode($blocksArray), 'api/blocks', 'View Blocks');
            return new JsonResponse([
                'message' => 'Blocks retrieved successfully.',
                'blocks' => json_decode($blocksArray)
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return new JsonResponse([
                'error' => 'Failed to retrieve blocks.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('api/blocks/{block_id}', name: 'view_blocks', methods: ['GET'])]
    public function viewBlocks(Request $request, string $block_id): JsonResponse
    {
        try {
            $blocksRepo = $this->entityManager->getRepository(Blocks::class);
            //$paginator = $phaseRepo->findAllPaginated(1,300);
            // Get the items from the Paginator
            $blocksItem = $blocksRepo->findBlockWithLotsWithoutCategory($block_id);
            $blocksArray = $this->serializer->serialize($blocksItem, 'json', ['groups' => 'blocks']);
            $this->auditlog->addAuditLog($request, json_encode($blocksArray), 'api/blocks', 'View Blocks');
            return new JsonResponse([
                'message' => 'Blocks retrieved successfully.',
                'blocks' => json_decode($blocksArray)
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return new JsonResponse([
                'error' => 'Failed to retrieve blocks.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
