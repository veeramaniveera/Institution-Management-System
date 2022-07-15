<html>
<head>
<title>even</title>

</head>
<body>
<form action="" method= "post" enctype="multipart/form-data">
<h1>REGISTRATION FORM </h1>
<p>NAME= <input type= "text" name= "t1"> </p>
<p>MAIL_ID= <input type= "text" name= "t2"> </p>
<p>MOB_NUM= <input type= "text" name= "t3"> </p>
<p>PROFILE= <input type= "file" name= "image_file"> </p>
<p>ADDRESS= <textarea name= "t4"></textarea> </p>
<p>COUNTRY= <select name= "t5"><option>AMERICA</option><option>AUSTRALIA</option><option>INDIA</option><option>SOUTH AFRICA</option></select></p>


<input type= "submit"  name= "veera">
</form>
<?php

if(isset($_POST["veera"]))
{
$n= $_POST["t1"];
$ma= $_POST["t2"];
$mob= $_POST["t3"];
$add= $_POST["t4"];
$coun= $_POST["t5"];

$var= basename($_FILES['image_file']['name']);

$tar="image/";
//$tar1= $tar.basename($_FILES['image_file']['name']);
//$image_file=basename($tar1);

$conn= mysqli_connect("localhost:3306","root","","veera_db");

if(!$conn)
{
die("connection error".mysqli_error());
}

$a="insert into registration_form(name,mail,mobile,profile,address,country) values('$n','$ma','$mob','$var','$add','$coun')";

if(mysqli_query($conn,$a))
{
echo"<script>alert('registerd successfully');</script>";
if(move_uploaded_file($_FILES['image_file']['tmp_name'],$var))
{
echo("file moved successfully");
}
}
}
?>
</body>
</html>
