<?php 

require_once 'autoload.php';

/**
 * The client code can work with any subclass of SocialNetworkPoster since it
 * doesn't depend on concrete classes.
 */

use Factory\SocialNetworkPoster;
use Factory\Classes\FaceBook\FacebookPoster;
use Factory\Classes\LinkedIn\LinkedInPoster;

function clientCode(SocialNetworkPoster $creator)
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing ConcreteCreator1:<br/>";
clientCode(new FacebookPoster("john_smith", "******"));
echo "<br/>";

echo "Testing ConcreteCreator2:<br/>";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));