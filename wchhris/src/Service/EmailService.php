<?php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;

class EmailService
{
    private $mailer;
    private $twig;
    private $requestStack;

    public function __construct(RequestStack $requestStack, MailerInterface $mailer, Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->requestStack = $requestStack;
    }

    public function sendPasswordResetEmail($email, $employee, $token): Response
    {
        $baseURL = $this->getBaseUrl();
        $emailContent = (new Email())
            ->from('noreply@example.com')
            ->to($email)
            ->subject('Password Reset Request')
            ->html($this->twig->render('emails/reset_password_link.html.twig', [
                'employee' => $employee,
                'resetUrl' => sprintf('%s/reset_password/%s', $baseURL, $token),
            ]));

        $this->mailer->send($emailContent);

        return new Response('success');
    }

    private function getBaseUrl(): string
    {
        $request = $this->requestStack->getCurrentRequest();

        if (!$request) {
            throw new \RuntimeException('No current request available.');
        }

        return $request->getSchemeAndHttpHost();
    }
}
