<html>

<head>

<link rel="stylesheet" type="text/css" href="main1.css"/>
<title>Register</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <script src="js/script.js"></script>
</head>
<body>
<div id="navbar">

<ul>
<li class="nohover"><a href="index.php" ><img src="images\logo.jpg" style=""></img></a></li>

<li><a> NOTIFICATION</a></li>
<li><a> CONTACT US</a></li>
<li><a href="login.html"> LOGIN</a></li>
<li><a href="registration.php">SIGN UP</a></li>



</ul>
</div>
<div id="tfheader">
		<form  id="tfnewsearch" action="getsearchresult.php" method="post">
				<input class="tftextinput" type="textbox" name="search" />
			    <input class="tfbutton" type="submit" value="Search" name="submit"/>
		</form>
	<div class="tfclear"></div>
</div>

<div>

<table class="tbl">
<tr width="100%">
<td width="20%" style="background-color:#c3dfef;" >

<center>
<ul style="text-align:left;">
<li><a href="question.html">Post Questions</a></li>
<li><a href="answer.php">Post Answer</a></li>
<li><a href="preview.php">Preview Question and Answer post!!</a></li>

</ul>
</center>


</td>
<td width="60%">



<div class="container">
        
        <form class="regform" action="check.php" method="post" id="form" onsubmit="return validate_all('results');">
            <table cellspacing="10">
                <tr><td>Username</td><td><input type="text" name="username" maxlength="90" id="username" onKeyUp="updatelength('username', 'username_length')"><br /><div id="login_length"></div> </td></tr>
                <tr><td>Password</td><td><input type="password" name="pass" maxlength="25" id="password" onKeyUp="updatelength('password', 'pass_length')"><div id="pass_result"></div><br /><div id="pass_length"></div></td></tr>
               
                <tr><td>Gender</td><td><select name="gender"><option value="male">male</option><option value="female">female</option><option value="other">other</option></select></td></tr>
                <tr><td>Email</td><td><input type="text" name="email" maxlength="50" id="email" onKeyUp="updatelength('email', 'email_length')"><br /><div id="email_length"></div></td></tr>
                <tr><td></td><td colspan="2" style="text-align:center;"><input class='btn' type="submit" name="submit" value="Register" /></td></tr>
            </table>
            <h3 id="results"></h3>
        </form>
    </div>







</td>

<td width="20%" style="background-color:#c3dfef;">




</td>
</tr>





</table>








</div>
	
	
    
	
	<div id="footer1" style="clear:both;">
	  <center> <B>CONTACT US</B></center>
	  
	</div>

</body>
</html>