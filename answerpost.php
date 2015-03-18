<!DOCTYPE html>
<html>
<head>
<title>
Post Answer</title>
<link rel="stylesheet" type="text/css" href="main1.css"/>

<style>
.xx
{
background-color:#366b82;
color:white;
}
.tbl
{
border:1px solid white;background-color:#366b82; width:80%;
}
</style>
</head>
<body>
<div id="navbar">
<ul>
<li class="nohover"><a href="index.php" ><img src="images\logo.jpg" style=""></img></a></li>
<li><a> NOTIFICATION</a></li>
<li><a> CONTACT US</a></li>
<li><a href="login.html"> LOGIN</a></li>
<li><a href="register.html">SIGN UP</a></li>
</ul>
</div>
<div id="tfheader">
		<form  id="tfnewsearch" action="getsearchresult.php" method="post">
				<input class="tftextinput" type="textbox" name="search" />
			    <input class="tfbutton" type="submit" value="Search" name="submit"/>
		</form>
	<div class="tfclear"></div>
</div>




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iecsis";
    
	
	$queid = $_REQUEST['qid'];
    $uid=$_REQUEST['uid'];
    
	
	session_start();


$_SESSION['queid'] = $queid;
$_SESSION['uid']   = $uid;

$conn =  mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
$query="select * from tb_question where question_id='$queid' and user_id='$uid'";
$result=mysql_query($query);
  
echo "<center><table class='tbl'><tr class='xx'><td>Questions Asked:</td><td>Question Id</td><td>User Id</td><td>Answered Bit</td><td>Post Date</td></tr>";

while($res=mysql_fetch_row( $result))
{
echo "<tr><td>Que.. " .$res[0]."</td><td>".$res[1]."</td> <td>".$res[2]."</td> <td>".$res[3]."</td> <td>".$res[4]."</td> </tr><br>";
}
echo "</table>"	;

?>
<h3 style="color:black; text-align:left;">Answer:</h3>
<center>

<table class="tbl">
<form action="postans.php" method="post">
<tr><td>
<textarea style="color:blue; font-size:20px;" rows=10, cols=100 name='answer'></textarea>
</td>
<td><input style="color:white;width:150px; height:35px; border:1px solid white;border-radius:12px; background-color:gray;" type='submit' value="Post Answer" ></input></td>
</tr>
</form>
</center>
</table>
</body>
</html>