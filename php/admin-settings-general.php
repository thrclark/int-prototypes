<?php
$section = '';
$page_title = 'General Settings';
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
        <div class="demojs-section" id="view_main">
            <div class="d-flex justify-content-between">
                <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
                <growls style=" display: none; position: fixed; right:10px; top:80px;" id="growl1">
                    <alert dismissible="true">
                        <div role="alert" class="alert alert-success alert-dismissible mb-3">
                            <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                            <span>Save successful.</span> </div>
                    </alert>
                </growls>
            </div>
            <div class="int-panel p-3">
                <table class="table rbt-table-responsive rbt-table-actions">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Value</th>
                            <th><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--  <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Application Name</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">The name of the application. This is displayed in the header.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> IU Verify </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-appname.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>-->
                        
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Default verification description <span class="ts-12 d-block"> Text to be displayed at the top of every verification.</span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> On occasion, we require verification of your personal information. The item(s) presented on this … </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview1">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Default verify button text <span class="ts-12 d-block"> Text to be displayed on the Verification button. This can be overridden by an individual verification.</span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> Verify </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview2">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Default verify message <span class="ts-12 d-block"> Text to be displayed next to the Verify option. This can be overridden by an individual verification.</span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> I have verified that the above information is up to date and correct. </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview3">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Default defer button text <span class="ts-12 d-block"> Text to be displayed on the Defer button. This can be overridden by an individual verification.</span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> Verify Later </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview4">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Default defer message <span class="ts-12 d-block"> Text to be displayed next to the Defer option. This can be overridden by an individual verification.</span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> You may also skip this verification for now. </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview5">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Error message <span class="ts-12 d-block"> A message that is displayed when an error occurs preventing a verification from being completed.</span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> There is a system error that is currently preventing verification of your information. Please ski… </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview6">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Default target URL <span class="ts-12 d-block"> Users will be directed to this URL after completing their verifications if no target URL is passed to the system.</span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content">
                                <div>-</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview7">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Enable email <span class="ts-12 d-block"> Turn on email functionality. Default is no</span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> No </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview8">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Google Analytics ID <span class="ts-12 d-block"> The ID assigned to your domain in the Google Analytics administration tool</span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> UA-39645822-14 </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview9">Edit</button>
                                </span></td>
                        </tr>
                        <!--  <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Maintenance Resource Page Count</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">The number of items displayed on a page at one time.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> 40 </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-maintenanceresource.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>-->
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">System email <span class="ts-12 d-block"> Email address from which email is sent.</span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content">
                                <div>-</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview10">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Time zone <span class="ts-12 d-block"> Select the your time zone.</span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> US/Eastern </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview11">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Welcome Message <span class="ts-12 d-block"> The message displayed to welcome and identify the logged-in user.</span></span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> Hello, {username} </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview12">Edit</button>
                                </span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="demojs-section" id="view1" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Default verification description</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="#" class="demojs_showmainview">General settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default verification description</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="textinput-full">Default verification description</label>
                            <div class="int-fielddescription">Text to be displayed at the top of every verification.</span>
                                <textarea id="default_verification_description"></textarea>
                            </div>
                            <hr>
                            <div class="rbt-button-group mt-3 mb-5">
                                <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                                <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view2" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Default verify button text</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-settings-general.php">General settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default verify button text</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label class="control-label" for="def_ver_buttontext"> Default verify button text </label>
                            <div class="int-fielddescription"> Text to be displayed on the Verification button (this can be overridden by an individual verification).</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <input aria-labelledby="def_ver_buttontext" class="form-control " formcontrolname="title" id="def_ver_buttontext">
                                            <span class="badge badge-success" id="def_ver_buttontext_badge"> <span id="def_ver_buttontext_counter">20</span> </span> </div>
                                    </countdown>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view3" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Default verify message</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-settings-general.php">General settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default verify message</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label class="control-label" for="def_verify_message"> Default verify message </label>
                            <div class="int-fielddescription"> Text to be displayed next to the Verify option (this may be overridden by an individual verification).</div>
                            <div class="row">
                                <div class="col-12">
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <textarea aria-labelledby="def_verify_message" class="form-control " formcontrolname="title" id="def_verify_message"></textarea>
                                            <span class="badge badge-success" id="def_verify_message_badge"> <span id="def_verify_message_counter">1000</span> </span> </div>
                                    </countdown>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view4" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Default defer button text</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-settings-general.php">General settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default defer button text</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label class="control-label" for="def_def_buttontext"> Default defer button text </label>
                            <div class="int-fielddescription"> Text to be displayed on the Defer button (this can be overridden by an individual verification).</div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <input aria-labelledby="def_def_buttontext" class="form-control " formcontrolname="title" id="def_def_buttontext">
                                            <span class="badge badge-success" id="def_def_buttontext_badge"> <span id="def_def_buttontext_counter">20</span> </span> </div>
                                    </countdown>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view5" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Default defer message</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-settings-general.php">General settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default defer message</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="def_def_message">Default defer message</label>
                            <div class="int-fielddescription">Text to be displayed next to the Defer option (this can be overridden by an individual verification).</div>
                            <countdown>
                                <div class="rbt-charcount">
                                    <textarea aria-labelledby="def_def_message" class="form-control " formcontrolname="title" id="def_def_message"></textarea>
                                    <span class="badge badge-success" id="def_def_message_badge"> <span id="def_def_message_counter">1000</span> </span> </div>
                            </countdown>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view6" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Error message</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-settings-general.php">General settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Error message</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="error_message">Error message</label>
                            <div class="int-fielddescription">A message that is displayed when an error occurs preventing a verification from being completed.</div>
                            <countdown>
                                <div class="rbt-charcount">
                                    <textarea aria-labelledby="error_message" class="form-control " formcontrolname="title" id="error_message">There is a system error that is currently preventing verification of your information. Please skip verification at this time to proceed with your login. You will be prompted to verify your information at a later time.</textarea>
                                    <span class="badge badge-success" id="error_message_badge"> <span id="error_message_counter">1000</span> </span> </div>
                            </countdown>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view7" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Default target URL</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-settings-general.php">General settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default target URL</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="textinput-full">Default target URL</label>
                            <div class="int-fielddescription">Users will be directed to this URL after completing their verifications if no target URL is passed to the system.</div>
                            <countdown>
                                <div class="rbt-charcount">
                                    <input aria-labelledby="defaulttargeturl" class="form-control " formcontrolname="title" id="defaulttargeturl">
                                    <span class="badge badge-success" id="defaulttargeturl_badge"> <span id="defaulttargeturl_counter">2000</span> </span> </div>
                            </countdown>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view8" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Enable email</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-settings-general.php">General settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Enable email</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="textinput-full">Enable email</label>
                            <div class="int-fielddescription">Turn on email functionality. Default is no</div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="stacked1" value="option1" checked>
                                <label class="form-check-label" for="stacked1">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="stacked2" value="option2">
                                <label class="form-check-label" for="stacked2">No </label>
                            </div>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view9" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Google Analytics ID</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-settings-general.php">General settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Google Analytics ID</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="textinput-full">Google Analytics ID</label>
                            <div class="int-fielddescription">The ID assigned to your domain in the Google Analytics administration tool.</div>
                            <input type="text" class="form-control" id="textinput-full" aria-describedby="textinput">
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view10" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> System email</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-settings-general.php">General settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">System email</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="textinput-full">System email</label>
                            <div class="int-fielddescription">Email address from which email is sent.</div>
                            <countdown>
                                <div class="rbt-charcount">
                                    <input aria-labelledby="systememail" class="form-control " formcontrolname="title" id="systememail">
                                    <span class="badge badge-success" id="systememail_badge"> <span id="systememail_counter">100</span> </span> </div>
                            </countdown>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view11" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Time zone</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-settings-general.php">General settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Time zone</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="textinput-full">Time zone</label>
                            <div class="int-fielddescription">Select the your time zone.</div>
                            <select class="form-control">
                                <option label="Asia/Aden" value="string:Asia/Aden">Asia/Aden</option>
                                <option label="America/Cuiaba" value="string:America/Cuiaba">America/Cuiaba</option>
                                <option label="Etc/GMT+9" value="string:Etc/GMT+9">Etc/GMT+9</option>
                                <option label="Etc/GMT+8" value="string:Etc/GMT+8">Etc/GMT+8</option>
                                <option label="Africa/Nairobi" value="string:Africa/Nairobi">Africa/Nairobi</option>
                                <option label="America/Marigot" value="string:America/Marigot">America/Marigot</option>
                                <option label="Asia/Aqtau" value="string:Asia/Aqtau">Asia/Aqtau</option>
                                <option label="Pacific/Kwajalein" value="string:Pacific/Kwajalein">Pacific/Kwajalein</option>
                                <option label="America/El_Salvador" value="string:America/El_Salvador">America/El_Salvador</option>
                                <option label="timezone.Asia/Pontianak" value="string:Asia/Pontianak">timezone.Asia/Pontianak</option>
                                <option label="Africa/Cairo" value="string:Africa/Cairo">Africa/Cairo</option>
                                <option label="Pacific/Pago_Pago" value="string:Pacific/Pago_Pago">Pacific/Pago_Pago</option>
                                <option label="Africa/Mbabane" value="string:Africa/Mbabane">Africa/Mbabane</option>
                                <option label="Asia/Kuching" value="string:Asia/Kuching">Asia/Kuching</option>
                                <option label="Pacific/Honolulu" value="string:Pacific/Honolulu">Pacific/Honolulu</option>
                                <option label="Pacific/Rarotonga" value="string:Pacific/Rarotonga">Pacific/Rarotonga</option>
                                <option label="America/Guatemala" value="string:America/Guatemala">America/Guatemala</option>
                                <option label="Australia/Hobart" value="string:Australia/Hobart">Australia/Hobart</option>
                                <option label="Europe/London" value="string:Europe/London">Europe/London</option>
                                <option label="America/Belize" value="string:America/Belize">America/Belize</option>
                                <option label="America/Panama" value="string:America/Panama">America/Panama</option>
                                <option label="Asia/Chungking" value="string:Asia/Chungking">Asia/Chungking</option>
                                <option label="America/Managua" value="string:America/Managua">America/Managua</option>
                                <option label="America/Indiana/Petersburg" value="string:America/Indiana/Petersburg">America/Indiana/Petersburg</option>
                                <option label="Asia/Yerevan" value="string:Asia/Yerevan">Asia/Yerevan</option>
                                <option label="Europe/Brussels" value="string:Europe/Brussels">Europe/Brussels</option>
                                <option label="GMT" value="string:GMT">GMT</option>
                                <option label="Europe/Warsaw" value="string:Europe/Warsaw">Europe/Warsaw</option>
                                <option label="America/Chicago" value="string:America/Chicago">America/Chicago</option>
                                <option label="Asia/Kashgar" value="string:Asia/Kashgar">Asia/Kashgar</option>
                                <option label="Chile/Continental" value="string:Chile/Continental">Chile/Continental</option>
                                <option label="Pacific/Yap" value="string:Pacific/Yap">Pacific/Yap</option>
                                <option label="CET" value="string:CET">CET</option>
                                <option label="Etc/GMT-1" value="string:Etc/GMT-1">Etc/GMT-1</option>
                                <option label="Etc/GMT-0" value="string:Etc/GMT-0">Etc/GMT-0</option>
                                <option label="Europe/Jersey" value="string:Europe/Jersey">Europe/Jersey</option>
                                <option label="America/Tegucigalpa" value="string:America/Tegucigalpa">America/Tegucigalpa</option>
                                <option label="Etc/GMT-5" value="string:Etc/GMT-5">Etc/GMT-5</option>
                                <option label="Europe/Istanbul" value="string:Europe/Istanbul">Europe/Istanbul</option>
                                <option label="America/Eirunepe" value="string:America/Eirunepe">America/Eirunepe</option>
                                <option label="Etc/GMT-4" value="string:Etc/GMT-4">Etc/GMT-4</option>
                                <option label="America/Miquelon" value="string:America/Miquelon">America/Miquelon</option>
                                <option label="Etc/GMT-3" value="string:Etc/GMT-3">Etc/GMT-3</option>
                                <option label="Europe/Luxembourg" value="string:Europe/Luxembourg">Europe/Luxembourg</option>
                                <option label="Etc/GMT-2" value="string:Etc/GMT-2">Etc/GMT-2</option>
                                <option label="Etc/GMT-9" value="string:Etc/GMT-9">Etc/GMT-9</option>
                                <option label="America/Argentina/Catamarca" value="string:America/Argentina/Catamarca">America/Argentina/Catamarca</option>
                                <option label="Etc/GMT-8" value="string:Etc/GMT-8">Etc/GMT-8</option>
                                <option label="Etc/GMT-7" value="string:Etc/GMT-7">Etc/GMT-7</option>
                                <option label="Etc/GMT-6" value="string:Etc/GMT-6">Etc/GMT-6</option>
                                <option label="Europe/Zaporozhye" value="string:Europe/Zaporozhye">Europe/Zaporozhye</option>
                                <option label="Canada/Yukon" value="string:Canada/Yukon">Canada/Yukon</option>
                                <option label="Canada/Atlantic" value="string:Canada/Atlantic">Canada/Atlantic</option>
                                <option label="Atlantic/St_Helena" value="string:Atlantic/St_Helena">Atlantic/St_Helena</option>
                                <option label="Australia/Tasmania" value="string:Australia/Tasmania">Australia/Tasmania</option>
                                <option label="Libya" value="string:Libya">Libya</option>
                                <option label="Europe/Guernsey" value="string:Europe/Guernsey">Europe/Guernsey</option>
                                <option label="America/Grand_Turk" value="string:America/Grand_Turk">America/Grand_Turk</option>
                                <option label="US/Pacific-New" value="string:US/Pacific-New">US/Pacific-New</option>
                                <option label="Asia/Samarkand" value="string:Asia/Samarkand">Asia/Samarkand</option>
                                <option label="America/Argentina/Cordoba" value="string:America/Argentina/Cordoba">America/Argentina/Cordoba</option>
                                <option label="Asia/Phnom_Penh" value="string:Asia/Phnom_Penh">Asia/Phnom_Penh</option>
                                <option label="Africa/Kigali" value="string:Africa/Kigali">Africa/Kigali</option>
                                <option label="Asia/Almaty" value="string:Asia/Almaty">Asia/Almaty</option>
                                <option label="US/Alaska" value="string:US/Alaska">US/Alaska</option>
                                <option label="Asia/Dubai" value="string:Asia/Dubai">Asia/Dubai</option>
                                <option label="Europe/Isle_of_Man" value="string:Europe/Isle_of_Man">Europe/Isle_of_Man</option>
                                <option label="America/Araguaina" value="string:America/Araguaina">America/Araguaina</option>
                                <option label="Cuba" value="string:Cuba">Cuba</option>
                                <option label="Asia/Novosibirsk" value="string:Asia/Novosibirsk">Asia/Novosibirsk</option>
                                <option label="America/Argentina/Salta" value="string:America/Argentina/Salta">America/Argentina/Salta</option>
                                <option label="Etc/GMT+3" value="string:Etc/GMT+3">Etc/GMT+3</option>
                                <option label="Africa/Tunis" value="string:Africa/Tunis">Africa/Tunis</option>
                                <option label="Etc/GMT+2" value="string:Etc/GMT+2">Etc/GMT+2</option>
                                <option label="Etc/GMT+1" value="string:Etc/GMT+1">Etc/GMT+1</option>
                                <option label="Pacific/Fakaofo" value="string:Pacific/Fakaofo">Pacific/Fakaofo</option>
                                <option label="Africa/Tripoli" value="string:Africa/Tripoli">Africa/Tripoli</option>
                                <option label="Etc/GMT+0" value="string:Etc/GMT+0">Etc/GMT+0</option>
                                <option label="Israel" value="string:Israel">Israel</option>
                                <option label="Africa/Banjul" value="string:Africa/Banjul">Africa/Banjul</option>
                                <option label="Etc/GMT+7" value="string:Etc/GMT+7">Etc/GMT+7</option>
                                <option label="Indian/Comoro" value="string:Indian/Comoro">Indian/Comoro</option>
                                <option label="Etc/GMT+6" value="string:Etc/GMT+6">Etc/GMT+6</option>
                                <option label="Etc/GMT+5" value="string:Etc/GMT+5">Etc/GMT+5</option>
                                <option label="Etc/GMT+4" value="string:Etc/GMT+4">Etc/GMT+4</option>
                                <option label="Pacific/Port_Moresby" value="string:Pacific/Port_Moresby">Pacific/Port_Moresby</option>
                                <option label="US/Arizona" value="string:US/Arizona">US/Arizona</option>
                                <option label="Antarctica/Syowa" value="string:Antarctica/Syowa">Antarctica/Syowa</option>
                                <option label="Indian/Reunion" value="string:Indian/Reunion">Indian/Reunion</option>
                                <option label="Pacific/Palau" value="string:Pacific/Palau">Pacific/Palau</option>
                                <option label="Europe/Kaliningrad" value="string:Europe/Kaliningrad">Europe/Kaliningrad</option>
                                <option label="America/Montevideo" value="string:America/Montevideo">America/Montevideo</option>
                                <option label="Africa/Windhoek" value="string:Africa/Windhoek">Africa/Windhoek</option>
                                <option label="Asia/Karachi" value="string:Asia/Karachi">Asia/Karachi</option>
                                <option label="Africa/Mogadishu" value="string:Africa/Mogadishu">Africa/Mogadishu</option>
                                <option label="Australia/Perth" value="string:Australia/Perth">Australia/Perth</option>
                                <option label="Brazil/East" value="string:Brazil/East">Brazil/East</option>
                                <option label="Etc/GMT" value="string:Etc/GMT">Etc/GMT</option>
                                <option value="string:Asia/Chita"></option>
                                <option label="Pacific/Easter" value="string:Pacific/Easter">Pacific/Easter</option>
                                <option label="Antarctica/Davis" value="string:Antarctica/Davis">Antarctica/Davis</option>
                                <option label="Antarctica/McMurdo" value="string:Antarctica/McMurdo">Antarctica/McMurdo</option>
                                <option label="Asia/Macao" value="string:Asia/Macao">Asia/Macao</option>
                                <option label="America/Manaus" value="string:America/Manaus">America/Manaus</option>
                                <option label="Africa/Freetown" value="string:Africa/Freetown">Africa/Freetown</option>
                                <option label="Europe/Bucharest" value="string:Europe/Bucharest">Europe/Bucharest</option>
                                <option value="string:Asia/Tomsk"></option>
                                <option label="America/Argentina/Mendoza" value="string:America/Argentina/Mendoza">America/Argentina/Mendoza</option>
                                <option label="Asia/Macau" value="string:Asia/Macau">Asia/Macau</option>
                                <option label="Europe/Malta" value="string:Europe/Malta">Europe/Malta</option>
                                <option label="Mexico/BajaSur" value="string:Mexico/BajaSur">Mexico/BajaSur</option>
                                <option label="Pacific/Tahiti" value="string:Pacific/Tahiti">Pacific/Tahiti</option>
                                <option label="Africa/Asmera" value="string:Africa/Asmera">Africa/Asmera</option>
                                <option label="Europe/Busingen" value="string:Europe/Busingen">Europe/Busingen</option>
                                <option label="America/Argentina/Rio_Gallegos" value="string:America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option>
                                <option label="Africa/Malabo" value="string:Africa/Malabo">Africa/Malabo</option>
                                <option label="Europe/Skopje" value="string:Europe/Skopje">Europe/Skopje</option>
                                <option label="America/Catamarca" value="string:America/Catamarca">America/Catamarca</option>
                                <option label="America/Godthab" value="string:America/Godthab">America/Godthab</option>
                                <option label="Europe/Sarajevo" value="string:Europe/Sarajevo">Europe/Sarajevo</option>
                                <option label="Australia/ACT" value="string:Australia/ACT">Australia/ACT</option>
                                <option label="GB-Eire" value="string:GB-Eire">GB-Eire</option>
                                <option label="Africa/Lagos" value="string:Africa/Lagos">Africa/Lagos</option>
                                <option label="America/Cordoba" value="string:America/Cordoba">America/Cordoba</option>
                                <option label="Europe/Rome" value="string:Europe/Rome">Europe/Rome</option>
                                <option label="Asia/Dacca" value="string:Asia/Dacca">Asia/Dacca</option>
                                <option label="Indian/Mauritius" value="string:Indian/Mauritius">Indian/Mauritius</option>
                                <option label="Pacific/Samoa" value="string:Pacific/Samoa">Pacific/Samoa</option>
                                <option label="America/Regina" value="string:America/Regina">America/Regina</option>
                                <option label="America/Fort_Wayne" value="string:America/Fort_Wayne">America/Fort_Wayne</option>
                                <option label="America/Dawson_Creek" value="string:America/Dawson_Creek">America/Dawson_Creek</option>
                                <option label="Africa/Algiers" value="string:Africa/Algiers">Africa/Algiers</option>
                                <option label="Europe/Mariehamn" value="string:Europe/Mariehamn">Europe/Mariehamn</option>
                                <option label="America/St_Johns" value="string:America/St_Johns">America/St_Johns</option>
                                <option label="America/St_Thomas" value="string:America/St_Thomas">America/St_Thomas</option>
                                <option label="Europe/Zurich" value="string:Europe/Zurich">Europe/Zurich</option>
                                <option label="America/Anguilla" value="string:America/Anguilla">America/Anguilla</option>
                                <option label="Asia/Dili" value="string:Asia/Dili">Asia/Dili</option>
                                <option label="America/Denver" value="string:America/Denver">America/Denver</option>
                                <option label="Africa/Bamako" value="string:Africa/Bamako">Africa/Bamako</option>
                                <option value="string:Europe/Saratov"></option>
                                <option label="GB" value="string:GB">GB</option>
                                <option label="Mexico/General" value="string:Mexico/General">Mexico/General</option>
                                <option label="Pacific/Wallis" value="string:Pacific/Wallis">Pacific/Wallis</option>
                                <option label="Europe/Gibraltar" value="string:Europe/Gibraltar">Europe/Gibraltar</option>
                                <option label="Africa/Conakry" value="string:Africa/Conakry">Africa/Conakry</option>
                                <option label="Africa/Lubumbashi" value="string:Africa/Lubumbashi">Africa/Lubumbashi</option>
                                <option label="Asia/Istanbul" value="string:Asia/Istanbul">Asia/Istanbul</option>
                                <option label="America/Havana" value="string:America/Havana">America/Havana</option>
                                <option label="NZ-CHAT" value="string:NZ-CHAT">NZ-CHAT</option>
                                <option label="Asia/Choibalsan" value="string:Asia/Choibalsan">Asia/Choibalsan</option>
                                <option label="America/Porto_Acre" value="string:America/Porto_Acre">America/Porto_Acre</option>
                                <option label="Asia/Omsk" value="string:Asia/Omsk">Asia/Omsk</option>
                                <option label="Europe/Vaduz" value="string:Europe/Vaduz">Europe/Vaduz</option>
                                <option label="US/Michigan" value="string:US/Michigan">US/Michigan</option>
                                <option label="Asia/Dhaka" value="string:Asia/Dhaka">Asia/Dhaka</option>
                                <option label="America/Barbados" value="string:America/Barbados">America/Barbados</option>
                                <option label="Europe/Tiraspol" value="string:Europe/Tiraspol">Europe/Tiraspol</option>
                                <option label="Atlantic/Cape_Verde" value="string:Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
                                <option label="Asia/Yekaterinburg" value="string:Asia/Yekaterinburg">Asia/Yekaterinburg</option>
                                <option label="America/Louisville" value="string:America/Louisville">America/Louisville</option>
                                <option label="Pacific/Johnston" value="string:Pacific/Johnston">Pacific/Johnston</option>
                                <option label="Pacific/Chatham" value="string:Pacific/Chatham">Pacific/Chatham</option>
                                <option label="Europe/Ljubljana" value="string:Europe/Ljubljana">Europe/Ljubljana</option>
                                <option label="America/Sao_Paulo" value="string:America/Sao_Paulo">America/Sao_Paulo</option>
                                <option label="Asia/Jayapura" value="string:Asia/Jayapura">Asia/Jayapura</option>
                                <option label="America/Curacao" value="string:America/Curacao">America/Curacao</option>
                                <option label="Asia/Dushanbe" value="string:Asia/Dushanbe">Asia/Dushanbe</option>
                                <option label="America/Guyana" value="string:America/Guyana">America/Guyana</option>
                                <option label="America/Guayaquil" value="string:America/Guayaquil">America/Guayaquil</option>
                                <option label="America/Martinique" value="string:America/Martinique">America/Martinique</option>
                                <option label="Portugal" value="string:Portugal">Portugal</option>
                                <option label="Europe/Berlin" value="string:Europe/Berlin">Europe/Berlin</option>
                                <option label="Europe/Moscow" value="string:Europe/Moscow">Europe/Moscow</option>
                                <option label="Europe/Chisinau" value="string:Europe/Chisinau">Europe/Chisinau</option>
                                <option label="America/Puerto_Rico" value="string:America/Puerto_Rico">America/Puerto_Rico</option>
                                <option label="America/Rankin_Inlet" value="string:America/Rankin_Inlet">America/Rankin_Inlet</option>
                                <option label="Pacific/Ponape" value="string:Pacific/Ponape">Pacific/Ponape</option>
                                <option label="Europe/Stockholm" value="string:Europe/Stockholm">Europe/Stockholm</option>
                                <option label="Europe/Budapest" value="string:Europe/Budapest">Europe/Budapest</option>
                                <option label="America/Argentina/Jujuy" value="string:America/Argentina/Jujuy">America/Argentina/Jujuy</option>
                                <option label="Australia/Eucla" value="string:Australia/Eucla">Australia/Eucla</option>
                                <option label="Asia/Shanghai" value="string:Asia/Shanghai">Asia/Shanghai</option>
                                <option label="Universal" value="string:Universal">Universal</option>
                                <option label="Europe/Zagreb" value="string:Europe/Zagreb">Europe/Zagreb</option>
                                <option label="America/Port_of_Spain" value="string:America/Port_of_Spain">America/Port_of_Spain</option>
                                <option label="Europe/Helsinki" value="string:Europe/Helsinki">Europe/Helsinki</option>
                                <option label="Asia/Beirut" value="string:Asia/Beirut">Asia/Beirut</option>
                                <option label="Asia/Tel_Aviv" value="string:Asia/Tel_Aviv">Asia/Tel_Aviv</option>
                                <option value="string:Pacific/Bougainville"></option>
                                <option label="US/Central" value="string:US/Central">US/Central</option>
                                <option label="Africa/Sao_Tome" value="string:Africa/Sao_Tome">Africa/Sao_Tome</option>
                                <option label="Indian/Chagos" value="string:Indian/Chagos">Indian/Chagos</option>
                                <option label="America/Cayenne" value="string:America/Cayenne">America/Cayenne</option>
                                <option label="Asia/Yakutsk" value="string:Asia/Yakutsk">Asia/Yakutsk</option>
                                <option label="Pacific/Galapagos" value="string:Pacific/Galapagos">Pacific/Galapagos</option>
                                <option label="Australia/North" value="string:Australia/North">Australia/North</option>
                                <option label="Europe/Paris" value="string:Europe/Paris">Europe/Paris</option>
                                <option label="Africa/Ndjamena" value="string:Africa/Ndjamena">Africa/Ndjamena</option>
                                <option label="Pacific/Fiji" value="string:Pacific/Fiji">Pacific/Fiji</option>
                                <option label="America/Rainy_River" value="string:America/Rainy_River">America/Rainy_River</option>
                                <option label="Indian/Maldives" value="string:Indian/Maldives">Indian/Maldives</option>
                                <option label="Australia/Yancowinna" value="string:Australia/Yancowinna">Australia/Yancowinna</option>
                                <option label="SystemV/AST4" value="string:SystemV/AST4">SystemV/AST4</option>
                                <option label="Asia/Oral" value="string:Asia/Oral">Asia/Oral</option>
                                <option label="America/Yellowknife" value="string:America/Yellowknife">America/Yellowknife</option>
                                <option label="Pacific/Enderbury" value="string:Pacific/Enderbury">Pacific/Enderbury</option>
                                <option label="America/Juneau" value="string:America/Juneau">America/Juneau</option>
                                <option label="Australia/Victoria" value="string:Australia/Victoria">Australia/Victoria</option>
                                <option label="America/Indiana/Vevay" value="string:America/Indiana/Vevay">America/Indiana/Vevay</option>
                                <option label="Asia/Tashkent" value="string:Asia/Tashkent">Asia/Tashkent</option>
                                <option label="Asia/Jakarta" value="string:Asia/Jakarta">Asia/Jakarta</option>
                                <option label="Africa/Ceuta" value="string:Africa/Ceuta">Africa/Ceuta</option>
                                <option value="string:Asia/Barnaul"></option>
                                <option label="America/Recife" value="string:America/Recife">America/Recife</option>
                                <option label="America/Buenos_Aires" value="string:America/Buenos_Aires">America/Buenos_Aires</option>
                                <option label="America/Noronha" value="string:America/Noronha">America/Noronha</option>
                                <option label="America/Swift_Current" value="string:America/Swift_Current">America/Swift_Current</option>
                                <option label="Australia/Adelaide" value="string:Australia/Adelaide">Australia/Adelaide</option>
                                <option label="America/Metlakatla" value="string:America/Metlakatla">America/Metlakatla</option>
                                <option label="Africa/Djibouti" value="string:Africa/Djibouti">Africa/Djibouti</option>
                                <option label="America/Paramaribo" value="string:America/Paramaribo">America/Paramaribo</option>
                                <option label="Europe/Simferopol" value="string:Europe/Simferopol">Europe/Simferopol</option>
                                <option label="Europe/Sofia" value="string:Europe/Sofia">Europe/Sofia</option>
                                <option label="Africa/Nouakchott" value="string:Africa/Nouakchott">Africa/Nouakchott</option>
                                <option label="Europe/Prague" value="string:Europe/Prague">Europe/Prague</option>
                                <option label="America/Indiana/Vincennes" value="string:America/Indiana/Vincennes">America/Indiana/Vincennes</option>
                                <option label="Antarctica/Mawson" value="string:Antarctica/Mawson">Antarctica/Mawson</option>
                                <option label="America/Kralendijk" value="string:America/Kralendijk">America/Kralendijk</option>
                                <option label="Antarctica/Troll" value="string:Antarctica/Troll">Antarctica/Troll</option>
                                <option label="Europe/Samara" value="string:Europe/Samara">Europe/Samara</option>
                                <option label="Indian/Christmas" value="string:Indian/Christmas">Indian/Christmas</option>
                                <option label="America/Antigua" value="string:America/Antigua">America/Antigua</option>
                                <option label="Pacific/Gambier" value="string:Pacific/Gambier">Pacific/Gambier</option>
                                <option label="America/Indianapolis" value="string:America/Indianapolis">America/Indianapolis</option>
                                <option label="America/Inuvik" value="string:America/Inuvik">America/Inuvik</option>
                                <option label="America/Iqaluit" value="string:America/Iqaluit">America/Iqaluit</option>
                                <option label="Pacific/Funafuti" value="string:Pacific/Funafuti">Pacific/Funafuti</option>
                                <option label="UTC" value="string:UTC">UTC</option>
                                <option label="Antarctica/Macquarie" value="string:Antarctica/Macquarie">Antarctica/Macquarie</option>
                                <option label="Canada/Pacific" value="string:Canada/Pacific">Canada/Pacific</option>
                                <option label="America/Moncton" value="string:America/Moncton">America/Moncton</option>
                                <option label="Africa/Gaborone" value="string:Africa/Gaborone">Africa/Gaborone</option>
                                <option label="Pacific/Chuuk" value="string:Pacific/Chuuk">Pacific/Chuuk</option>
                                <option label="Asia/Pyongyang" value="string:Asia/Pyongyang">Asia/Pyongyang</option>
                                <option label="America/St_Vincent" value="string:America/St_Vincent">America/St_Vincent</option>
                                <option label="Asia/Gaza" value="string:Asia/Gaza">Asia/Gaza</option>
                                <option label="Etc/Universal" value="string:Etc/Universal">Etc/Universal</option>
                                <option label="PST8PDT" value="string:PST8PDT">PST8PDT</option>
                                <option label="Atlantic/Faeroe" value="string:Atlantic/Faeroe">Atlantic/Faeroe</option>
                                <option label="Asia/Qyzylorda" value="string:Asia/Qyzylorda">Asia/Qyzylorda</option>
                                <option label="Canada/Newfoundland" value="string:Canada/Newfoundland">Canada/Newfoundland</option>
                                <option label="America/Kentucky/Louisville" value="string:America/Kentucky/Louisville">America/Kentucky/Louisville</option>
                                <option label="America/Yakutat" value="string:America/Yakutat">America/Yakutat</option>
                                <option label="Asia/Ho_Chi_Minh" value="string:Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
                                <option label="Antarctica/Casey" value="string:Antarctica/Casey">Antarctica/Casey</option>
                                <option label="Europe/Copenhagen" value="string:Europe/Copenhagen">Europe/Copenhagen</option>
                                <option label="Africa/Asmara" value="string:Africa/Asmara">Africa/Asmara</option>
                                <option label="Atlantic/Azores" value="string:Atlantic/Azores">Atlantic/Azores</option>
                                <option label="Europe/Vienna" value="string:Europe/Vienna">Europe/Vienna</option>
                                <option label="ROK" value="string:ROK">ROK</option>
                                <option label="Pacific/Pitcairn" value="string:Pacific/Pitcairn">Pacific/Pitcairn</option>
                                <option label="America/Mazatlan" value="string:America/Mazatlan">America/Mazatlan</option>
                                <option label="Australia/Queensland" value="string:Australia/Queensland">Australia/Queensland</option>
                                <option label="Pacific/Nauru" value="string:Pacific/Nauru">Pacific/Nauru</option>
                                <option label="Europe/Tirane" value="string:Europe/Tirane">Europe/Tirane</option>
                                <option label="Asia/Kolkata" value="string:Asia/Kolkata">Asia/Kolkata</option>
                                <option label="SystemV/MST7" value="string:SystemV/MST7">SystemV/MST7</option>
                                <option label="Australia/Canberra" value="string:Australia/Canberra">Australia/Canberra</option>
                                <option label="MET" value="string:MET">MET</option>
                                <option label="Australia/Broken_Hill" value="string:Australia/Broken_Hill">Australia/Broken_Hill</option>
                                <option label="Europe/Riga" value="string:Europe/Riga">Europe/Riga</option>
                                <option label="America/Dominica" value="string:America/Dominica">America/Dominica</option>
                                <option label="Africa/Abidjan" value="string:Africa/Abidjan">Africa/Abidjan</option>
                                <option label="America/Mendoza" value="string:America/Mendoza">America/Mendoza</option>
                                <option label="America/Santarem" value="string:America/Santarem">America/Santarem</option>
                                <option label="Kwajalein" value="string:Kwajalein">Kwajalein</option>
                                <option label="America/Asuncion" value="string:America/Asuncion">America/Asuncion</option>
                                <option label="Asia/Ulan_Bator" value="string:Asia/Ulan_Bator">Asia/Ulan_Bator</option>
                                <option label="NZ" value="string:NZ">NZ</option>
                                <option label="America/Boise" value="string:America/Boise">America/Boise</option>
                                <option label="Australia/Currie" value="string:Australia/Currie">Australia/Currie</option>
                                <option label="EST5EDT" value="string:EST5EDT">EST5EDT</option>
                                <option label="Pacific/Guam" value="string:Pacific/Guam">Pacific/Guam</option>
                                <option label="Pacific/Wake" value="string:Pacific/Wake">Pacific/Wake</option>
                                <option label="Atlantic/Bermuda" value="string:Atlantic/Bermuda">Atlantic/Bermuda</option>
                                <option label="America/Costa_Rica" value="string:America/Costa_Rica">America/Costa_Rica</option>
                                <option label="America/Dawson" value="string:America/Dawson">America/Dawson</option>
                                <option label="Asia/Chongqing" value="string:Asia/Chongqing">Asia/Chongqing</option>
                                <option label="Eire" value="string:Eire">Eire</option>
                                <option label="Europe/Amsterdam" value="string:Europe/Amsterdam">Europe/Amsterdam</option>
                                <option label="America/Indiana/Knox" value="string:America/Indiana/Knox">America/Indiana/Knox</option>
                                <option label="America/North_Dakota/Beulah" value="string:America/North_Dakota/Beulah">America/North_Dakota/Beulah</option>
                                <option label="Africa/Accra" value="string:Africa/Accra">Africa/Accra</option>
                                <option label="Atlantic/Faroe" value="string:Atlantic/Faroe">Atlantic/Faroe</option>
                                <option label="Mexico/BajaNorte" value="string:Mexico/BajaNorte">Mexico/BajaNorte</option>
                                <option label="America/Maceio" value="string:America/Maceio">America/Maceio</option>
                                <option label="Etc/UCT" value="string:Etc/UCT">Etc/UCT</option>
                                <option label="Pacific/Apia" value="string:Pacific/Apia">Pacific/Apia</option>
                                <option label="GMT0" value="string:GMT0">GMT0</option>
                                <option label="America/Atka" value="string:America/Atka">America/Atka</option>
                                <option label="Pacific/Niue" value="string:Pacific/Niue">Pacific/Niue</option>
                                <option label="Australia/Lord_Howe" value="string:Australia/Lord_Howe">Australia/Lord_Howe</option>
                                <option label="Europe/Dublin" value="string:Europe/Dublin">Europe/Dublin</option>
                                <option label="Pacific/Truk" value="string:Pacific/Truk">Pacific/Truk</option>
                                <option label="MST7MDT" value="string:MST7MDT">MST7MDT</option>
                                <option label="America/Monterrey" value="string:America/Monterrey">America/Monterrey</option>
                                <option label="America/Nassau" value="string:America/Nassau">America/Nassau</option>
                                <option label="America/Jamaica" value="string:America/Jamaica">America/Jamaica</option>
                                <option label="Asia/Bishkek" value="string:Asia/Bishkek">Asia/Bishkek</option>
                                <option label="America/Atikokan" value="string:America/Atikokan">America/Atikokan</option>
                                <option label="Atlantic/Stanley" value="string:Atlantic/Stanley">Atlantic/Stanley</option>
                                <option label="Australia/NSW" value="string:Australia/NSW">Australia/NSW</option>
                                <option label="US/Hawaii" value="string:US/Hawaii">US/Hawaii</option>
                                <option label="SystemV/CST6" value="string:SystemV/CST6">SystemV/CST6</option>
                                <option label="Indian/Mahe" value="string:Indian/Mahe">Indian/Mahe</option>
                                <option label="Asia/Aqtobe" value="string:Asia/Aqtobe">Asia/Aqtobe</option>
                                <option label="America/Sitka" value="string:America/Sitka">America/Sitka</option>
                                <option label="Asia/Vladivostok" value="string:Asia/Vladivostok">Asia/Vladivostok</option>
                                <option label="Africa/Libreville" value="string:Africa/Libreville">Africa/Libreville</option>
                                <option label="Africa/Maputo" value="string:Africa/Maputo">Africa/Maputo</option>
                                <option label="Zulu" value="string:Zulu">Zulu</option>
                                <option label="America/Kentucky/Monticello" value="string:America/Kentucky/Monticello">America/Kentucky/Monticello</option>
                                <option label="Africa/El_Aaiun" value="string:Africa/El_Aaiun">Africa/El_Aaiun</option>
                                <option label="Africa/Ouagadougou" value="string:Africa/Ouagadougou">Africa/Ouagadougou</option>
                                <option label="America/Coral_Harbour" value="string:America/Coral_Harbour">America/Coral_Harbour</option>
                                <option label="Pacific/Marquesas" value="string:Pacific/Marquesas">Pacific/Marquesas</option>
                                <option label="Brazil/West" value="string:Brazil/West">Brazil/West</option>
                                <option label="America/Aruba" value="string:America/Aruba">America/Aruba</option>
                                <option label="America/North_Dakota/Center" value="string:America/North_Dakota/Center">America/North_Dakota/Center</option>
                                <option label="America/Cayman" value="string:America/Cayman">America/Cayman</option>
                                <option label="Asia/Ulaanbaatar" value="string:Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
                                <option label="Asia/Baghdad" value="string:Asia/Baghdad">Asia/Baghdad</option>
                                <option label="Europe/San_Marino" value="string:Europe/San_Marino">Europe/San_Marino</option>
                                <option label="America/Indiana/Tell_City" value="string:America/Indiana/Tell_City">America/Indiana/Tell_City</option>
                                <option label="America/Tijuana" value="string:America/Tijuana">America/Tijuana</option>
                                <option label="Pacific/Saipan" value="string:Pacific/Saipan">Pacific/Saipan</option>
                                <option label="SystemV/YST9" value="string:SystemV/YST9">SystemV/YST9</option>
                                <option label="Africa/Douala" value="string:Africa/Douala">Africa/Douala</option>
                                <option label="America/Chihuahua" value="string:America/Chihuahua">America/Chihuahua</option>
                                <option label="America/Ojinaga" value="string:America/Ojinaga">America/Ojinaga</option>
                                <option label="Asia/Hovd" value="string:Asia/Hovd">Asia/Hovd</option>
                                <option label="America/Anchorage" value="string:America/Anchorage">America/Anchorage</option>
                                <option label="Chile/EasterIsland" value="string:Chile/EasterIsland">Chile/EasterIsland</option>
                                <option label="America/Halifax" value="string:America/Halifax">America/Halifax</option>
                                <option label="Antarctica/Rothera" value="string:Antarctica/Rothera">Antarctica/Rothera</option>
                                <option label="America/Indiana/Indianapolis" value="string:America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
                                <option label="US/Mountain" value="string:US/Mountain">US/Mountain</option>
                                <option label="Asia/Damascus" value="string:Asia/Damascus">Asia/Damascus</option>
                                <option label="America/Argentina/San_Luis" value="string:America/Argentina/San_Luis">America/Argentina/San_Luis</option>
                                <option label="America/Santiago" value="string:America/Santiago">America/Santiago</option>
                                <option label="Asia/Baku" value="string:Asia/Baku">Asia/Baku</option>
                                <option label="America/Argentina/Ushuaia" value="string:America/Argentina/Ushuaia">America/Argentina/Ushuaia</option>
                                <option label="Atlantic/Reykjavik" value="string:Atlantic/Reykjavik">Atlantic/Reykjavik</option>
                                <option label="Africa/Brazzaville" value="string:Africa/Brazzaville">Africa/Brazzaville</option>
                                <option label="Africa/Porto-Novo" value="string:Africa/Porto-Novo">Africa/Porto-Novo</option>
                                <option label="America/La_Paz" value="string:America/La_Paz">America/La_Paz</option>
                                <option label="Antarctica/DumontDUrville" value="string:Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
                                <option label="Asia/Taipei" value="string:Asia/Taipei">Asia/Taipei</option>
                                <option label="Antarctica/South_Pole" value="string:Antarctica/South_Pole">Antarctica/South_Pole</option>
                                <option label="Asia/Manila" value="string:Asia/Manila">Asia/Manila</option>
                                <option label="Asia/Bangkok" value="string:Asia/Bangkok">Asia/Bangkok</option>
                                <option label="Africa/Dar_es_Salaam" value="string:Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option>
                                <option label="Poland" value="string:Poland">Poland</option>
                                <option label="Atlantic/Madeira" value="string:Atlantic/Madeira">Atlantic/Madeira</option>
                                <option label="Antarctica/Palmer" value="string:Antarctica/Palmer">Antarctica/Palmer</option>
                                <option label="America/Thunder_Bay" value="string:America/Thunder_Bay">America/Thunder_Bay</option>
                                <option label="Africa/Addis_Ababa" value="string:Africa/Addis_Ababa">Africa/Addis_Ababa</option>
                                <option value="string:Asia/Yangon"></option>
                                <option label="Europe/Uzhgorod" value="string:Europe/Uzhgorod">Europe/Uzhgorod</option>
                                <option label="Brazil/DeNoronha" value="string:Brazil/DeNoronha">Brazil/DeNoronha</option>
                                <option label="Asia/Ashkhabad" value="string:Asia/Ashkhabad">Asia/Ashkhabad</option>
                                <option label="Etc/Zulu" value="string:Etc/Zulu">Etc/Zulu</option>
                                <option label="America/Indiana/Marengo" value="string:America/Indiana/Marengo">America/Indiana/Marengo</option>
                                <option label="America/Creston" value="string:America/Creston">America/Creston</option>
                                <option value="string:America/Punta_Arenas"></option>
                                <option label="America/Mexico_City" value="string:America/Mexico_City">America/Mexico_City</option>
                                <option label="Antarctica/Vostok" value="string:Antarctica/Vostok">Antarctica/Vostok</option>
                                <option label="Asia/Jerusalem" value="string:Asia/Jerusalem">Asia/Jerusalem</option>
                                <option label="Europe/Andorra" value="string:Europe/Andorra">Europe/Andorra</option>
                                <option label="US/Samoa" value="string:US/Samoa">US/Samoa</option>
                                <option label="PRC" value="string:PRC">PRC</option>
                                <option label="Asia/Vientiane" value="string:Asia/Vientiane">Asia/Vientiane</option>
                                <option label="Pacific/Kiritimati" value="string:Pacific/Kiritimati">Pacific/Kiritimati</option>
                                <option label="America/Matamoros" value="string:America/Matamoros">America/Matamoros</option>
                                <option label="America/Blanc-Sablon" value="string:America/Blanc-Sablon">America/Blanc-Sablon</option>
                                <option label="Asia/Riyadh" value="string:Asia/Riyadh">Asia/Riyadh</option>
                                <option label="Iceland" value="string:Iceland">Iceland</option>
                                <option label="Pacific/Pohnpei" value="string:Pacific/Pohnpei">Pacific/Pohnpei</option>
                                <option label="Asia/Ujung_Pandang" value="string:Asia/Ujung_Pandang">Asia/Ujung_Pandang</option>
                                <option label="Atlantic/South_Georgia" value="string:Atlantic/South_Georgia">Atlantic/South_Georgia</option>
                                <option label="Europe/Lisbon" value="string:Europe/Lisbon">Europe/Lisbon</option>
                                <option label="Asia/Harbin" value="string:Asia/Harbin">Asia/Harbin</option>
                                <option label="Europe/Oslo" value="string:Europe/Oslo">Europe/Oslo</option>
                                <option label="Asia/Novokuznetsk" value="string:Asia/Novokuznetsk">Asia/Novokuznetsk</option>
                                <option label="CST6CDT" value="string:CST6CDT">CST6CDT</option>
                                <option label="Atlantic/Canary" value="string:Atlantic/Canary">Atlantic/Canary</option>
                                <option label="America/Knox_IN" value="string:America/Knox_IN">America/Knox_IN</option>
                                <option label="Asia/Kuwait" value="string:Asia/Kuwait">Asia/Kuwait</option>
                                <option label="SystemV/HST10" value="string:SystemV/HST10">SystemV/HST10</option>
                                <option label="Pacific/Efate" value="string:Pacific/Efate">Pacific/Efate</option>
                                <option label="Africa/Lome" value="string:Africa/Lome">Africa/Lome</option>
                                <option label="America/Bogota" value="string:America/Bogota">America/Bogota</option>
                                <option label="America/Menominee" value="string:America/Menominee">America/Menominee</option>
                                <option label="America/Adak" value="string:America/Adak">America/Adak</option>
                                <option label="Pacific/Norfolk" value="string:Pacific/Norfolk">Pacific/Norfolk</option>
                                <option value="string:Europe/Kirov"></option>
                                <option label="America/Resolute" value="string:America/Resolute">America/Resolute</option>
                                <option label="Pacific/Tarawa" value="string:Pacific/Tarawa">Pacific/Tarawa</option>
                                <option label="Africa/Kampala" value="string:Africa/Kampala">Africa/Kampala</option>
                                <option label="Asia/Krasnoyarsk" value="string:Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
                                <option label="Greenwich" value="string:Greenwich">Greenwich</option>
                                <option label="SystemV/EST5" value="string:SystemV/EST5">SystemV/EST5</option>
                                <option label="America/Edmonton" value="string:America/Edmonton">America/Edmonton</option>
                                <option label="Europe/Podgorica" value="string:Europe/Podgorica">Europe/Podgorica</option>
                                <option label="Australia/South" value="string:Australia/South">Australia/South</option>
                                <option label="Canada/Central" value="string:Canada/Central">Canada/Central</option>
                                <option label="Africa/Bujumbura" value="string:Africa/Bujumbura">Africa/Bujumbura</option>
                                <option label="America/Santo_Domingo" value="string:America/Santo_Domingo">America/Santo_Domingo</option>
                                <option label="US/Eastern" value="string:US/Eastern" selected="selected">US/Eastern</option>
                                <option label="Europe/Minsk" value="string:Europe/Minsk">Europe/Minsk</option>
                                <option label="Pacific/Auckland" value="string:Pacific/Auckland">Pacific/Auckland</option>
                                <option label="Africa/Casablanca" value="string:Africa/Casablanca">Africa/Casablanca</option>
                                <option label="America/Glace_Bay" value="string:America/Glace_Bay">America/Glace_Bay</option>
                                <option label="Canada/Eastern" value="string:Canada/Eastern">Canada/Eastern</option>
                                <option label="Asia/Qatar" value="string:Asia/Qatar">Asia/Qatar</option>
                                <option label="Europe/Kiev" value="string:Europe/Kiev">Europe/Kiev</option>
                                <option label="Singapore" value="string:Singapore">Singapore</option>
                                <option label="Asia/Magadan" value="string:Asia/Magadan">Asia/Magadan</option>
                                <option label="SystemV/PST8" value="string:SystemV/PST8">SystemV/PST8</option>
                                <option label="America/Port-au-Prince" value="string:America/Port-au-Prince">America/Port-au-Prince</option>
                                <option label="Europe/Belfast" value="string:Europe/Belfast">Europe/Belfast</option>
                                <option label="America/St_Barthelemy" value="string:America/St_Barthelemy">America/St_Barthelemy</option>
                                <option label="Asia/Ashgabat" value="string:Asia/Ashgabat">Asia/Ashgabat</option>
                                <option label="Africa/Luanda" value="string:Africa/Luanda">Africa/Luanda</option>
                                <option label="America/Nipigon" value="string:America/Nipigon">America/Nipigon</option>
                                <option label="Atlantic/Jan_Mayen" value="string:Atlantic/Jan_Mayen">Atlantic/Jan_Mayen</option>
                                <option label="Brazil/Acre" value="string:Brazil/Acre">Brazil/Acre</option>
                                <option label="Asia/Muscat" value="string:Asia/Muscat">Asia/Muscat</option>
                                <option label="Asia/Bahrain" value="string:Asia/Bahrain">Asia/Bahrain</option>
                                <option label="Europe/Vilnius" value="string:Europe/Vilnius">Europe/Vilnius</option>
                                <option label="America/Fortaleza" value="string:America/Fortaleza">America/Fortaleza</option>
                                <option label="Etc/GMT0" value="string:Etc/GMT0">Etc/GMT0</option>
                                <option label="US/East-Indiana" value="string:US/East-Indiana">US/East-Indiana</option>
                                <option label="America/Hermosillo" value="string:America/Hermosillo">America/Hermosillo</option>
                                <option label="America/Cancun" value="string:America/Cancun">America/Cancun</option>
                                <option label="Africa/Maseru" value="string:Africa/Maseru">Africa/Maseru</option>
                                <option label="Pacific/Kosrae" value="string:Pacific/Kosrae">Pacific/Kosrae</option>
                                <option label="Africa/Kinshasa" value="string:Africa/Kinshasa">Africa/Kinshasa</option>
                                <option label="Asia/Kathmandu" value="string:Asia/Kathmandu">Asia/Kathmandu</option>
                                <option label="Asia/Seoul" value="string:Asia/Seoul">Asia/Seoul</option>
                                <option label="Australia/Sydney" value="string:Australia/Sydney">Australia/Sydney</option>
                                <option label="America/Lima" value="string:America/Lima">America/Lima</option>
                                <option label="Australia/LHI" value="string:Australia/LHI">Australia/LHI</option>
                                <option label="America/St_Lucia" value="string:America/St_Lucia">America/St_Lucia</option>
                                <option label="Europe/Madrid" value="string:Europe/Madrid">Europe/Madrid</option>
                                <option label="America/Bahia_Banderas" value="string:America/Bahia_Banderas">America/Bahia_Banderas</option>
                                <option label="America/Montserrat" value="string:America/Montserrat">America/Montserrat</option>
                                <option label="Asia/Brunei" value="string:Asia/Brunei">Asia/Brunei</option>
                                <option label="America/Santa_Isabel" value="string:America/Santa_Isabel">America/Santa_Isabel</option>
                                <option label="Canada/Mountain" value="string:Canada/Mountain">Canada/Mountain</option>
                                <option label="America/Cambridge_Bay" value="string:America/Cambridge_Bay">America/Cambridge_Bay</option>
                                <option label="Asia/Colombo" value="string:Asia/Colombo">Asia/Colombo</option>
                                <option label="Australia/West" value="string:Australia/West">Australia/West</option>
                                <option label="Indian/Antananarivo" value="string:Indian/Antananarivo">Indian/Antananarivo</option>
                                <option label="Australia/Brisbane" value="string:Australia/Brisbane">Australia/Brisbane</option>
                                <option label="Indian/Mayotte" value="string:Indian/Mayotte">Indian/Mayotte</option>
                                <option label="US/Indiana-Starke" value="string:US/Indiana-Starke">US/Indiana-Starke</option>
                                <option label="Asia/Urumqi" value="string:Asia/Urumqi">Asia/Urumqi</option>
                                <option label="US/Aleutian" value="string:US/Aleutian">US/Aleutian</option>
                                <option label="Europe/Volgograd" value="string:Europe/Volgograd">Europe/Volgograd</option>
                                <option label="America/Lower_Princes" value="string:America/Lower_Princes">America/Lower_Princes</option>
                                <option label="America/Vancouver" value="string:America/Vancouver">America/Vancouver</option>
                                <option label="Africa/Blantyre" value="string:Africa/Blantyre">Africa/Blantyre</option>
                                <option label="America/Rio_Branco" value="string:America/Rio_Branco">America/Rio_Branco</option>
                                <option label="America/Danmarkshavn" value="string:America/Danmarkshavn">America/Danmarkshavn</option>
                                <option label="America/Detroit" value="string:America/Detroit">America/Detroit</option>
                                <option label="America/Thule" value="string:America/Thule">America/Thule</option>
                                <option label="Africa/Lusaka" value="string:Africa/Lusaka">Africa/Lusaka</option>
                                <option label="Asia/Hong_Kong" value="string:Asia/Hong_Kong">Asia/Hong_Kong</option>
                                <option label="Iran" value="string:Iran">Iran</option>
                                <option label="America/Argentina/La_Rioja" value="string:America/Argentina/La_Rioja">America/Argentina/La_Rioja</option>
                                <option label="Africa/Dakar" value="string:Africa/Dakar">Africa/Dakar</option>
                                <option label="SystemV/CST6CDT" value="string:SystemV/CST6CDT">SystemV/CST6CDT</option>
                                <option label="America/Tortola" value="string:America/Tortola">America/Tortola</option>
                                <option label="America/Porto_Velho" value="string:America/Porto_Velho">America/Porto_Velho</option>
                                <option label="Asia/Sakhalin" value="string:Asia/Sakhalin">Asia/Sakhalin</option>
                                <option label="Etc/GMT+10" value="string:Etc/GMT+10">Etc/GMT+10</option>
                                <option label="America/Scoresbysund" value="string:America/Scoresbysund">America/Scoresbysund</option>
                                <option label="Asia/Kamchatka" value="string:Asia/Kamchatka">Asia/Kamchatka</option>
                                <option label="Asia/Thimbu" value="string:Asia/Thimbu">Asia/Thimbu</option>
                                <option label="Africa/Harare" value="string:Africa/Harare">Africa/Harare</option>
                                <option label="Etc/GMT+12" value="string:Etc/GMT+12">Etc/GMT+12</option>
                                <option label="Etc/GMT+11" value="string:Etc/GMT+11">Etc/GMT+11</option>
                                <option label="Navajo" value="string:Navajo">Navajo</option>
                                <option label="America/Nome" value="string:America/Nome">America/Nome</option>
                                <option label="Europe/Tallinn" value="string:Europe/Tallinn">Europe/Tallinn</option>
                                <option label="Turkey" value="string:Turkey">Turkey</option>
                                <option label="Africa/Khartoum" value="string:Africa/Khartoum">Africa/Khartoum</option>
                                <option label="Africa/Johannesburg" value="string:Africa/Johannesburg">Africa/Johannesburg</option>
                                <option label="Africa/Bangui" value="string:Africa/Bangui">Africa/Bangui</option>
                                <option label="Europe/Belgrade" value="string:Europe/Belgrade">Europe/Belgrade</option>
                                <option label="Jamaica" value="string:Jamaica">Jamaica</option>
                                <option label="Africa/Bissau" value="string:Africa/Bissau">Africa/Bissau</option>
                                <option label="Asia/Tehran" value="string:Asia/Tehran">Asia/Tehran</option>
                                <option label="WET" value="string:WET">WET</option>
                                <option value="string:Europe/Astrakhan"></option>
                                <option label="Africa/Juba" value="string:Africa/Juba">Africa/Juba</option>
                                <option label="America/Campo_Grande" value="string:America/Campo_Grande">America/Campo_Grande</option>
                                <option label="America/Belem" value="string:America/Belem">America/Belem</option>
                                <option label="Etc/Greenwich" value="string:Etc/Greenwich">Etc/Greenwich</option>
                                <option label="Asia/Saigon" value="string:Asia/Saigon">Asia/Saigon</option>
                                <option label="America/Ensenada" value="string:America/Ensenada">America/Ensenada</option>
                                <option label="Pacific/Midway" value="string:Pacific/Midway">Pacific/Midway</option>
                                <option label="America/Jujuy" value="string:America/Jujuy">America/Jujuy</option>
                                <option label="Africa/Timbuktu" value="string:Africa/Timbuktu">Africa/Timbuktu</option>
                                <option label="America/Bahia" value="string:America/Bahia">America/Bahia</option>
                                <option label="America/Goose_Bay" value="string:America/Goose_Bay">America/Goose_Bay</option>
                                <option label="America/Virgin" value="string:America/Virgin">America/Virgin</option>
                                <option label="America/Pangnirtung" value="string:America/Pangnirtung">America/Pangnirtung</option>
                                <option label="Asia/Katmandu" value="string:Asia/Katmandu">Asia/Katmandu</option>
                                <option label="America/Phoenix" value="string:America/Phoenix">America/Phoenix</option>
                                <option label="Africa/Niamey" value="string:Africa/Niamey">Africa/Niamey</option>
                                <option label="America/Whitehorse" value="string:America/Whitehorse">America/Whitehorse</option>
                                <option label="Pacific/Noumea" value="string:Pacific/Noumea">Pacific/Noumea</option>
                                <option label="Asia/Tbilisi" value="string:Asia/Tbilisi">Asia/Tbilisi</option>
                                <option label="America/Montreal" value="string:America/Montreal">America/Montreal</option>
                                <option label="Asia/Makassar" value="string:Asia/Makassar">Asia/Makassar</option>
                                <option label="America/Argentina/San_Juan" value="string:America/Argentina/San_Juan">America/Argentina/San_Juan</option>
                                <option label="Hongkong" value="string:Hongkong">Hongkong</option>
                                <option label="UCT" value="string:UCT">UCT</option>
                                <option label="Asia/Nicosia" value="string:Asia/Nicosia">Asia/Nicosia</option>
                                <option label="America/Indiana/Winamac" value="string:America/Indiana/Winamac">America/Indiana/Winamac</option>
                                <option label="SystemV/MST7MDT" value="string:SystemV/MST7MDT">SystemV/MST7MDT</option>
                                <option label="America/Argentina/ComodRivadavia" value="string:America/Argentina/ComodRivadavia">America/Argentina/ComodRivadavia</option>
                                <option label="America/Boa_Vista" value="string:America/Boa_Vista">America/Boa_Vista</option>
                                <option label="America/Grenada" value="string:America/Grenada">America/Grenada</option>
                                <option value="string:Asia/Atyrau"></option>
                                <option label="Australia/Darwin" value="string:Australia/Darwin">Australia/Darwin</option>
                                <option label="Asia/Khandyga" value="string:Asia/Khandyga">Asia/Khandyga</option>
                                <option label="Asia/Kuala_Lumpur" value="string:Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
                                <option value="string:Asia/Famagusta"></option>
                                <option label="Asia/Thimphu" value="string:Asia/Thimphu">Asia/Thimphu</option>
                                <option label="Asia/Rangoon" value="string:Asia/Rangoon">Asia/Rangoon</option>
                                <option label="Europe/Bratislava" value="string:Europe/Bratislava">Europe/Bratislava</option>
                                <option label="Asia/Calcutta" value="string:Asia/Calcutta">Asia/Calcutta</option>
                                <option label="America/Argentina/Tucuman" value="string:America/Argentina/Tucuman">America/Argentina/Tucuman</option>
                                <option label="Asia/Kabul" value="string:Asia/Kabul">Asia/Kabul</option>
                                <option label="Indian/Cocos" value="string:Indian/Cocos">Indian/Cocos</option>
                                <option label="Japan" value="string:Japan">Japan</option>
                                <option label="Pacific/Tongatapu" value="string:Pacific/Tongatapu">Pacific/Tongatapu</option>
                                <option label="America/New_York" value="string:America/New_York">America/New_York</option>
                                <option label="Etc/GMT-12" value="string:Etc/GMT-12">Etc/GMT-12</option>
                                <option label="Etc/GMT-11" value="string:Etc/GMT-11">Etc/GMT-11</option>
                                <option label="Etc/GMT-10" value="string:Etc/GMT-10">Etc/GMT-10</option>
                                <option label="SystemV/YST9YDT" value="string:SystemV/YST9YDT">SystemV/YST9YDT</option>
                                <option value="string:Europe/Ulyanovsk"></option>
                                <option label="Etc/GMT-14" value="string:Etc/GMT-14">Etc/GMT-14</option>
                                <option label="Etc/GMT-13" value="string:Etc/GMT-13">Etc/GMT-13</option>
                                <option label="W-SU" value="string:W-SU">W-SU</option>
                                <option label="America/Merida" value="string:America/Merida">America/Merida</option>
                                <option label="EET" value="string:EET">EET</option>
                                <option label="America/Rosario" value="string:America/Rosario">America/Rosario</option>
                                <option label="Canada/Saskatchewan" value="string:Canada/Saskatchewan">Canada/Saskatchewan</option>
                                <option label="America/St_Kitts" value="string:America/St_Kitts">America/St_Kitts</option>
                                <option label="Arctic/Longyearbyen" value="string:Arctic/Longyearbyen">Arctic/Longyearbyen</option>
                                <option value="string:America/Fort_Nelson"></option>
                                <option label="America/Caracas" value="string:America/Caracas">America/Caracas</option>
                                <option label="America/Guadeloupe" value="string:America/Guadeloupe">America/Guadeloupe</option>
                                <option label="Asia/Hebron" value="string:Asia/Hebron">Asia/Hebron</option>
                                <option label="Indian/Kerguelen" value="string:Indian/Kerguelen">Indian/Kerguelen</option>
                                <option label="SystemV/PST8PDT" value="string:SystemV/PST8PDT">SystemV/PST8PDT</option>
                                <option label="Africa/Monrovia" value="string:Africa/Monrovia">Africa/Monrovia</option>
                                <option label="Asia/Ust-Nera" value="string:Asia/Ust-Nera">Asia/Ust-Nera</option>
                                <option label="Egypt" value="string:Egypt">Egypt</option>
                                <option value="string:Asia/Srednekolymsk"></option>
                                <option label="America/North_Dakota/New_Salem" value="string:America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
                                <option label="Asia/Anadyr" value="string:Asia/Anadyr">Asia/Anadyr</option>
                                <option label="Australia/Melbourne" value="string:Australia/Melbourne">Australia/Melbourne</option>
                                <option label="Asia/Irkutsk" value="string:Asia/Irkutsk">Asia/Irkutsk</option>
                                <option label="America/Shiprock" value="string:America/Shiprock">America/Shiprock</option>
                                <option label="America/Winnipeg" value="string:America/Winnipeg">America/Winnipeg</option>
                                <option label="Europe/Vatican" value="string:Europe/Vatican">Europe/Vatican</option>
                                <option label="Asia/Amman" value="string:Asia/Amman">Asia/Amman</option>
                                <option label="Etc/UTC" value="string:Etc/UTC">Etc/UTC</option>
                                <option label="SystemV/AST4ADT" value="string:SystemV/AST4ADT">SystemV/AST4ADT</option>
                                <option label="Asia/Tokyo" value="string:Asia/Tokyo">Asia/Tokyo</option>
                                <option label="America/Toronto" value="string:America/Toronto">America/Toronto</option>
                                <option label="Asia/Singapore" value="string:Asia/Singapore">Asia/Singapore</option>
                                <option label="Australia/Lindeman" value="string:Australia/Lindeman">Australia/Lindeman</option>
                                <option label="America/Los_Angeles" value="string:America/Los_Angeles">America/Los_Angeles</option>
                                <option label="SystemV/EST5EDT" value="string:SystemV/EST5EDT">SystemV/EST5EDT</option>
                                <option label="Pacific/Majuro" value="string:Pacific/Majuro">Pacific/Majuro</option>
                                <option label="America/Argentina/Buenos_Aires" value="string:America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option>
                                <option label="Europe/Nicosia" value="string:Europe/Nicosia">Europe/Nicosia</option>
                                <option label="Pacific/Guadalcanal" value="string:Pacific/Guadalcanal">Pacific/Guadalcanal</option>
                                <option label="Europe/Athens" value="string:Europe/Athens">Europe/Athens</option>
                                <option label="US/Pacific" value="string:US/Pacific">US/Pacific</option>
                                <option label="Europe/Monaco" value="string:Europe/Monaco">Europe/Monaco</option>
                            </select>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view12" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Welcome message</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-settings-general.php">General settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Welcome message</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="textinput-full">Welcome message</label>
                            <div class="int-fielddescription">The message displayed to welcome and identify the logged-in user.</div>
                            <countdown>
                                <div class="rbt-charcount">
                                    <input aria-labelledby="welcome_message" value="Hello, {0}" class="form-control " formcontrolname="title" id="welcome_message">
                                    <span class="badge badge-success" id="welcome_message_badge"> <span id="welcome_message_counter">20</span> </span> </div>
                            </countdown>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
    var easyMDE = new EasyMDE({
        element: $('#default_verification_description')[0],
        toolbar: ["bold", "italic", "link", "|", "preview"],
        initialValue: '',
        status: 'false'
    });
