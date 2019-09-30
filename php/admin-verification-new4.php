<?php
$section = '';
$page_title = 'New verification';
$page_subtitle = 'Leeway';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-admin.php') ?>
</head>
<body>
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-5 mb-5">
    <main class="main-content" id="main-content">
        <h1 class="mb-6"> <?php echo $page_title; ?></h1>
        <div class="row">
            <div class="col-2 border-right">
                <div id="sticky">
                    <ol class="rvb-steps rvb-steps--vertical mb-5" style="overflow-x:inherit">
                        <li class="rvb-steps__item"> <a href="admin-verification-new1.php" class="rvb-steps__item-content"> <span class="rvb-steps__label">Setup</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i></span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content" > <span class="rvb-steps__label">Data</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i></span> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new3.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content"> <span class="rvb-steps__label">Recipients</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new4.php" class="rvb-steps__item-content" aria-current="step"><span class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label">Leeway</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clock"></i></span> </span></a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new5.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content"> <span class="rvb-steps__label">Scheduling</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i> </span> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new6.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content"> <span class="rvb-steps__label">Review/save</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i></span> </span></a> </li>
                    </ol>
                </div>
            </div>
            <div class="col-10 pl-5">
                <h2 class="mb-3"><?php echo $page_subtitle; ?></h2>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="form-group mb-5">
                            <label class="sr-only" for="specifyleeway">Text Input</label>
                            <div class="mb-3">If the user has updated their information within this many days prior to the Effective Date, they will not be required to verify. This is useful if the external application behind this verification makes use of the user entry API.</div>
                            <div class="row">
                                <div class="col-4">
                                    <input type="number" class="form-control" id="specifyleeway" aria-describedby="textinput" placeholder="How many days?" >
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5" id="saveRecipients"><a href="admin-verification-new3.php" class="btn btn-outline-primary"> <i class="rbt-icon-chevron-left"></i> Previous </a> <a href="admin-verification-new5.php" class="btn btn-primary"> Next <i class="rbt-icon-chevron-right"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
  $(document).ready(function(){
    $("#sticky").sticky({topSpacing:0});
  });
</script>
</body>
</html>
