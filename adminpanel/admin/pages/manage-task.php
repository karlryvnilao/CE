<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>MANAGE TASK</div>
                    </div>
                </div>
            </div>        
            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Task List
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Start Date</th>
                                <th>Ends Date</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selTask = $conn->query("SELECT * FROM task_tbl ORDER BY task_id DESC ");
                                if($selTask->rowCount() > 0)
                                {
                                    while ($selTaskRow = $selTask->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                           <td><?php echo $selTaskRow['task_title']; ?></td>
                                           <td><?php echo $selTaskRow['task_SDate']; ?></td>
                                           <td><?php echo $selTaskRow['task_EDate']; ?></td>
                                           <td><?php echo $selTaskRow['task_desc']; ?></td>
                                           <td>
                                               <a rel="facebox" href="facebox_modal/updateTask.php?id=<?php echo $selTaskRow['task_id']; ?>" class="btn btn-sm btn-primary">Update</a>

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
         
