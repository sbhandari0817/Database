<!-- Pranay Shakya(1001570476)
         Alisha Kunwar(1001668106)
         Vivek Kumar Yadav
         Siddharth Gautam
         Santosh Bhandari-->
 
         <html>
 
<head>
 
<style>
 
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
 
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
 
</style>
 
</head>
 
<body bgcolor="skyblue">
 
 
<?php //login to php
 
$host="localhost:3306";
$dbusername="root";
$dbpassword="";
$dbname="project_trash";
 
// for connection
// $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
$conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
     $Name= filter_input(INPUT_POST, 'Name');
     $SSN= filter_input(INPUT_POST, 'SSN');
     
 
     if
     ($query="SELECT Name,Address,Gender,SSN,DeptNum
            FROM employee
            WHERE Name='$Name' AND SSN='$SSN'");
    {
         if($query== NULL){
             echo "No Record Available";
             die();
            }
            
     else if($Name== NULL ||
     $SSN== NULL){
         
         print("<h3> <center> Please fill all fields </center></h3>");
            
        }
            
            
        else{
            $stmt=$conn->prepare($query);
            $stmt->execute();
            
            $rows=$stmt->fetchALL(PDO::FETCH_ASSOC);
            
            
            print("<h1> <center> Profile </center></h1>");
                
                
                echo"
                <table>
                  <tr>
                   <th>Name</th>
                   <th>Address</th>
                   <th>Gender</th>
                   <th>SSN</th>
                   <th>Dept Number</th>
                 </tr>
                 ";
            
            
            foreach ( $rows as $a)
            {
                
                echo "<tr>";
 
                echo "<td>" . $a['Name'] . "</td>";
 
                echo "<td>" . $a['Address'] . "</td>";
 
                echo "<td>" . $a['Gender'] . "</td>";
 
                echo "<td>" . $a['SSN'] . "</td>";
                echo "<td>" . $a['DeptNum'] . "</td>";
 
                echo "</tr>";
 
  }
 
            echo "</table>";
               
                
            
        }    
    }
    }
?>
</body>
</html>