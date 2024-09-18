<?php 
	session_start();
 include("../conn.php");
 extract($_POST);



 	$date = date("F d, Y");
 	$insUserTask = $conn->query("INSERT INTO usertask_tbl(task_id,exmne_fullname,usertask_answer,usertask_date) VALUES('$task_id','$exmneFName','$answer','$date') ");

 	if($insUserTask)
 	{
 		$res = array("res" => "success");
 	}
 	else
 	{
 		$res = array("res" => "failed");
 	}



echo json_encode($res);
?>