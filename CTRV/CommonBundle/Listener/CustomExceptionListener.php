<?php 

namespace CTRV\CommonBundle\Listener;


use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class CustomExceptionListener
{
	
	
	public function onKernelException(GetResponseForExceptionEvent $event)
	{
		// nous récupérons l'objet exception depuis l'évènement reçu
		$exception = $event->getException();
		$message = 'Error : ' . $exception->getMessage() . ' --- Ccode: ' . $exception->getCode();

		// personnalise notre objet réponse pour afficher les détails de notre exception
		$response = new Response();
		$response->setContent($message);

		// HttpExceptionInterface est un type d'exception spécial qui
		// contient le code statut et les détails de l'entête
		if ($exception instanceof HttpExceptionInterface) {
			$response->setStatusCode($exception->getStatusCode());
			$response->headers->replace($exception->getHeaders());
		} else {
			$response->setStatusCode(500);
		}

		// envoie notre objet réponse modifié à l'évènement
		$event->setResponse($response);
	}
}