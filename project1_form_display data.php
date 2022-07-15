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


}
th
{
color: black;
text-transform:uppercase;
}
</style>
</head>
<body>
<form action="" method="post"  enctype="multipart/form-data">
</form>

<h1>Account Details</h1>
<?php
$conn=mysqli_connect("localhost:3306","root","","veera_db");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select * from registration_form";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
echo"<table border='3px'  cellpadding= '7px' cellspacing= '7px'>";
echo"<tr><th>User Id</th><th>Name</th><th>Mail Id</th><th>Mobile Number</th><th>Profile</th><th>Address</th><th>Country</th><th>uptate</th><th>delete</th></tr>";
while($r=mysqli_fetch_assoc($b))
{

$id=$r["user id"];
$name=$r["name"];
$mail=$r["mail"];
$mob=$r["mobile"];
$pro=$r["profile"];
$add=$r["address"];
$coun=$r["country"];

echo"<tr><td>$id</td><td>$name</td><td>$mail</td><td>$mob</td><td><img src= '$pro'></td><td>$add</td><td>$coun</td><td><a href= 'Edit.php?uid=$id && name=$name'>edit</a></td><td><a href='fulldelete.php?uid=$id && name=$name'>delete</a></td></tr>";
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
