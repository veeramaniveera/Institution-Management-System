<html>
<head>
<style>
img
{
height: 100px;
width: 100px;
}
#a2
{
text-decoration: none;
color: black;
font-size: 30px
}

table
{
background-image:url("hd3.jpeg");
text-transform: capitalize;
border-width:5px;
border-color: black;
color: black;
font-size: 30px;
text-align:center;
margin-left: 250px;
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
<form action="" method="post"  enctype="multipart/form-data">
</form>
<?php
include("project1_student.php");
session_start();
$id= $_SESSION["user_id"];
//echo"$id";
?>
<h1>staff</h1>
<?php
$conn=mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
	
$a1="select company.name as csn,company.mobile as csm,company.photo as csp,company.role as csr from company join bill on bill.staff_id = company.user_id where bill.student_id= '$id'";
$b1=mysqli_query($conn,$a1);
if(mysqli_num_rows($b1))
{
echo"<table border='3px'  cellpadding= '5px' cellspacing= '5px'>";
echo"<tr><th>staff name</th><th>mobile</th><th>role</th><th>photo</th></tr>";
while($r=mysqli_fetch_assoc($b1))
{
$staffname=$r["csn"];
$staffmob=$r["csm"];
$staffrole=$r["csr"];
$staffpic=$r["csp"];

echo"<tr><td>$staffname</td><td>$staffmob</td><td>$staffrole</td><td><img src= '$staffpic'></td></tr>";
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
