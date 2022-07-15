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
include("project1_admin2.php");
?>
<form action="" method="post"  enctype="multipart/form-data">
</form>

<h1>certificate</h1>
<?php
$conn=mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select * from request";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
echo"<table border='3px'  cellpadding= '5px' cellspacing= '5px'>";
echo"<tr><th>User Id</th><th>student id</th><th>course id</th><th>staff id</th><th>start date</th><th>end date</th><th>staff status</th><th>admin status</th><th>status</th><th>document</th></tr>";
while($r=mysqli_fetch_assoc($b))
{

$id=$r["user_id"];
$stuid=$r["student_id"];
$couid=$r["course_id"];
$stid=$r["staff_id"];
$stdate=$r["start_date"];
$endate=$r["end_date"];
$ss=$r["staff_status"];
$as=$r["admin_status"];
$s=$r["status"];
$doc=$r["document"];

echo"<tr><td>$id</td><td>$stuid</td><td>$couid</td><td>$stid</td><td>$stdate</td><td>$endate</td><td>$ss</td><td>$as</td><td>$s</td><td><img src= '$doc'></td></tr>";
}
echo"</table>";
}
else
{
echo"<script>alert('No data Found');</script>";
}

?>

</body>
</html>
