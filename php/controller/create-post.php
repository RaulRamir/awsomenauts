<html>
<body>
<?php
 	require_once(__DIR__ ."/../model/config.php");//calling the config file out of the folder

    $title = filter_input(INPUT_POST,"title", FILTER_SANITIZE_STRING);#filtering our input to the title
 	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);#filtering the input from post
    $date = new DateTime('today');
    $time = new DateTime('America/Los_Angeles'); 

 	$query = $_SESSION["connection"]->query("INSERT INTO posts SET Title = '$title', post = '$post'");//making it true or false to run on the webpage
 
 	if ($query) {
 	   echo "<p>Successfully inserted post: $title</p>";//echos out the post onto the page
       echo "Posted on: " . $date->format("M/D/Y") . " at " . $time->format("G:i");//shows the datetime on the website
 	} 
 	else {
 		echo "<p>" . $_SESSION["connection"]->error . "</p>";//fixes the connection to not error
	 }
 ?>
</body>
</html>