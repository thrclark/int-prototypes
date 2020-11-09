<?php
$section = '';
$page_title = 'New verification';
$page_subtitle = 'Scheduling';
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
    <main class="main-content" id="main-content">
        <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                <li class="breadcrumb-item"><a href="admin-verifications.php" class="">All verifications</a></li>
                <li class="breadcrumb-item active" aria-current="page">New verification</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-2 border-right d-none d-sm-block">
                <div id="sticky">
                    <ol class="rvb-steps rvb-steps--vertical mb-7" style="overflow-x:inherit">
                        <li class="rvb-steps__item"> <a href="admin-verification-new1.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Setup</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i></span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Data</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i></span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new3.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Recipients</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new5.php" class="rvb-steps__item-content" aria-current="step"><span class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label  d-none d-lg-block">Scheduling</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i></span> </span></a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new6.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Review/save</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i></span> </a> </li>
                    </ol> <a href="admin-verification-new6-val.php" class="btn btn-link p-0"> Preview <i class="rbt-icon-link-external"></i> </a> </div>
            </div>
            <div class="col-12 col-sm-10 pl-sm-5">
                <h2 class="mb-3 rbt-ts-20 rbt-ts-26-md-up"><?php echo $page_subtitle; ?></h2>
                <div id="sticky2" class="pb-2 d-sm-none rbt-z-1000 int-wizardmenu-mobile">
                    <ol class="rvb-steps mb-5 d-sm-none">
                        <li class="rvb-steps__item"> <a href="admin-verification-new1.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Setup</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Data</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new3.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Recipients</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new5.php" class="rvb-steps__item-content"  aria-current="step"> <span class="rvb-steps__label"><span class="sr-only">Scheduling</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new6.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Review/save</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i> </span> </a> </li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="form-group">
                            <label class="control-label" for="vfy_status"> Status </label>
                            <div class="int-fielddescription"> Specify the status of this verification upon saving. </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="vfy_status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-7" id="enddate">
                            <label for="start" class="ts-14 font-weight-bold">End date (optional)</label>
                            <div class="int-fielddescription">The date to stop this verification from being displayed (this will be based on the current timezone of GMT-04:00).</div>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="rbt-datepicker__input" aria-hidden="true">
                                        <input autocomplete="off" type="text" id="datepicker_start" aria-describedby="hs-date-hint" class="form-control">
                                        <div class="rbt-datepicker__icon"> <i class="rbt-icon-calendar"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-7">
                        <div class="rbt-button-group mt-3 mb-5" id="saveRecipients"><a href="admin-verification-new3.php" class="btn btn-primary"> <i class="rbt-icon-chevron-left"></i> Previous </a> <a href="admin-verification-new6.php" class="btn btn-primary"> Next <i class="rbt-icon-chevron-right"></i> </a> <a href="admin-verifications.php" class="btn btn-outline-primary demojs_cancelaction"> Cancel </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
$(document).ready(function() {
    $(function() {
        $('#vfy_status').change(function() {
            if ($('#vfy_status').val() == 'active') {
                $('#enddate').show(); 
            } else {
                $('#enddate').hide(); 
            }
          
        });
    });
});
</script> 
<script>
  $(document).ready(function(){
    $("#sticky").sticky({topSpacing:0});
  });
	
	  $(document).ready(function(){
    $("#sticky2").sticky({topSpacing:0});
  });
	
	
</script> 
<script>
    var picker = new Pikaday({ field: document.getElementById('datepicker_start') });
	var picker = new Pikaday({ field: document.getElementById('datepicker_end') });
</script> 
<script>
     $(window).resize(function(){location.reload();});
</script>
</body>
</html>
