<?php

namespace Controllers;

use Factory\SocialNetworkPoster;
use Factory\Classes\FaceBook\FacebookPoster;
use Factory\Classes\LinkedIn\LinkedInPoster;

class MobilePhoneController
{

	public static function android() {

	    $creator = new FacebookPoster("john_smith", "******");
	    $creator->post("Hello world!");
	    $creator->post("I had a large hamburger this morning!");

	}

	public static function iphone() {
		
		$creator = new LinkedInPoster("john_smith", "******");
	    $creator->post("Hello world!");
	    $creator->post("I had a large hamburger this morning!");

	}

}