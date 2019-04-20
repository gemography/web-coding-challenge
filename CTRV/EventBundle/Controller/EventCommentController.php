<?php

namespace CTRV\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use CTRV\CommonBundle\DependencyInjection\Constants;

use Doctrine\ORM\EntityRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CTRV\EventBundle\Entity\EventComment;
use CTRV\EventBundle\Form\EventCommentType;

/**
 * Event controller.
 *
 * @Route("/event")
 */
class EventCommentController extends Controller
{
	/**
     * Charge les commentaires des évenements
     * @Route("/eventComment", name="eventComment")
     * @Template()
     */
    public function loadEventCommentAction () {
    	 
    	$currentCity = $this->get("session_service")->getCity();
		$city = $this->getDoctrine()->getEntityManager()->getRepository('CTRVCommonBundle:City')->find($currentCity->getId());
	
		if ($currentCity == null) {
			$this->get('session')->getFlashBag()->add('error', $this->get('translator')->trans('session.city.not_found'));
			$this->redirect($this->generateUrl("home"));
		}
		
		$page = intval ($this->getRequest()->get("page",1));
		
		//pagination
    	$nb_entities = $eventComments = $this->getDoctrine()->getRepository('CTRVCommonBundle:Comment')->getEventCommentNumber($city);
    	$nb_entities_page = Constants::eventsComment_number_per_page;
    	$nb_pages = ceil($nb_entities/$nb_entities_page);
    	$offset = ($page-1) * $nb_entities_page;
    
    	$eventComments = $this->getDoctrine()->getRepository('CTRVCommonBundle:Comment')->getEventComment($city, $offset, $nb_entities_page);
    
    	return  array (
    			'entities' => $eventComments,
    			'nb_pages' => $nb_pages,
    			'page' => $page,
    			'nb_entities' => $nb_entities
    	);
    }
    /**
     * Charge les commentaires des agendas
     * @Route("/agendaComment", name="agendaComment")
     * @Template()
     */
    public function loadAgendaCommentAction () {
    		
    	$currentCity = $this->get("session_service")->getCity();
		$city = $this->getDoctrine()->getEntityManager()->getRepository('CTRVCommonBundle:City')->find($currentCity->getId());
	
		if ($currentCity == null) {
			$this->get('session')->getFlashBag()->add('error', $this->get('translator')->trans('session.city.not_found'));
			$this->redirect($this->generateUrl("home"));
		}
		
		$page = intval ($this->getRequest()->get("page",1));
		
		//pagination
    	$nb_entities = $agendaComments = $this->getDoctrine()->getRepository('CTRVCommonBundle:Comment')->getAgendaCommentNumber($city);
    	$nb_entities_page = Constants::agendasComment_number_per_page;
    	$nb_pages = ceil($nb_entities/$nb_entities_page);
    	$offset = ($page-1) * $nb_entities_page;
    
    	$agendaComments = $this->getDoctrine()->getRepository('CTRVCommonBundle:Comment')->getAgendaComment($city, $offset, $nb_entities_page);
    
    	return  array (
    			'entities' => $agendaComments,
    			'nb_pages' => $nb_pages,
    			'page' => $page,
    			'nb_entities' => $nb_entities
    	);
    }
    
    
    
}
