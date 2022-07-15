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
#txt2
{
color:black;
font-size: 20px;
text-align:center;

}

</style>
</head>
<body>
<?php
include("project1_admin2.php");
?>
<form action="" method="post"  enctype="multipart/form-data">
</form>

<h1>admin request</h1>
<?php
$abc1= "Approved";
$abc2= "Waiting";

$conn=mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("Connection Error".mysqli_error());
}


$a1="select request.student_id as rstid1,request.document as rdoc1,request.user_id as ruid1,student.name as rname1 from request join student on request.student_id = student.user_id where request.admin_status= '$abc2' and request.staff_status= '$abc1' ";

$b1=mysqli_query($conn,$a1);
if(mysqli_num_rows($b1))
{
echo"<table border='3px'  cellpadding= '5px' cellspacing= '5px'>";
echo"<tr><th>student Id</th><th>document</th><th>user id</th><th>name</th></tr>";
while($r=mysqli_fetch_assoc($b1))
{
$uid3=$r["rstid1"];
$doc=$r["rdoc1"];
$uid2=$r["ruid1"];
$stuname=$r["rname1"];

echo"<tr><td>$uid3</td><td><img src= '$doc'></td><td>$uid2</td><td>$stuname</td><td><a href= 'project1_adminappro.php?userid1=$uid2'  id= 'txt2'>Approve</a></td></tr>";
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
