<?php
	require_once 'actions/db_connect.php';

	if($_GET["id"]) {
		$id = $_GET["id"];

		$sql = "SELECT * FROM `media` WHERE id = $id";
		$go = mysqli_query($conn, $sql);

		$row = $go->fetch_assoc();		
	}
	$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>delete media</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.php" title="">übersicht</a></li>
		</ul>
	</nav>

	<h3>are you sure?</h3>

	<form action ="actions/a_delete.php" method="post">
   		<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
   		<button type="submit">Yes</button >
   		<a href="index.php"><button type="button">No</button ></a>
	</form>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>