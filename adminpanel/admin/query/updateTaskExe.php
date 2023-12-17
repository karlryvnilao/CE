<?php
 include("../../../conn.php");
 extract($_POST);


$updModule = $conn->query("UPDATE task_tbl SET task_title='$title', task_SDate='$SDate', task_EDate='$EDate', task_desc='$desc' WHERE task_id='$task_id' ");
if($updModule)
{
	$res = array("res" => "success", "title" => $title);
}
else
{
	$res = array("res" => "failed");
}



 echo json_encode($res);
?>