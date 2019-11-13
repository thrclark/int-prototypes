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
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <input value="" aria-labelledby="" class="form-control" id="clientID" type="text">
                        </div>
                    </div>
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
                <div class="mb-5 demojs-externalapi">
                    <div class="font-weight-bold ts-14 mb-2">External Rest API URLs</div>
                    <div class="rbt-collapse-accordion" id="accordion">
                        <div class="card">
                            <div class="" id="heading_url1">
                                <h3 class="mb-2">
                                    <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapse_url1" aria-expanded="false" aria-controls="heading_url1"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">URL 1</span></button>
                                </h3>
                                <div class="int-accordion-controls">
                                    <button class="rbt-btn-nostyle"> <i class="rbt-icon-close"></i> <span class="sr-only">Remove</span></button>
                                </div>
                            </div>
                            <div id="collapse_url1" class="collapse" aria-labelledby="heading_url1" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="url1_name">Name</label>
                                        <div>This will be displayed in Verification publishing so you can identify this endpoint URL in order to know what to select.</div>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <input type="text" class="form-control" id="url1_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url1_url">URL</label>
                                        <div>External URL to connect to retrieve data from.  Use the syntax {attributeName} for where you want the user data to be put in your URL (e.g https://example.com/{personId} or https://example.com?user={userName}.  Please only use one of these fields in your URL (userName, personId, emails).  These map up with your attributes (sAMAccountName, iuEduPSEMPLID, mail). </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <input type="text" class="form-control" id="url1_url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url1_type">Type</label>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <select class="form-control" id="url1_type">
                                                    <option>Live data</option>
                                                    <option>Callback</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url1_version">Version</label>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <select class="form-control" id="url1_version">
                                                    <option>1.0</option>
                                                    <option>2.0</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url1_timeout">Timeout (milliseconds)</label>
                                        <div>Amount of time to wait for a response from the external application in milliseconds.</div>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <input type="text" class="form-control" id="url1_timeout">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="" id="heading_url2">
                                <h3 class="mb-2">
                                    <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapse_url2" aria-expanded="false" aria-controls="heading_url2"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">URL 2</span></button>
                                </h3>
                                <div class="int-accordion-controls">
                                    <button class="rbt-btn-nostyle"> <i class="rbt-icon-close"></i> <span class="sr-only">Remove</span></button>
                                </div>
                            </div>
                            <div id="collapse_url2" class="collapse" aria-labelledby="heading_url2" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="url2_name">Name</label>
                                        <div>This will be displayed in Verification publishing so you can identify this endpoint URL in order to know what to select.</div>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <input type="text" class="form-control" id="url2_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url2_url">URL</label>
                                        <div>External URL to connect to retrieve data from.  Use the syntax {attributeName} for where you want the user data to be put in your URL (e.g https://example.com/{personId} or https://example.com?user={userName}.  Please only use one of these fields in your URL (userName, personId, emails).  These map up with your attributes (sAMAccountName, iuEduPSEMPLID, mail). </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <input type="text" class="form-control" id="url2_url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url2_type">Type</label>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <select class="form-control" id="url2_type">
                                                    <option>Live data</option>
                                                    <option>Callback</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url2_version">Version</label>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <select class="form-control" id="url2_version">
                                                    <option>1.0</option>
                                                    <option>2.0</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url2_timeout">Timeout (milliseconds)</label>
                                        <div>Amount of time to wait for a response from the external application in milliseconds.</div>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <input type="text" class="form-control" id="url2_timeout">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-primary"> <i class="rbt-icon-plus"></i> URL</button>
                </div>
                <div class="mb-5 demojs-maintenanceapi" style="display: none">
                    <div class="form-check mb-3">
                        <div class="font-weight-bold ts-14 mb-2">Renew Account Expire Date</div>
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1"> This account may be renewed within 30 days of expiration (Wed Oct 23 2019).</label>
                    </div>
                    <div class="form-check mb-3">
                        <div class="font-weight-bold ts-14 mb-2">Locked Account</div>
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2"> Unlock this API Account so it may be used again</label>
                    </div>
                </div>
                <div class="form-group demojs-maintenanceapi"  style="display: none">
                    <label for="max_resources">Maximum number of new resources</label>
                    <div>Number of resources that are allowed to be created by this API Account. This prevents outside systems from accidentally over populating the system.</div>
                    <div class="row">
                        <div class="col-12 col-sm-8 col-md-6">
                            <input type="text" class="form-control" id="max_resources">
                        </div>
                    </div>
                </div>
                <div class="form-group demojs-maintenanceapi" style="display: none">
                    <label class="control-label" for="access_level"> Permission access level </label>
                    <div> Determines what this account will have access to modify. </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <select aria-labelledby="" class="form-control" aria-invalid="false" id="access_level">
                                <option  value="publisher-access" selected="selected">Publisher access</option>
                                <option value="admin-access">Admin access</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group demojs-publishers">
                    <label class="control-label" for="publishers"> Publishers </label>
                    <select multiple="multiple" id="publishers" class="form-control">
                        <option value='elem_0'>Bursar</option>
                        <option value='elem_1'>ESI One.IU team</option>
                        <option value='elem_2'>HR</option>
                        <option value='elem_3'>IMS</option>
                        <option value='elem_4'>ITCO</option>
                        <option value='elem_5'>Student Services</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" id="nameLabel"> Email </label>
                    <div> The email is used to send a daily reminder starting 30 days from the API Account expiring. </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <input value="" aria-labelledby="" class="form-control" id="clientID" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="auth_type">Authentication Type</label>
                    <div>The authentication type to use when logging into the application.</div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <select aria-labelledby="" class="form-control" aria-invalid="false" id="auth_type">
                                <option label="" value="" selected="selected">Select</option>
                                <option label="" value="basic_auth">Basic authentication</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group demojs-basicauth" style="display: none">
                    <label class="control-label" id="username"> User name </label>
                    <div> Used for identification of the account. </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <input value="" aria-labelledby="" class="form-control" id="username" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group demojs-basicauth" style="display: none">
                    <label class="control-label" id="password"> Password </label>
                    <div> Used for identification of the account. </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <input value="" aria-labelledby="" class="form-control" id="password" type="password">
                        </div>
                    </div>
                </div>
                <div class="form-group demojs-basicauth" style="display: none">
                    <label class="control-label" id="confirmpassword"> Confirm password </label>
                    <div> Confirm the password. Passwords must match.</div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <input value="" aria-labelledby="" class="form-control" id="confirmpassword" type="password">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher"> <a href="admin-settings-apiaccounts.php" class="btn btn-primary"> Save </a> <a class="btn btn-outline-primary" href="admin-settings-apiaccounts.php"> Cancel </a> </div>
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
				$('.demojs-publishers').show();
            } else {
                $('.demojs-externalapi').hide();
            }
            if ($('#account_type').val() == 'maintenance_api') {
                $('.demojs-maintenanceapi').show();
				$('.demojs-publishers').show();
            } else {
                $('.demojs-maintenanceapi').hide();
            }
        });
    });
});
</script> 
<script>
$(document).ready(function() {
    $(function() {
        $('#access_level').change(function() {
            if ($('#access_level').val() == 'publisher-access') {
                $('.demojs-publishers').show();
            } else {
                $('.demojs-publishers').hide();
            }
          
        });
    });
});
</script> 
<script>
$(document).ready(function() {
    $(function() {
        $('#auth_type').change(function() {
            if ($('#auth_type').val() == 'basic_auth') {
                $('.demojs-basicauth').show();
            } else {
                $('.demojs-basicauth').hide();
            }
          
        });
    });
});
</script>
</body>
</html>
