<body bgcolor="skyblue">
<?php
	//Create connection

	$dbname = "project_trash";

	//Create connection
	$conn = mysqli_connect('127.0.0.1', 'root', '');

	//Check connection 

	if (!$conn)
	{
		die ("Connection failed");
	}
	//Select database 
	if (!mysqli_select_db($conn,$dbname))
	{
		echo 'Database not selected';
	}
	else
	{
		$query = "SELECT DeptLocation
			FROM LOCATION";
	
		$records = mysqli_query($conn,$query);
		
		if (mysqli_num_rows($records) == 0){
			echo "No such record in the database";
		}
		else{
			echo '<table border = "1" cellpadding = "25">';
			echo '<tr>';
			echo '<th> Department Location </th>';
			echo '</tr>';
			foreach ($records as $a)
			{
				echo 
				'<tr> <td>'.$a["DeptLocation"].'</td></tr>';
			}
			echo '</table>';
		}
	}
?>
</body>
