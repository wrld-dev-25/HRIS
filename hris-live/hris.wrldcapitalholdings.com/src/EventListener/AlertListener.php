<?php
// src/EventListener/NotificationListener.php
namespace App\EventListener;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Twig\Environment as Twig;

class AlertListener
{
    private RequestStack $requestStack;
    private Twig $twig;

    public function __construct(RequestStack $requestStack, Twig $twig)
    {
        $this->requestStack = $requestStack;
        $this->twig = $twig;
    }

    public function onKernelResponse(ResponseEvent $event)
    {
        $response = $event->getResponse();
        $statusCode = $response->getStatusCode();

        $request = $this->requestStack->getCurrentRequest();
        $message = $request->query->get('message') ?? '';
        $statusCode = $request->query->get('status');

        $errorScript = '';
        if ($statusCode >= 200 && $statusCode < 300) {
            // Success toast
            $errorScript = "<script>showToast('Action completed successfully.', 'bg-green-500');</script>";
        } elseif ($statusCode >= 300) {
            // Escape the message to handle special characters
            $escapedMessage = json_encode($message);
            $errorScript = "<script>showToast({$escapedMessage}, 'bg-red-500');</script>";
        }

        // Inject the script into the response content (assuming a Twig template)
        $content = $response->getContent();
        $content = str_replace('</body>', $errorScript . '</body>', $content);
        $response->setContent($content);
    }
}
