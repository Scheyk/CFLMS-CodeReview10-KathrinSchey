<?php
	require_once 'db_connect.php';

	if ($_POST["id"] != '') 
	{
		$id = $_POST["id"];

		$sql = "DELETE FROM `media` WHERE id=$id";

		if(mysqli_query($conn, $sql)) {
			echo "success <br>
				  <a href='../index.php'>back to übersicht</a>";
		} else {
			echo "something wrong";
		}

		$conn->close();
	}
?>