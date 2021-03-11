<?php
namespace Factory;

/**
 * The Product interface declares behaviors of various types of products.
 */
interface SocialNetworkInterface
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}