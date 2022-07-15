<html>
<head>
<style>
img
{
width:100px;
height:100px;
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
margin-left: 400px;
margin-top: 100px;
}
#tb1
{
margin-left: 240px;
//margin-top: 100px;
text-transform: capitalize;
border-width:3px;
border-color:red;
color: black;
font-size:20px;
text-align:center;
background-image:url("file/hd3.jpeg");


}
#txt2
{
color:black;
font-size: 20px;
text-align:center;

}
#a1
{
text-align: center;
}

</style>

</head>
<body>
<form action="" method="post"  enctype="multipart/form-data">
</form>
<?php
include("project1_staff.php");
?>
<h1>Staff approve</h1>
<?php
session_start();
$name=$_SESSION["name"];
$userid=$_SESSION["user_id"];	
//echo"$name";
//echo"$userid";
$abc1= "Waiting";

$conn= mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("connection error".mysqli_error());
}

$a1="select request.student_id as rstid,request.document as rdoc,request.user_id as ruid,student.name as rname from request join student on request.student_id = student.user_id where request.staff_id= '$userid' and request.staff_status= '$abc1' ";

$b1=mysqli_query($conn,$a1);
if(mysqli_num_rows($b1)) 
{
echo"<table border='3px'  cellpadding= '5px' cellspacing= '5px'>";
echo"<tr><th>student Id</th><th>document</th><th>user id</th><th>name</th></tr>";
while($r=mysqli_fetch_assoc($b1))
{
$uid2=$r["rstid"];
$doc=$r["rdoc"];
$uid1=$r["ruid"];
$stuname=$r["rname"];

echo"<tr><td>$uid2</td><td><img src= '$doc'></td><td>$uid1</td><td>$stuname</td><td id= 'a1'><a href= 'project1_staffacro.php?userid=$uid1'  id= 'txt2'>Approve</a></td></tr>";
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
