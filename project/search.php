<?php
	if (isset($_POST['submit'])) {
		$connection = new mysqli("localhost", "root", "", "studentrecords");
		$q = $connection->real_escape_string($_POST['q']);
		$column = $connection->real_escape_string($_POST['column']);

		if ($column == "" || ($column != "Name of the student" && $column != "Nationality"))
			$column = "Name of the student";

		$sql = $connection->query("SELECT Name_of_the_student FROM recordsstudent WHERE $column LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			while ($data = $sql->fetch_array())
				echo $data['Name of the student'] . "<br>";
		} else
			echo "Your search query doesn't match any data!";
	}
?>
<html>
	<head>
		<title>PHP Search Form</title>
	</head>
	<body>
		<form method="post" action="search.php">
			<input type="text" name="q" placeholder="Search Query...">
			<select name="column">
				<option value="">Select Filter</option>
				<option value="Gender">Gender</option>
				<option value="lastName">Last Name</option>
			</select>
			<input type="submit" name="submit" value="Find">
		</form>
	</body>
</html>
