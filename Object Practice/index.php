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
	public $make_model;
	public $price;
	public $miles;
}

$murena = new Car();
$murena->make_model = '1983 Matra Murena';
$murena->price = 9000;
$murena->miles = 129000;

$rancho = new Car();
$rancho->make_model = '1977 Matra Rancho';
$rancho->price = 14500;
$rancho->miles = 179000;

$bagheera = new Car();
$bagheera->make_model = '1979 Matra Bagheera';
$bagheera->price = 19900;
$bagheera->miles = 68000;

$cars = array($murena, $rancho, $bagheera);

?>

	<ul>
		<?php 
			foreach ($cars as $car) {
				echo "<li> $car->make_model</li>";
				echo "<ul>";
					echo "<li> $$car->price </li>";
					echo " <li> Miles: $car->miles </li> ";
				echo "</ul>";	
			}			
		?>
	</ul>


    


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>