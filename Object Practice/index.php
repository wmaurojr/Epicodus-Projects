<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Object Practice</title>
    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>

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
	$price = $car->getPrice();
	if ( $price < $_GET['price'] ) {
		array_push($cars_matching_price, $car);
	}
}

?>


  <!-- <ul> -->
        <?php /*
            foreach ($cars as $car) {

            	$image =$car->getImage();
            	$make = $car->getMake();
            	$price = $car->getPrice();
            	$mileage = $car->getMileage();
            
            	echo "<li><img style='width: 600px;' src='$image'></li>";
                echo "<li>$make</li>";
                echo "<ul>";
                    echo "<li> $$price </li>";
                    echo "<li> Miles: $mileage</li>";
                echo "</ul><br><br>";
            } 
       */ ?> 
    <!-- </ul> -->

    <div class="container">
        <form action="index.php">
            <div class="form-group">
                <label for="price">Enter Maximum Price:</label>
                <input id="price" name="price" class="form-control" type="number">
            </div>
            <button type="submit" class="btn-success">Submit</button>
        </form>
    </div>




    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>