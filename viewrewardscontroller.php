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
     $CustomerId = filter_input(INPUT_POST, 'CustomerId');
     $NAME= filter_input(INPUT_POST, 'NAME');


     if
     ($query="SELECT NAME,SUM(NoOfBoxReturned) AS Number_of_boxes_returned,20*SUM(NoOfBoxReturned) AS Rewards_earned
            FROM CUSTOMER
            WHERE NAME='$NAME' AND CustomerId='$CustomerId';");
    {
         if($query== NULL){
             echo "No Record Available";
             die();
            }

     else if($CustomerId== NULL || $NAME== NULL){

         print("<h3> <center> Please fill all fields </center></h3>");

        }


        else{
            $stmt=$conn->prepare($query);
            $stmt->execute();

            $rows=$stmt->fetchALL(PDO::FETCH_ASSOC);


            print("<h1> <center> Reward Points Earned </center></h1>");


                echo"
                <table>
                  <tr>
                   <th>Name</th>
                   <th>Number of boxes returned</th>
                   <th>Rewards earned</th>
                 </tr>
                 ";


            foreach ( $rows as $a)
            {

                echo "<tr>";

                echo "<td>" . $a['NAME'] . "</td>";

                echo "<td>" . $a['Number_of_boxes_returned'] . "</td>";

                echo "<td>" . $a['Rewards_earned'] . "</td>";

                echo "</tr>";

  }

            echo "</table>";



        }
    }
    }
?>
</body>
</html>
