<html>
<head>


</head>
<body>
<form action="" method= "post">
</form>
<?php
//include("project1_admin2.php");
?>
<h1>admin appro</h1>

<?php
$un=$_GET["userid1"];
//echo"$un";
$ap= "Approved";

$conn= mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("connection error".mysqli_error());
}
$a="update request set admin_status='$ap',status= '$ap' where user_id='$un'";
if(mysqli_query($conn,$a))
{
echo"<script>alert('Approved successfully');</script>";
}




?>
</body>
</html>





