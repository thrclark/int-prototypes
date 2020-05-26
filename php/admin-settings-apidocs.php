<?php
$section = '';
$page_title = 'API documentaion';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-main.php') ?>
</head>
<body>
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-3 mt-md-5 mb-7">
    <growls style=" display: none; position: fixed; right:10px; top:80px;" id="growl1">
        <alert dismissible="true">
            <div role="alert" class="alert alert-success alert-dismissible mb-3">
                <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                <span>Save successful.</span> </div>
        </alert>
    </growls>
    <main class="main-content" id="main-content">
        <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <div class="row">
            <div class="col-12 col-lg-8">
                <p >These documentation links are available publicly to share with developers/programmers.</p>
                <div class="card mb-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="rbt-media-prepend pr-3">
                                    <div class="bg-light rounded-circle p-4 position-relative"> <i class="rbt-icon-note ts-18 position-absolute" style="    left: 15px;
    top: 15px;"></i></div>
                                </div>
                                <div class="media-body"> <a href="#" class="font-weight-bold ts-18">Publishing - version 1</a>
                                    <div class="ts-14">Documentation for maintaining resources as a publisher.</div>
                                </div>
                            </div>
                        </li>
                        
                        
                        
                        
                          <li class="list-group-item">
                            <div class="media">
                                <div class="rbt-media-prepend pr-3">
                                    <div class="bg-light rounded-circle p-4 position-relative"> <i class="rbt-icon-note ts-18 position-absolute" style="    left: 15px;
    top: 15px;"></i></div>
                                </div>
                                <div class="media-body"> <a href="#" class="font-weight-bold ts-18">Publishing - version 2</a>
                                    <div class="ts-14">Documentation for maintaining resources as a publisher.</div>
                                </div>
                            </div>
                        </li>
                        
                        
                        
                        
                        
                        
                          <li class="list-group-item">
                            <div class="media">
                                <div class="rbt-media-prepend pr-3">
                                    <div class="bg-light rounded-circle p-4 position-relative"> <i class="rbt-icon-note ts-18 position-absolute" style="    left: 15px;
    top: 15px;"></i></div>
                                </div>
                                <div class="media-body"> <a href="#" class="font-weight-bold ts-18">Publishing - version 3</a>
                                    <div class="ts-14">Documentation for maintaining resources as a publisher.</div>
                                </div>
                            </div>
                        </li>
                        
                        
                        
                    </ul>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
