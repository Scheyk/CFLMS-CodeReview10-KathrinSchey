<?php
	require_once 'db_connect.php';

	if ($_POST["id"] != '') 
	{
		$id = $_POST["id"];

		$sql = "DELETE FROM `media` WHERE id=$id";

		if(mysqli_query($conn, $sql)) {
			echo "<p class='actions'>success <br>
				  <a href='../index.php'>back to übersicht</a></p>";
		} else {
			echo "<p class='actions'>something wrong <br>
				 <a href='a_delete.php'>try again</a>
				 <a href='../index.php'>back to Index</a></p>";
		}

		$conn->close();
	}
?>