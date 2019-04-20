<?php

namespace CTRV\PlaceBundle\Service;

use Doctrine\ORM\Query\AST\Functions\UpperFunction;

use CTRV\CommonBundle\DependencyInjection\Constants;

use CTRV\PlaceBundle\Entity\Place;

use CTRV\CommonBundle\Entity\Abuse;

use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\DependencyInjection\ContainerInterface;


class PlaceService {
	
	protected $mailer;
	protected $doctrine;
	protected $em;
	protected $service_container;
	protected $templating;
	
	
	public function __construct(\Swift_Mailer $mailer,RegistryInterface $doctrine, ContainerInterface $service_container, TwigEngine $templating,TranslatorInterface $translator) {
		
		$this->mailer = $mailer;
		$this->doctrine = $doctrine;
		$this->em = $doctrine->getEntityManager();
		$this->service_container = $service_container;
		$this->templating = $templating;
		$this->translator = $translator;
	}
	
	/**
	 * Retourne la liste des places ajoutés par les utilisateurs
	 * @param unknown_type $placeTypeId
	 * @param unknown_type $currentCity
	 */
	public function getPlaceAddedByUsers ($placeTypeId, $currentCity) {
		$entities = $this->em->getRepository('CTRVPlaceBundle:Place')
			->getPlaceAddedByUsers($this->em->getRepository('CTRVPlaceBundle:PlaceType')->find($placeTypeId),
				$this->em->getRepository('CTRVCommonBundle:City')->find($currentCity->getId()));
		return $entities;
	}

	/**
	 * Retourne la liste des places sans latitude ou longitude
	 * @param unknown_type $currentCity
	 */
	public function getPlacesWithoutLatLong ($currentCity, $first, $last) {
		$entities = $this->em->getRepository('CTRVPlaceBundle:Place')
		->getPlacesWithoutLatLong($currentCity->getId(), $first, $last);
		return $entities;
	}

	/**
	 * Retourne la liste des places sans description
	 * @param unknown_type $currentCity
	 */
	public function getPlacesWithoutDescription ($currentCity, $first, $last) {
		$entities = $this->em->getRepository('CTRVPlaceBundle:Place')
		->getPlacesWithoutDescription($currentCity->getId(), $first, $last);
		return $entities;
	}

	/**
	 * Retourne la liste des types de places
	 * @return unknown
	 */ 
	public function getTypePlaces() {
		$entities = $this->em->getRepository('CTRVPlaceBundle:PlaceType')->getTypePlaces();
		return $entities;
	
	}
	
	/**
	 * Sauvegarde les données de place du fichier excel d'input dans la bdd apres récupération de la latitude et longitude
	 * @param unknown_type $p_file
	 * @param unknown_type $p_city
	 * @param unknown_type $p_place_type
	 */
	public function savePlaceDataFromFile ($p_file, $p_city, $p_place_type) {

		$placeAleradyExistNumber = 0;
		$placesNumber=0;
		$added=0;
		
		//$object = new \PHPExcel_Reader_Excel2007();$object->
		$objet = \PHPExcel_IOFactory::createReaderForFile($p_file);
		$excel = $objet->load($p_file);
		/* @var $excel \PHPExcel */
		$sheet = $excel->getActiveSheet();
		
		foreach ($sheet->getRowIterator(2) as $row) { //on commence à lire à partir de la ligne 2
			
			$placesNumber++;
			
			$cellIterator = $row->getCellIterator();
			// This loops all cells, even if it is not set By default, only cells that are set will be iterated.
			$cellIterator->setIterateOnlyExistingCells(false);

			$tel2 = null; $tel = null; $fax = null; $siteUrl = null; $title = null; $activity = null; $street = null;	$town = null;
			
			//parcours des colonnes du fichier excel
			foreach ($cellIterator as $cell) { /* @var $cell \PHPExcel_Cell */
// 				$line = intval($cell->getRow());

				$column = $cell->getColumn();
				if ($column == "A") {
					$title = $cell->getValue();
				} else if ($column == "B") {
					$activity = $cell->getValue();
				} else if ($column == "C") {
					$street = $this->traitAddress($cell->getValue());
				} else if ($column == "E") {
					$town = $cell->getValue();
				} else if ($column == "F") {
					$tel = $cell->getValue();
				} else if ($column == "G") {
					$tel2 = $cell->getValue();
				} else if ($column == "H") {
					$fax = $cell->getValue();
				} else if ($column == "K") {
					$siteUrl = $cell->getValue();
				}
			}
			
			//on cree la place
			$placeType = $this->em->getRepository("CTRVPlaceBundle:PlaceType")->find($p_place_type->getId());
			$place = new Place();
			$place->setActivity($activity);
			$place->setTitle($title);
			$place->setStreet($street);
			$place->setTown($town);
			$place->setTel($tel);
			$place->setTel2($tel2);
			$place->setFax($fax);
			$place->setSiteUrl($siteUrl);
			$place->setCity($this->em->getRepository("CTRVCommonBundle:City")->find($p_city->getId()));
			$place->setPlaceType($placeType);
			
			//on récupere les places situées à la même adresse
			$placesTemp = $this->em->getRepository("CTRVPlaceBundle:Place")->findBy(array("placeType"=>$placeType/*,"title"=>$title*/,"street"=>$street,"town"=>$town));
			
			//si aucune place n'existe à cette adresse on l'ajoute
			if (count($placesTemp) == 0) { 
				
				$this->em->persist($place);
				$added++;
				
			} else { // il existe des places de même type à cette adresse
				
				//on vérifie si ces places ont un titre similaire
				$hasSimilar = false;
				foreach ($placesTemp as $placeItem) {
					
					$title1 = $this->stripAccents($place->getTitle());
					$title2 = $this->stripAccents($placeItem->getTitle());
					$similarity = 0;
					
					if ($title1==$title2)
						$similarity = 100;
					else
						similar_text($title1, $title2, $similarity);
					
					if ($similarity > 65) {
						$hasSimilar = true;
						break;
					}
				}
				
				//s'il y a des place similaires
				if($hasSimilar) {
					$placeAleradyExistNumber++;
				
				} else {
					$this->em->persist($place);
					$added++;
				}
					
			}
			
		}
		
		$this->em->flush();
		
		return array('added'=>$added,'already'=>$placeAleradyExistNumber,'latLngFound'=>0,'all'=>$placesNumber);
	}
	
