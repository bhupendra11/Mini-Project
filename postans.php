<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iecsis";
    session_start();
	
	$queid = $_SESSION['queid'];
    $uid=$_SESSION['uid'];
   $answer=$_REQUEST['answer'];


$con =  mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
if($answer!="")
{
$sql="insert into tb_answer (answer,user_id,question_id) values('$answer','$uid','$queid')";
$status=mysql_query($sql,$con);

if ($status === TRUE) {

echo "You answer posted successfully!";

}
else
{
echo "failed in posting";
}
}
else
{
echo "Write your answer";
}


?>