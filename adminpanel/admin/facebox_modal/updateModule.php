
<?php 
  include("../../../conn.php");
  $id = $_GET['id'];
 
  $selModule = $conn->query("SELECT * FROM module_tbl WHERE mdl_id='$id' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<fieldset style="width:543px;" >
	<legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update <b>( <?php echo strtoupper($selModule['title']); ?> )</b></i></legend>
  <div class="col-md-12 mt-4">
<form method="post" id="updateModuleFrm">
     <div class="form-group">
        <legend>Title</legend>
        <input type="hidden" name="mdl_id" value="<?php echo $id; ?>">
        <input type="" name="mdl_title" class="form-control" required="" value="<?php echo $selModule['title']; ?>" >
     </div>

     <div class="form-group">
        <legend>Description</legend>
        <input type="" name="mdl_description" class="form-control" required="" value="<?php echo $selModule['description']; ?>" >
     </div>

     
     <div class="form-group">
        <legend>Status</legend>
        <input type="hidden" name="mdl_id" value="<?php echo $id; ?>">
        <input type="" name="name" class="form-control" required="" value="<?php echo $selModule['status']; ?>" >
     </div>
  <div class="form-group" align="right">
    <button type="submit" class="btn btn-sm btn-primary">Update Now</button>
  </div>
</form>
  </div>
</fieldset>







