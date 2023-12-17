<?php 
    $mdl_id = $_GET['id'];
    $selModule = $conn->query("SELECT * FROM module_tbl WHERE mdl_id='$mdl_id' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<div class="app-main__outer">
<div class="app-main__inner">
    <div id="refreshData">

    <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                    <div>
                        <?php echo $selModule['title']; ?>
                          <div class="page-title-subheading">
                            <?php echo $selModule['description']; ?>
                          </div>

                    </div>
                    </div>
                </div>
                </div> 
            
    <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                    <?php echo $selModule['title']; ?>
                          
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <h3 class="p-2 text-danger">Instructions</h3>
                        <div class="p-2 h-100">
                            <?php echo $selModule['description']; ?>
                          </div>

                    </div>
                        </table>
                    </div>
                </div>
            </div>
    </div>


    </div>
</div>
