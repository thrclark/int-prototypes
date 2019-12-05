<?php
$section = '';
$page_title = 'New verification';
$page_subtitle = 'Review/save';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-admin.php') ?>
</head>
<body class="int-admin">
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-3 mt-md-5 mb-5">
    <main class="main-content" id="main-content">
        <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <div class="row">
            <div class="col-2 border-right d-none d-sm-block">
                <div id="sticky">
                    <ol class="rvb-steps rvb-steps--vertical mb-5" style="overflow-x:inherit">
                        <li class="rvb-steps__item"> <a href="admin-verification-new1.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Setup</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i></span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Data</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i></span> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new3.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Recipients</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new5.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Scheduling</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new6.php" class="rvb-steps__item-content" aria-current="step"><span class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label  d-none d-lg-block">Review/save</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i></span> </span></a> </li>
                    </ol>
                </div>
            </div>
            <div class="col-12 col-sm-10 pl-sm-5">
                <h2 class="mb-3 rbt-ts-20 rbt-ts-26-md-up"><?php echo $page_subtitle; ?></h2> <div id="sticky2" class="pb-2 d-sm-none rbt-z-1000">
                    <ol class="rvb-steps mb-5 d-sm-none">
                        <li class="rvb-steps__item"> <a href="admin-verification-new1.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Setup</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Data</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new3.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Recipients</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new5.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Scheduling</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new6.php" class="rvb-steps__item-content"  aria-current="step"> <span class="rvb-steps__label"><span class="sr-only">Review/save</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i> </span> </a> </li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="rbt-collapse-accordion" id="accordion_parent">
                            <div class="card">
                                <h3 class="mb-2" id="collapse_setup">
                                    <button class="rbt-btn-nostyle btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">Setup</span></button>
                                </h3>
                                <div class="int-accordion-controls"> <a class="btn btn-sm btn-outline-primary"  href="admin-verification-new1.php">Edit</a> </div>
                                <div id="collapse1" class="collapse" aria-labelledby="collapse_setup" data-parent="#accordion_parent">
                                    <div class="card-body">
                                        <dl class="row">
                                            <dt class="col-sm-3">Name</dt>
                                            <dd class="col-sm-9">FERPA Compliance </dd>
                                            <dt class="col-sm-3">Unique Key</dt>
                                            <dd class="col-sm-9">ferpa-compliance </dd>
                                            <dt class="col-sm-3">Publisher</dt>
                                            <dd class="col-sm-9"> ESI One.IU Team </dd>
                                            <dt class="col-sm-3">Description</dt>
                                            <dd class="col-sm-9">-- </dd>
                                            <dt class="col-sm-3">Disclaimer</dt>
                                            <dd class="col-sm-9">--</dd>
                                            <dt class="col-sm-3">Verify Text</dt>
                                            <dd class="col-sm-9"> <span> I have verified that the above information is up to date and correct. </span> <span> I verify that I have completed the FERPA Compliance Training. </span> </dd>
                                            <dt class="col-sm-3">Deferral Text</dt>
                                            <dd class="col-sm-9"> <span> You may also skip this verification for now. </span> </dd>
                                            <dt class="col-sm-3">Verify Button Text</dt>
                                            <dd class="col-sm-9"> <span> Verify </span> </dd>
                                            <dt class="col-sm-3">Deferral Button Text</dt>
                                            <dd class="col-sm-9"> <span> Verify Later </span> </dd>
                                            <dt class="col-sm-3"> Deferral Limit </dt>
                                            <dd class="col-sm-9">--</dd>
                                            <dt class="col-sm-3"> Deferral Wait </dt>
                                            <dd class="col-sm-9">-- </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <h3 class="mb-2" id="collapse_data">
                                    <button class="rbt-btn-nostyle btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">Data</span></button>
                                </h3>
                                <div class="int-accordion-controls"> <a class="btn btn-sm btn-outline-primary"  href="admin-verification-new2.php">Edit</a> </div>
                                <div id="collapse2" class="collapse" aria-labelledby="collapse_data" data-parent="#accordion_parent">
                                    <div class="card-body">
                                        <div class="rbt-collapse-accordion" id="accordion">
                                            <div class="card">
                                                <h5 class="mb-2" id="headingOne">
                                                    <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> <i class="rbt-icon-chevron-right"></i> Dataset 1 </button>
                                                </h5>
                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <dl class="row">
                                                            <dt class="col-sm-3">Name</dt>
                                                            <dd class="col-sm-9">Dataset 1 </dd>
                                                            <dt class="col-sm-3">Unique Key</dt>
                                                            <dd class="col-sm-9">dataset1 </dd>
                                                            <dt class="col-sm-3">Sensitive Data</dt>
                                                            <dd class="col-sm-9">yes </dd>
                                                            <dt class="col-sm-3">Description</dt>
                                                            <dd class="col-sm-9">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</dd>
                                                            <dt class="col-sm-3">Field group 1</dt>
                                                            <dd class="col-sm-9">
                                                                <dl class="row">
                                                                    <dt class="col-sm-4">Live Data Endpoint</dt>
                                                                    <dd class="col-sm-8">demo api </dd>
                                                                    <dt class="col-sm-4">Callback Endpoint</dt>
                                                                    <dd class="col-sm-8">yes </dd>
                                                                    <dt class="col-sm-4">URL</dt>
                                                                    <dd class="col-sm-8">https://www.google.com/ </dd>
                                                                    <dt class="col-sm-4">Button label</dt>
                                                                    <dd class="col-sm-8">Edit </dd>
                                                                </dl>
                                                            </dd>
                                                            <dt class="col-sm-3">Field group 2</dt>
                                                            <dd class="col-sm-9">
                                                                <dl class="row">
                                                                    <dt class="col-sm-4">Live Data Endpoint</dt>
                                                                    <dd class="col-sm-8">demo api </dd>
                                                                    <dt class="col-sm-4">Callback Endpoint</dt>
                                                                    <dd class="col-sm-8">yes </dd>
                                                                    <dt class="col-sm-4">URL</dt>
                                                                    <dd class="col-sm-8">https://www.google.com/ </dd>
                                                                    <dt class="col-sm-4">Button label</dt>
                                                                    <dd class="col-sm-8">Edit </dd>
                                                                </dl>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <h5 class="mb-2" id="headingThree">
                                                    <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <i class="rbt-icon-chevron-right"></i> Dataset 2 </button>
                                                </h5>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <dl class="row">
                                                            <dt class="col-sm-3">Name</dt>
                                                            <dd class="col-sm-9">Dataset 1 </dd>
                                                            <dt class="col-sm-3">Unique Key</dt>
                                                            <dd class="col-sm-9">dataset1 </dd>
                                                            <dt class="col-sm-3">Sensitive Data</dt>
                                                            <dd class="col-sm-9">yes </dd>
                                                            <dt class="col-sm-3">Description</dt>
                                                            <dd class="col-sm-9">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</dd>
                                                            <dt class="col-sm-3">Field group 1</dt>
                                                            <dd class="col-sm-9">
                                                                <dl class="row">
                                                                    <dt class="col-sm-4">Live Data Endpoint</dt>
                                                                    <dd class="col-sm-8">demo api </dd>
                                                                    <dt class="col-sm-4">Callback Endpoint</dt>
                                                                    <dd class="col-sm-8">yes </dd>
                                                                    <dt class="col-sm-4">URL</dt>
                                                                    <dd class="col-sm-8">https://www.google.com/ </dd>
                                                                    <dt class="col-sm-4">Button label</dt>
                                                                    <dd class="col-sm-8">Edit </dd>
                                                                </dl>
                                                            </dd>
                                                            <dt class="col-sm-3">Field group 2</dt>
                                                            <dd class="col-sm-9">
                                                                <dl class="row">
                                                                    <dt class="col-sm-4">Live Data Endpoint</dt>
                                                                    <dd class="col-sm-8">demo api </dd>
                                                                    <dt class="col-sm-4">Callback Endpoint</dt>
                                                                    <dd class="col-sm-8">yes </dd>
                                                                    <dt class="col-sm-4">URL</dt>
                                                                    <dd class="col-sm-8">https://www.google.com/ </dd>
                                                                    <dt class="col-sm-4">Button label</dt>
                                                                    <dd class="col-sm-8">Edit </dd>
                                                                </dl>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <h3 class="mb-2" id="collapse_recipients">
                                    <button class="rbt-btn-nostyle btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">Recipients</span></button>
                                </h3>
                                <div class="int-accordion-controls"> <a class="btn btn-sm btn-outline-primary"  href="admin-verification-new3.php">Edit</a> </div>
                                <div id="collapse3" class="collapse" aria-labelledby="collapse_recipients" data-parent="#accordion_parent">
                                    <div class="card-body">
                                        <div class="rbt-collapse-accordion" id="accordion2">
                                            <div class="card">
                                                <h5 class="mb-2" id="headingTwo">
                                                    <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"> <i class="rbt-icon-chevron-right"></i> Recipient ruleset 1 </button>
                                                </h5>
                                                <div id="collapseOne1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                                                    <div class="card-body">
                                                        <dl class="row">
                                                            <dt class="col-sm-3">Effective date</dt>
                                                            <dd class="col-sm-9">Fri Sep 27 2019, 12:01am </dd>
                                                            <dt class="col-sm-3">Recur annually</dt>
                                                            <dd class="col-sm-9">yes </dd>
                                                            <dt class="col-sm-3">Specify recipients</dt>
                                                            <dd class="col-sm-9">
                                                                <div class="rbt-expressionbuilder-read-only">
                                                                    <ul>
                                                                        <li> <span class="badge badge-primary ">User Name</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">thrclark</span> </li>
                                                                        <li class="and-or"> <span aria-hidden="false"> - or - </span> </li>
                                                                        <li> <span class="badge badge-primary ">User Name</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">jhopf</span> </li>
                                                                        <li class="and-or" style=""> <span aria-hidden="false"> - and - </span> </li>
                                                                        <li>
                                                                            <ul>
                                                                                <li  style=""> <span class="badge badge-primary ">Email Address</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">thrclark@iu.edu</span> </li>
                                                                                <li class="and-or" style=""> <span aria-hidden="false"> - or - </span> </li>
                                                                                <li  style=""> <span class="badge badge-primary ">Last Name</span> <span aria-hidden="true" class="ng-hide">is</span> <span aria-hidden="false">is not</span> <span class="badge badge-secondary">clark</span> </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="and-or"> <span aria-hidden="false"> - or - </span> </li>
                                                                        <li> <span class="badge badge-primary ">User Name</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">ewestfal</span> </li>
                                                                    </ul>
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <h5 class="mb-2" id="headingTwo2">
                                                    <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <i class="rbt-icon-chevron-right"></i> Recipient ruleset 2 </button>
                                                </h5>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion2">
                                                    <div class="card-body">
                                                        <dl class="row">
                                                            <dt class="col-sm-3">Effective date</dt>
                                                            <dd class="col-sm-9">Fri Sep 27 2019, 12:01am </dd>
                                                            <dt class="col-sm-3">Recur annually</dt>
                                                            <dd class="col-sm-9">yes </dd>
                                                            <dt class="col-sm-3">Specify recipients</dt>
                                                            <dd class="col-sm-9">
                                                                <div class="rbt-expressionbuilder-read-only">
                                                                    <ul>
                                                                        <li> <span class="badge badge-primary ">User Name</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">thrclark</span> </li>
                                                                        <li class="and-or"> <span aria-hidden="false"> - or - </span> </li>
                                                                        <li> <span class="badge badge-primary ">User Name</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">jhopf</span> </li>
                                                                        <li class="and-or" style=""> <span aria-hidden="false"> - and - </span> </li>
                                                                        <li>
                                                                            <ul>
                                                                                <li  style=""> <span class="badge badge-primary ">Email Address</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">thrclark@iu.edu</span> </li>
                                                                                <li class="and-or" style=""> <span aria-hidden="false"> - or - </span> </li>
                                                                                <li  style=""> <span class="badge badge-primary ">Last Name</span> <span aria-hidden="true" class="ng-hide">is</span> <span aria-hidden="false">is not</span> <span class="badge badge-secondary">clark</span> </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="and-or"> <span aria-hidden="false"> - or - </span> </li>
                                                                        <li> <span class="badge badge-primary ">User Name</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">ewestfal</span> </li>
                                                                    </ul>
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
												
												
											
												
												
												
												
                                            </div>
											
											
											
												
												
												  <dl class="row">
                                            <dt class="col-sm-3">Leeway</dt>
                                            <dd class="col-sm-9">20 days</dd>
                                        </dl>
												
											
											
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="card">
                                <h3 class="mb-2" id="collapse_scheduling">
                                    <button class="rbt-btn-nostyle btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">Scheduling</span></button>
                                </h3>
                                <div class="int-accordion-controls"> <a class="btn btn-sm btn-outline-primary"  href="admin-verification-new5.php">Edit</a> </div>
                                <div id="collapse5" class="collapse" aria-labelledby="collapse_scheduling" data-parent="#accordion_parent">
                                    <div class="card-body">
                                        <dl class="row">
                                            <dt class="col-sm-3">Status</dt>
                                            <dd class="col-sm-9">On</dd>
                                            <dt class="col-sm-3">Expiration date</dt>
                                            <dd class="col-sm-9">Fri May 08 2020</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-7">
                        <div class="rbt-button-group mt-3 mb-5" id="saveRecipients"> <a href="verification-preview.php" target="_blank" class="btn btn-outline-primary"> Preview <i class="rbt-icon-link-external"></i> </a> <a href="admin-verification-new6.php" class="btn btn-primary"> Save</a> </div>
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
	
	  $(document).ready(function(){
    $("#sticky2").sticky({topSpacing:0});
  });
	
	
</script> <script>
    var picker = new Pikaday({ field: document.getElementById('datepicker_start') });
	var picker = new Pikaday({ field: document.getElementById('datepicker_end') });
</script> 
<script>
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
