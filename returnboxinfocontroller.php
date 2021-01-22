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
  $NAME = filter_input(INPUT_POST, 'NAME');
  $NoOfBoxReturned = filter_input(INPUT_POST, 'NoOfBoxReturned');
  $RewardsPoint = $NoOfBoxReturned * 20;
  $CustomerId = filter_input(INPUT_POST, 'CustomerId');
  $DeptNum = 1;

$query = "INSERT INTO CUSTOMER (NAME, NoOfBoxReturned, RewardsPoint, CustomerId, DeptNum)
values ('$NAME','$NoOfBoxReturned', '$RewardsPoint', '$CustomerId', '$DeptNum');";
if ($conn->query($query)){
echo "Your record has been saved sucessfully";
}
else{
echo "Error: ". $query ." ". $conn->error;
}
}
?>
</body>
