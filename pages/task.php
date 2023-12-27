<?php 
  include("conn.php");
  include('query/selectData.php');


?>


<div class="app-main__outer">
        <div class="app-main__inner">
             


            <?php 
                @$task_id = $_GET['task_id'];


                if($task_id != "")
                {
                    $selTask = $conn->query("SELECT * FROM task_tbl WHERE task_id='$task_id' ")->fetch(PDO::FETCH_ASSOC);
                  



                   ?>
                   <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div><b class="text-primary">Task</b><br>
                                Prepare Answer for <?php echo $selTask['task_title']; ?>
                            </div>
                        </div>
                    </div>
                    </div>
                            <?php
                             $selTask = $conn->query("SELECT task_desc FROM task_tbl");
                             if($selTask->rowCount() > 0)
                             {
                                 while ($selTaskRow = $selTask->fetch(PDO::FETCH_ASSOC)) { 

                                  echo $selTaskRow['task_desc'];
                                 }}
                            ?>
                            <br>
                            <form method="post" id="submitTask">
                            <input type="hidden" name="task_id" id="task_id" value="<?php echo $task_id; ?>">
                            <input type="hidden" name="exmneFName" id="exmneFName" value="<?php echo strtoupper($selExmneeData['exmne_fullname']); ?>">

                            <div id="summernote"></div>

                          <button class="btn btn-outline-dark mt-5" name="submit" style="background-color:transparent;">
                            <i class="fa fa-pencil"></i> Submit
                          </button>
                            </form>



                <?php
                }
                else
                { ?>
                <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div><b>All Task</b></div>
                    </div>
                </div>
                </div>

                <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">ExAM List
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                            <th class=" w-100">Task</th>
                                <th class="text-center">Start</th>
                                <th class="text-center">Due</th>
                                <th class="text-center">Submitted</th>
                                <th class="text-center">Score</th>  
                                <th class="text-center">Grade</th>  
                                <th class="text-center">Action</th>  
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                 $selTask = $conn->query("SELECT * FROM task_tbl ORDER BY task_id DESC ");
                                 if($selTask->rowCount() > 0)
                                 {
                                     while ($selTaskRow = $selTask->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                        <td class="pl-4"><?php echo $selTaskRow['task_title']; ?></td>
                                            <td class="text-right"><?php echo $selTaskRow['task_SDate']; ?></td>
                                            <td class="text-right"><?php echo $selTaskRow['task_EDate']; ?></td>
                                            <td class="text-right">
                                            <?php
                                                    // $courseId =  $selExamRow['cou_id'];
                                                    // $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    // while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                    //     echo $selCourseRow['cou_name'];
                                                    // }
                                                ?>
                                            </td>
                                            <td class="text-right">
                                            <?php
                                                    // $courseId =  $selExamRow['cou_id'];
                                                    // $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    // while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                    //     echo $selCourseRow['cou_name'];
                                                    // }
                                                ?>
                                            </td>
                                            <td class="text-right">
                                            <?php
                                                    // $courseId =  $selExamRow['cou_id'];
                                                    // $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    // while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                    //     echo $selCourseRow['cou_name'];
                                                    // }
                                                ?>
                                            </td>

                                            <td class="text-center">
                                             <a href="?page=task-exam&task_id=<?php echo $selTaskRow['task_id']; ?>"  class="btn btn-success btn-sm">View</a>
                                            </td>
                                        </tr>

                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="5">
                                        <h3 class="p-3">No Exam Found</h3>
                                      </td>
                                    </tr>
                                <?php }
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                    
                <?php }

             ?>      
            
            
      
        
</div>
<script>
    



       function submitTask() {
        var task_id = document.getElementById('task_id').value;
        var exmneFName = document.getElementById('exmneFName').value;
        var answer = document.getElementById('summernote').value;

        var data = {
            task_id: task_id,
            exmneFName: exmneFName,
            answer: answer
        };

        // Use AJAX to send data to the PHP script
        $.ajax({
            type: 'POST',
            url: 'insert.php', // Update with the actual path to your PHP script
            data: { data: JSON.stringify(data) },
            success: function(response) {
                console.log(response);
                // Handle success, if needed
            },
            error: function(error) {
                console.error(error);
                // Handle error, if needed
            }
        });
    }
</script>