<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "cee_db";

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  die("Error: " . $e->getMessage());
}

// Function to get total count from a table
function getTotalCount($conn, $tableName)
{
  $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM $tableName");
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result['total'];
}

// Get total counts
$totalExam = getTotalCount($conn, 'exam_tbl');
$totalTask = getTotalCount($conn, 'task_tbl');
$totalModule = getTotalCount($conn, 'module_tbl');


?>

<style>
    .app-theme-white.app-container {
        background-image: url("assets/images/bg.jpg") !important;
        background-repeat: no-repeat;
        display: block;
        background-size: cover;
    }

</style>

<div class="app-main__outer">
    <div id="refreshData">
    <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-ribbon icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Analytics Dashboard
                            <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                            </div>
                        </div>
                    </div>
                    
                 </div>
            </div>
            <div class="container mt-5">    
            <div class="row mt-4">
    <div class="col-md-4">
        <div class="card" style="border-radius: 10px;">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="card-title">Total Exam</h5>
                    <p class="card-text"><?php echo $totalExam; ?></p>
                </div>
                <div class="page-title-icon" style="font-size: 30px;">
                    <i class="fas fa-users icon-gradient bg-mean-fruit"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="border-radius: 10px;">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="card-title">Total Task</h5>
                    <p class="card-text"><?php echo $totalTask; ?></p>
                </div>
                <div class="page-title-icon" style="font-size: 30px;">
                    <i class="fas fa-list icon-gradient bg-mean-fruit"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="border-radius: 10px;">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="card-title">Total Module</h5>
                    <p class="card-text"><?php echo $totalModule; ?></p>
                </div>
                <div class="page-title-icon" style="font-size: 30px;">
                    <i class="fas fa-book icon-gradient bg-mean-fruit"></i>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
    

            <!-- <?php include("includes/graph.php"); ?> -->
      
        
        </div>
         
    </div>
