<body bgcolor="skyblue">
<?php
// Project 3: Team 3
// Alisha Kunwar (1001688106)
// Pranay Shakya (1001570476)
// Santosh Bhandari(1001387116)
// Vivek Kumar Yadav (1001743442)
// Siddharth Gautam (1001741324)

$host = "localhost:3306";
$dbusername = "root";
$dbpassword = "";
$dbname = "project_trash";
// Create connection
$conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);
// Check connection
if(!$conn) {
  die("Connection failed");

}else{

  $Name = filter_input(INPUT_POST, 'Name');
  $Address = filter_input(INPUT_POST, 'Address');
  $Gender = filter_input(INPUT_POST, 'Gender');
  $SSN = filter_input(INPUT_POST, 'SSN');
  $DeptNum = filter_input(INPUT_POST, 'DeptNum');

$query = "INSERT INTO EMPLOYEE (Name, Address, Gender, SSN, DeptNum)
values ('$Name','$Address', '$Gender', '$SSN', '$DeptNum')";
if ($conn->query($query)){
echo "Employee record inserted sucessfully";
}
else{
echo "Error: ". $query ." ". $conn->error;
}
}
?>
</body>
