<?php 

require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../src/posting.php";
require_once __DIR__."/../src/contact.php";

    $app = new Silex\Application();

    $app->get("/", function() {

    $output = 'Home';

    return $output;

    });

    $app->get("/new_opening", function(){
    	return "
		<!DOCTYPE html>
		<html lang='en'>
		  <head>
		    <meta charset='utf-8'>
		    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
		    <meta name='viewport' content='width=device-width, initial-scale=1'>
		    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		    <title>title</title>
		
		    <!-- Bootstrap -->
		    <link href='css/bootstrap.min.css' rel='stylesheet'>
		
		    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		    <!--[if lt IE 9]>
		      <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
		      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
		    <![endif]-->
		  </head>
		  <body>
		    
		  <div class='container'>
		  	<h1>Job Opening</h1>
		  	<form action='/view_opening'>
		  		<p>Position Details</p>
				<div class='form-group'>
					<label for='title'>Position</label>
					<input id='title' name='title' class='form-control' type='text'>
				</div>
				<div class='form-group'>
					<label for='description'>Describe the position</label>
					<input id='description' name='description' class='form-control' type='textarea'>
				</div>
				<hr>
				<p>Your Information</p>
				<div class='form-group'>
					<label for='name'>First Name</label>
					<input id='first-name' name='first-name' class='form-control' type='text'>
					<label for='name'>Last Name</label>
					<input id='last-name' name='last-name' class='form-control' type='text'>
				</div>
				<div class='form-group'>
					<label for='email'>email</label>
					<input id='email' name='email' class='form-control' type='email'>
				</div>
				<div class='form-group'>
					<label for='email'>Phone</label>
					<input id='phone' name='phone' class='form-control' type='tel'>
				</div>
				<button type='submit' class='btn-success'>Post</button>
		  	</form>
		  </div>  
		  </body>
		</html>";
    });

	$app->get("/view_opening", function(){

		$posting = new Posting($_GET['title'], $_GET['description']);

		$title = $posting->getTitle();
		$description = $posting->getDescription();

		$contact = new Contact($_GET['first-name'], $_GET['last-name'], $_GET['email'], $_GET['phone']);

		$first_name = $contact->getFirstName();
		$last_name = $contact->getLastName();
		$email = $contact->getEmail();
		$phone = $contact->getPhone();

		return "<h1>$title</h1><br><p>$description</p><br><br><h2>Job posted by:</h2><br><h3>$first_name $last_name</h3><br><p>$email</p><br><p>$phone</p>";

	});

    return $app;

?>

