<html>
<head>
<title>even</title>
<style>
fieldset
{
margin-left:450px;
margin-right:350px;
//background:linear-gradient(blue,black);
background-image:url("hd3.jpeg");
}
table
{
font-size:20px;
color: black;
font-weight: bold;
}
#td1
{
width:100px;
margin-left:160px;
margin-top:30px;
background-color: black;
color: white;
font-size:18px;
}
#txt1
{
width:200px;
height:25px;

}
</style>
</head>
<body>
<?php
include("project1_admin2.php");

?>
<form action="" method= "post" enctype="multipart/form-data">
<h1> add student </h1>
<fieldset>
<table cellpadding= "5px" cellspacing= "5px">
<tr><td>NAME</td><td><input type= "text" name= "t1" id="txt1"></td></tr>
<tr><td>MOB_NUM</td><td><input type= "text" name= "t2" id="txt1"></td></tr>
<tr><td>MAIL_ID</td><td><input type= "text" name= "t3" id="txt1"></td></tr>
<tr><td>STUDENT ADDRESS</td><td><textarea name= "t4" id="txt1"></textarea></td></tr>
<tr><td>DEGREE</td><td><input type= "text" name= "t5" id="txt1"></td></tr>
<tr><td>CARE GIVER NAME</td><td><input type= "text" name= "t6" id="txt1"></td></tr>
<tr><td>CARE GIVER MOBILE</td><td><input type= "text" name= "t7" id="txt1"></td></tr>
<tr><td>CARE GIVER ADDRESS</td><td><textarea name= "t8" id="txt1"></textarea></td></tr>

<tr><td><input type= "submit"  name= "veera" id="td1"></td></tr>
</fieldset>
<?php

if(isset($_POST["veera"]))
{
$n= $_POST["t1"];
$mob= $_POST["t2"];
$ma= $_POST["t3"];
$stadd= $_POST["t4"];
$deg= $_POST["t5"];
$cnam= $_POST["t6"];
$cmob= $_POST["t7"];
$cadd= $_POST["t8"];


$conn= mysqli_connect("localhost:3306","root","","project_1");

if(!$conn)
{
die("connection error".mysqli_error());
}

$a="insert into student(name,mobile,mail,student_address,degree,care_giver_name,care_giver_mobile,care_giver_address) values('$n','$mob','$ma','$stadd','$deg','$cnam','$cmob','$cadd')";

if(mysqli_query($conn,$a))
{
echo"<script>alert('registerd successfully');</script>";
}
}
?>
</body>
</html>
