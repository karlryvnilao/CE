<?php
include("../../../conn.php");
extract($_POST);


$updModule = $conn->query("UPDATE module_tbl SET title='$mdl_title', description='$mdl_description' WHERE mdl_id='$mdl_id' ");
if($updModule)
{
	$res = array("res" => "success", "mdl_title" => $mdl_title);
}
else
{
	$res = array("res" => "failed");
}



echo json_encode($res);
?>