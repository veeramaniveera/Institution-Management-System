<html>
<head>
<style>
img
{
height: 100px;
width: 100px;
}
table
{
text-transform: capitalize;
border-width:3px;
border-color:red;
color: black;
font-size: 30px;
text-align:center;
background-image:url("hd3.jpeg");
margin-left: 400px;
margin-top: 100px;
}
</style>
</head>
<body>
<form action="" method="post"  enctype="multipart/form-data">
</form>
<?php
include("project1_staff.php");
?>
<h1>student project</h1>
<?php
session_start();
$name=$_SESSION["name"];
$userid=$_SESSION["user_id"];	
//echo"$name";
//echo"$userid";

$conn= mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("connection error".mysqli_error());
}

$a1="select request.document as rdoc,request.student_id as rstid,student.name as sname from request join student on request.student_id = student.user_id where request.staff_id= '$userid' ";

$b1=mysqli_query($conn,$a1);
if(mysqli_num_rows($b1))
{
echo"<table border='3px'  cellpadding= '5px' cellspacing= '5px'>";
echo"<tr><th>student name</th><th>student id</th><th>project</th></tr>";
while($r=mysqli_fetch_assoc($b1))
{
$stutname=$r["sname"];
$stuid=$r["rstid"];
$doc=$r["rdoc"];


echo"<tr><td>$stutname</td><td>$stuid</td><td><img src= '$doc'></td></tr>";
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
