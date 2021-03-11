<?php
namespace Factory\Classes\LinkedIn;

use Factory\SocialNetworkPoster;
use Factory\SocialNetworkInterface;

/**
 * This Concrete Creator supports LinkedIn.
 */
class LinkedInPoster extends SocialNetworkPoster
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkInterface
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}