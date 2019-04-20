<?php

namespace CTRV\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CTRVUserBundle extends Bundle
{
	public function getParent(){
		return 'FOSUserBundle';
	}
}