</script> 
<script>
$(document).ready(function() {
    $("#showview1").click(function() {
        $("#view_main, .demojs-section").hide();
        $("#view1").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview2").click(function() {
        $("#view_main, .demojs-section").hide();
        $("#view2").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview3").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view3").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview4").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view4").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview5").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view5").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview6").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view6").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview7").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view7").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview8").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view8").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview9").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view9").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview10").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view10").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview11").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view11").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    
     $("#showview12").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view12").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
});
</script> 
<script>
    $(document).ready(function() {
        $(function() {
            $(".demojs_showmainview").click(function() {
                $('.btn.btn-primary').addClass('rbt-loading');
				$('.btn.btn-primary .spinner-border').removeClass('d-none');
				$('.btn.btn-primary .visible').toggleClass('invisible');
				$(".demojs_showmainview").prop('disabled', true);
                setTimeout(function() {
                    $('.btn.btn-primary').removeClass('rbt-loading');
					$('.btn.btn-primary .spinner-border').addClass('d-none');
					
					$('.btn.btn-primary .invisible').removeClass('invisible');
                    $(".demojs-section").hide();
                    $("#view_main").show();
                }, 1000)
            });
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $(".demojs_showmainview").click(function() {
            $("#growl1").delay(1500).fadeIn().delay(5000).fadeOut();
        });
        
        $(".demojs_cancelaction").click(function() {
             $(".demojs-section").hide();
            $("#view_main").show();
        });
       
    });
</script> 
<script>
    $(document).ready(function() {
        $("#defaulttargeturl").keyup(function() {
            var length = $(this).val().length;
            length = 2000 - length;
            $('#defaulttargeturl_counter').text(length);
            if ($("#defaulttargeturl").val().length > 2000) {
                $("#defaulttargeturl_badge").last().addClass("badge-danger");
            } else {
                $("#defaulttargeturl_badge").last().removeClass("badge-danger");
            }
        });
        $("#systememail").keyup(function() {
            var length = $(this).val().length;
            length = 100 - length;
            $('#systememail_counter').text(length);
            if ($("#systememail").val().length > 100) {
                $("#systememail_badge").last().addClass("badge-danger");
            } else {
                $("#systememail_badge").last().removeClass("badge-danger");
            }
        });
        $("#def_ver_buttontext").keyup(function() {
            var length = $(this).val().length;
            length = 20 - length;
            $('#def_ver_buttontext_counter').text(length);
            if ($("#def_ver_buttontext").val().length > 20) {
                $("#def_ver_buttontext_badge").last().addClass("badge-danger");
            } else {
                $("#def_ver_buttontext_badge").last().removeClass("badge-danger");
            }
        });
        $("#def_def_buttontext").keyup(function() {
            var length = $(this).val().length;
            length = 20 - length;
            $('#def_def_buttontext_counter').text(length);
            if ($("#def_def_buttontext").val().length > 20) {
                $("#def_def_buttontext_badge").last().addClass("badge-danger");
            } else {
                $("#def_def_buttontext_badge").last().removeClass("badge-danger");
            }
        });
        $("#def_verify_message").keyup(function() {
            var length = $(this).val().length;
            length = 1000 - length;
            $('#def_verify_message_counter').text(length);
            if ($("#def_verify_message").val().length > 1000) {
                $("#def_verify_message_badge").last().addClass("badge-danger");
            } else {
                $("#def_verify_message_badge").last().removeClass("badge-danger");
            }
        });
        $("#def_def_message").keyup(function() {
            var length = $(this).val().length;
            length = 1000 - length;
            $('#def_def_message_counter').text(length);
            if ($("#def_def_message").val().length > 1000) {
                $("#def_def_message_badge").last().addClass("badge-danger");
            } else {
                $("#def_def_message_badge").last().removeClass("badge-danger");
            }
        });
        $("#error_message").keyup(function() {
            var length = $(this).val().length;
            length = 1000 - length;
            $('#error_message_counter').text(length);
            if ($("#error_message").val().length > 1000) {
                $("#error_message_badge").last().addClass("badge-danger");
            } else {
                $("#error_message_badge").last().removeClass("badge-danger");
            }
        });
        
        
        
        $("#welcome_message").keyup(function() {
            var length = $(this).val().length;
            length = 20 - length;
            $('#welcome_message_counter').text(length);
            if ($("#welcome_message").val().length > 20) {
                $("#welcome_message_badge").last().addClass("badge-danger");
            } else {
                $("#welcome_message_badge").last().removeClass("badge-danger");
            }
        });
    });
</script>
</body>
</html>
