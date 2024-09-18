<?php
 include("../../../conn.php");
 extract($_POST);


$updModule = $conn->query("UPDATE task_tbl SET task_title='$taskTitle', task_SDate='$taskSdate', task_EDate='$taskEdate', task_desc='$taskDesc' WHERE task_id='$task_id' ");
if($updModule)
{
	$res = array("res" => "success", "title" => $taskTitle);
}
else
{
	$res = array("res" => "failed");
}



 echo json_encode($res);
?>