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
 	function __construct($make_model, $price, $miles, $photo) {

		$this->make = $make_model;
		$this->price = $price;
		$this->mileage = $miles;
		$this->image = $photo;

	}
}

$murena = new Car('1983 Matra Murena', 9000, 129000, 'img/matra-murena.jpg' );
$rancho = new Car('1977 Matra Rancho', 14500, 179000, 'img/matra-rancho.jpg' );
$bagheera = new Car('1979 Matra Bagheera', 19000, 68000, 'img/matra-bagheera.jpg' );

$cars = array($murena, $rancho, $bagheera); ?>

  <ul>
        <?php 
            foreach ($cars as $car) {
            	echo "<li><img style='width: 600px;' src='$car->image'></li>";
                echo "<li> $car->make</li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->mileage</li>";
                echo "</ul><br><br>";
            }
        ?>
    </ul>




    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>