	/**
	 * Lance le calcul de latitude longitude de tous les places importées à partir de leur adresse
	 */
	public function calculateLatLng ($city) {
		
		$traitedPlaceNumber = 0;
		$totalPlaceNumber = 0;
		$placeRepo = $this->em->getRepository("CTRVPlaceBundle:Place"); /* @var $placeRepo \Doctrine\ORM\EntityManager */
		
		//liste des places dont on ne connait pas la latitude et la longitude
		$places = $placeRepo->findBy(array("longitude"=>null, "latitude"=>null),array("id"=>"DESC"));
		$totalPlaceNumber = count($places);
		$maxRequestReached = false;
		$maxRequestReachedOpenStreet = false;
		
		foreach ($places as $place) {

			$array = null;
			
			$addres = $place->getStreet().' '.$place->getTown();
			$addres = utf8_encode($addres);

			if (!$maxRequestReached) { //tant qu'on a pas atteint le nombre limite de requetes google 
				
				$array = $this->lookupGoogleMap($addres);
				
				if ($array['status'] == 'OVER_QUERY_LIMIT') { //si on ateint le nombre max de requete => open street
					
					$array = null;
					$maxRequestReached = true;
					
					if (!$maxRequestReachedOpenStreet) {
						$array = $this->lookupOpenStreetMap($addres);
					}
					
					if ($array!=null) {
						$this->updateLatLng($place, $array);
						$traitedPlaceNumber++;
					} else {
// 						$maxRequestReachedOpenStreet = true;
					}
					
				} else if ($array['status'] == 'OK') {
					
					$this->updateLatLng($place, $array);
					$traitedPlaceNumber++;
				
				} else if ($array['status'] == 'INVALID_REQUEST' || $array['status']='ZERO_RESULTS') {
					
					//on passe à la place suivante
// 					$maxRequestReached = true;
					
				} else {
					
					$array = null;
					if (!$maxRequestReachedOpenStreet) {
						$array = $this->lookupOpenStreetMap($addres);
					}
					
					if ($array!=null) {
						$this->updateLatLng($place, $array);
						$traitedPlaceNumber++;
					} else {
// 						$maxRequestReachedOpenStreet = true;
					}
				}
				
// 				$this->trace($array, $addres);
				
			} else { //si on atteint le nombre de requetes google max
				
				if (!$maxRequestReachedOpenStreet) {
					$array = $this->lookupOpenStreetMap($addres);
				}
				
				if ($array!=null) {
					$this->updateLatLng($place, $array);
					$traitedPlaceNumber++;
				} else {
// 					$maxRequestReachedOpenStreet = true;
				}
				
// 				$this->trace($array,$addres);
			} 
			
			// si on n'a pas atteint le nombre de requetes max
			if (!$maxRequestReached || !$maxRequestReachedOpenStreet) {
				//sleep(1);//pour ne pas enchainer les requêtes sur un intervalle trop réduit
			} else {
				//break;
				
			}
// 			$this->em->persist($place);
// 			$this->em->flush();//pour ne pas perdre les lat lng deja trouve
		}
		
		return array($traitedPlaceNumber,$totalPlaceNumber);
	}
	
