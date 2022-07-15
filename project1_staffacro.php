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
</style>

</head>
<body>
<form action="" method= "post">
</form>
<?php
include("project1_staff.php");
?>
<h1>Staff acro</h1>

<?php
$un=$_GET["userid"];
//echo"$un";
$ap= "Approved";

$conn= mysqli_connect("localhost:3306","root","","project_1");
if(!$conn)
{
die("connection error".mysqli_error());
}
$a="update request set staff_status='$ap' where user_id='$un'";
if(mysqli_query($conn,$a))
{
echo"<script>alert('Approved successfully');</script>";
}




?>
</body>
</html>





