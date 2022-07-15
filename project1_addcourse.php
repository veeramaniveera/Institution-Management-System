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
<h1> add course </h1>
<fieldset>
<table cellpadding= "5px" cellspacing= "5px">
<tr><td> COURSE NAME</td><td><input type= "text" name= "t1" id="txt1"></td></tr>
<tr><td>COURSE FEES</td><td><input type= "text" name= "t2" id="txt1"></td></tr>
<tr><td>COURSE DURATION</td><td><input type= "text" name= "t3" id="txt1"></td></tr>
<tr><td>TITLE</td><td><input type= "text" name= "t4" id="txt1"></td></tr>


<tr><td><input type= "submit"  name= "veera" id="td1"></td></tr>
</fieldset>
<?php

if(isset($_POST["veera"]))
{
$cona= $_POST["t1"];
$cofe= $_POST["t2"];
$codu= $_POST["t3"];
$tit= $_POST["t4"];


$conn= mysqli_connect("localhost:3306","root","","project_1");

if(!$conn)
{
die("connection error".mysqli_error());
}

$a="insert into add_course(course_name,fees,duration,title) values('$cona','$cofe','$codu','$tit')";

if(mysqli_query($conn,$a))
{
echo"<script>alert('registerd successfully');</script>";
}
}
?>
</body>
</html>
