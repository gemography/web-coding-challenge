<?php

namespace CTRV\PlaceBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use CTRV\PlaceBundle\Form\ChoosePlaceTypeType;

use CTRV\CommonBundle\DependencyInjection\Constants;

use Doctrine\ORM\EntityRepository;

use CTRV\PlaceBundle\Form\ChoosePlaceTypeForm;

use CTRV\PlaceBundle\Form\ImportPlaceType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CTRV\PlaceBundle\Entity\Place;
use CTRV\PlaceBundle\Entity\ImportPlace;
use CTRV\PlaceBundle\Form\PlaceType;

/**
 * PlaceComment controller.
 *
 * @Route("/placeComment")
 */
class PlaceCommentController extends Controller
{
	

	/**
	 * Charge les commentaires des places
	 * @Route("/placeComment", name="placeComment")
	 * @Template()
	 */
	public function loadPlaceCommentAction () {
	
		$currentCity = $this->get("session_service")->getCity();
		$city = $this->getDoctrine()->getEntityManager()->getRepository('CTRVCommonBundle:City')->find($currentCity->getId());
	
		if ($currentCity == null) {
			$this->get('session')->getFlashBag()->add('error', $this->get('translator')->trans('session.city.not_found'));
			$this->redirect($this->generateUrl("home"));
		}
		
		$page = intval ($this->getRequest()->get("page",1));
		
		//pagination
		$nb_entities = $placeComments = $this->getDoctrine()->getRepository('CTRVCommonBundle:Comment')->getPlaceCommentNumber($city);
		$nb_entities_page = Constants::agendasComment_number_per_page;
		$nb_pages = ceil($nb_entities/$nb_entities_page);
		$offset = ($page-1) * $nb_entities_page;
		
		$placeComments = $this->getDoctrine()->getRepository('CTRVCommonBundle:Comment')->getPlaceComment($city, $offset, $nb_entities_page);
	
		return  array (
				'entities' => $placeComments,
				'nb_pages' => $nb_pages,
				'page' => $page,
				'nb_entities' => $nb_entities
		);
	}
	
    
}
