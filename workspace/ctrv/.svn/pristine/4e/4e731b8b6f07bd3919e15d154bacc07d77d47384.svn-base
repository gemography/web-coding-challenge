<?php

namespace CTRV\CommonBundle\Controller;

use Doctrine\ORM\EntityRepository;

use Symfony\Component\HttpFoundation\Response;

use CTRV\CommonBundle\Entity\City;

use CTRV\CommonBundle\Entity\ChooseCityEntity;

use CTRV\CommonBundle\Form\ChooseCityType;
use CTRV\CommonBundle\DependencyInjection\Constants;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

class CommonController extends Controller
{
    /**
     * @Route("/",name="home")
     * @Template()
     * ///@Secure(roles="ROLE_USER")
     */
    public function indexAction()
    {
    	
//     	similar_text('1 beis rue Mirepoix', "1 béis rue Mirepoix", $similarity_old);
//     	similar_text($this->stripAccents('1 beis rue Mirepoix'), $this->stripAccents("1 Béis rue Mirepoix"), $similarity);
//     	var_dump($this->stripAccents("1 béis rue Mirepoix"));var_dump($similarity);die;
    	
    	return array();
    	
    }
    
    public function stripAccents($str, $charset='utf-8'){
    	$str = htmlentities($str, ENT_NOQUOTES, $charset);
	    $str = preg_replace('#&([A-za-z])(?:acute|cedil|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
	    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
	    $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères
    
    	return strtolower($str);
    }
    
    
    /**
     * Retourne le formulaire de choix d ville
     * @Template()
     */
    public function renderChooseCityFormAction () {
    	
    	$city = null;
    	if ($this->get('session_service')->getCity() == null) {
    		$city = $this->getDoctrine()->getEntityManager()->getRepository('CTRVCommonBundle:City')->findOneBy(array());
    		$this->get('session_service')->setCity($city);
    	}
    	
    	$form = $this->createForm(new ChooseCityType());
    	return array('form'=>$form->createView());
    }
    
//     /**
//      * Met la ville selectionnée en session
//      * @Route("/session/city",name="city_session")
//      * @param City $city
//      */
//     public function setCitySession () {
//     	$city_id = $this->getRequest()->request->get("city_id");
//     	$this->get('session_service')->setCity($city_id);
//     	return new Response(json_encode(array('result'=>true)));
//     }
    
    /**
     * Met la ville selectionnée en session
     * @Route("/set_city_session",name="set_city_session")
     * @param City $city
     */
    public function citySession () {
    	
    	$form = $this->createForm(new ChooseCityType(), array());
    	 
    	if ($this->getRequest()->getMethod()=="POST") {
    	
    		$form->bindRequest($this->getRequest());
    	
//     		if ($form->isValid()) {
    			$form_data = $form->getData();
    			$city = $form_data['choose_city'];
    			$this->get('session_service')->setCity($city);
    			return $this->redirect($this->getRequest()->headers->get('referer'));
//     		}
    	}
    }
    
    /**
     * Affiche les numeros de page
     * @param unknown_type $nb_pages
     * @param unknown_type $page
     * @param unknown_type $url_path
     */
    public function renderPaginationAction ($nb_pages, $page, $url_path,$href_active) {
    	return $this->render ('CTRVCommonBundle:Common:pagination.html.twig',array(
    			'nb_pages'	=> $nb_pages,
    			'page'		=> $page,
    			'url_path'	=> $url_path,
    			'href_active'	=> $href_active
    	));
    }
    
    
    /**
     * Retourne le formulaire de choix de la ville
     */
    public function getChooseCityForm () {
    	 
    	return $this->createFormBuilder( array())
    	 ->add('choose_city', 'entity', array(
	        		'class' => 'CTRVCommonBundle:City',
	        		'query_builder' => function(EntityRepository $er) {
	        		return $er->createQueryBuilder('u')
	        		->orderBy('u.name', 'ASC');
	        		},
	        		'label'=>'common.chooseCity'
	     ))
    	->getForm()
    	;
    }
    
}
