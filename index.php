<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TO-DO</title>
</head>
<body>

	<h1>PHP TO Do List</h1>
	<form action="createTodo.php" method="POST"> 
  <input type="text" name="input" placeholder="Enter Something...">
  <button style="background-color:blue; border-color:blue; color:white">Add</button>
</form>


<?php

		$conn = new mysqli("localhost","root","","todo");
		echo "<table border=1>";
		$query = "select * from data";
		$obj = $conn->query($query);

		echo "<tr>";
			echo "<th> TO-DO List </th>";
		echo "</tr>";
		while ($show = $obj->fetch_assoc()) {

			echo "<tr>";
			echo "<td>".$show["txt"]. "</td>";
			echo "<td> <a href='editTodo.php?id=".$show["id"]."'> Update </a> </td>";
			echo "<td> <a href='deleteTodo.php?id=".$show["id"]."'> Delete </a> </td>";
			echo "</tr>";
		}
		echo "</table>";


	?>





</body>
</html>