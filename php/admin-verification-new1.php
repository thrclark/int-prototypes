<?php
$section = '';
$page_title = 'New verification';
$page_subtitle = 'Setup';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-admin.php') ?>
</head>
<body class="int-admin">
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-3 mt-md-5 mb-7">
    <main class="main-content" id="main-content">
        <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <div class="row">
            <div class="col-2 border-right d-none d-sm-block">
                <div id="sticky">
                    <ol class="rvb-steps rvb-steps--vertical mb-5" style="overflow-x:inherit">
                        <li class="rvb-steps__item"> <a href="#" class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label  d-none d-lg-block d-none d-lg-block">Setup</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i></span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block d-none d-lg-block">Data</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i></span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new3.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Recipients</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new5.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Scheduling</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new6.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Review/save</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i></span> </a> </li>
                    </ol>
                </div>
            </div>
            <div class="col-12 col-sm-10 pl-sm-5">
                <h2 class="mb-3 rbt-ts-20 rbt-ts-26-md-up"><?php echo $page_subtitle; ?></h2>
                <div id="sticky2" class="pb-2 d-sm-none rbt-z-1000">
                    <ol class="rvb-steps mb-5">
                        <li class="rvb-steps__item"> <a href="admin-verification-new1.php" class="rvb-steps__item-content"  aria-current="step"> <span class="rvb-steps__label"><span class="sr-only">Setup</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Data</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new3.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Recipients</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new5.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Scheduling</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new6.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Review/save</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i> </span> </a> </li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="form-group">
                            <label class="control-label" for="nameLabel"> Name </label>
                            <div class="" id="nameLabel"> The name of this verification. It will be displayed on the main verification page.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input aria-labelledby="nameLabel" value="" ccfvalidated="" class="form-control" id="isinvalid" formcontrolname="name" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="keyLabel"> Unique Key </label>
                            <div class="" id=""> This uniquely identifies this verification in the application. </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input value="" aria-labelledby="keyLabel" ccfvalidated="" class="form-control" id="keyLabel" formcontrolname="clientid" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="publisherLabel"> Publisher </label>
                            <div class="" id=""> The owner of this verification </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="publisherLabel">
                                        <option value="?" selected="selected"></option>
                                        <option label="ESI One.IU Team" value="number:1040">ESI One.IU Team</option>
                                        <option label="HR" value="number:1120">HR</option>
                                        <option label="IMS" value="number:1080">IMS</option>
                                        <option label="ryantest" value="number:1140">ryantest</option>
                                        <option label="Student Services" value="number:1000">Student Services</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--   <div class="form-group">
                            <label for="textarea-full">Verification intro</label>
                            <textarea class="form-control" id="textarea-full" rows="5" disabled>On occasion, we require verification of your personal information. The item(s) presented on this page have been marked as needing your review for accuracy.</textarea>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="displayintro" checked>
                                <label class="form-check-label font-weight-normal" for="displayintro"> Display the default verification intro. This can be edited under <a href="admin-settings-general-verificationintro.php">general settings</a>. </label>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label class="control-label" for="disclaimerLabel"> Description</label>
                            <div class="" id=""> The text that will display above the verification.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="verify_select_description" name="select">
                                        <option value="verify_select_description_standard"> Use default description </option>
                                        <option value="verify_select_description_custom"> Enter custom description </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div style=" display:block" id="verify_select_description_standard">
                                <label class="sr-only" for="description_standard"> Verification description default text </label>
                                <textarea class="form-control" cols="40" id="description_standard" name="description_standard" rows="3" disabled="" style="display: block;">On occasion, we require verification of your personal information. The item(s) presented on this page have been marked as needing your review for accuracy.</textarea>
                            </div>
                            <div id="verify_select_description_custom" style="display: none;">
                                <label class="sr-only" for="description_custom"> Verification description custom text </label>
                                <textarea id="description_custom">On occasion, we require verification of your personal information. The item(s) presented on this page have been marked as needing your review for accuracy.</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="disclaimerLabel"> Disclaimer (optional) </label>
                            <div class="" id=""> The text that will display below the verification.</div>
                            <textarea id="disclaimerLabel"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="disclaimerLabel"> Verify Text</label>
                            <div class="" id=""> The text that will display for the verify checkbox for this verification.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="verify_now_select" name="select">
                                        <option value="verify_now_standard"> Use Default Text </option>
                                        <option value="verify_now_custom"> Enter Custom Text </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div style=" display:block">
                                <label class="sr-only" for="verify_now_standard"> Verification Confirmation Standard Text </label>
                                <textarea class="form-control" cols="40" id="verify_now_standard" name="textarea1" rows="3" disabled="" style="display: block;">I have verified that the information on this page is currently accurate.</textarea>
                            </div>
                            <div id="verify_now_custom" style="display: none;">
                                <label class="sr-only" for="verify_now_custom_field"> Verification Confirmation Custom Text </label>
                                <textarea class="form-control" cols="40" id="verify_now_custom_field" name="textarea1" rows="3" placeholder="Custom text"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="disclaimerLabel"> Deferral Text</label>
                            <div class="" id=""> The text that will display for the deferral for this verification.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="defer_now_select" name="select">
                                        <option value="defer_now_standard"> Use Default Text </option>
                                        <option value="defer_now_custom"> Enter Custom Text </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div style=" display:block">
                                <label class="sr-only" for="defer_now_standard"> Verification Confirmation Standard Text </label>
                                <textarea class="form-control" cols="40" id="defer_now_standard" name="textarea1" rows="3" disabled="" style="display: block;">I have verified that the information on this page is currently accurate.</textarea>
                            </div>
                            <div id="defer_now_custom" style="display: none;">
                                <label class="sr-only" for="defer_now_custom_field"> Verification Confirmation Custom Text </label>
                                <textarea class="form-control" cols="40" id="defer_now_custom_field" name="textarea1" rows="3" placeholder="Custom text"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="verify_button_select"> Verify Button Text</label>
                            <div class="" id=""> The text that will display on the verify button for this verification.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="verify_button_select" name="select">
                                        <option value="verify_button_standard"> Use Default Text </option>
                                        <option value="verify_button_custom"> Enter Custom Text </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div style=" display:block">
                                <label class="sr-only" for="verify_button_standard"> Verify button default label </label>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="verify_button_standard" disabled="" style="display: block;" value="Verify">
                                    </div>
                                </div>
                            </div>
                            <div id="verify_button_custom" style="display: none;">
                                <label class="sr-only" for="verify_button_custom_label"> Verify button custom label </label>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="verify_button_custom_label" value="" placeholder="Custom label">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="defer_button_select"> Deferral Button Text</label>
                            <div class="" id=""> The text that will display on the deferral button for this verification.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="defer_button_select" name="select">
                                        <option value="defer_button_standard"> Use Default Text </option>
                                        <option value="defer_button_custom"> Enter Custom Text </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div style=" display:block">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <label class="sr-only" for="defer_button_standard"> Deferral button default label </label>
                                        <input type="text" class="form-control" id="defer_button_standard" disabled="" style="display: block;" value="Defer">
                                    </div>
                                </div>
                            </div>
                            <div id="defer_button_custom" style="display: none;">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <label class="sr-only" for="defer_button_custom_label"> Deferral button custom label </label>
                                        <input type="text" class="form-control" id="defer_button_custom_label" value="" placeholder="Custom label">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="deferrallimit"> Deferral Limit </label>
                            <div class="" id=""> The number of times a user can defer this verification. A 0 means they must verify immediately. If left blank, there is no restriction and is unlimited. </div>
                            <input value="" aria-labelledby="deferrallimit" ccfvalidated="" class="form-control w-25" id="deferrallimit" formcontrolname="clientid" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="deferralwait">Deferral Wait </label>
                            <div class="" id=""> The time to wait to display this verification to the user after they have verified later (in minutes). The max is 43200 minutes which is 30 days. </div>
                            <input value="" aria-labelledby="deferralwait" ccfvalidated="" class="form-control w-25" id="deferralwait" formcontrolname="clientid" type="text">
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5" id="saveSetup"> <a href="admin-verification-new2.php" class="btn btn-primary"> Next <i class="rbt-icon-chevron-right"></i> </a> </div>
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
</script> 
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script> 
<script>
var simplemde = new SimpleMDE({ element: $("#disclaimerLabel")[0] });
var simplemde = new SimpleMDE({ element: $("#description_custom")[0] });
</script> 
<script>
    $(document).ready(function() {
        $('#verify_now_select').change(function() {
            $('#verify_now_custom, #verify_now_standard').hide();
            $('#' + $(this).val()).show();
        });

        $('#verify_later_select').change(function() {
            $('#verify_later_custom, #verify_later_standard').hide();
            $('#' + $(this).val()).show();
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $('#defer_now_select').change(function() {
            $('#defer_now_custom, #defer_now_standard').hide();
            $('#' + $(this).val()).show();
        });

        $('#defer_later_select').change(function() {
            $('#defer_later_custom, #defer_later_standard').hide();
            $('#' + $(this).val()).show();
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $('#verify_button_select').change(function() {
            $('#verify_button_standard, #verify_button_custom').hide();
            $('#' + $(this).val()).show();
        });

        $('#defer_button_select').change(function() {
            $('#defer_button_standard, #defer_button_custom').hide();
            $('#' + $(this).val()).show();
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $('#verify_select_description').change(function() {
            $('#verify_select_description_standard, #verify_select_description_custom').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>
</body>
</html>
