<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iecsis";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
   $question = $_REQUEST['que'];
   
   if($question!="" )
   {
$sql = "INSERT INTO tb_question (question) VALUES( '$question')";
       
if ($conn->query($sql) === TRUE) {

echo "Your question posted successfully!";

}
else
{
echo "failed in posting";
}
}
else
{
echo "Please write your Question to post!!";
}




$conn->close();
?>