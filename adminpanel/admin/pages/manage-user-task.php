<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>MANAGE USER TASK</div>
                    </div>
                </div>
            </div>        
            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">User Task List
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Name</th>
                                <th>Date Submitted</th>
                                <th>Submitted</th>
                                <th>Score</th>
                                <th>Grade</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selTask = $conn->query("SELECT * FROM usertask_tbl ORDER BY usertask_id DESC ");
                                if($selTask->rowCount() > 0)
                                {
                                    while ($selTaskRow = $selTask->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td>
                                            <?php 
                                            
                                            ?>
                                            </td>
                                           <td><?php echo $selTaskRow['exmne_fullname']; ?></td>
                                           <td><?php echo $selTaskRow['usertask_date']; ?></td>
                                           <td><?php echo $selTaskRow['usertask_submit']; ?></td>
                                           <td><?php echo $selTaskRow['usertask_score']; ?></td>
                                           <td><?php echo $selTaskRow['usertask_grade']; ?></td>
                                           <td>
                                               <a rel="facebox" href="facebox_modal/updateUserTask.php?id=<?php echo $selTaskRow['usertask_id']; ?>" class="btn btn-sm btn-success">view</a>

                                           </td>
                                        </tr>
                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="2">
                                        <h3 class="p-3">No Course Found</h3>
                                      </td>
                                    </tr>
                                <?php }
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        
</div>

