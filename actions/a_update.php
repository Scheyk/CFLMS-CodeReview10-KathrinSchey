<!DOCTYPE html>
<html>
<head>
	<title>Übersicht</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

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
			echo "<div class='actions'>
				  <p>success <br>
				  <a href='../index.php'>übersicht media</a></p>
				  </div>";
		} else {
			echo "<div class='actions'>
				  <p>some goes wrong <br>
				  <a href='a_update.php'>try again</a> <br>
				  <a href='../index.php'>back to Index</a></p>
				  </div>";
		}
?>

<!-- js scripts-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>