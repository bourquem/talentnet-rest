<?php
 
namespace AppBundle\Controller;
 
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
 
class UserController extends FOSRestController
{
    /**
     * @Rest\Get("/users")
     */
    public function getUsersAction(Request $request)
    {
        //$data = ['getUsersAction' => 'not implemented yet'];
        //$view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        $data = ...; //get data, in this case list of users;
	$view = $this->view($data, 200)
	    ->setTemplate("MyBundle:Users:getUsers.html.twig")
	    ->setTemplateVar('users')
	;

	//return $view;
	return $this->handleView($view);
 
    }

    public function redirectAction()
    {
        $view = $this->redirectView($this->generateUrl('some_route'), 301);
        // or
        $view = $this->routeRedirectView('some_route', array(), 301);

	return $this->handleView($view);
    }
 
    /**
     * @Rest\Get("/users/{userId}")
     */
    public function getUsersByIdAction(Request $request)
    {
        $userId = $request->get('userId');
        $data = ['getUsersByIdAction' => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    }
 
    /**
     * @Rest\Post("/users")
     */
    public function postUsersAction(Request $request)
    {
        $data = ['postUsersAction' => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    }
 
    /**
     * @Rest\Put("/users/{userId}")
     */
    public function putUsersByIdAction(Request $request)
    {
        $userId = $request->get('userId');
        $data = ['putUsersByIdAction' => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    }
 
    /**
     * @Rest\Delete("/users/{userId}")
     */
    public function deleteUsersByIdAction(Request $request)
    {
        $userId = $request->get('userId');
        $data = ['deleteUsersByIdAction' => 'not implemented yet'];
        $view = $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
        return $view;
    }
 
}
