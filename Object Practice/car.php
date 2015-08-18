<?php 
	
class Car 
{

// Declare Variables
	private $make;
	private $price;
	private $mileage;
	private $image;

// Constructor Method
 	function __construct($make_model, $price = 9000, $miles = 50000, $photo = 'img/matra-murena.jpg' ) {

		$this->make = $make_model;
		$this->price = $price;
		$this->mileage = $miles;
		$this->image = $photo;

	}
// Setters
	function setPrice($new_price) {
		$float_price = (float) $new_price;
		if ($float_price != 0) {
			$formatted_price = number_format($float_price, 2);
			$this->price = $formatted_price;
		}
	}

	function setMake($new_make) {
		$this->make = (string) $new_make;
	}

	function setMileage($new_mileage) {
		$float_mileage = (float) $new_mileage;
		if ($float_mileage != 0) {
			$formatted_mileage = number_format($float_mileage, 0);
			$this->mileage = $formatted_mileage;
		}
	}

	function setImage($new_image) {
		$this->image = (string) $new_image;
	}

// Getters
	function getPrice() {
		return $this->price;
	}

	function getMake() {
		return $this->make;
	}

	function getMileage() {
		return $this->mileage;
	}

	function getImage() {
		return $this->image;
	}
}


$murena = new Car('1983 Matra Murena', 9000, 129000, 'img/matra-murena.jpg' );
$rancho = new Car('1977 Matra Rancho', 14500, 179000, 'img/matra-rancho.jpg' );
$bagheera = new Car('1979 Matra Bagheera', 19000, 68000, 'img/matra-bagheera.jpg' );
$bagheera->setPrice(24000.8799468464);



$cars = array($murena, $rancho, $bagheera); 

$cars_matching_price = array();

foreach ($cars as $car) {
	$salePrice = $car->getPrice();
	if ( $salePrice < $_GET['price'] ) {
		array_push($cars_matching_price, $car);
	}
}

?>