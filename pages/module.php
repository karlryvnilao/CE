<?php 
    $mdl_id = $_GET['id'];
    $selModule = $conn->query("SELECT * FROM module_tbl WHERE mdl_id='$mdl_id' ")->fetch(PDO::FETCH_ASSOC);

    try {
        $conn = new PDO("mysql:host={$host};dbname={$db};", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Fetch the current module based on the ID from the URL
        $mdl_id = isset($_GET['id']) ? $_GET['id'] : null;
        $currentModule = $conn->query("SELECT * FROM module_tbl WHERE mdl_id = '$mdl_id'")->fetch(PDO::FETCH_ASSOC);
    
        // Fetch the next module
        $nextModule = $conn->query("SELECT * FROM module_tbl WHERE mdl_id > '$mdl_id' ORDER BY mdl_id ASC LIMIT 1")->fetch(PDO::FETCH_ASSOC);
    
        // Fetch the previous module
        $prevModule = $conn->query("SELECT * FROM module_tbl WHERE mdl_id < '$mdl_id' ORDER BY mdl_id DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);
    
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

 ?>

 <style>
   
   #progress-container {
      width: 80%;
      margin: 50px auto;
      border: 1px solid #ccc;
      border-radius: 5px;
      overflow: hidden;
    }

    #progress-bar {
      width: 0;
      height: 30px;
      background-color: #4CAF50;
      text-align: center;
      line-height: 30px;
      color: #fff;
    }

 </style>

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
                <div class=" container-fluid mb-3">
        <div class="row">
            <div class="col-6 text-left">
                <?php if ($prevModule) : ?>
                    <a class="btn btn-primary" href="home.php?page=module&id=<?php echo $prevModule['mdl_id']; ?>">Previous</a>
                <?php endif; ?>
            </div>

            <div class="col-6 text-right">
                <?php if ($nextModule) : ?>
                    <a class="btn btn-primary" href="home.php?page=module&id=<?php echo $nextModule['mdl_id']; ?>">Next</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-10">
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
                          </table>
                    </div>
                        
                    </div>
    </div>
    <div class="col-md-2">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                    <h5>Progress</h5>
                          
                    </div>
                    <div class="table-responsive">
                    <div id="progress-container">
                    <div id="progress-bar">0%</div>
                    </div>
                    </div>
                        
                    </div>
    </div>
    </div>

    </div>
    </div>


    </div>
</div>
<script>
     let pageViews = 0;

    function updateProgressBar() {
        const progressBar = document.getElementById('progress-bar');
        const progress = Math.min(pageViews * 20, 100); // Each viewed page contributes 20% to the progress
        progressBar.style.width = progress + '%';
        progressBar.innerHTML = progress + '%';
    }

    // Simulate page viewed event
    function pageViewed() {
        pageViews++;
        updateProgressBar();
    }

    // Call the function to simulate initial page views
    pageViewed();
    pageViewed();
    pageViewed();
</script>