<?php
$section = '';
$page_title = 'API Accounts';
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
    <growls style=" display: none; position: fixed; right:10px; top:80px;" id="growl1">
        <alert dismissible="true">
            <div role="alert" class="alert alert-success alert-dismissible mb-3">
                <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                <span>Save successful.</span> </div>
        </alert>
    </growls>
    <main class="main-content demojs_listview" id="main-content">
        <div class="row align-items-center mb-3 mb-md-6 ">
            <div class="col">
                <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
            </div>
        </div>
        <div class="form-row align-items-center mb-3">
            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="showinactive" value="option1" checked="">
                    <label class="form-check-label" for="showinactive">Active accounts only</label>
                </div>
            </div>
            <div class="col-auto">
                <div class="dropdown d-inline">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> API docs </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-hidden="true" role="menu" aria-labelledby="dropdownMenuButton1"> <a class="dropdown-item" href="#">Version 1 </a> <a class="dropdown-item" href="#">Version 2 </a> <a class="dropdown-item" href="#">Version 3 </a> </div>
                </div>
                <button class="btn btn-sm btn-outline-primary demojs_addapi"><i class="rbt-icon-plus"></i> API account</button>
            </div>
        </div>
        <table class="table rbt-table-responsive rbt-table-actions">
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Expires</th>
                    <th>Email </th>
                    <th><span class="sr-only">Actions</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content "><i class="rbt-icon-circle mr-2 ts-12 text-success" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Active"></i> </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Citizenship Status API</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">External </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">---</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Email</b> <span class="rbt-table-responsive-cell-content ">thrclark@iu.edu</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span> </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu">
                                    <button class="dropdown-item demojs_addapi">Edit</button>
                                    <button class="dropdown-item">Delete</button>
                                </div>
                            </div>
                        </div></td>
                </tr>
                <tr class="demojs-inactive" style="display: none">
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content "><i class="rbt-icon-circle-empty mr-2 ts-12 text-muted" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Inactive"></i> </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Name</b><span class="tablesaw-cell-content ng-binding">HR Personal Information</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">External </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">---</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Email</b> <span class="rbt-table-responsive-cell-content ">naiursd@iu.edu</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu">
                                    <button class="dropdown-item demojs_addapi">Edit</button>
                                    <button class="dropdown-item">Delete</button>
                                </div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content "><i class="rbt-icon-circle mr-2 ts-12 text-success" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Active"></i></span></td>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">IU Notify Live Data</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">External </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">---</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Email</b> <span class="rbt-table-responsive-cell-content ">tharoh@iu.edu</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu">
                                    <button class="dropdown-item demojs_addapi">Edit</button>
                                    <button class="dropdown-item">Delete</button>
                                </div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content "><i class="rbt-icon-circle mr-2 ts-12 text-success" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Active"></i> <i class="rbt-icon-lock-closed" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Locked"></i></span></td>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">IU Notify Maintenance API</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">Maintenance </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">Mar 20, 2020</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Email</b> <span class="rbt-table-responsive-cell-content ">yjalek@iu.edu</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu">
                                    <button class="dropdown-item demojs_addapi">Edit</button>
                                    <button class="dropdown-item">Delete</button>
                                </div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content "><i class="rbt-icon-circle mr-2 ts-12 text-success" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Active"></i> <i class="rbt-icon-lock-open" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Unlocked"></i></span></td>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">TAM PRD Notifications</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">Maintenance </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">Mar 20, 2020</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Email</b> <span class="rbt-table-responsive-cell-content ">marcte@iu.edu</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu">
                                    <button class="dropdown-item demojs_addapi">Edit</button>
                                    <button class="dropdown-item">Delete</button>
                                </div>
                            </div>
                        </div></td>
                </tr>
            </tbody>
        </table>
    </main>
    <main class="main-content demojs_newview" style="display: none">
        <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                <li class="breadcrumb-item"><a href="#" class="demojs_showlistview">API accounts</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="form-group">
                    <label class="control-label" for="api_accountname"> Name </label>
                    <div class="int-fielddescription"> The API Account title is how the API Account will be referred to throughout the system. </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <countdown>
                                <div class="rbt-charcount">
                                    <input aria-labelledby="api_accountname" class="form-control " formcontrolname="title" id="api_accountname">
                                    <span class="badge badge-success" id="api_accountname_badge"> <span id="api_accountname_counter">100</span> </span> </div>
                            </countdown>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" id="nameLabel"> Status </label>
                    <div class="int-fielddescription"> The availability of this API Account. </div>
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
                    <div class="int-fielddescription"> Maintenance accounts are used for maintaining resources within the application. External accounts are used to connect to external applications for data.</div>
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
                                        <label class="control-label" for="url1_name"> Name </label>
                                        <div class="int-fielddescription"> This will be displayed in Verification publishing so you can identify this endpoint URL in order to know what to select.</div>
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <countdown>
                                                    <div class="rbt-charcount">
                                                        <input aria-labelledby="url1_name" class="form-control " formcontrolname="title" id="url1_name">
                                                        <span class="badge badge-success" id="url1_name_badge"> <span id="url1_name_counter">100</span> </span> </div>
                                                </countdown>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url1_url">URL</label>
                                        <div class="int-fielddescription">External URL to connect to retrieve data from.  Use the syntax {attributeName} for where you want the user data to be put in your URL (e.g https://example.com/{personId} or https://example.com?user={userName}.  Please only use one of these fields in your URL (userName, personId, emails).  These map up with your attributes (sAMAccountName, iuEduPSEMPLID, mail). </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <countdown>
                                                    <div class="rbt-charcount">
                                                        <input aria-labelledby="url1_url" class="form-control " formcontrolname="title" id="url1_url">
                                                        <span class="badge badge-success" id="url1_url_badge"> <span id="url1_url_counter">2000</span> </span> </div>
                                                </countdown>
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
                                        <div class="int-fielddescription">Amount of time to wait for a response from the external application in milliseconds.</div>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <input type="number" class="form-control" id="url1_timeout">
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
                                        <label class="control-label" for="url2_name"> Name </label>
                                        <div class="int-fielddescription"> This will be displayed in Verification publishing so you can identify this endpoint URL in order to know what to select.</div>
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <countdown>
                                                    <div class="rbt-charcount">
                                                        <input aria-labelledby="url2_name" class="form-control " formcontrolname="title" id="url2_name">
                                                        <span class="badge badge-success" id="url2_name_badge"> <span id="url2_name_counter">100</span> </span> </div>
                                                </countdown>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url2_url">URL</label>
                                        <div class="int-fielddescription">External URL to connect to retrieve data from.  Use the syntax {attributeName} for where you want the user data to be put in your URL (e.g https://example.com/{personId} or https://example.com?user={userName}.  Please only use one of these fields in your URL (userName, personId, emails).  These map up with your attributes (sAMAccountName, iuEduPSEMPLID, mail). </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <countdown>
                                                    <div class="rbt-charcount">
                                                        <input aria-labelledby="url2_url" class="form-control " formcontrolname="title" id="url2_url">
                                                        <span class="badge badge-success" id="url2_url_badge"> <span id="url2_url_counter">2000</span> </span> </div>
                                                </countdown>
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
                                        <div class="int-fielddescription">Amount of time to wait for a response from the external application in milliseconds.</div>
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-6">
                                                <input type="number" class="form-control" id="url2_timeout">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-sm btn-outline-primary"> <i class="rbt-icon-plus"></i> URL</button>
                    </div>
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
                    <div class="int-fielddescription">Number of resources that are allowed to be created by this API Account. This prevents outside systems from accidentally over populating the system.</div>
                    <div class="row">
                        <div class="col-12 col-sm-8 col-md-6">
                            <input type="text" class="form-control" id="max_resources">
                        </div>
                    </div>
                </div>
                <div class="form-group demojs-maintenanceapi" style="display: none">
                    <label class="control-label" for="access_level"> Permission access level </label>
                    <div class="int-fielddescription"> Determines what this account will have access to modify. </div>
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
                    <div class="int-fielddescription"> The email is used to send a daily reminder starting 30 days from the API Account expiring. </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input value="" aria-labelledby="" class="form-control" id="clientID" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="auth_type">Authentication Type</label>
                    <div class="int-fielddescription">The authentication type to use when logging into the application.</div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <select aria-labelledby="" class="form-control" aria-invalid="false" id="auth_type">
                                <option label="" value="" selected="selected">Select</option>
                                <option label="" value="basic_auth">Basic authentication</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group demojs-basicauth" style="display: none">
                    <label class="control-label" id="username"> Client ID </label>
                    <div class="int-fielddescription"> A unique identifier for this account. </div>
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <input value="b038637f3cfe804736bc" aria-labelledby="" class="form-control" id="username" type="text" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group demojs-basicauth" style="display: none">
                    <label class="control-label" id="password"> Client Secret </label>
                    <div class="int-fielddescription"> The account secret (password). This will not be displayed again and cannot be retrieved after saving the account. Be sure to copy it to a secure location. </div>
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="" value="8EcBh5z6-iVQNCFklsI_VXg-fhMkELldb4ikBQiIwqM" disabled>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="button" data-toggle="tooltip" title="Copy" id="copypaste"><i class="rbt-icon-copy"></i> <span class="sr-only">Copy</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group demojs-basicauth" style="display: none">
                    <label class="control-label" id="confirmpassword"> Expiration Date </label>
                    <div class="int-fielddescription"> The account will expire 2 years from when created.</div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <input value="05/15/2022" aria-labelledby="" class="form-control" id="confirmpassword" type="text" disabled>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher">
                    <button class="btn btn-primary demojs_showlistview" id="submitform"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                    <a class="btn btn-outline-primary demojs_showlistview" href="#"> Cancel </a> </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script type="text/javascript">
     $(document).ready(function() {
        $(function() {
            $("#copypaste").click(function() {
                $(".tooltip-inner").text("Copied!");
                setTimeout(function() {
                    $(".tooltip-inner").text("Copy");
                }, 4000)
            });
        });
    });
</script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script> 
<script>
   $(document).ready(function() {
    $('#showinactive').change(function() {
        if (this.checked) {
            $(".demojs-inactive").hide();
        } else {
            $(".demojs-inactive").show();
        }
    });
});
</script> 
<script>
    $(document).ready(function(){
      $(".demojs_addapi").click(function(){
        $(".demojs_listview").hide();
        $(".demojs_newview").show();
      });

         $(".demojs_showlistview").click(function(){
        $(".demojs_listview").show();
        $(".demojs_newview").hide();
      });
    });
</script> 
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
<script>
	$(document).ready(function() {
     $('#submitform').prop('disabled', true);
     $('.form-control').keyup(function() {
        if($(this).val() != '') {
           $('#submitform').prop('disabled', false);
        }
     });
 });
</script> 
<script>
    $(document).ready(function() {
        $(function() {
            $("#submitform").click(function() {
                $('.btn.btn-primary').addClass('rbt-loading');
				$('.btn.btn-primary .spinner-border').removeClass('d-none');
				$('.btn.btn-primary .visible').toggleClass('invisible');
				$("#submitform").prop('disabled', true);
                setTimeout(function() {
                    $('.btn.btn-primary').removeClass('rbt-loading');
					$('.btn.btn-primary .spinner-border').addClass('d-none');
					$("#submitform").prop('disabled', true);
					$('.btn.btn-primary .invisible').removeClass('invisible');
                }, 2000)
            });
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#submitform").click(function() {
            $("#growl1").delay(2000).fadeIn().delay(5000).fadeOut();
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#api_accountname").keyup(function() {
            var length = $(this).val().length;
            length = 100 - length;
            $('#api_accountname_counter').text(length);
            if ($("#api_accountname").val().length > 100) {
                $("#api_accountname_badge").last().addClass("badge-danger");
            } else {
                $("#api_accountname_badge").last().removeClass("badge-danger");
            }
        });
        $("#url1_name").keyup(function() {
            var length = $(this).val().length;
            length = 100 - length;
            $('#url1_name_counter').text(length);
            if ($("#url1_name").val().length > 100) {
                $("#url1_name_badge").last().addClass("badge-danger");
            } else {
                $("#url1_name_badge").last().removeClass("badge-danger");
            }
        });
        $("#url1_url").keyup(function() {
            var length = $(this).val().length;
            length = 2000 - length;
            $('#url1_url_counter').text(length);
            if ($("#url1_url").val().length > 2000) {
                $("#url1_url_badge").last().addClass("badge-danger");
            } else {
                $("#url1_url_badge").last().removeClass("badge-danger");
            }
        });
        $("#url2_name").keyup(function() {
            var length = $(this).val().length;
            length = 100 - length;
            $('#url2_name_counter').text(length);
            if ($("#url2_name").val().length > 100) {
                $("#url2_name_badge").last().addClass("badge-danger");
            } else {
                $("#url2_name_badge").last().removeClass("badge-danger");
            }
        });
         $("#url2_url").keyup(function() {
            var length = $(this).val().length;
            length = 2000 - length;
            $('#url2_url_counter').text(length);
            if ($("#url2_url").val().length > 2000) {
                $("#url2_url_badge").last().addClass("badge-danger");
            } else {
                $("#url2_url_badge").last().removeClass("badge-danger");
            }
        });
    });
</script>
</body>
</html>
