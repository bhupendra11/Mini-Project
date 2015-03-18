<!DOCTYPE html>
<html>
<head>
<title>
Recent Questions</title>
<link rel="stylesheet" type="text/css" href="main1.css"/>

<style>
.xx
{
background-color:#366b82;
color:white;
}
.tbl
{
border:1px solid white;margin-top:-120px;background-color:white; width:80%;
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

$conn =  mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
$query="select * from tb_question order by question_post_date desc";
$result=mysql_query($query);
echo "<center><table class='tbl'><tr class='xx'><td>Questions Asked:</td><td>Question Id</td><td>User Id</td><td>Answered Bit</td><td>Post Date</td></tr>";

$queno=1;
while($res=mysql_fetch_row($result))
{

echo "<tr><td>Q".$queno." ..".$res[0]."</td><td>".$res[1]."</td> <td>".$res[2]."</td> <td>".$res[3]."</td> <td>".$res[4]."</td> </tr><br>";
echo "<tr><td><form action='answerpost.php' method='get'>  </td><td><a href=answerpost.php?qid=$res[1]&uid=$res[2]>".
"<input style='color:white;width:200px; height:35px; border:1px solid white;border-radius:12px; background-color:gray;' type=button value='Answer this Question' name=send /> </a>".
"</form></td></tr>"; 
$queno++;

}

echo "</table></center>";

?>

</body>
</html>