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
#txt1
{
color:black;
margin-left: 250px;
margin-top: 250px;

}
#txt2
{
text-align: center;
color: black;

}
</style>
</head>
<body>
<?php
include("project1_admin2.php");
?>
<form action="" method="post"  enctype="multipart/form-data"
</form>

<h1>add bill</h1>
<?php
$conn=mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select user_id,name,mail,mobile from student";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
echo"<table border='3px'  cellpadding= '7px' cellspacing= '7px'>";
echo"<tr><th>Name</th><th>Mobile Number</th><th>Mail Id</th><th>Register</th></tr>";
while($r=mysqli_fetch_assoc($b))
{
$id=$r["user_id"];
$name=$r["name"];
$mob=$r["mobile"];
$ma=$r["mail"];

echo"<tr><td>$name</td><td>$mob</td><td>$ma</td><td><a href= 'project1_addbill2.php?stname=$name&&userid=$id'  id= 'txt2'>register</a></td></tr>";

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
