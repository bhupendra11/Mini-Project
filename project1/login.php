<?php
 

error_reporting(E_ALL & ~E_NOTICE);
session_start(); 


if(isset($_SESSION[email]))
{
	header("Location: index.php");
}

else {
?>

<!DOCTYPE html>
<html lang="en" >
<head>
   
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <script src="js/script.js"></script>
</head>
<body>
    
    <div class="container">
       
        <form action="check1.php" method="post" id="form" onsubmit="return validate_all('results');">
            <table cellspacing="10">
               <tr><td>Email</td><td><input type="text" name="email" maxlength="100" id="email" onKeyUp="updatelength('email', 'email_length')"><br /><div id="email_length"></div></td></tr>
                <tr><td>Password</td><td><input type="password" name="pass" maxlength="25" id="password" onKeyUp="updatelength('password', 'pass_length')"><div id="pass_result"></div><br /><div id="pass_length"></div></td></tr>
                <tr><td colspan="2"><input type="submit" name="submit" value="Register"></td></tr>
            </table>
            <h3 id="results"></h3>
        </form>
    </div>
</body>
</html>

<?php } ?>