	public function trace ($array,$address,$saved=false) {
		
		$myFile = "logPlace.txt";
		$fh = fopen($myFile, 'a');
		
		if ($array!=null && $array['status']!='INVALID_REQUEST' && isset($array['latitude']) && isset($array['longitude']) ) {
// 			var_dump($array);die;
			fwrite($fh, "SAVED-".$array['status'].'-'.$array['latitude'].'-'.$array['longitude']."-".$address."-".PHP_EOL);
		} else {
			fwrite ($fh, "Null-".$array['status']."-".$address.PHP_EOL);
		}
	}
	
	/**
	 * Persist une place si une autre place ne se trouve pas déjà aux mêmes coordonnees
	 * @param unknown_type $place
	 * @param unknown_type $array
	 * @return false si la place existe dejà aux coordonnées passées en parametre
	 */
	public function updateLatLng ($place, $array) {
		
		$result = false;
		
		if ($array!=null && $place!=null) {
		
				$result = true;
				$place->setLatitude($array['latitude']);
				$place->setLongitude($array['longitude']);
				$this->em->persist($place);
				$this->em->flush();
		}
		
		return $result;
	}
	
	/**
	 * 
	 * @param unknown_type $address
	 */
	public function lookupGoogleMap ($address) {
		
		$result = null;
		
		$address = strtr($address,'@ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','aAAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
		$address = str_replace (" ", "+", urlencode($address));
		
		$details_url = Constants::GOOGLE_MAP_API_URL.$address."&sensor=false";//google map API
// 		var_dump($details_url);
		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL, $details_url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = json_decode(curl_exec($ch), true);
	
		// If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST
		if ($response['status'] != 'OK') {
			$result = array (
					'status' => $response['status'],
			);
			
		} else {
			 
			$geometry = $response['results'][0]['geometry'];
	
			$longitude = $geometry['location']['lat'];
			$latitude = $geometry['location']['lng'];
	
			$result = array (
					'status' => $response['status'],
					'longitude' => $geometry['location']['lng'],
					'latitude' => $geometry['location']['lat'],
					'location_type' => $geometry['location_type'],
			);
		}
// 		var_dump($result);die;
		return $result;
	}
	
	/**
	 * Retourne la latitude et la longitude à partir de 
	 * @param unknown_type $address
	 * @return Ambigous <NULL, multitype:string NULL >
	 */
	public function lookupOpenStreetMap ($address) {
	
		$result = null;
// 		$address = htmlentities($address,ENT_NOQUOTES,"UTF-8");
// 		$address = htmlspecialchars_decode($address);
		 
		$address = strtr($address,'@ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','aAAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
		$address = str_replace (" ", "+", urlencode($address));

		$details_url = Constants::OPEN_STREET_API_URL.$address."&format=json";//open street API
// 		var_dump(">>>>>".$details_url);
		
		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL, $details_url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = json_decode(curl_exec($ch), true);

		if ($response != null) {
			$result = array (
					'status' => 'OK',
					'longitude' => $response[0]['lon'],
					'latitude' => $response[0]['lat']
			);
	
		} else {
			$result = null;
		}
	
		return $result;
	}
	
	/**
	 * Remplace les abbreviation du champs adresse du fichier excel par le mot complet
	 * @param unknown_type $street
	 */
	public function traitAddress ($street) {
		
		$street = preg_replace("/\bav\b/", "avenue", $street);
		$street = preg_replace("/\br\b/", "rue", $street);
		$street = preg_replace("/\brte\b/", "route", $street);
		$street = preg_replace("/\bpl\b/", "place", $street);
		$street = preg_replace("/\bchem\b/", "chemin", $street);
		$street = preg_replace("/\bimp\b/", "impasse", $street);
		$street = preg_replace("/\bbd\b/", "boulevard", $street);
		$street = preg_replace("/\bqu\b/", "quai", $street);

		if (preg_match("/Ctre Ccial/", $street)) {
			$street = preg_replace("/\bCtre\b/", "", $street);
		}
		
		$street = preg_replace("/\bctre\b/", "centre", $street);
		$street = preg_replace("/\bCcial\b/", "centre commercial", $street);
		$street = preg_replace("/\bcial\b/", "commercial", $street);
		$street = preg_replace("/\ball\b/", "allee", $street);
		
		return $street;
	}
	
	/**
	 * Enleve les accents et convertit la chaine passée en minuscule
	 * @param unknown_type $str
	 * @param unknown_type $charset
	 */
 	public function stripAccents($str, $charset='utf-8'){
    	$str = htmlentities($str, ENT_NOQUOTES, $charset);
	    $str = preg_replace('#&([A-za-z])(?:acute|cedil|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
	    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
	    $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères
    
    	return strtolower($str);
    }
	
	
	public function deleteDoublePlaces ($p_city) {
		
		$taux_title = 65;
		$taux_address = 98;
		
		$groups = array();
		$to_ignore = array();//liste des places sans similaires
		
// 		$places = $this->em->getRepository("CTRVPlaceBundle:Place")->getLocalizedPlacesByCity($p_city);
		
		//1 7
		$placeType = $this->em->getRepository("CTRVPlaceBundle:PlaceType")->find(1);
		$places = $this->em->getRepository("CTRVPlaceBundle:Place")->getLocalizedPlacesByCityAndPlaceType($p_city,$placeType);
		$places = array_slice($places, 1501,2000);
		$places2 = $this->em->getRepository("CTRVPlaceBundle:Place")->getLocalizedPlacesByCityAndPlaceType($p_city,$placeType);
		
		$cpt = 0;
		foreach ($places as $place) {
			
// 			if ($cpt == 100)
// 				break;
			
			$address = $this->stripAccents($place->getStreet());
			$title = $this->stripAccents($place->getTitle());
			$found = false;
		
			foreach ($places2 as $place2) {
		
				$similarity_address = 0;
				$similarity_title = 0;
		
				//on ne traire pas la même place && et la place n'est pas à ignorer () && 
				if ($place->getPlaceType()==$place2->getPlaceType() && $place->getId() != $place2->getId() && !in_array($place2, $to_ignore) && $place->getTown()==$place2->getTown()) {
					
					$address2 = $this->stripAccents($place2->getStreet());
					$title2 = $this->stripAccents($place2->getTitle());
					
					if ($address==$address2)
						$similarity_address = 100;
					else
						similar_text($address, $address2, $similarity_address);
					
					if ($title==$title2)
						$similarity_title = 100;
					else
						similar_text($title, $title2, $similarity_title);
						
					//sont similaire 
					if ( $similarity_address >= $taux_address && $similarity_title >= $taux_title) {
						$cpt++;
						
						$found = true;//il ya une place similaire
		
						//si le groupe existe deja
						if (isset ($groups[$place2->getId()]) && !in_array($place, $groups[$place2->getId()]) ) {
							array_push($groups[$place2->getId()],$place);
							if(($key = array_search($place, $places)) !== false) {
								unset($places[$key]);
							}
								
						} else {
								
							if (!isset ($groups[$place->getId()])) {
								$groups[$place->getId()] = array();
								array_push($groups[$place->getId()],$place);
								if(($key = array_search($place, $places)) !== false) {
									unset($places[$key]);
								}
							}
								
							array_push($groups[$place->getId()],$place2);
							if(($key = array_search($place2, $places)) !== false) {
								unset($places[$key]);
							}
						}
					}
				}
			}
		
			if (!$found) { //si aucune place ne lui est similaire on arrete de traiter cette place
				array_push($to_ignore, $place);
				if(($key = array_search($place, $places)) !== false) {
					unset($places[$key]);
				}
			} 
		}
		
		//suppression des doublons
		
		foreach ($groups as $group) {
			
			$hasSamePlaceType = true;
			
			//si le groupe comporte des places
			if (count($group)>0) {
				
				$placeType = $group[0]->getPlaceType();
				
				//on verifie que tous les éléments sont de même type de place
				foreach ($group as $place) {
					
					if($placeType != $place->getPlaceType()) {
						$hasSamePlaceType = false;
						break;
					
					} 
				}
			}
			
			//si tous les elements sont de même type ==> on en garde un seul et on supprime les autres
			if ($hasSamePlaceType) {
				
				if (count($group)>1) {
					
					//on garde le premier
					unset ($group[0]);
					
					//on supprime les autres
					foreach ($group as $place) {
						$this->em->remove($place);
					}
				}
			}
		}
		
		$this->em->flush();
		
		return $groups;
	}


}
