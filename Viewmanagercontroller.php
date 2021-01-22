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
		$DeptNum = filter_input(INPUT_POST, 'DeptNum');
		$query = "SELECT Name
			FROM EMPLOYEE, DEPARTMENT
			WHERE EMPLOYEE.SSN = DEPARTMENT.M_SSN AND DEPARTMENT.Department_NO = $DeptNum";
	
		$records = mysqli_query($conn,$query);
		
		if (mysqli_num_rows($records) == 0){
			echo "No such record in the database";
		}
		else{
			foreach ($records as $a)
			{
                
				echo 'The name of the manager of this department is  '.$a["Name"];
			}
		}
	}

?>
</body>