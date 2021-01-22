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
  $BoxNo = filter_input(INPUT_POST, 'BoxNo');
  $Address = filter_input(INPUT_POST, 'Address');
  $Vid = filter_input(INPUT_POST, 'Vid');
  $DeptNum = filter_input(INPUT_POST, 'DeptNum');

$query = "INSERT INTO VENDOR(VName,NoOfBoxShip, VAddress, VendorId,DeptNum)
values ('$Name',$BoxNo,'$Address', '$Vid', '$DeptNum')";
if ($conn->query($query)){
echo "vendor record inserted sucessfully";
}
else{
echo "Error: ". $query ." ". $conn->error;
}
}
?>
</body>
