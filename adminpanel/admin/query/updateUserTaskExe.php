<?php
 include("../../../conn.php");
 extract($_POST);


$updTask = $conn->query("UPDATE usertask_tbl SET usertask_submit='$utSubmit', usertask_score='$utScore', usertask_grade='$utGrade' WHERE usertask_id='$usertask_id' ");
if($updTask)
{
	$res = array("res" => "success", "utSubmit" => $utSubmit);
}
else
{
	$res = array("res" => "failed");
}



 echo json_encode($res);
?>