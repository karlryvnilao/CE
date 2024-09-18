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
$totalExaminees = getTotalCount($conn, 'examinee_tbl');
$totalCourses = getTotalCount($conn, 'course_tbl');
$totalExams = getTotalCount($conn, 'exam_tbl');
$totalModules = getTotalCount($conn, 'module_tbl');
$totalTasks = getTotalCount($conn, 'task_tbl');
$totalFeedbacks = getTotalCount($conn, 'feedbacks_tbl');

function getTraineeCountInCourse($conn, $courseId)
{
    $stmt = $conn->prepare("SELECT COUNT(*) AS trainee_count FROM course_tbl WHERE cou_id = :course_id");
    $stmt->bindParam(':course_id', $courseId, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['trainee_count'];
}

?>

<style>
    .app-theme-white.app-container {
        background-image: url("assets/images/bg1.jpg") !important;
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
    <div class="col-md-6">
        <div class="card" style="border-radius: 10px;">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="card-title">Total Examinees</h5>
                    <p class="card-text"><?php echo $totalExaminees; ?></p>
                </div>
                <div class="page-title-icon" style="font-size: 30px;">
                    <i class="fas fa-users icon-gradient bg-mean-fruit"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card" style="border-radius: 10px;">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="card-title">Total Courses</h5>
                    <p class="card-text"><?php echo $totalCourses; ?></p>
                </div>
                <div class="page-title-icon" style="font-size: 30px;">
                    <i class="fas fa-list icon-gradient bg-mean-fruit"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card" style="border-radius: 10px;">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="card-title">Total Exams</h5>
                    <p class="card-text"><?php echo $totalExams; ?></p>
                </div>
                <div class="page-title-icon" style="font-size: 30px;">
                    <i class="fas fa-paperclip icon-gradient bg-mean-fruit"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card" style="border-radius: 10px;">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="card-title">Total Modules</h5>
                    <p class="card-text"><?php echo $totalModules; ?></p>
                </div>
                <div class="page-title-icon" style="font-size: 30px;">
                    <i class="fas fa-book icon-gradient bg-mean-fruit"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card" style="border-radius: 10px;">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="card-title">Total Tasks</h5>
                    <p class="card-text"><?php echo $totalTasks; ?></p>
                </div>
                <div class="page-title-icon" style="font-size: 30px;">
                    <i class="fas fa-thumbtack icon-gradient bg-mean-fruit"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card" style="border-radius: 10px;">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="card-title">Total Feedbacks</h5>
                    <p class="card-text"><?php echo $totalFeedbacks; ?></p>
                </div>
                <div class="page-title-icon" style="font-size: 30px;">
                    <i class="fas fa-comment icon-gradient bg-mean-fruit"></i>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="row mt-4">
    <?php
    $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
        $courseId = $selCourseRow['cou_id'];
        $traineeCount = getTraineeCountInCourse($conn, $courseId);
    ?>
        <div class="col-md-6 mb-4">
            <div class="card" style="border-radius: 10px;">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="card-title">Total Trainees in <?php echo $selCourseRow['cou_name']; ?></h5>
                        <p class="card-text"><?php echo $traineeCount; ?></p>
                    </div>
                    <div class="page-title-icon" style="font-size: 30px;">
                        <i class="fas fa-bars icon-gradient bg-mean-fruit"></i>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
</div>
    

            <!-- <?php include("includes/graph.php"); ?> -->
      
        
        </div>
         
    </div>
