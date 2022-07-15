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
font-size:30px;
color: black;
font-weight: bold;
text-transform: capitalize;

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
include("project1_student.php");
session_start();
$id= $_SESSION["user_id"];
//echo"$id";
?>
<form action="" method= "post" enctype="multipart/form-data">
<h1> request certificate </h1>
<fieldset>
<table cellpadding= "5px" cellspacing= "5px">
<tr><td>start date</td><td><input type= "date" name= "t1" id="txt1"></td></tr>
<tr><td>end date</td><td><input type= "date" name= "t2" id="txt1"></td></tr>
<tr><td>project</td><td><input type= "file" name= "image_file1" id="txt1"></td></tr>

<tr><td><input type= "submit" value= "request" name= "veera" id="td1"></td></tr>
</fieldset>

<?php
if(isset($_POST["veera"]))
{

$stda= $_POST["t1"];
$enda= $_POST["t2"];
//echo"$enda";
$var="certifi_req/";
$var1=$var.basename($_FILES['image_file1']['name']);
$abc= "Waiting";




$conn=mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("Connection Error".mysqli_error());
}

$a1="select course_id,staff_id from bill where student_id= '$id'";
$b1=mysqli_query($conn,$a1);
if(mysqli_num_rows($b1))
{
while($r=mysqli_fetch_assoc($b1))
{
$courseid=$r["course_id"];
$staffid=$r["staff_id"];
}
}
else
{
echo"<script>alert('No data Found');</script>";
}
//echo"$courseid";
//echo"$staffid";


if((move_uploaded_file($_FILES['image_file1']['tmp_name'],$var1)))
{
$a2="insert into request(student_id,course_id,staff_id,start_date,end_date,staff_status,admin_status,status,document) values('$id','$courseid','$staffid','$stda','$enda','$abc','$abc','$abc','$var1')";
if(mysqli_query($conn,$a2))
{
echo"<script>alert('registerd successfully');</script>";
}
}
}
?>


</body>
</html>
