<?php

namespace App\Service;

use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class APIRequest
{
    // public string $baseURL = "https://hris-services.wrldcapitalholdings.com/";
    public string $baseURL = "http://127.0.0.1:8000/";

    public function __construct(private LoggerInterface $logger) {}

    /**
     * @param string                $method (GET|POST|PUT|PATCH|DELETE)
     * @param string                $apiurl e.g. 'api/timesheet'
     * @param array|string|null     $jsonBody (array or json string)
     * @param string|null           $token
     * @return ResponseInterface|array
     */
    public function apiRequest(string $method, string $apiurl, array|string|null $jsonBody, ?string $token)
    {
        if (!$method || !$apiurl) {
            throw new InvalidArgumentException("All parameters must not be empty");
        }

        $method     = strtoupper($method);
        $httpClient = HttpClient::create();
        $fullUrl    = rtrim($this->baseURL, '/') . '/' . ltrim($apiurl, '/');

        // normalize payload to array
        $payloadArray = [];
        if (is_array($jsonBody)) {
            $payloadArray = $jsonBody;
        } elseif (is_string($jsonBody) && $jsonBody !== '') {
            $decoded = json_decode($jsonBody, true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                $payloadArray = $decoded;
            }
        }

        // headers
        $headers = ['Accept' => 'application/json'];
        if (!empty($token)) {
            $headers['Authorization'] = 'Bearer ' . $token;
        }

        // options
        $options = [
            'headers' => $headers,
            'timeout' => 45,
        ];

        /**
         * IMPORTANT:
         * Some of your endpoints accept GET **with JSON body**.
         * To satisfy both styles, we send BOTH query and json when method === GET.
         */
        if ($method === 'GET') {
            if (!empty($payloadArray)) {
                $options['query'] = $payloadArray; // URL params
                $options['json']  = $payloadArray; // JSON body (for APIs expecting body on GET)
            }
        } else {
            if (!empty($payloadArray)) {
                $options['json'] = $payloadArray;
            } elseif (is_string($jsonBody) && $jsonBody !== '') {
                $options['headers']['Content-Type'] = 'application/json';
                $options['body'] = $jsonBody;
            }
        }

        $this->logger->debug('APIRequest starting', [
            'method' => $method,
            'url'    => $fullUrl,
            'query'  => $options['query'] ?? null,
            'json'   => $options['json'] ?? null,
        ]);

        try {
            $response   = $httpClient->request($method, $fullUrl, $options);
            $statusCode = $response->getStatusCode();

            if ($statusCode >= 200 && $statusCode < 300) {
                return $response;
            }

            return [
                'error'   => true,
                'status'  => $statusCode,
                'message' => $response->getContent(false),
            ];
        } catch (ClientExceptionInterface $e) {
            return ['error' => true, 'status' => $e->getCode(), 'message' => 'Client error: ' . $e->getMessage()];
        } catch (ServerExceptionInterface $e) {
            return ['error' => true, 'status' => $e->getCode(), 'message' => 'Server error: ' . $e->getMessage()];
        } catch (TransportExceptionInterface $e) {
            return ['error' => true, 'status' => 0, 'message' => 'Network error: ' . $e->getMessage()];
        } catch (\Exception $e) {
            return ['error' => true, 'status' => 0, 'message' => 'Unexpected error: ' . $e->getMessage()];
        }
    }
}
