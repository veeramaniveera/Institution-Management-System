<html>
<head>
<style>
#a2
{
text-decoration: none;
color: black;
font-size: 30px
}

table
{
text-transform: capitalize;
border-width:5px;
border-color: green;
color: black;
font-size: 30px;
text-align:center;
margin-left: 450px;
margin-top: 100px;


}
th
{
color: green;
text-transform:uppercase;
}
</style>
</head>
<body>
<form action="" method="post"  enctype="multipart/form-data">
</form>
<?php
include("project1_student.php");
?>
<h1>Course Details</h1>
<?php
$conn=mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select * from add_course";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
echo"<table border='3px'  cellpadding= '7px' cellspacing= '7px'>";
echo"<tr><th>Sl.No</th><th>Course Name</th></tr>";
while($r=mysqli_fetch_assoc($b))
{

$id=$r["user_id"];
$name=$r["course_name"];


echo"<tr><td>$id</td><td><a href= 'coursephp.php?uid=$id && name=$name' id= 'a2'>$name</a></td></tr>";
}
echo"</table>";

}
else
{
echo"<script>alert('No data Found');</script>";
}
session_start();
$session=$_SESSION["user_id"];
	
?>

</body>
</html>
