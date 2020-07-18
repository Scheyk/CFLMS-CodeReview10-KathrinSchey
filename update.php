<!--input db_connection and php code start-->
<?php
	include_once 'actions/db_connect.php';

	if($_GET["id"]) {
		 $id = $_GET["id"];

		 $sql = "SELECT * FROM media WHERE id = $id";
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
	<title>update Media</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<!-- A grey horizontal navbar that becomes vertical on small screens start-->
	<nav class="navbar navbar-expand-sm bg-info sticky-top navbar-dark">	
	  <!-- Links -->
	  <ul class="navbar-nav">
	    <li class="nav-item">
	      <a class="nav-link" href="index.php">to Home</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="insert.php">to Insert</a>
	    </li>
	  </ul>	
	</nav>
    <!-- A grey horizontal navbar that becomes vertical on small screens end-->
	<!--container start-->
	<div class="container">

		<!--container background-img for form start-->
		<div class="back">
			
			<h1>update the Media</h1>
			<!--form start-->
			<form action="actions/a_update.php" method="post" class="insert">
				<input type="hidden" name="id" value="<?php echo $row['id']?>">
				<div class="input-group mb-1">
    		    	<label for="title">Title:</label>
    		    	<div class="input">
    		      		<input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']?>">
    		    	</div>
    		  	</div>
    		  	<div class="input-group mb-1">
    		    	<label for="img">Img:</label>
    		    	<div class="input">
    		      		<input type="text" class="form-control" id="img" name="img" value="<?php echo $row['img']?>">
    		    	</div>
    		  	</div>
    		  	<div class="input-group mb-1">
    		    	<label for="author">Author:</label>
    		    	<div class="input">
    		      		<input type="text" class="form-control" id="author" name="author" value="<?php echo $row['author']?>">
    		    	</div>
    		  	</div>
    	  		<div class="input-group mb-1">
    	    		<label for="isbn">ISBN/EAN/Art.nr::</label>
    	    		<div class="input">
    	    	  		<input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $row['isbn']?>">
    	    		</div>
    	  		</div>
    	  		<div class="input-group mb-1">
    	    		<label for="short_description">short description:</label>
    	    		<div class="input">
    	      			<textarea type="text" class="form-control" id="short_description" name="short_description" rows="5" value="<?php echo $row['short_description']?>"><?php echo $row['short_description']?></textarea>
    	    		</div>
    	  		</div>
    	  		<div class="input-group mb-1">
    	    		<label for="publish_date">publish date:</label>
    	    		<div class="input">
    	      			<input type="date" class="form-control" id="publish_date" name="publish_date" value="<?php echo $row['publish_date']?>">
    	    		</div>
    	  		</div>
    	  		<div class="input-group mb-1">
    	    		<label for="publisher">Publisher:</label>
    	    		<div class="input">
    	      			<input type="text" class="form-control" id="publisher" name="publisher" value="<?php echo $row['publisher']?>">
    	    		</div>
    	  		</div>
    	  		<div class="input-group mb-1">
    	    		<label for="type">Type:</label>   	    	
    	    		<select class="select" name="type" value="<?php echo $row['type']?>">
  						<option value="book">Book</option>
  						<option value="CD">CD</option>
  						<option value="DVD">DVD</option>  						
					</select>  
    	  		</div>
    	  		<div class="input-group mb-1">
    	    		<div class="btn m-auto">
    	      			<input type="submit" value="update" name="submit" class="btn btn-primary"/>
    	    		</div>
    	  		</div>
			</form>
			<!--form end-->
		</div>
		<!--container background-img for form end-->
	</div>
	<!--container end-->

<!--js scripts-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>