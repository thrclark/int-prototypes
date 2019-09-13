<?php 
$section = '';
$page_title = 'New verification';
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
                    <li class="rvb-steps__item"> <a href="#" class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label">Setup</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i></span> </a> </li>
                    <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Data</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i></span> </span> </li>
                    <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Recipients</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </span> </li>
                    <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Scheduling</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i></span> </span> </li>
                    <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Review/Save</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i> </span> </li>
                </ol>
            </div>
            <div class="col-10 pl-5">
                <h2 class="mb-3">Setup</h2>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label class="control-label" for="nameLabel"> Name </label>
                            <div class="" id="nameLabel"> The name of this verification. It will be displayed on the main verification page.</div>
                            <input aria-labelledby="nameLabel" value="" ccfvalidated="" class="form-control" id="isinvalid" formcontrolname="name" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="keyLabel"> Unique Key </label>
                            <div class="" id=""> This uniquely identifies this verification in the application. </div>
                            <input value="" aria-labelledby="keyLabel" ccfvalidated="" class="form-control" id="keyLabel" formcontrolname="clientid" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="publisherLabel"> Publisher </label>
                            <div class="" id=""> The owner of this verification </div>
                            <select class="form-control" id="publisherLabel">
                                <option value="?" selected="selected"></option>
                                <option label="ESI One.IU Team" value="number:1040">ESI One.IU Team</option>
                                <option label="HR" value="number:1120">HR</option>
                                <option label="IMS" value="number:1080">IMS</option>
                                <option label="ryantest" value="number:1140">ryantest</option>
                                <option label="Student Services" value="number:1000">Student Services</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="descriptionLabel"> Description (optional) </label>
                            <div class="" id=""> The text that will display above the verification.</div>
                            <textarea id="descriptionLabel"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="disclaimerLabel"> Disclaimer (optional) </label>
                            <div class="" id=""> The text that will display below the verification.</div>
                            <textarea id="disclaimerLabel"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="disclaimerLabel"> Verify Text</label>
                            <div class="" id=""> The text that will display for the verify checkbox for this verification.</div>
                            <select class="form-control" id="verify_now_select" name="select">
                                <option value="verify_now_standard"> Use Default Text </option>
                                <option value="verify_now_custom"> Enter Custom Text </option>
                            </select>
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
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="control-label" id=""> Description </label>
                            <div class="" id=""> This description will appear in the user's Notification Center settings. </div>
                            <input value="" type="text" class="form-control" id="" aria-describedby="textinput">
                        </div>
                        <div class="form-group">
                            <label class="control-label" id="buttonprimary"> Primary action label </label>
                            <div class="" id=""> The label to use for the primary action button on notifications of this type. </div>
                            <countdown>
                                <div class="rbt-charcount">
                                    <div class="row">
                                        <div class="col-4">
                                            <input type="text" class="form-control" id="buttonprimary" aria-describedby="textinput">
                                        </div>
                                    </div>
                                </div>
                            </countdown>
                        </div>
                        <div class="form-group">
                            <label class="control-label" id="buttonsecondary"> Secondary action label </label>
                            <div class="" id=""> The label to use for the secondary action button on notifications of this type. </div>
                            <countdown>
                                <div class="rbt-charcount">
                                    <div class="row">
                                        <div class="col-4">
                                            <input type="text" class="form-control" id="buttonsecondary" aria-describedby="textinput">
                                        </div>
                                    </div>
                                </div>
                            </countdown>
                        </div>
                        <div class="form-group">
                            <label class="control-label" id="systemLabel"> System </label>
                            <div class="" id="systemDirections"> The System that the Notification Type is assigned to. </div>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Bursar</option>
                                <option>I-Bucks</option>
                                <option>Music School</option>
                                <option>Parking</option>
                            </select>
                        </div>
                        <div class="font-weight-bold mb-2 ts-14">Notification delivery method</div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                            <label class="form-check-label" for="defaultCheck1"> Email </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked="">
                            <label class="form-check-label" for="defaultCheck2"> Push </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="smsChecks" id="defaultCheck7" value="option2">
                            <label class="form-check-label" for="defaultCheck7"> Text message </label>
                        </div>
                        <div class="font-weight-bold mb-2 ts-14">Allow "Urgent" notification priority</div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                            <label class="form-check-label" for="defaultCheck4"> Yes </label>
                        </div>
                        <div class="font-weight-bold mb-2 ts-14">Status</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="stacked1" value="option1" checked="">
                            <label class="form-check-label" for="stacked1"> Active</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="stacked2" value="option2">
                            <label class="form-check-label" for="stacked2"> Inactive </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label" id="testusers"> Test users </label>
                            <div class="" id=""> In test environments, notifications will be sent to these users instead of their intended recipients. This is a comma-delimited list.</div>
                            <input aria-labelledby="testusers" value="" ccfvalidated="" class="form-control" id="isinvalid" formcontrolname="name" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label" id="testgroups"> Test groups </label>
                            <div class="" id=""> In test environments, notifications will be sent to the users in these groups instead of their intended recipients. This is a comma-delimited list. </div>
                            <input aria-labelledby="testgroups" value="" ccfvalidated="" class="form-control" id="isinvalid" formcontrolname="name" type="text">
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5" id="savePublisher"> <a href="admin-notificationtype.php" class="btn btn-primary"> Save </a> <a class="btn btn-outline-primary" routerlink="/markets" href="admin-notificationtype.php"> Cancel </a> </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <ol class="rvb-steps rvb-steps--vertical" style="overflow-x:inherit">
                            <li class="rvb-steps__item"> <a href="#" class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label">Setup</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i></span> </a> </li>
                            <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Data</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i></span> </span> </li>
                            <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Recipients</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </span> </li>
                            <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Scheduling</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i></span> </span> </li>
                            <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Review/Save</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i> </span> </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-9"></div>
        </div>--> 
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
  $(document).ready(function(){
    $(".rvb-steps").sticky({topSpacing:0});
  });
</script> 
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script> 
<script>
var simplemde = new SimpleMDE({ element: $("#descriptionLabel")[0] });
var simplemde = new SimpleMDE({ element: $("#disclaimerLabel")[0] });
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
</body>
</html>
