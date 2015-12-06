<div class="row"><h2><center>Lonely Dad Meetup</center></h2></div>

<div class="row">

<?php
error_reporting(E_ALL & ~E_NOTICE);

	$con = mysqli_connect("localhost","lonelydadmeetup","justdoit");
	if (!$con){ 
		die(errorDisplay('Could not connect: ' . mysqli_error(), '***EXTREME***'));
echo "Error"; 
	}
	mysqli_select_db($con,"lonelydadmeetup.com");

    # Make the query
    $query = 	"INSERT INTO users (username, password, zip, fname, lname) VALUES ('".$_POST["username"]."', '". $_POST["password"] ."', '". $_POST["zipcode"] ."', '".$_POST["fname"]."', '".$_POST["lname"]."')" ;

    # Execute the query
    $results = mysqli_query( $con, $query ) ;


?>
	<div class="large-12 columns">
				<div class="panel">
					<h3>Account Created!</h3>
					<p>You just joined the largest online community for Dads, by Dads.</p>
				</div>
	</div>
</div>
<div>