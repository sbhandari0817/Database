<!-- Project 3: Team 3
Alisha Kunwar (1001688106)
Pranay Shakya (1001570476)
Santosh Bhandari(1001387116)
Vivek Kumar Yadav (1001743442)
Siddharth Gautam (1001741324) -->

<html>
<head>
<title> Insert </title>
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
<form method="post" action="returnboxinfocontroller.php">
    <fieldset>
       <legend> Return Boxes </legend>

<label id="label" for="CustomerId"> Customer ID </label> </br>
<input type="text" name="CustomerId" placeholder=" Enter your Id" > </br>

<label id="label" for="NAME"> Name </label> </br>
<input type="text" name="NAME" placeholder=" Enter your name here" > </br>

<label id="label" for="NoOfBoxReturned"> Number of boxes </label> </br>
<input type="text" name="NoOfBoxReturned" placeholder=" Enter number of boxes"> </br>

</br>
<input id="button" type="submit" name="submit">
  </fieldset>

</body>
</html>
