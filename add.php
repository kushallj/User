<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Skillset</td>
				<td><input type="text" name="Skillset"></td>
			</tr>
			<tr> 
                <td>Last Updated</td>
                <td><input type="hidden" name="lastUpdated" value="<?php echo date('Y-m-d H:i:s'); ?>"></td>
            </tr>
			
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>

