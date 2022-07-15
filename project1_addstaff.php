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
font-size:15px;
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
<h1>add staff </h1>
<fieldset>
<table cellpadding= "5px" cellspacing= "5px">
<tr><td>NAME</td><td><input type= "text" name= "t1" id="txt1"></td></tr>
<tr><td>MOB_NUM</td><td><input type= "text" name= "t2" id="txt1"></td></tr>
<tr><td>EDUCATION</td><td><input type= "text" name= "t3" id="txt1"></td></tr>
<tr><td>PHOTO</td><td><input type= "file" name= "image_file1" id="txt1"></td></tr>
<tr><td>AADHAR</td><td><input type= "file" name= "image_file2" id="txt1"></td></tr>
<tr><td>EDUCATION CERTIFICATE</td><td><input type= "file" name= "image_file3" id="txt1"></td></tr>
<tr><td>ROLE</td><td><select name= "t4" id="txt1"><option>TEAM LEADER</option><option>TESTING DEPARTMENT</option><option>FRONT-END DEVELOPER</option><option>BACK-END DEVELOPER</option></select></td></tr>
<tr><td>ADDRESS</td><td><textarea name= "t5" id="txt1"></textarea></td></tr>
<tr><td>COUNTRY</td><td><select name= "t6" id="txt1"><option>AMERICA</option><option>AUSTRALIA</option><option>INDIA</option><option>SOUTH AFRICA</option></select></td></tr>

<tr><td><input type= "submit"  name= "veera" id="td1"></td></tr>
</fieldset>
</form>

<?php

if(isset($_POST["veera"]))
{
$n= $_POST["t1"];
$mob= $_POST["t2"];
$edu= $_POST["t3"];
$role= $_POST["t4"];
$add= $_POST["t5"];
$coun= $_POST["t6"];


$var="project_1/";
$var1=$var.basename($_FILES['image_file1']['name']);
$var2=$var.basename($_FILES['image_file2']['name']);
$var3=$var.basename($_FILES['image_file3']['name']);

//$tar1= $tar.basename($_FILES['image_file']['name']);
//$image_file=basename($tar1);

$conn= mysqli_connect("localhost:3306","root","","project_1");

if(!$conn)
{
die("connection error".mysqli_error());
}

$a="insert into company(name,mobile,education,photo,aadhar,certificate,role,address,country) values('$n','$mob','$edu','$var1','$var2','$var3','$role','$add','$coun')";


if((move_uploaded_file($_FILES['image_file1']['tmp_name'],$var1))&&(move_uploaded_file($_FILES['image_file2']['tmp_name'],$var2))&&(move_uploaded_file($_FILES['image_file3']['tmp_name'],$var3)))
{
if(mysqli_query($conn,$a))
{
echo"<script>alert('registerd successfully');</script>";
}
}
}
?>
</body>
</html>
