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
height: 100px;
//margin-left: 0px;

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

<h1>student Profile</h1>
<?php
session_start();
$nm= $_SESSION["user_id"];
//echo"$nm";

$conn=mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select * from student where user_id= '$nm'";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
echo"<table border='3px'  cellpadding= '5px' cellspacing= '5px'>";
echo"<tr><th>User Id</th><th>Name</th><th>Mobile Number</th><th>Mail Id</th><th>Student Address</th><th>Degree</th><th>Care_Giver_Name</th><th>Care_Giver_Mobile</th><th>Care_Giver_Address</th></tr>";
while($r=mysqli_fetch_assoc($b))
{

$id=$r["user_id"];
$name=$r["name"];
$mob=$r["mobile"];
$ma=$r["mail"];
$stad=$r["student_address"];
$deg=$r["degree"];
$cn=$r["care_giver_name"];
$cm=$r["care_giver_mobile"];
$ca=$r["care_giver_address"];

echo"<tr><td>$id</td><td>$name</td><td>$mob</td><td>$ma</td><td>$stad</td><td>$deg</td><td>$cn</td><td>$cm</td><td>$ca</td></tr>";
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
