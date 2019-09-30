<?php
$section = '';
$page_title = 'VERIFY';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-main.php') ?>
</head>
<body class="int-user">
<main class="rbt-shell-main" style="max-width:inherit">
    <div style="background: #444" class="py-5">
        <div class="container text-white text-center rbt-ts-26">Verification preview</div>
    </div>
    <div class="rbt-shell"> 
        <!--    <div class="rbt-shell-sidebar d-none d-md-block" style="box-shadow: 0 1px 3px 2px rgba(0, 0, 0, 0.07); flex-basis: 30rem;width: 30rem; position:relative; overflow: inherit;transition: all 0.3s ease; " >
            <button class="int-themehandle" id="demojs-themehandle"><i class="rbt-icon-chevron-left"></i></button>
            <h2 class="mb-3 mt-7">Preview</h2>
            <div class="rbt-collapse-accordion" id="accordion_parent">
                <div class="card">
                    <h3 class="mb-2" id="collapse_setup">
                        <button class="rbt-btn-nostyle btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">Setup</span></button>
                    </h3>
                    <div class="int-accordion-controls"> <a class="btn btn-sm btn-outline-primary" href="admin-verification-new1.php">Edit</a> </div>
                    <div id="collapse1" class="collapse" aria-labelledby="collapse_setup" data-parent="#accordion_parent" style="">
                        <div class="card-body">
                            <dl>
                                <dt>Name</dt>
                                <dd>FERPA Compliance </dd>
                                <dt>Unique Key</dt>
                                <dd>ferpa-compliance </dd>
                                <dt>Publisher</dt>
                                <dd> ESI One.IU Team </dd>
                                <dt>Description</dt>
                                <dd>-- </dd>
                                <dt>Disclaimer</dt>
                                <dd>--</dd>
                                <dt>Verify Text</dt>
                                <dd> <span> I have verified that the above information is up to date and correct. </span> <span> I verify that I have completed the FERPA Compliance Training. </span> </dd>
                                <dt>Deferral Text</dt>
                                <dd> <span> You may also skip this verification for now. </span> </dd>
                                <dt>Verify Button Text</dt>
                                <dd> <span> Verify </span> </dd>
                                <dt>Deferral Button Text</dt>
                                <dd> <span> Verify Later </span> </dd>
                                <dt> Deferral Limit </dt>
                                <dd>--</dd>
                                <dt> Deferral Wait </dt>
                                <dd>-- </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="mb-2" id="collapse_data">
                        <button class="rbt-btn-nostyle btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">Data</span></button>
                    </h3>
                    <div class="int-accordion-controls"> <a class="btn btn-sm btn-outline-primary" href="admin-verification-new2.php">Edit</a> </div>
                    <div id="collapse2" class="collapse" aria-labelledby="collapse_data" data-parent="#accordion_parent">
                        <div class="card-body">
                            <div class="rbt-collapse-accordion" id="accordion">
                                <div class="card">
                                    <h5 class="mb-2" id="headingOne">
                                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> <i class="rbt-icon-chevron-right"></i> Dataset 1 </button>
                                    </h5>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <dl>
                                                <dt>Name</dt>
                                                <dd>Dataset 1 </dd>
                                                <dt>Unique Key</dt>
                                                <dd>dataset1 </dd>
                                                <dt>Sensitive Data</dt>
                                                <dd>yes </dd>
                                                <dt>Description</dt>
                                                <dd>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</dd>
                                                <dt>Unique key 1</dt>
                                                <dd>
                                                    <dl>
                                                        <dt>Live Data Endpoint</dt>
                                                        <dd>demo api </dd>
                                                        <dt>Callback Endpoint</dt>
                                                        <dd>yes </dd>
                                                        <dt>URL</dt>
                                                        <dd>https://www.google.com/ </dd>
                                                        <dt>Button label</dt>
                                                        <dd>Edit </dd>
                                                    </dl>
                                                </dd>
                                                <dt>Unique key 2</dt>
                                                <dd>
                                                    <dl>
                                                        <dt>Live Data Endpoint</dt>
                                                        <dd>demo api </dd>
                                                        <dt>Callback Endpoint</dt>
                                                        <dd>yes </dd>
                                                        <dt>URL</dt>
                                                        <dd>https://www.google.com/ </dd>
                                                        <dt>Button label</dt>
                                                        <dd>Edit </dd>
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
                                            <dl>
                                                <dt>Name</dt>
                                                <dd>Dataset 1 </dd>
                                                <dt>Unique Key</dt>
                                                <dd>dataset1 </dd>
                                                <dt>Sensitive Data</dt>
                                                <dd>yes </dd>
                                                <dt>Description</dt>
                                                <dd>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</dd>
                                                <dt>Unique key 1</dt>
                                                <dd>
                                                    <dl>
                                                        <dt>Live Data Endpoint</dt>
                                                        <dd>demo api </dd>
                                                        <dt>Callback Endpoint</dt>
                                                        <dd>yes </dd>
                                                        <dt>URL</dt>
                                                        <dd>https://www.google.com/ </dd>
                                                        <dt>Button label</dt>
                                                        <dd>Edit </dd>
                                                    </dl>
                                                </dd>
                                                <dt>Unique key 2</dt>
                                                <dd>
                                                    <dl>
                                                        <dt>Live Data Endpoint</dt>
                                                        <dd>demo api </dd>
                                                        <dt>Callback Endpoint</dt>
                                                        <dd>yes </dd>
                                                        <dt>URL</dt>
                                                        <dd>https://www.google.com/ </dd>
                                                        <dt>Button label</dt>
                                                        <dd>Edit </dd>
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
                    <div class="int-accordion-controls"> <a class="btn btn-sm btn-outline-primary" href="admin-verification-new3.php">Edit</a> </div>
                    <div id="collapse3" class="collapse" aria-labelledby="collapse_recipients" data-parent="#accordion_parent">
                        <div class="card-body">
                            <div class="rbt-collapse-accordion" id="accordion2">
                                <div class="card">
                                    <h5 class="mb-2" id="headingTwo">
                                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"> <i class="rbt-icon-chevron-right"></i> Recipient ruleset 1 </button>
                                    </h5>
                                    <div id="collapseOne1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                                        <div class="card-body">
                                            <dl>
                                                <dt>Effective date</dt>
                                                <dd>Fri Sep 27 2019, 12:01am </dd>
                                                <dt>Recur annually</dt>
                                                <dd>yes </dd>
                                                <dt>Specify recipients</dt>
                                                <dd>
                                                    <div class="rbt-expressionbuilder-read-only">
                                                        <ul>
                                                            <li> <span class="badge badge-primary ">User Name</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">thrclark</span> </li>
                                                            <li class="and-or"> <span aria-hidden="false"> - or - </span> </li>
                                                            <li> <span class="badge badge-primary ">User Name</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">jhopf</span> </li>
                                                            <li class="and-or" style=""> <span aria-hidden="false"> - and - </span> </li>
                                                            <li>
                                                                <ul>
                                                                    <li style=""> <span class="badge badge-primary ">Email Address</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">thrclark@iu.edu</span> </li>
                                                                    <li class="and-or" style=""> <span aria-hidden="false"> - or - </span> </li>
                                                                    <li style=""> <span class="badge badge-primary ">Last Name</span> <span aria-hidden="true" class="ng-hide">is</span> <span aria-hidden="false">is not</span> <span class="badge badge-secondary">clark</span> </li>
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
                                            <dl>
                                                <dt>Effective date</dt>
                                                <dd>Fri Sep 27 2019, 12:01am </dd>
                                                <dt>Recur annually</dt>
                                                <dd>yes </dd>
                                                <dt>Specify recipients</dt>
                                                <dd>
                                                    <div class="rbt-expressionbuilder-read-only">
                                                        <ul>
                                                            <li> <span class="badge badge-primary ">User Name</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">thrclark</span> </li>
                                                            <li class="and-or"> <span aria-hidden="false"> - or - </span> </li>
                                                            <li> <span class="badge badge-primary ">User Name</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">jhopf</span> </li>
                                                            <li class="and-or" style=""> <span aria-hidden="false"> - and - </span> </li>
                                                            <li>
                                                                <ul>
                                                                    <li style=""> <span class="badge badge-primary ">Email Address</span> <span aria-hidden="false">is</span> <span class="badge badge-secondary">thrclark@iu.edu</span> </li>
                                                                    <li class="and-or" style=""> <span aria-hidden="false"> - or - </span> </li>
                                                                    <li style=""> <span class="badge badge-primary ">Last Name</span> <span aria-hidden="true" class="ng-hide">is</span> <span aria-hidden="false">is not</span> <span class="badge badge-secondary">clark</span> </li>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="mb-2" id="collapse_leeway">
                        <button class="rbt-btn-nostyle btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">Leeway</span></button>
                    </h3>
                    <div class="int-accordion-controls"> <a class="btn btn-sm btn-outline-primary" href="admin-verification-new4.php">Edit</a> </div>
                    <div id="collapse4" class="collapse" aria-labelledby="collapse_leeway" data-parent="#accordion_parent">
                        <div class="card-body">
                            <dl>
                                <dt>Leeway</dt>
                                <dd>20 days</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="mb-2" id="collapse_scheduling">
                        <button class="rbt-btn-nostyle btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">Scheduling</span></button>
                    </h3>
                    <div class="int-accordion-controls"> <a class="btn btn-sm btn-outline-primary" href="admin-verification-new5.php">Edit</a> </div>
                    <div id="collapse5" class="collapse" aria-labelledby="collapse_scheduling" data-parent="#accordion_parent">
                        <div class="card-body">
                            <dl>
                                <dt>Status</dt>
                                <dd>On</dd>
                                <dt>Expiration date</dt>
                                <dd>Fri May 08 2020</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="rbt-shell-stage p-3">
            <header class="container p-0 mt-7 mb-3">
                <div class="d-flex"> <img alt="" class="int-brand-image">
                    <div class="int-lockup-group text-nowrap">
                        <div class="int-lockup-org" id="org-name-display">INDIANA UNIVERSITY</div>
                        <h1 class="int-lockup-pagetitle" id="app-name-display"><?php echo $page_title; ?></h1>
                    </div>
                    <div class="w-100"></div>
                    <div class="d-none d-lg-block text-nowrap">
                        <div class="rbt-header-avatar-id"> <span class="rbt-header-avatar" aria-hidden="true">UN</span> username </div>
                    </div>
                </div>
            </header>
            <div class="main">
                <section>
                    <div class="card">
                        <div class="card-body">
                            <h2 class="ts-26">Verify your data</h2>
                            <p> On occasion, we require verification of your personal information. The item(s) listed below need your review for accuracy.</p>
                            <h3 class="ts-26 mt-5">Sample data</h3>
                            <p>This is a paragraph that is used to describe the nature of this verification item to the user. It is possible to use a <a href="#">link</a> in this section.</p>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <dl>
                                        <dt>Phone 1</dt>
                                        <dd><span class="int-privatedata"> 123-456-7890</span> </dd>
                                        <dt>Phone 2</dt>
                                        <dd><span class="int-privatedata"> 123-456-7890</span> </dd>
                                        <dt>Phone 3</dt>
                                        <dd><span class="int-privatedata"> 123-456-7890</span> </dd>
                                    </dl>
                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="int-verify-controls p-3">
                        <div class="row mb-5" id="demojs_verifyscreen">
                            <div class="col-md-6 d-flex">
                                <div class="d-flex flex-column">
                                    <div class="mb-3 ts-20">
                                        <div class="form-check form-check-inline">
                                            <input id="question4" name="checked" type="checkbox" aria-invalid="false" data-container="body" data-toggle="popover" data-placement="top" data-content="Required" data-original-title="" title="">
                                            <label class="form-check-label" for="question4"> I have verified that the above information is up to date and correct.</label>
                                        </div>
                                    </div>
                                    <div class="rbt-button-group mt-auto">
                                        <button type="button" class="btn btn-primary btn-block" id="submit2">Verify</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex">
                                <div class="d-flex flex-column">
                                    <div class="mb-3 ts-20"> You can choose to verify later. You may choose this option 3 more time(s).</div>
                                    <div class="rbt-button-group mt-auto">
                                        <button type="button" class="btn btn-outline-primary btn-block">Verify later</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<?php include('includes/theme-controls.php') ?>
