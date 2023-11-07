<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$Skillset = mysqli_real_escape_string($mysqli, $_POST['Skillset']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// Check for empty fields
	if (empty($name) || empty($Skillset) ) {
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($Skillset)) {
			echo "<font color='red'>Skillset field is empty.</font><br/>";
		}
		
		
	} else {
		// Update the database table
		// Update the database table
           $result = mysqli_query($mysqli, "UPDATE users SET `name` = '$name', `Skillset` = '$Skillset' WHERE `id` = $id");

		
		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
