<?php

	
	include("db.php");

	if (isset($_POST['done'])) {

		$name = mysqli_escape_string($_POST['username']);
		$comment = mysqli_escape_string($_POST['comment_text']);

		$qry="INSERT INTO `comments` (`name`, `comment`) VALUES ('$name', '$comment')";
		$run = mysqli_query($con,$qry);
		if (mysqli_num_rows($run) <1) {
			
			alert("this is not ok");
		}
		
	}


?>