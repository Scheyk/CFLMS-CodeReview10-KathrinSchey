<?php
	include_once 'db_connect.php';

	$id = $_POST["id"];
	$title = $_POST["title"];
	$img = $_POST["img"];
	$author = $_POST["author"];
	$isbn = $_POST["isbn"];
	$description = $_POST["short_description"];
	$pub_date = $_POST["publish_date"];
	$publisher = $_POST["publisher"];
	$type = $_POST["type"];

	$sql = "UPDATE `media` SET `title`='$title',`img`='$img', `author`='$author', `isbn`='$isbn', `short_description`='$description',
								`publish_date`='$pub_date', `publisher`='$publisher',	`type`='$type'
								WHERE `id` = $id"; 
			

		if(mysqli_query($conn,$sql)) {
			echo "success <br>
				  <a href='../index.php'>übersicht media</a>";
		} else {
			echo "some goes wrong";
		}
?>