<html>
<head>
<title>even</title>
<style>
fieldset
{
border-top-right-radius: 50px;
border-top-left-radius: 50px;

margin-left:450px;
margin-right:450px;
margin-top: 100px;
//background:linear-gradient(blue,black);
background-image:url("hd3.jpeg");
text-align: center;
}
table
{

font-size: 20px;
}
#in1
{
color: white;
background-color: black;
margin-left: 150px;
margin-top: 50px;
width: 100px;

}
</style>


</head>
<body>
<?php
include("project1_company.php");
?>
<fieldset>
<table cellpadding= "5px" cellspacing= "5px">
<form action="" method= "post">
<h2>STUDENT LOGIN </h2>

<tr><td>NAME</td><td><input type= "text" name= "t1" placeholder= "enter your name"></td></tr>
<tr><td>MOBILE NUMBER</td><td><input type= "text" name= "t2"placeholder= "enter your mobile number"></td></tr>

<tr><td><input type= "submit"  name= "veera" id= "in1"></td></tr>
</fieldset>
</form>

<?php

if(isset($_POST["veera"]))
{
$un= $_POST["t1"];
$mobile= $_POST["t2"];


$conn= mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("connection error".mysqli_error());
}
$a="select mobile,name from student where name='$un' and mobile='$mobile'";

$b=mysqli_query($conn,$a);

if(mysqli_num_rows($b)>0)
{

echo"<script>alert('LOGIN SUCCESS FULLY'); location= 'project1_student4.php'</script>";
}
else
{
echo"<script>alert('PASSWORD INCORRECT');</script>";
}

$a1="select user_id from student where name= '$un'";
$b1=mysqli_query($conn,$a1);
if(mysqli_num_rows($b1))
{
while($r=mysqli_fetch_assoc($b1))
{
$uid3=$r["user_id"];
}
}
else
{
echo"<script>alert('No data Found');</script>";
}
session_start();
$user="$uid3";
$sname="$un";
$_SESSION["user_id"]=$user;
$_SESSION["$un"]=$sname;
}
?>

</body>
</html>
