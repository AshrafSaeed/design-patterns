<?php

	/**
	 * Image 
	 */
	class ImageHandler
	{
		protected $image;

		public function __construct($image)
		{
			$this->image = $image;
		}

		public function validate()
		{
			// validate the uploaded image	

			return validate($this->image);	
		}

		public function resize()
		{
			// resize the uploaded image

			return $image;
		}

		public function upload()
		{
			# code...
		}
	}