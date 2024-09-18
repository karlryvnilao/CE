<?php 
 include("../../../conn.php");

extract($_POST);

$t_title = $conn->query("SELECT * FROM task_tbl WHERE task_title='$taskTitle' ");

if($taskDesc == "0")
{
    $res = array("res" => "noDesc");
}
else if($taskSdate == "0")
{
    $res = array("res" => "noSDate");
}
else if($taskEdate == "0")
{
    $res = array("res" => "noEDate");
}
else if($t_title->rowCount() > 0)
{
  $res = array("res" => "titleexist", "taskTitle" => $taskTitle);
}
else
{
	$insTask = $conn->query("INSERT INTO task_tbl(task_title, task_SDate, task_EDate, task_desc) VALUES('$taskTitle','$taskSdate','$taskEdate','$taskDesc') ");

	if($insTask)
	{
		$res = array("res" => "success", "taskTitle" => $taskTitle);
	}
	else
	{
		$res = array("res" => "failed", "taskTitle" => $taskTitle);
	}
}



echo json_encode($res);
 ?>