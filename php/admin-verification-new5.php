<?php
$section = '';
$page_title = 'New verification';
$page_subtitle = 'Scheduling';
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
                <ol class="rvb-steps rvb-steps--vertical" style="overflow-x:inherit">
                    <li class="rvb-steps__item"> <a href="admin-verification-new1.php" class="rvb-steps__item-content"> <span class="rvb-steps__label">Setup</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i></span> </a> </li>
                    <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content" > <span class="rvb-steps__label">Data</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i></span> </span> </a></li>
                    <li class="rvb-steps__item"> <a href="admin-verification-new3.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content"> <span class="rvb-steps__label">Recipients</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </span> </a></li>
                    <li class="rvb-steps__item"> <a href="admin-verification-new4.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content"> <span class="rvb-steps__label">Leeway</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clock"></i> </span> </span> </a></li>
                    <li class="rvb-steps__item"> <a href="admin-verification-new5.php" class="rvb-steps__item-content" aria-current="step"><span class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label">Scheduling</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i></span> </span></a> </li>
                    <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Review/Save</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i> </span> </span></li>
                </ol>
            </div>
            <div class="col-10 pl-5">
                <h2 class="mb-3"><?php echo $page_subtitle; ?></h2>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="font-weight-bold mb-1 ts-14">Status</div>
                                        <div>Specify the status of this verification upon saving</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="rvb-switch rvb-switch-primary">
                                            <label class="">
                                            <input type="checkbox" id="status">
                                            <div class="rvb-slider">
                                                <div class="rvb-slider-on">On</div>
                                                <div class="rvb-slider-off">Off</div>
                                            </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-7" id="enddate" style="display: none">
                            <label for="start" class="font-weight-bold">End date (optionoal)</label>
                            <div class="mb-1">The date to stop this verification from being displayed (this will be based on the current timezone of GMT-04:00).</div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="rbt-datepicker__input" aria-hidden="true">
                                        <input autocomplete="off" type="text" id="datepicker_start" aria-describedby="hs-date-hint" class="form-control">
                                        <div class="rbt-datepicker__icon"> <i class="rbt-icon-calendar"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-7">
                        <div class="rbt-button-group mt-3 mb-5" id="saveRecipients"><a href="admin-verification-new4.php" class="btn btn-outline-primary"> <i class="rbt-icon-chevron-left"></i> Previous </a> <a href="admin-verification-new6.php" class="btn btn-primary"> Next <i class="rbt-icon-chevron-right"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
  $(document).ready(function(){
    $(".rvb-steps").sticky({topSpacing:0});
  });
</script> 
<script>
    var picker = new Pikaday({ field: document.getElementById('datepicker_start') });
	var picker = new Pikaday({ field: document.getElementById('datepicker_end') });
</script> 
<script >
    $(document).ready(function() {
        $('#status').click(function() {
            if ($(this).is(':checked')) {
                $("#enddate").show();
            } else {
                $("#enddate").hide();
            }
        });
    });
</script>
</body>
</html>
