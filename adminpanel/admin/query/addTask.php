<?php 
 include("../../../conn.php");

extract($_POST);

$t_title = $conn->query("SELECT * FROM task_tbl WHERE description='$taskTitle' ");

if($Sdate == "0")
{
    $res = array("res" => "noSDate");
}
else if($Edate == "0")
{
    $res = array("res" => "noEDate");
}
else if($taskDesc == "0")
{
    $res = array("res" => "noDesc");
}
else if($t_title->rowCount() > 0)
{
  $res = array("res" => "titleexist", "msg" => $taskTitle);
}
else
{
	$insTask = $conn->query("INSERT INTO task_tbl(task_title,task_SDate,task_EDate,task_desc) VALUES('$taskTitle','$Sdate','$Edate','$taskDesc') ");

	if($insTask)
	{
       $res = array("res" => "success", "msg" => $taskTitle);
	}
	else
	{
       $res = array("res" => "failed");
	}
}



echo json_encode($res);
 ?>