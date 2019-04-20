<?php



namespace CTRV\CommonBundle\Service;

use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;


class AccessDeniedService  implements AccessDeniedHandlerInterface{
	
	public  function handle(Request $request,
			AccessDeniedException $accessDeniedException) {
	if ($request->isXmlHttpRequest()) {
        $response = new Response(json_encode(array('status' => 'protected')));
        return $response;
    }
    else {
        return new RedirectResponse($this->router->generate('home'));
    }
	}
	
}
