
<?php 
  include("../../../conn.php");
  $id = $_GET['id'];
 
  $selTask= $conn->query("SELECT * FROM usertask_tbl WHERE usertask_id='$id' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<fieldset style="width:543px;" >
	<legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Submitted Answer</i></legend>
  <div class="border border-5 text-center p-3">
  <?php echo ($selTask['usertask_answer']); ?>
  </div>
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
     <select name="utGrade" class="form-control" required="">
        <!-- Add options based on your grade values or dynamic data -->
        <option value="A+" <?php echo ($selTask['usertask_grade'] === 'A+') ? 'selected' : ''; ?>>A+ 97–100%</option>
        <option value="A" <?php echo ($selTask['usertask_grade'] === 'A') ? 'selected' : ''; ?>>A 93–96%</option>
        <option value="A-" <?php echo ($selTask['usertask_grade'] === 'A-') ? 'selected' : ''; ?>>A- 90–92%</option>
        <option value="B+" <?php echo ($selTask['usertask_grade'] === 'B+') ? 'selected' : ''; ?>>B+ 87–89%</option>
        <option value="B" <?php echo ($selTask['usertask_grade'] === 'B') ? 'selected' : ''; ?>>B 83–86%</option>
        <option value="B-" <?php echo ($selTask['usertask_grade'] === 'B-') ? 'selected' : ''; ?>>B- 80–82%</option>
        <option value="C+" <?php echo ($selTask['usertask_grade'] === 'C+') ? 'selected' : ''; ?>>C+ 77–79%</option>
        <option value="C" <?php echo ($selTask['usertask_grade'] === 'C') ? 'selected' : ''; ?>>C 73–76%</option>
        <option value="C-" <?php echo ($selTask['usertask_grade'] === 'C-') ? 'selected' : ''; ?>>C- 70–72%</option>
        <option value="D+" <?php echo ($selTask['usertask_grade'] === 'D+') ? 'selected' : ''; ?>>D+ 67–69%</option>
        <option value="D" <?php echo ($selTask['usertask_grade'] === 'D') ? 'selected' : ''; ?>>D 63–66%</option>
        <option value="D-" <?php echo ($selTask['usertask_grade'] === 'D-') ? 'selected' : ''; ?>>D- 60–62%</option>
        <option value="F" <?php echo ($selTask['usertask_grade'] === 'F') ? 'selected' : ''; ?>>F 0–59%</option>
        <!-- Add more options as needed -->
    </select>
     </div>


     
  <div class="form-group" align="right">
    <button type="submit" class="btn btn-sm btn-primary">Save</button>
  </div>
</form>
  </div>
</fieldset>







