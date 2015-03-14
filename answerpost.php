<!DOCTYPE html>
<html>
<head>
<style>
.xx
{
background-color:black;
color:white;
}
.tbl
{
border:1px solid black;background-color:gray; width:80%;
}
</style>
</head>
<body>

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
echo "<tr><td>Q" .$res[0]."</td><td>".$res[1]."</td> <td>".$res[2]."</td> <td>".$res[3]."</td> <td>".$res[4]."</td> </tr><br>";
}
echo "</table>"	;

?>
<center>
<table class="tbl">
<form action="postans.php" method="post">
<tr><td>
<textarea rows=15, cols=200 name='answer'></textarea>
</td>
<td><input type='submit' value="Post Answer" ></input></td>
</tr>
</form>
</center>
</table>
</body>
</html>