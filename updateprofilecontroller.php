<!-- Project 3: Team 3
Alisha Kunwar (1001688106)
Pranay Shakya (1001570476)
Santosh Bhandari(1001387116)
Vivek Kumar Yadav (1001743442)
Siddharth Gautam (1001741324) -->


<html>
<head>
</head>

<body bgcolor="skyblue">


<?php

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
  $SSN = filter_input(INPUT_POST, 'SSN');
  $Name = filter_input(INPUT_POST, 'Name');
  $Address = filter_input(INPUT_POST, 'Address');

  $query = "UPDATE employee SET Name = '$Name', Address='$Address' WHERE SSN = '$SSN';";

if($SSN== NULL ||
    $Name==NULL||
     $Address== NULL ){

         print("<h3> <center> Please fill all fields </center></h3>");

        }

 else if ($conn->query($query)){
echo "Record updated sucessfully";
}


else{
echo "Error: ". $query ." ". $conn->error;
}
}

?>

</body>
</html>