<?php include('modals/modal-theme.php') ?>
<?php include('includes/all-footerscripts.php') ?>
<script>
$(document).ready(function(){
  $("#demojs-themehandle").click(function(){
    $(".rbt-shell-sidebar").toggleClass("int-themeclose");
  });
});
</script> 
<script>
    $(".demojs-reveal").click(function() {
        $(".int-mask").hide();
		$(".alert").hide();
		$("#demojs_revealskipscreen").hide();
		$("#demojs_verifyscreen").show();
        $(".int-privatedata").show();	
    });
</script> 
<script>
    $(document).ready(function() {
        $("#submit2").click(function() {
            $('#question4').popover('toggle')
        });
		
		 $("#question4").click(function() {
			 $('#question4').popover('show')
            $('#question4').popover('destroy')
        });
		
		 $('#submit2').click(function() {
            if ($('#question4').is(':checked')) {
				 $('#question4').popover('destroy')
            }
        });
		
		
		
		
    }); 
</script> 
<script>
    $(document).ready(function() {
        $('#lockup-visibility').change(function() {
            if ($(this).val() == "block") {
                $(".demojs-lockupcontrols").show();
            }
            if ($(this).val() == "none") {
                $(".demojs-lockupcontrols").hide();
            }

        });
		
		
		
		 $('#logoimage-visibility').change(function() {
            if ($(this).val() == "block") {
                $(".demojs-logourl").show();
            }
            if ($(this).val() == "none") {
                $(".demojs-logourl").hide();
            }

        });
		
		
		
		 $("[data-theme='white']").click(function() {
			 $(".demojs-lockupcontrols").show();
			 $(".demojs-logourl").show();
        });
		 $("[data-theme='brown']").click(function() {
			 $(".demojs-lockupcontrols").show();
			 $(".demojs-logourl").show();
        });
		 $("[data-theme='blue']").click(function() {
			 $(".demojs-lockupcontrols").show();
			 $(".demojs-logourl").show();
        });
		 $("[data-theme='yellow']").click(function() {
			$(".demojs-lockupcontrols").hide();
			$(".demojs-logourl").show();
        });
		 $("[data-theme='black']").click(function() {
			$(".demojs-logourl").hide();
			$(".demojs-lockupcontrols").show();
        });
		
	


    }); 
</script> 
<script>
    $(document).ready(function() {
		
		
		
		$( ".card-body .form-control, .predefined-themes .card-body button" ).click(function() {
  $('.demojs-savetheme').prop("disabled", false); // Element(s) are now enabled.
});





 }); 

</script> 
<script>
    $(document).ready(function() {
        $(function() {
            $("#savetheme").click(function() {
                $('.btn.btn-primary').addClass('rbt-loading');
				$('.btn.btn-primary .spinner-border').removeClass('d-none');
				$('.btn.btn-primary .visible').toggleClass('invisible');
				$('.demojs-savetheme').prop('disabled', true);
				
                setTimeout(function() {
                    $('.btn.btn-primary').removeClass('rbt-loading');
					$('.btn.btn-primary .spinner-border').addClass('d-none');
					$('.demojs-savetheme').prop('disabled', true);
					$('.btn.btn-primary .invisible').removeClass('invisible');
					
                }, 3000)
            });
        });
    });
</script>
</body>
</html>
