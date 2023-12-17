<?php 
  include("conn.php");
  include('query/selectData.php');
 ?>
<script src="https://cdn.tiny.cloud/1/8m9ihr9prsil9tzz8wopbneg005dfov733j6zppxux8hkpey/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                          <tbody>
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

                            <div class="form-group mt-3">
                              <textarea id="myTextarea" name="answer"></textarea>
                            </div>
                          <button class="btn btn-outline-dark mt-5" name="submit" style="background-color:transparent;">
                            <i class="fa fa-pencil"></i> Submit
                          </button>
                            </form>
                          </tbody>
                        </table>
                    </div>



                   <?php
                }
                else
                { ?>
                <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div><b>RANKING BY EXAM</b></div>
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
                                             <a href="?page=task-exam&task_id=<?php echo $selExamRow['task_id']; ?>"  class="btn btn-success btn-sm">View</a>
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

<!-- Modules -->
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>
 tinymce.init({
    selector: 'textarea#myTextarea',
    plugins: 'image media link tinydrive code imagetools',
    height: 600,
    toolbar: 'insertfile image link | code',
    tinydrive_token_provider: 'URL_TO_YOUR_TOKEN_PROVIDER',
    tinydrive_dropbox_app_key: 'YOUR_DROPBOX_APP_KEY',
    tinydrive_google_drive_key: 'YOUR_GOOGLE_DRIVE_KEY',
    tinydrive_google_drive_client_id: 'YOUR_GOOGLE_DRIVE_CLIENT_ID'
       });
</script>