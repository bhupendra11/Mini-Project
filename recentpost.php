<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iecsis";

$conn =  mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
$query="select * from tb_question order by question_post_date desc";
$result=mysql_query($query);
echo "<center><table style='margin-top:-150px;'><tr class='xx'><td>Recent Questions Posted:</td><td>Question Id</td><td></td>".
		"<td></td><td>Post Date</td></tr>";
$queno=1;
while($res=mysql_fetch_row($result))
{
echo "<tr><td>Q".$queno." ..".$res[0]."</td><td>".$res[1]."</td> <td></td> <td></td> <td>".$res[4]."</td> </tr><br>";
echo "<tr><td><form action='answerpost.php' method='get'>  </td><td><a href=answerpost.php?qid=$res[1]&uid=$res[2]>".
		"<input style='color:white;width:200px; height:35px; border:1px solid white;border-radius:12px; background-color:gray;'".
		" type=button value='Answer this Question' name=send /> </a>".
		"</form></td></tr>"; 
$queno++;
}
echo "</table></center>";
?>