<!--input db_connection and php code start-->
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
<!--input db_connection and php code end-->
<!--html start-->
<!DOCTYPE html>
<html>
<head>
	<title>delete media</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<!-- A grey horizontal navbar that becomes vertical on small screens -->
	<nav class="navbar navbar-expand-sm bg-info sticky-top navbar-dark">	
	  <!-- Links -->
	  <ul class="navbar-nav">
	    <li class="nav-item">
	      <a class="nav-link" href="index.php">to Home</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="insert.php">to Insert</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">empty</a>
	    </li>
	  </ul>	
	</nav>
	<!--container start-->
	<div class="container">
		<!--container for background-img start-->
		<div class="ask">

			<h3>are you sure to delete this?
				<br>
			 	<img src="<?php echo $row['img']?>" alt="">
			 </h3>



			<!--form start-->
			<form action ="actions/a_delete.php" method="post">
   				<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
   				<button class="btn_y" type="submit"></button>
   				<a href="index.php"><button type="button" class="btn_n"></button></a>
			</form>
			<!--form end-->

		</div>
		<!--container for background-img end-->

	</div>
	<!--container end-->
	

<!--js scripts-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>