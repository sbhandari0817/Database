<!-- Pranay Shakya(1001570476)
         Alisha Kunwar(1001668106)
         Vivek Kumar Yadav
         Siddharth Gautam
         Santosh Bhandari-->
 
         <html>
<head>
<title> select data</title>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<body bgcolor="skyblue">
<form method="post" action="deleteemployeecontroller.php">
    <fieldset>
    <center>
       <legend> <h1> Delete Employee </h1></legend>
<label id="label" for="Name"> <h3>Enter Employee to be deleted </h3> </label> </br>
<input type="number" name="Name" placeholder=" Enter SSN " > </br></br>
    <input id="button" type="submit" name="submit">
    </center>
  </fieldset>
 
</body>
</html>