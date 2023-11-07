<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in strings for use in SQL statement
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$Skillset = mysqli_real_escape_string($mysqli, $_POST['Skillset']);
	
	// Check for empty fields
	if (empty($name) || empty($Skillset)) {
		// Display error messages for empty fields
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if (empty($Skillset)) {
			echo "<font color='red'>Skillset field is empty.</font><br/>";
		}

		// Show a link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		// If all the fields are filled (not empty)

		// Insert data into database with the current date and time for lastUpdated
          $result = mysqli_query($mysqli, "INSERT INTO users (`name`, `Skillset`, `lastUpdated`) VALUES ('$name', '$Skillset', NOW())");

		
		
		// Display a success message
		if ($result) {
			echo "<p><font color='green'>Data added successfully!</p>";
		} else {
			echo "<p><font color='red'>Error: Data not added. Please check your query.</p>";
		}

		// Provide a link to view the results
		echo "<a href='index.php'>View Results</a>";
	}
}
?>
</body>
</html>
