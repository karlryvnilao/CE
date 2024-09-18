<?php 
include("conn.php");
include('query/selectData.php');




?>


<div class="app-main__outer">
    <div class="app-main__inner">

        <?php
        @$task_id = $_GET['task_id'];

        if ($task_id != "") {
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
            echo $selTask['task_desc']; // Display task_desc for the selected task
            ?>
            <br>
            <form method="post" id="submitTask">
                <input type="hidden" name="task_id" id="task_id" value="<?php echo $task_id; ?>">
                <input type="hidden" name="exmneFName" id="exmneFName" value="<?php echo strtoupper($selExmneeData['exmne_fullname']); ?>">

                <textarea id="summernote" name="answer"></textarea>

                <button class="btn btn-outline-dark mt-5" name="submit" style="background-color:transparent;">
                    <i class="fa fa-pencil"></i> Submit
                </button>
            </form>

<?php
} else { ?>
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
                            <th class="w-100">Task</th>
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
                        if ($selTask->rowCount() > 0) {
                            while ($selTaskRow = $selTask->fetch(PDO::FETCH_ASSOC)) {
                                $dueDate = strtotime($selTaskRow['task_EDate']);
                                $currentDate = strtotime(date('Y-m-d'));

                                // Check if the due date has passed
                                $dueDatePassed = ($dueDate < $currentDate);
                        ?>
                                <tr>
                                    <td class="pl-4"><?php echo $selTaskRow['task_title']; ?></td>
                                    <td class="text-right"><?php echo $selTaskRow['task_SDate']; ?></td>
                                    <td class="text-right"><?php echo $selTaskRow['task_EDate']; ?></td>
                                    <td class="text-right">
                                        <?php
                                            // Example: Displaying additional information from a database
                                        $taskId = $selTaskRow['task_id'];

                                        // Use the PDO connection established earlier
                                        $yourDatabaseConnection = $conn;

                                        // Perform a database query to fetch additional information based on the task ID
                                        $additionalInfoQuery = "SELECT * FROM usertask_tbl WHERE task_id = :taskId";
                                        $stmt = $yourDatabaseConnection->prepare($additionalInfoQuery);
                                        $stmt->bindParam(':taskId', $taskId, PDO::PARAM_INT);
                                        $success = $stmt->execute();

                                        // Check if the query was successful
                                        if ($success) {
                                            // Fetch and display the additional information
                                            $additionalInfo = $stmt->fetch(PDO::FETCH_ASSOC);
                                            
                                            // Check if data was retrieved
                                            if ($additionalInfo) {
                                                echo $additionalInfo['usertask_submit'];
                                            } else {
                                                echo "Not yet";
                                            }
                                        } else {
                                            // Handle the case when the query fails
                                            $errorInfo = $stmt->errorInfo();
                                            echo "Error fetching additional information. Error: {$errorInfo[2]}";
                                        }
                                        ?>
                                    </td>
                                    <td class="text-right">
                                    <?php
                                    // Example: Displaying additional information from a database
                                    $taskId = $selTaskRow['task_id'];

                                    // Use the PDO connection established earlier
                                    $yourDatabaseConnection = $conn;

                                    // Perform a database query to fetch additional information based on the task ID
                                    $additionalInfoQuery = "SELECT * FROM usertask_tbl WHERE task_id = :taskId";
                                    $stmt = $yourDatabaseConnection->prepare($additionalInfoQuery);
                                    $stmt->bindParam(':taskId', $taskId, PDO::PARAM_INT);
                                    $success = $stmt->execute();

                                    // Check if the query was successful
                                    if ($success) {
                                        // Fetch and display the additional information
                                        $additionalInfo = $stmt->fetch(PDO::FETCH_ASSOC);
                                        
                                        // Check if data was retrieved
                                        if ($additionalInfo) {
                                            echo $additionalInfo['usertask_score'];
                                        } else {
                                            echo "-";
                                        }
                                    } else {
                                        // Handle the case when the query fails
                                        $errorInfo = $stmt->errorInfo();
                                        echo "Error fetching additional information. Error: {$errorInfo[2]}";
                                    }
                                    ?>
                                    </td>
                                    <td class="text-right">
                                        <?php
                                            // Example: Displaying additional information from a database
                                        $taskId = $selTaskRow['task_id'];

                                        // Use the PDO connection established earlier
                                        $yourDatabaseConnection = $conn;

                                        // Perform a database query to fetch additional information based on the task ID
                                        $additionalInfoQuery = "SELECT * FROM usertask_tbl WHERE task_id = :taskId";
                                        $stmt = $yourDatabaseConnection->prepare($additionalInfoQuery);
                                        $stmt->bindParam(':taskId', $taskId, PDO::PARAM_INT);
                                        $success = $stmt->execute();

                                        // Check if the query was successful
                                        if ($success) {
                                            // Fetch and display the additional information
                                            $additionalInfo = $stmt->fetch(PDO::FETCH_ASSOC);
                                            
                                            // Check if data was retrieved
                                            if ($additionalInfo) {
                                                echo $additionalInfo['usertask_grade'];
                                            } else {
                                                echo "-";
                                            }
                                        } else {
                                            // Handle the case when the query fails
                                            $errorInfo = $stmt->errorInfo();
                                            echo "Error fetching additional information. Error: {$errorInfo[2]}";
                                        }
                                        ?>
                                    </td>

                                    <td class="text-center">
                                    <button class="btn btn-success btn-sm" <?php if ($dueDatePassed) echo 'style="display: none;"'; ?>>
                                            <a href="?page=task-exam&task_id=<?php echo $selTaskRow['task_id']; ?>" style="color: white; text-decoration: none;">
                                                View
                                            </a>
                                        </button>
                                    </td>
                                </tr>

                        <?php }
                        } else { ?>
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

<?php } ?>
      
        
</div>
<script>
</script>

