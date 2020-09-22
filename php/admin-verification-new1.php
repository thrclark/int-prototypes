<?php
$section = '';
$page_title = 'New verification';
$page_subtitle = 'Setup';
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
                <div id="sticky2" class="pb-2 d-sm-none rbt-z-1000 int-wizardmenu-mobile">
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
                            <label class="control-label" for="vfy1_name"> Name </label>
                            <div class="int-fielddescription"> The name of this verification. It will be displayed on the main verification page.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <input aria-labelledby="vfy1_name" class="form-control " formcontrolname="title" id="vfy1_name">
                                            <span class="badge badge-success" id="vfy1_name_badge"> <span id="vfy1_name_counter">100</span> </span> </div>
                                    </countdown>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="vfy1_unkey"> Unique key </label>
                            <div class="int-fielddescription"> This uniquely identifies this verification in the application.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <input aria-labelledby="vfy1_unkey" class="form-control " formcontrolname="title" id="vfy1_unkey">
                                            <span class="badge badge-success" id="vfy1_unkey_badge"> <span id="vfy1_unkey_counter">100</span> </span> </div>
                                    </countdown>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="vfy1_verificationtype"> Verification type </label>
                            <div class="int-fielddescription"> Select the verification type. 'Standard' allows the verification to be confirmed or deferred. 'Imposed notification' will only allow the verification to be deferred indefinitely.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="vfy1_verificationtype">
                                        <option value="" selected="standard">Standard</option>
                                        <option value="imposed_notification">Imposed notification</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="vfy1_publisherLabel"> Publisher </label>
                            <div class="int-fielddescription"> The owner of this verification. </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="vfy1_publisherLabel">
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
                        <div class="form-group">
                            <label class="control-label" for="disclaimerLabel"> Description</label>
                            <div class="int-fielddescription"> The text that will display above the verification.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="verify_select_description" name="select">
                                        <option value="verify_select_description_standard"> Use default description </option>
                                        <option value="verify_select_description_custom"> Enter custom description </option>
                                        <option value="verify_text_group"> Hide description </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="">
                            <div class="verify_text_group" style=" display:block" id="verify_select_description_standard">
                                <label class="sr-only" for="description_standard"> Verification description default text </label>
                                <textarea class="form-control" cols="40" id="description_standard" name="description_standard" rows="3" disabled="" style="display: block;">On occasion, we require verification of your personal information. The item(s) presented on this page have been marked as needing your review for accuracy.</textarea>
                            </div>
                            <div class="verify_text_group" id="verify_select_description_custom" style="display: none;">
                                <countdown>
                                    <label class="sr-only" for="description_custom"> Verification description custom text </label>
                                    <div class="rbt-charcount">
                                        <textarea id="description_custom"></textarea>
                                        <span class="badge badge-success" id="counterDemo2_badge"><span id="charcounter2">30</span></span> </div>
                                </countdown>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="disclaimerLabel"> Disclaimer (optional) </label>
                            <div class="int-fielddescription"> The text that will display below the verification.</div>
                            <textarea id="disclaimerLabel"></textarea>
                        </div>
                        <div class="form-group demojs_verifybuttonoptions">
                            <label class="control-label" for="disclaimerLabel"> Verify text</label>
                            <div class="int-fielddescription"> The text that will display for the verify checkbox for this verification.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="verify_now_select" name="select">
                                        <option value="verify_now_standard"> Use Default Text </option>
                                        <option value="verify_now_custom"> Enter Custom Text </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group demojs_verifybuttonoptions">
                            <div style=" display:block">
                                <label class="sr-only" for="verify_now_standard"> Verification confirmation standard text </label>
                                <textarea class="form-control" cols="40" id="verify_now_standard" name="textarea1" rows="3" disabled="" style="display: block;">I have verified that the information on this page is currently accurate.</textarea>
                            </div>
                            <div id="verify_now_custom" style="display: none;">
                                <label class="sr-only" for="verify_now_custom_field"> Verification confirmation custom text </label>
                                <countdown>
                                    <div class="rbt-charcount">
                                        <textarea class="form-control" id="verify_now_custom_field"></textarea>
                                        <span class="badge badge-success" id="verify_now_custom_field_badge"><span id="verify_now_custom_field_counter">1000</span></span> </div>
                                </countdown>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="disclaimerLabel"> Deferral text</label>
                            <div class="int-fielddescription"> The text that will display for the deferral for this verification.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="defer_now_select" name="select">
                                        <option value="defer_now_standard"> Use default text </option>
                                        <option value="defer_now_custom"> Enter custom text </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div style=" display:block">
                                <label class="sr-only" for="defer_now_standard"> Verification confirmation standard text </label>
                                <textarea class="form-control" cols="40" id="defer_now_standard" name="textarea1" rows="3" disabled="" style="display: block;">I have verified that the information on this page is currently accurate.</textarea>
                            </div>
                            <div id="defer_now_custom" style="display: none;">
                                <label class="sr-only" for="defer_now_custom_field"> Verification confirmation custom text </label>
                                <countdown>
                                    <div class="rbt-charcount">
                                        <textarea class="form-control" id="defer_now_custom_field"></textarea>
                                        <span class="badge badge-success" id="defer_now_custom_field_badge"><span id="defer_now_custom_field_counter">1000</span></span> </div>
                                </countdown>
                            </div>
                        </div>
                        <div class="form-group demojs_verifybuttonoptions">
                            <label class="control-label" for="verify_button_select"> Verify button text</label>
                            <div class="int-fielddescription"> The text that will display on the verify button for this verification.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="verify_button_select" name="select">
                                        <option value="verify_button_standard"> Use default text </option>
                                        <option value="verify_button_custom"> Enter custom text </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group demojs_verifybuttonoptions">
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
                                        <countdown>
                                            <div class="rbt-charcount">
                                                <input aria-labelledby="verify_button_custom_label" class="form-control " formcontrolname="title" id="verify_button_custom_label" value="Verify">
                                                <span class="badge badge-success" id="verify_button_custom_label_badge"> <span id="verify_button_custom_label_counter">20</span> </span> </div>
                                        </countdown>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="defer_button_select"> Deferral button text</label>
                            <div class="int-fielddescription"> The text that will display on the deferral button for this verification.</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select class="form-control" id="defer_button_select" name="select">
                                        <option value="defer_button_standard"> Use default text </option>
                                        <option value="defer_button_custom"> Enter custom text </option>
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
                                        <countdown>
                                            <div class="rbt-charcount">
                                                <input aria-labelledby="defer_button_custom_label" class="form-control " formcontrolname="title" id="defer_button_custom_label" value="Defer">
                                                <span class="badge badge-success" id="defer_button_custom_label_badge"> <span id="defer_button_custom_label_counter">20</span> </span> </div>
                                        </countdown>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="deferrallimit"> Deferral limit </label>
                            <div class="int-fielddescription"> The number of times a user can defer this verification.</div>
                            <select class="form-control w-25" id="deferrallimit">
                                <option selected="selected">Unlimited</option>
                                <option>No deferrals</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>5</option>
                                <option>10</option>
                                <option>25</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="deferralwait">Deferral wait </label>
                            <div class="int-fielddescription"> The amount of time that transpires after a verification is deferred and the verification is set to display again to the user. </div>
                            <select class="form-control w-25" id="deferralwait">
                                <option selected="selected">None</option>
                                <option>1 hour</option>
                                <option>3 hours</option>
                                <option>6 hours</option>
                                <option>12 hours</option>
                                <option>24 hours</option>
                                <option>2 days</option>
                                <option>3 days</option>
                                <option>4 days</option>
                                <option>5 days</option>
                                <option>6 days</option>
                                <option>7 days (1 week)</option>
                                <option>14 days (2 weeks)</option>
                                <option>21 day (3 weeks)</option>
                                <option>28 days (4 weeks)</option>
                            </select>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5" id="saveSetup"> <a href="admin-verification-new2.php" class="btn btn-primary"> Next <i class="rbt-icon-chevron-right"></i> </a> <a href="admin-verifications.php" class="btn btn-outline-primary demojs_cancelaction"> Cancel </a> </div>
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
<script>
    var easyMDE = new EasyMDE({
        element: $('#disclaimerLabel')[0],
        toolbar: ["bold", "italic", "link", "|", "preview"],
        initialValue: '',
        status: 'false'
    });
    var easyMDE = new EasyMDE({
        element: $('#description_custom')[0],
        toolbar: ["bold", "italic", "link", "|", "preview"],
        initialValue: 'On occasion, we require verification of your personal information. The item(s) presented on this page have been marked as needing your review for accuracy.',
        status: 'false'
    })
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
        $('#vfy1_verificationtype').change(function() {
            if ($(this).val() === 'imposed_notification') {
                $('.demojs_verifybuttonoptions').hide();
                $("#deferrallimit, #deferralwait").prop('disabled', true);
            } else {
                $('.demojs_verifybuttonoptions').show();
                $("#deferrallimit, #deferralwait").prop('disabled', false);
                
                
            }
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
            
            // verify_text_group
            
            $('#' + $(this).val()).show();
            //$('#verify_text_group').hide();
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $('#verify_select_description').change(function() {
            $('.' + $('verify_text_group').val()).hide();
        });
    });
