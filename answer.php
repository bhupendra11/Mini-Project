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
border:1px solid black;margin-top:-90px;background-color:gray; width:80%;
}
</style>
</head>
<body>

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
echo "<tr><td><form action='answerpost.php' method='get'>  </td><td><a href=answerpost.php?qid=$res[1]&uid=$res[2]><input type=button value='Answer this Question' name=send /> </a></form></td></tr>"; 
//echo "<tr><td><textarea cols='100' rows='5' type='text' name='ans' ></textarea></td>".
//"<td><input type='submit' value='post'  /></td><td><a href=answerpost.php?qid=$res[1]&uid=$res[2]></td></tr>";

$queno++;

}

echo "</table></center>";

?>

</body>
</html>