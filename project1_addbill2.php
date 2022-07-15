

<html>
<head>
<title>even</title>
<style>
#td1
{
font-size: 20px;
margin-left: 100px;
}
table
{
background-image:url("hd3.jpeg");
margin-left: 550px;
margin-top: 100px;
font-size: 30px;
}
#id3
{
width: 100px;
}

</style>
</head>
<body>
<?php
include("project1_admin2.php");
?>

<form action="" method= "post">
<h1> add bill </h1>

<table cellpadding= "5px" cellspacing= "5px">

<tr><td>PAYMENT MODE</td><td><select name= "t2"  id="id3"><option>cash</option><option>online</option></td></tr>

<?php

//$cid= $_POST["t1"];

$un=$_GET["stname"];
$id1=$_GET["userid"];
$da=date("d/m/y");

//echo"$da";
//echo"$id";
//echo"$cid";
//echo"$mode";
//echo"$un";

$conn=mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select user_id from student where name= '$un'";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
while($r=mysqli_fetch_assoc($b))
{
$id=$r["user_id"];
}
//echo"$id";
}
else
{
echo"<script>alert('No data Found');</script>";
}


$o="select course_name,user_id from add_course";
$p=mysqli_query($conn,$o);
if(mysqli_num_rows($p))
{
//echo"<table>";
echo"<tr><td>course</td><td><select name='t22'>";
while($r=mysqli_fetch_assoc($p))
{

$coname=$r["course_name"];
$courseid=$r["user_id"];
echo"<option value='$courseid'>$coname</option>";
}
echo"</select></td></tr>";
$couname= $_POST["t22"];
$c2id= $_POST["t22"];
//echo"$couname";
//echo"$c2id";
}


$conn1=mysqli_connect("localhost:3306","root","","project_1");
$e="select name,user_id from company";
$f=mysqli_query($conn1,$e);
if(mysqli_num_rows($f))
{
echo"<tr><td>staff</td><td><select name='v1'>";
while($r=mysqli_fetch_assoc($f))
{
$staname=$r["name"];
$stid=$r["user_id"];
echo"<option value='$stid'>$staname</option>";
}
echo"</select></td></tr>";
}
else
{
echo"<script>alert('No data Found');</script>";
}
$staffname1= $_POST["v1"];
$staffid2= $_POST["v1"];
//echo"$stafname";
//echo"$staffid2";

if(isset($_POST["veera"]))
{
$mode= $_POST["t2"];
$conn3=mysqli_connect("localhost:3306","root","","project_1");
$b="insert into bill(course_id,student_id,staff_id,payment_mode,date) values('$c2id','$id','$staffid2','$mode','$da')";
if(mysqli_query($conn3,$b))
{
echo"<script>alert('registerd successfully');</script>";
}

}
?>
<tr><td><input type= "submit" value="register" name= "veera" id="td1"></td></tr>
</form>
</table>
</body>
</html>
