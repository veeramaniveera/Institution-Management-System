<html>
<head>
<style>
fieldset
{
border-top-right-radius: 50px;

border-bottom-left-radius: 50px;
margin-left:450px;
margin-right:450px;
margin-top: 100px;
//background:linear-gradient(blue,black);
background-image:url("hd3.jpeg");
text-align: center;
}
table
{

font-size: 20px;
}
#in1
{
color: white;
background-color: black;
margin-left: 150px;
margin-top: 50px;
width: 100px;

}
body
{

}
table
{
text-transform: uppercase;
margin-left: 350px;
margin-top: 150px;
font-size: 50px;
background-image:url("veera.png");
//background-repeat: no-repeat;
color: green;
padding-left: 50px;
}
</style>
</head>
<header>

<?php
include("project1_staff.php");
session_start();
$nm= $_SESSION["name"];

?>
</header>

<body>
<?php
echo"<table border= '3px' cellpadding= '25px' cellspacing= '25px;'>";
echo"<tr><td>welcome  $nm</td></tr>";
echo"</table>";
?>
</body>
</html>
