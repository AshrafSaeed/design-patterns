<?php

	/**
	 * Image 
	 */
	class ImageHandler
	{

		/**
     		* @var string $image
     	*/
		protected $image;

		/**
         	* Class constructor.
        	*
        */

		public function __construct($image)
		{
			$this->image = $image;
		}

		/**
         * validate image.
         *
         * @param string $owner The deposit owner name.
         */

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