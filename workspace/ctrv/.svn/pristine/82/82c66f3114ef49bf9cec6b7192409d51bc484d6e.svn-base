<?php

namespace CTRV\PlaceBundle\Entity;

use CTRV\CommonBundle\DependencyInjection\Constants;
use Symfony\Component\Validator\Constraints as Assert;

class ImportPlace {

	
	//////@Assert\File( maxSize = "20000048",mimeTypes={"application/vnd.ms-excel","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application/pdf", "image/jpeg", "image/png", "image/jpg", "image/jpeg", "application/msword", "application/zip"},mimeTypesMessage="place.import.form.file_format" )
	/**
	 * 
	 * @var File()::
	 */
	public $file;
	
	/**
	 * @var string
	 */
	public $placeType;
	
	
	public function getCity()
	{
		return $this->city;
	}
	
	public function getUploadRootDir()
	{
		return __DIR__.'/../../../../web/'.$this->getUploadDir();
	}
	
	public 	function getUploadDir()
	{
		return  Constants::IMPORT_FILE_PATH;
	}
	

}
