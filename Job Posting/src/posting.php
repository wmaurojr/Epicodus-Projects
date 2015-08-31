<?php 

	class Posting {

		private $title;
		private $description;

		function __construct($title, $description) {

			$this->title = $title;
			$this->description = $description;
		}

		function getTitle(){
			return $this->title;
		}

		function getDescription(){
			return $this->description;
		}

	}

?>

