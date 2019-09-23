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
    <div class="rbt-shell">
        <div class="rbt-shell-sidebar d-none d-md-block" style="box-shadow: 0 1px 3px 2px rgba(0, 0, 0, 0.07); flex-basis: 30rem;width: 30rem; position:relative; overflow: inherit;transition: all 0.3s ease; " >
            <button class="int-themehandle" id="demojs-themehandle"><i class="rbt-icon-chevron-left"></i></button>
            <h2 class="mb-3 mt-7">Preview</h2>
            <div class="card mb-3">
                            <div class="card-header font-weight-bold">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="ts-16 font-weight-bold">Setup</h3>
                                    </div>
                                    <div class="col-auto"><a class="btn btn-sm btn-outline-primary"  href="admin-verification-new1.php">Edit</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-3">Name</dt>
                                    <dd class="col-sm-9">FERPA Compliance </dd>
                                    <dt class="col-sm-3">Unique Key</dt>
                                    <dd class="col-sm-9"> ferpa-compliance </dd>
                                    <dt class="col-sm-3">Publisher</dt>
                                    <dd class="col-sm-9"> ESI One.IU Team </dd>
                                    <dt class="col-sm-3">Description</dt>
                                    <dd class="col-sm-9">-- </dd>
                                    <dt class="col-sm-3">Disclaimer</dt>
                                    <dd class="col-sm-9">--</dd>
                                    <dt class="col-sm-3">Verify Text</dt>
                                    <dd class="col-sm-9"> <span> I have verified that the above information is up to date and correct. </span> <span > I verify that I have completed the FERPA Compliance Training. </span> </dd>
                                    <dt class="col-sm-3">Deferral Text</dt>
                                    <dd class="col-sm-9"> <span > You may also skip this verification for now. </span> </dd>
                                    <dt class="col-sm-3">Verify Button Text</dt>
                                    <dd class="col-sm-9"> <span > Verify </span> </dd>
                                    <dt class="col-sm-3">Deferral Button Text</dt>
                                    <dd class="col-sm-9"> <span > Verify Later </span> </dd>
                                    <dt class="col-sm-3"> Deferral Limit </dt>
                                    <dd class="col-sm-9">--</dd>
                                    <dt class="col-sm-3"> Deferral Wait </dt>
                                    <dd class="col-sm-9">-- </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header font-weight-bold">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="ts-16 font-weight-bold">Data</h3>
                                    </div>
                                    <div class="col-auto"><a class="btn btn-sm btn-outline-primary"  href="admin-verification-new2.php">Edit</a></div>
                                </div>
                            </div>
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
                                                    <dt class="col-sm-3">Unique key 1</dt>
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
                                                    <dt class="col-sm-3">Unique key 2</dt>
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
                                                    <dt class="col-sm-3">Unique key 1</dt>
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
                                                    <dt class="col-sm-3">Unique key 2</dt>
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
                        <div class="card mb-3">
                            <div class="card-header font-weight-bold">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="ts-16 font-weight-bold">Recipients</h3>
                                    </div>
                                    <div class="col-auto"><a class="btn btn-sm btn-outline-primary"  href="admin-verification-new3.php">Edit</a></div>
                                </div>
                            </div>
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
                                                                <li > <span class="badge badge-primary ">User Name</span> <span aria-hidden="false" >is</span> <span class="badge badge-secondary">thrclark</span> </li>
                                                                <li class="and-or"> <span aria-hidden="false" > - or - </span> </li>
                                                                <li > <span class="badge badge-primary ">User Name</span> <span aria-hidden="false" >is</span> <span class="badge badge-secondary">jhopf</span> </li>
                                                                <li class="and-or" style=""> <span aria-hidden="false" > - and - </span> </li>
                                                                <li>
                                                                    <ul >
                                                                        <li  style=""> <span class="badge badge-primary ">Email Address</span> <span aria-hidden="false" >is</span> <span class="badge badge-secondary">thrclark@iu.edu</span> </li>
                                                                        <li class="and-or" style=""> <span aria-hidden="false" > - or - </span> </li>
                                                                        <li  style=""> <span class="badge badge-primary ">Last Name</span> <span aria-hidden="true" class="ng-hide">is</span> <span aria-hidden="false" >is not</span> <span class="badge badge-secondary">clark</span> </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="and-or"> <span aria-hidden="false" > - or - </span> </li>
                                                                <li > <span class="badge badge-primary ">User Name</span> <span aria-hidden="false" >is</span> <span class="badge badge-secondary">ewestfal</span> </li>
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
                                                                <li > <span class="badge badge-primary ">User Name</span> <span aria-hidden="false" >is</span> <span class="badge badge-secondary">thrclark</span> </li>
                                                                <li class="and-or"> <span aria-hidden="false" > - or - </span> </li>
                                                                <li > <span class="badge badge-primary ">User Name</span> <span aria-hidden="false" >is</span> <span class="badge badge-secondary">jhopf</span> </li>
                                                                <li class="and-or" style=""> <span aria-hidden="false" > - and - </span> </li>
                                                                <li>
                                                                    <ul >
                                                                        <li  style=""> <span class="badge badge-primary ">Email Address</span> <span aria-hidden="false" >is</span> <span class="badge badge-secondary">thrclark@iu.edu</span> </li>
                                                                        <li class="and-or" style=""> <span aria-hidden="false" > - or - </span> </li>
                                                                        <li  style=""> <span class="badge badge-primary ">Last Name</span> <span aria-hidden="true" class="ng-hide">is</span> <span aria-hidden="false" >is not</span> <span class="badge badge-secondary">clark</span> </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="and-or"> <span aria-hidden="false" > - or - </span> </li>
                                                                <li > <span class="badge badge-primary ">User Name</span> <span aria-hidden="false" >is</span> <span class="badge badge-secondary">ewestfal</span> </li>
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
                        <div class="card mb-3">
                            <div class="card-header font-weight-bold">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="ts-16 font-weight-bold">Leeway</h3>
                                    </div>
                                    <div class="col-auto"><a class="btn btn-sm btn-outline-primary"  href="admin-verification-new4.php">Edit</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-3">Leeway</dt>
                                    <dd class="col-sm-9">20 days</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header font-weight-bold">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="ts-16 font-weight-bold">Scheduling</h3>
                                    </div>
                                    <div class="col-auto"><a class="btn btn-sm btn-outline-primary"  href="admin-verification-new4.php">Edit</a></div>
                                </div>
                            </div>
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
            <main>
                <section>
                 
                    <div class="card">
                        <div class="card-body">
                            <h2 class="ts-26">Verify your data</h2>
                            <p> On occasion, we require verification of your personal information. The item(s) listed below need your review for accuracy.</p>
                            <h3 class="ts-26 mt-5">Sample data</h3>
                            <p>This is a paragraph that is used to describe the nature of this verification item to the user. It is possible to use a <a href="#">link</a> in this section.</p>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <dl class="row">
                                        <dt class="col-sm-4">Phone 1</dt>
                                        <dd class="col-sm-8"><span class="int-privatedata"> 123-456-7890</span> </dd>
                                        <dt class="col-sm-4">Phone 2</dt>
                                        <dd class="col-sm-8"><span class="int-privatedata"> 123-456-7890</span> </dd>
                                        <dt class="col-sm-4">Phone 3</dt>
                                        <dd class="col-sm-8"><span class="int-privatedata"> 123-456-7890</span> </dd>
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
            </main>
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
