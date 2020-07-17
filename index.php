<!DOCTYPE html>
<html>
<head>
	<title>Übersicht</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<!-- A grey horizontal navbar that becomes vertical on small screens -->
	<nav class="navbar navbar-expand-sm bg-light">	
	  <!-- Links -->
	  <ul class="navbar-nav">
	    <li class="nav-item">
	      <a class="nav-link" href="insert.php">insert new Media</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">empty</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">empty</a>
	    </li>
	  </ul>	
	</nav>

	<h1>
		übersicht medien
	</h1>
	<div class="container-fluid row justify-content-between">

<?php
	include 'actions/db_connect.php';

	$sql = "SELECT * FROM media";
	$go = mysqli_query($conn,$sql);

	if(mysqli_num_rows($go) == 0) { //for o entries
		echo "no entries";
	} elseif (mysqli_num_rows($go) == 1) { //for 1 entries
		$row = $go->fetch_assoc();
		echo $row["title"]." ".$row["img"]." ".$row["author"]." ".$row["isbn"]." ".$row["short_description"]." ".$row["publish_date"]." ".$row["publisher"]." ".$row["type"]."<a href='update.php?id=".$row["id"]."'>update</a> <a href='delete.php?id=".$row["id"]."'>delete</a><br>";
	} else {
		$rows = $go->fetch_all(MYSQLI_ASSOC);//for >1 entries

		foreach ($rows as $key => $value) { //for >1 entries
			
				echo"<div class='card self m-2'>
					<p>ID: ".$value["id"]."</p>
					<div class='m-auto pic'>
						<img class='img-fluid' src=".$value["img"]." alt='img'>
					</div>
  					<div class='card-body'>
    					<h4 class='card-title'>".$value["title"]."</h4>
    					<p class='card-text'>Description:<br>".$value["short_description"]."</p>    					
    						<p>Autor:<br>".$value["author"]."</p>
    						<p>ISBN/Article-nr:<br>".$value["isbn"]."</p>
    						<p>Date:<br>".$value["publish_date"]."</p>
    						<p>Publisher:<br>".$value["publisher"]."</p>
    						<p>Typ:<br>".$value["type"]."</p>    					
    					<a href='delete.php?id=".$value['id']."' class='card-link'>delete</a>
    					<a href='update.php?id=".$value['id']."' class='card-link'>update</a>
  					</div>
				</div>";
		}
	}
?>
	
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>