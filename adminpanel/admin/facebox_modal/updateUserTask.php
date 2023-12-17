
<?php 
  include("../../../conn.php");
  $id = $_GET['id'];
 
  $selTask= $conn->query("SELECT * FROM usertask_tbl WHERE usertask_id='$id' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<fieldset style="width:543px;" >
	<legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update <b>( <?php echo strtoupper($selTask['usertask_answer']); ?> )</b></i></legend>
  <div class="col-md-12 mt-4">
<form method="post" id="updateUsertaskFrm">
     <div class="form-group">
        <legend>Submitted</legend>
        <input type="hidden" name="usertask_id" value="<?php echo $id; ?>">
        <input type="" name="utSubmit" class="form-control" required="" value="<?php echo $selTask['usertask_submit']; ?>" >
    </div>
     <div class="form-group">
        <legend>Score</legend>
        <input type="" name="utScore" class="form-control" required="" value="<?php echo $selTask['usertask_score']; ?>" >
     </div>
     <div class="form-group">
        <legend>Grade</legend>
        <input type="" name="utGrade" class="form-control" required="" value="<?php echo $selTask['usertask_grade']; ?>" >
     </div>


     
  <div class="form-group" align="right">
    <button type="submit" class="btn btn-sm btn-primary">Save</button>
  </div>
</form>
  </div>
</fieldset>







