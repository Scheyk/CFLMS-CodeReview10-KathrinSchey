<?php
	include_once 'db_connect.php';

	$title = $_POST["title"];
	$img = $_POST["img"];
	$author = $_POST["author"];
	$isbn = $_POST["isbn"];
	$description = $_POST["short_description"];
	$pub_date = $_POST["publish_date"];
	$publisher = $_POST["publisher"];
	$type = $_POST["type"];

	$sql = "INSERT INTO `media`(`title`, `img`, `author`, `isbn`, `short_description`, `publish_date`, `publisher`, `type`)
			VALUES ('$title','$img','$author','$isbn','$description','$pub_date','$publisher','$type')";

		if(mysqli_query($conn,$sql)) {
			echo "success <br>
				  <a href='../index.php'>übersicht media</a>";
		} else {
			echo "some goes wrong" .$conn->error;
		}
?>