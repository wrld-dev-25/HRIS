<?php

namespace App\Service;

use Doctrine\Instantiator\Exception\ExceptionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;
use InvalidArgumentException;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
//use Predis\Response\ResponseInterface;
use Psr\Http\Message\ResponseInterface;

class APIRequest
{
    //private $baseURL = "http://127.0.0.1:8000/" ;
    // private $baseURL = "https://hris-services.wrldcapitalholdings.com/";
    private $baseURL = "http://127.0.0.1:8000/" ;
    public function apiRequest($method, $apiurl, $jsonBody, $token)
    {
        if (!$method || !$apiurl) {
            throw new InvalidArgumentException("All parameters must not be empty");
        }

        $authorizationToken = 'Bearer ' . $token;
        $httpClient = HttpClient::create();
        $fullUrl = $this->baseURL . $apiurl;

        try {
            $response = $httpClient->request($method, $fullUrl, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => $authorizationToken,
                ],
                'body' => $jsonBody
            ]);

            // Get the response status code
            $statusCode = $response->getStatusCode();

            // Check if the response status code indicates success
            if ($statusCode >= 200 && $statusCode < 300) {
                // Success response, return the response object to convert to array later
                return $response;
            }

            // Handle specific error cases (like 404 or 500) and return a custom error response
            return [
                'error' => true,
                'status' => $statusCode,
                'message' => $response->getContent(false),  // Don't throw an exception, return raw content
            ];

        } catch (ClientExceptionInterface $e) {
            // Handle 4xx errors like 404, 403, etc.
            return [
                'error' => true,
                'status' => $e->getCode(),
                'message' => 'Client error: ' . $e->getMessage(),
            ];

        } catch (ServerExceptionInterface $e) {
            // Handle 5xx errors like 500, 503, etc.
            return [
                'error' => true,
                'status' => $e->getCode(),
                'message' => 'Server error: ' . $e->getMessage(),
            ];

        } catch (TransportExceptionInterface $e) {
            // Handle network issues, DNS resolution failures, etc.
            return [
                'error' => true,
                'status' => 0,  // You can set this to 0 or a custom status for transport errors
                'message' => 'Network error: ' . $e->getMessage(),
            ];

        } catch (\Exception $e) {
            // Catch all other exceptions and return a generic error
            return [
                'error' => true,
                'status' => 0,
                'message' => 'Unexpected error: ' . $e->getMessage(),
            ];
        }
    }
    // public function apiRequest($method, $apiurl, $jsonBody, $token)
    // {
    //     if(!$method || !$apiurl){
    //         throw new InvalidArgumentException("All parameters must not be empty");
    //     }
    //     $authorizationToken = 'Bearer '.$token;
    //     $httpClient = HttpClient::create();
    //     $fullUrl = $this->baseURL.$apiurl;
    //     $response = $httpClient->request($method, $fullUrl,[
    //         'headers' => [
    //             'Content-Type' => 'application/json',
    //             'Authorization' => $authorizationToken,
    //         ],
    //         'body' => $jsonBody
    //     ]);
    //     return $response;
    // }
    // public function apiRequest($method, $apiurl, $jsonBody, $token)
    // {
    //     if (!$method || !$apiurl) {
    //         throw new InvalidArgumentException("All parameters must not be empty");
    //     }

    //     $authorizationToken = 'Bearer ' . $token;
    //     $httpClient = HttpClient::create();
    //     $fullUrl = $this->baseURL . $apiurl;

    //     try {
    //         $response = $httpClient->request($method, $fullUrl, [
    //             'headers' => [
    //                 'Content-Type' => 'application/json',
    //                 'Authorization' => $authorizationToken,
    //             ],
    //             'body' => $jsonBody
    //         ]);

    //         // Check if the response status code indicates success
    //         $statusCode = $response->getStatusCode();
    //         if ($statusCode >= 200 && $statusCode < 300) {
    //             // Success response
    //             return $response;
    //         } else {
    //             // Error response: return empty value
    //             return [];  // Return an empty array or another appropriate value
    //         }
    //     } catch (ExceptionInterface $e) {
    //         // Handle exception and return empty value
    //         return [];  // Return an empty array or another appropriate value
    //     }
    // }

    // private function createEmptyResponse(): ResponseInterface
    // {
    //     // Create a ResponseInterface stub with empty content
    //     return new class implements ResponseInterface {
    //         public function getStatusCode(): int
    //         {
    //             return 0; // Default status code for empty response
    //         }

    //         public function getHeaders(bool $throw = true): array
    //         {
    //             return [];
    //         }

    //         public function getContent(bool $throw = true): string
    //         {
    //             return ''; // Default empty content
    //         }

    //         public function toArray(bool $throw = true): array
    //         {
    //             return []; // Default empty array
    //         }

    //         public function cancel(): void
    //         {
    //             // No-op
    //         }

    //         // Add any additional methods required by ResponseInterface
    //         public function getInfo(string $type = null)
    //         {
    //             return null;
    //         }
    //     };
    // }
}
