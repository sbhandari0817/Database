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
     $VName= filter_input(INPUT_POST, 'VName');
     $VendorId= filter_input(INPUT_POST, 'VendorId');
     
 
     if
     ($query="SELECT VName, NoOfBoxShip
            FROM VENDOR
            WHERE VName='$VName' AND VendorId='$VendorId'");
    {
         if($query== NULL){
             echo "No Record Available";
             die();
            }
            
     else if($VName== NULL ||
     $VendorId== NULL){
         
         print("<h3> <center> Please fill all fields </center></h3>");
            
        }
            
            
        else{
            $stmt=$conn->prepare($query);
            $stmt->execute();
            
            $rows=$stmt->fetchALL(PDO::FETCH_ASSOC);
            
            
            print("<h1> <center> Number of Box Shipped to Vendors </center></h1>");
                
                
                echo"
                <table>
                  <tr>
                   <th>Name of Vendor</th>
                   <th>Number of Box Shipped </th>
                 </tr>
                 ";
            
            
            foreach ( $rows as $a)
            {
                
                echo "<tr>";
 
                echo "<td>" . $a['VName'] . "</td>";
 
                echo "<td>" . $a['NoOfBoxShip'] . "</td>";
 
                echo "</tr>";
 
  }
 
            echo "</table>";
               
                
            
        }    
    }
    }
?>
</body>
</html>