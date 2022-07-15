<html>
<head>
<style>
img
{
height:100px;
width:100px;
}
h1
{
color:red;
text-transform:uppercase;
}
table
{
text-transform: capitalize;
border-width:3px;
border-color:red;
color: black;
font-size:20px;
text-align:center;
background-image:url("hd3.jpeg");
margin-left: 350px;
margin-top: 100px;
}
th
{
color: black;
text-transform:uppercase;
}
</style>
</head>
<body>
<?php
include("project1_student.php");
?>
<form action="" method="post"  enctype="multipart/form-data">
</form>

<h1>fees Details</h1>
<?php
$conn=mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select * from bill";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
echo"<table border='3px'  cellpadding= '7px' cellspacing= '7px'>";
echo"<tr><th>User Id</th><th> Course Id</th><th>Student Id</th><th>Payment Mode</th><th>Date</th></tr>";
while($r=mysqli_fetch_assoc($b))
{

$id=$r["user id"];
$cid=$r["course_id"];
$sid=$r["student_id"];
$pm=$r["payment_mode"];
$dt=$r["date"];

echo"<tr><td>$id</td><td>$cid</td><td>$sid</td><td>$pm</td><td>$dt</td></tr>";
}
echo"</table>";
}
else
{
echo"<script>alert('No data Found');</script>";
}
session_start();
$session= $_SESSION["user_id"];

?>

</body>
</html>
