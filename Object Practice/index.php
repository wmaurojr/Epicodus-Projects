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

  <ul style='text-align: center; list-style-type: none;'>
        <?php 
            foreach ($cars_matching_price as $car) {

            	$image =$car->getImage();
            	$make = $car->getMake();
            	$price = $car->getPrice();
            	$mileage = $car->getMileage();
            
            	echo "<li><img style='width: 600px; margin: 10px auto;' src='$image'></li>";
                echo "<li'>$make</li>";
                echo "<ul style='text-align: center;>";
                    echo "<li> $$price </li>";
                    echo "<li> Miles: $mileage</li>";
                echo "</ul><br><br>";
            } 
        ?> 
    </ul>

    <div class="container">
        <form action="car.php">
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