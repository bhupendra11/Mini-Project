<html>


<head>

<link rel="stylesheet" type="text/css" href="main1.css"/>
<title>Register</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <script src="js/script.js"></script>
</head>

<body class="bdy">

<?php  
 require('connect.php');
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$query = "SELECT * FROM `user` WHERE email='$email' and password='$password'";
 $result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 1){
echo "Sucess!!";
}
else
{
echo "<h1 style='color:white;'>Invalid Login Credentials.<br> Enter Correct Email and password.</h1>";
}



?>

</body>
</html>