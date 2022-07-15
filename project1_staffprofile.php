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
include("project1_staff.php");
?>
<form action="" method="post"  enctype="multipart/form-data">
</form>

<h1>staff Profile</h1>
<?php
session_start();
$nm= $_SESSION["name"];

$conn=mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select * from company where name= '$nm'";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
echo"<table border='3px'  cellpadding= '5px' cellspacing= '5px'>";
echo"<tr><th>User Id</th><th>Name</th><th>Mobile Number</th><th>Education</th><th>Photo</th><th>Aadhar</th><th>Certificate</th><th>Role</th><th>Address</th><th>Country</th></tr>";
while($r=mysqli_fetch_assoc($b))
{

$id=$r["user_id"];
$name=$r["name"];
$mob=$r["mobile"];
$edu=$r["education"];
$pic=$r["photo"];
$aadh=$r["aadhar"];
$cer=$r["certificate"];
$rl=$r["role"];
$add=$r["address"];
$coun=$r["country"];

echo"<tr><td>$id</td><td>$name</td><td>$mob</td><td>$edu</td><td><img src= '$pic'></td><td><img src='$aadh'></td><td><img src='$cer'></td><td>$rl</td><td>$add</td><td>$coun</td></tr>";
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
