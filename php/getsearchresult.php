<?php
//error_reporting(E_ALL & ~ E_NOTICE & ~ E_WARNING);
	require_once 'connection.php';
	if(isset($_POST['submit'])){
		$searchitem = $_POST['search'];
		$inc=0;
		$inc_pri=0;
		$tags=explode(" ", $searchitem);
		$tag_size=sizeof($tags);
		for ($i=0; $i < $tag_size; $i++) { 
		$query = "select * from tb_tags where tags like '{$tags[$i]}'";
		$result_set=mysql_query($query);
		$num=mysql_num_rows($result_set);
		$sorted;
		$counter;
	
		while ($found_ques = mysql_fetch_array($result_set)) {
			$found=0;
			
			if(in_array($found_ques['qid'],$sorted)){
				$index = array_search($found_ques['qid'],$sorted);
				$counter[$index]++;
			}else{
				$sorted[$inc]=$found_ques['qid'];
				$counter[$inc]=1;
				$inc++;
			}
		}	
		
	}
		for ($i=max($counter); $i >0; $i--) {
		 
			for ($j=0; $j < $inc; $j++) { 
				if ($counter[$j]==$i) {
				//secho $sorted[$j].'	'.$counter[$j]."<br>";
				$question_query = "select * from tb_question where question_id='{$sorted[$j]}'";
				$question_result_set = mysql_query($question_query);
				$num = mysql_num_rows($question_result_set);
				while ($question_found = mysql_fetch_array($question_result_set)) {
					echo htmlentities($question_found['question'])."<br>";
					$answer_query = "select * from tb_answer where question_id='{$sorted[$j]}'";
					$answer_result_set = mysql_query($answer_query);
					while($answer_found = mysql_fetch_array($answer_result_set)){
						echo htmlentities($answer_found['answer'])."<br>";
					}
					echo("<br>");
				}
			}
		}
		}
	}	

?>