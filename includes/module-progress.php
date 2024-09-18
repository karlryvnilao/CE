<?php
    session_start();
    include("../conn.php");
    $result = [];
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $mdl_id = $_GET['id'];
    $examne_id = $_SESSION['examineeSession']['exmne_id'];
    $already_viewed_flag = false;
    $modules_count['modules_viewed'] = 1;
    try{
        $modules_query = $conn->query("SELECT COUNT(*) as module_count FROM module_tbl");
        $modules_count = $modules_query->fetch(PDO::FETCH_ASSOC);
        
        $examne_viewed_modules = $conn->query("SELECT mdl_id FROM `examinee_viewed_modules` WHERE exmne_id = '$examne_id'");
        $examne_viewed_modules_res = $examne_viewed_modules->fetchAll(PDO::FETCH_ASSOC);
        foreach ($examne_viewed_modules_res as $val){
            if ($mdl_id == $val['mdl_id']){
                $already_viewed_flag = true;
                break;
            }
        }
        $result['total_modules'] = $modules_count['module_count'];
        $result['viewed_modules'] = count($examne_viewed_modules_res);
        $result['is_viewed'] = $already_viewed_flag;
        if (!$already_viewed_flag){
            $viewed_modules_query = $conn->exec("INSERT INTO examinee_viewed_modules (exmne_id, mdl_id) VALUES ('$examne_id', '$mdl_id')");
        }
    }
    catch(PDOException $e) {
        $result['error'] = $sql . "<br>" . $e->getMessage();
    }
    echo json_encode($result);

?>
