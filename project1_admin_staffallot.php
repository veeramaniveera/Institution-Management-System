<html>
<head>
<style>
#bt
{
margin-left: 620px;
margin-top: 20px;
font-size: 20px;
width: 100px;
color: white;
background-color: black;
}
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
//border-width:3px;
//border-color:red;
color: black;
font-size:30px;
text-align:center;
background-image:url("hd3.jpeg");
margin-left: 550px;
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
include("project1_admin2.php");
?>
<form action="" method="get">



<h1>allot staff</h1>
<?php

$conn=mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select * from company where course='none'";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
echo"<table border='3px'  cellpadding= '10px' cellspacing= '10px'>";
echo"<tr><td>staff id</td><td><select name='t1'>";
while($r=mysqli_fetch_assoc($b))
{

$id=$r["user_id"];
echo"<option value='$id'>$id</option>";

//echo"<tr><td>$id</td><td>$cid</td><td>$sid</td><td>$pm</td><td>$dt</td></tr>";
}
echo"</select></td></tr>";

}
else
{
echo"<script>alert('No data Found');</script>";
}


$e="select course_name from add_course";
$f=mysqli_query($conn,$e);
if(mysqli_num_rows($f))
{
echo"<tr><td>course</td><td><select name='t2'>";
while($r=mysqli_fetch_assoc($f))
{

$coname=$r["course_name"];
echo"<option value='$coname'>$coname</option>";

//echo"<tr><td>$id</td><td>$cid</td><td>$sid</td><td>$pm</td><td>$dt</td></tr>";
}
echo"</select></td></tr>";
echo"</table>";
}
else
{
echo"<script>alert('No data Found');</script>";
}

?>

<input type="submit"  name= "veera" id="bt">
</form>
<?php
if(isset($_GET["veera"]))
{
$id1= $_GET["t1"];
$course1= $_GET["t2"];
//echo($id1);
//echo"$course1";

//$m="update company set course='$course1' where user_id='$id1'";
if(mysqli_query($conn,$m))
{
echo"<script>alert('uptate successfully');</script>";
}
}
?>
</body>
</html>
