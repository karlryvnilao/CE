
<?php 
  include("../../../conn.php");
  $id = $_GET['id'];
 
  $selTask= $conn->query("SELECT * FROM task_tbl WHERE task_id='$id' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<fieldset style="width:543px;" >
	<legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update <b>( <?php echo strtoupper($selTask['task_title']); ?> )</b></i></legend>
  <div class="col-md-12 mt-4">
<form method="post" id="updateTaskFrm">
     <div class="form-group">
        <legend>Title</legend>
        <input type="hidden" name="task_id" value="<?php echo $id; ?>">
        <input type="" name="title" class="form-control" required="" value="<?php echo $selTask['task_title']; ?>" >
     </div>
     <div class="form-group">
        <legend>Start Date</legend>
        <input type="date" name="SDate" class="form-control" required="" value="<?php echo date('Y-m-d',strtotime($selTask["task_SDate"])) ?>"/>
     </div>
     <div class="form-group">
        <legend>End Date</legend>
        <input type="date" name="EDate" class="form-control" required="" value="<?php echo date('Y-m-d',strtotime($selTask["task_EDate"])) ?>"/>
     </div>
     <div class="form-group">
        <legend>Description</legend>
        <input type="" name="desc" class="form-control" required="" value="<?php echo $selTask['task_desc']; ?>" >
     </div>

     
  <div class="form-group" align="right">
    <button type="submit" class="btn btn-sm btn-primary">Update Now</button>
  </div>
</form>
  </div>
</fieldset>







