<?php

// General singleton class.
class Singleton {
  	// Hold the class instance.
  	private static $instance = null;
  
  	// The constructor is private
  	// to prevent initiation with outer code.
  	private function __construct()
  	{
    	// The expensive process (e.g.,db connection) goes here.
  	}
 
  	// The object is created from within the class itself
  	// only if the class has no instance.
  	public static function getInstance()
  	{
    	if (self::$instance == null)
    	{
    	  	self::$instance = new Singleton();
    	}	
 
    	return self::$instance;
  	}
}


// All the variables point to the same object.
$object1 = Singleton::getInstance();

print_r($object1);

$object2 = Singleton::getInstance();

print_r($object2);

$object3 = Singleton::getInstance();

print_r($object3);
