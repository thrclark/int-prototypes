<?php
$section = '';
$page_title = 'New API account';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-admin.php') ?>
</head>
<body>
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-3 mt-md-5 mb-5">
    <main class="main-content">
        <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                <li class="breadcrumb-item"><a href="admin-settings-apiaccounts.php">API accounts</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="form-group">
                    <label class="control-label" id="nameLabel"> Name </label>
                    <div> The API Account title is how the API Account will be referred to throughout the system. </div>
                    <input value="" aria-labelledby="" class="form-control" id="clientID" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label" id="nameLabel"> Status </label>
                    <div> The availability of this API Account. </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <select aria-labelledby="statusLabel statusDirections" class="form-control" aria-invalid="false">
                                <option label="Active" value="string:ACTIVE" selected="selected">Active</option>
                                <option label="Inactive" value="string:INACTIVE">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="account_type"> API Account Type </label>
                    <div> Maintenance accounts are used for maintaining resources within the application. External accounts are used to connect to external applications for data.</div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <select aria-labelledby="statusLabel statusDirections" class="form-control" id="account_type">
                                <option value="external_api" selected="selected">External API</option>
                                <option value="maintenance_api">Maintenance API</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="demojs-externalapi">
                    <div class="font-weight-bold ts-14 mb-2">External Rest API URLs</div>
                    <div class="rbt-collapse-accordion" id="accordion">
                        <div class="card">
                            <h3 class="mb-2" id="heading_url1">
                                <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapse_url1" aria-expanded="false" aria-controls="collapse_url1"> <i class="rbt-icon-chevron-right"></i>URL 1 </button>
                            </h3>
                            <div id="collapse_url1" class="collapse" aria-labelledby="heading_url1" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="url1_name">Name</label>
                                        <div>This will be displayed in Verification publishing so you can identify this endpoint URL in order to know what to select.</div>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <input type="text" class="form-control" id="url1_name" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url1_url">URL</label>
                                        <div>External URL to connect to retrieve data from.  Use the syntax {attributeName} for where you want the user data to be put in your URL (e.g https://example.com/{personId} or https://example.com?user={userName}.  Please only use one of these fields in your URL (userName, personId, emails).  These map up with your attributes (sAMAccountName, iuEduPSEMPLID, mail). </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <input type="text" class="form-control" id="url1_url" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textinput-full">Select Input</label>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option selected="selected">Choose an option...</option>
                                                    <option>Option one</option>
                                                    <option>Option two</option>
                                                    <option>Option three</option>
                                                    <option>Option four</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-primary"> <i class="rbt-icon-plus"></i> URL</button>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <label class="control-label" for="publishers"> Publishers </label>
                    <select multiple="multiple" id="publishers" class="form-control">
                        <option value='elem_1'>Item 1</option>
                        <option value='elem_2'>Item 2</option>
                        <option value='elem_3'>Item 3</option>
                        <option value='elem_4'>Item 4</option>
                    </select>
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
                <div class="form-group">
                    <label class="control-label" id="nameLabel"> Email </label>
                    <div> The email is used to send a daily reminder starting 30 days from the API Account expiring. </div>
                    <input value="" aria-labelledby="" class="form-control" id="clientID" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label" id="nameLabel">Authentication Type</label>
                    <div>The authentication type to use when logging into the application.</div>
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3">
                            <select aria-labelledby="statusLabel statusDirections" class="form-control" aria-invalid="false">
                                <option label="" value="" selected="selected">Select</option>
                                <option label="" value="">Basic authentication</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher"> <a href="admin-notificationtype.php" class="btn btn-primary"> Save </a> <a class="btn btn-outline-primary" routerlink="/markets" href="admin-notificationtype.php"> Cancel </a> </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
    $(document).ready(function() {

		$('#publishers').multiSelect()
    });
</script> 
<script>
$(document).ready(function() {
    $(function() {
        $('#account_type').change(function() {
            if ($('#account_type').val() == 'external_api') {
                $('.demojs-externalapi').show();
            } else {
                $('.demojs-externalapi').hide();
            }
        });
    });
});
</script>
</body>
</html>
