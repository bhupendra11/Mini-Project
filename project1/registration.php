
<!DOCTYPE html>
<html lang="en" >
<head>
    <title>Register</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <script src="js/script.js"></script>
</head>
<body>
    
    <div class="container">
        
        <form action="check.php" method="post" id="form" onsubmit="return validate_all('results');">
            <table cellspacing="10">
                <tr><td>Username</td><td><input type="text" name="username" maxlength="90" id="username" onKeyUp="updatelength('username', 'username_length')"><br /><div id="login_length"></div> </td></tr>
                <tr><td>Password</td><td><input type="password" name="pass" maxlength="25" id="password" onKeyUp="updatelength('password', 'pass_length')"><div id="pass_result"></div><br /><div id="pass_length"></div></td></tr>
               
                <tr><td>Gender</td><td><select name="gender"><option value="male">male</option><option value="female">female</option><option value="other">other</option></select></td></tr>
                <tr><td>Email</td><td><input type="text" name="email" maxlength="50" id="email" onKeyUp="updatelength('email', 'email_length')"><br /><div id="email_length"></div></td></tr>
                <tr><td colspan="2"><input type="submit" name="submit" value="Register"></td></tr>
            </table>
            <h3 id="results"></h3>
        </form>
    </div>
</body>
</html>