</script> 
<script>
$(document).ready(function() {
    $("#vfy1_name").keyup(function() {
        var length = $(this).val().length;
        length = 100 - length;
        $('#vfy1_name_counter').text(length);
        if ($("#vfy1_name").val().length > 100) {
            $("#vfy1_name_badge").last().addClass("badge-danger");
        } else {
            $("#vfy1_name_badge").last().removeClass("badge-danger");
        }
    });
    $("#vfy1_unkey").keyup(function() {
        var length = $(this).val().length;
        length = 100 - length;
        $('#vfy1_unkey_counter').text(length);
        if ($("#vfy1_unkey").val().length > 100) {
            $("#vfy1_unkey_badge").last().addClass("badge-danger");
        } else {
            $("#vfy1_unkey_badge").last().removeClass("badge-danger");
        }
    });
    $("#verify_now_custom_field").keyup(function() {
        var length = $(this).val().length;
        length = 1000 - length;
        $('#verify_now_custom_field_counter').text(length);
        if ($("#verify_now_custom_field").val().length > 1000) {
            $("#verify_now_custom_field_badge").last().addClass("badge-danger");
        } else {
            $("#verify_now_custom_field_badge").last().removeClass("badge-danger");
        }
    });
    $("#defer_now_custom_field").keyup(function() {
        var length = $(this).val().length;
        length = 1000 - length;
        $('#defer_now_custom_field_counter').text(length);
        if ($("#defer_now_custom_field").val().length > 1000) {
            $("#defer_now_custom_field_badge").last().addClass("badge-danger");
        } else {
            $("#defer_now_custom_field_badge").last().removeClass("badge-danger");
        }
    });
    $("#verify_button_custom_label").keyup(function() {
        var length = $(this).val().length;
        length = 20 - length;
        $('#verify_button_custom_label_counter').text(length);
        if ($("#verify_button_custom_label").val().length > 20) {
            $("#verify_button_custom_label_badge").last().addClass("badge-danger");
        } else {
            $("#verify_button_custom_label_badge").last().removeClass("badge-danger");
        }
    });
    $("#defer_button_custom_label").keyup(function() {
        var length = $(this).val().length;
        length = 20 - length;
        $('#defer_button_custom_label_counter').text(length);
        if ($("#defer_button_custom_label").val().length > 20) {
            $("#defer_button_custom_label_badge").last().addClass("badge-danger");
        } else {
            $("#defer_button_custom_label_badge").last().removeClass("badge-danger");
        }
    });
});
</script> 
<script>
     $(window).resize(function(){location.reload();});
</script>
</body>
</html>
