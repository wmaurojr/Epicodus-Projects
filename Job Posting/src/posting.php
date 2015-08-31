<?php 

	class Posting {

		private $title;
		private $description;
		private $first_name;
		private $last_name;
		private $email;
		private $phone;

		function __construct($title, $description, $first_name, $last_name, $email, $phone) {

			$this->title = $title;
			$this->description = $description;
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->email = $email;
			$this->phone = $phone;
		}

		function getTitle(){
			return $this->title;
		}

		function getDescription(){
			return $this->description;
		}

		function getFirstName(){
			return $this->first_name;
		}

		function getLastName(){
			return $this->last_name;
		}

		function getEmail(){
			return $this->email;
		}

		function getPhone(){
			return $this->phone;
		}

	}

?>

