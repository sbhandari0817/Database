<!-- Pranay Shakya(1001570476)
         Alisha Kunwar(1001668106)
         Vivek Kumar Yadav
         Siddharth Gautam
         Santosh Bhandari-->
 
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
  $Name = filter_input(INPUT_POST, 'Name');
  
  $query = "DELETE FROM employee
            WHERE SSN=$Name";
            
 
            
if(!($Name))
{
    print("<h3> <center> Cannot delete blank  </center></h3>");
}
 
 
 
else if ($conn->query($query)){
print("<h3> <center> Record deleted successfully </center></h3>");
}
 
else {
echo "Error: ". $query ." ". $conn->error;
}
}
 
 
?>
 
</body>
</html>