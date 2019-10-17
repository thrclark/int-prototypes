<?php
$section = '';
$page_title = 'General Settings';
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
    <main class="main-content" id="main-content">
        <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <table class="table rbt-table-responsive rbt-table-actions">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Value</th>
                    <th><span class="sr-only">Actions</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Application Name</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">The name of the application. This is displayed in the header.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> IU Verify </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-appname.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Default Defer Button Text</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Text to be displayed on the Defer button.  This can be overridden by an individual verification.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> Verify Later </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-defaultdefferbtntext.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Default Defer Message</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Text to be displayed next to the Defer option.  This can be overridden by an individual verification.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> You may also skip this verification for now. </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-defaultdeffermessage.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Default Target URL</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Users will be directed to this URL after completing their verifications if no target URL is passed to the system.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content">
                        <div>-</div>
                        </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-defaulttargeturl.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Default Verify Button Text</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Text to be displayed on the Verification button.  This can be overridden by an individual verification.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> Verify </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-defaultvfybtntext.php" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Default Verify Message</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Text to be displayed next to the Verify option.  This can be overridden by an individual verification.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> I have verified that the above information is up to date and correct. </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-defaultvfymessage.php" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Enable Email</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Turn on email functionality. Default is no</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> No </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-enableemail.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Error Message</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">A message that is displayed when an error occurs preventing a verification from being completed.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> There is a system error that is currently preventing verification of your information. Please ski… </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-errormessage.php" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Google Analytics ID</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">The ID assigned to your domain in the Google Analytics administration tool</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> UA-39645822-14 </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-googleanaid.php" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Maintenance Resource Page Count</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">The number of items displayed on a page at one time.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> 40 </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-maintenanceresource.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">System Email</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Email address from which email is sent.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content">
                        <div>-</div>
                        </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-systememail.php" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Time Zone</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Select the your time zone.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> US/Eastern </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-timezone.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Verification Intro</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Text to be displayed at the top of every verification.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> On occasion, we require verification of your personal information. The item(s) presented on this … </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-verificationintro.php" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Welcome Message</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">The message displayed to welcome and identify the logged-in user.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> Hello, {username} </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-general-welcomemessage.php" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
            </tbody>
        </table>
    </main>
</div>
<?php include('modals/modal_gensettings_welcomemessage.php') ?>
<?php include('modals/modal_gensettings_verificationintro.php') ?>
<?php include('modals/modal_gensettings_timezone.php') ?>
<?php include('modals/modal_gensettings_systememail.php') ?>
<?php include('modals/modal_gensettings_maintenanceresource.php') ?>
<?php include('modals/modal_gensettings_googleanaid.php') ?>
<?php include('modals/modal_gensettings_errormessage.php') ?>
<?php include('modals/modal_gensettings_enableemail.php') ?>
<?php include('modals/modal_gensettings_defaultvfymessage.php') ?>
<?php include('modals/modal_gensettings_defaultvfybtntext.php') ?>
<?php include('modals/modal_gensettings_defaulttargeturl.php') ?>
<?php include('modals/modal_gensettings_defaultdeffermessage.php') ?>
<?php include('modals/modal_gensettings_defaultdefferbtntext.php') ?>
<?php include('modals/modal_gensettings_defalutverifybtntext.php') ?>
<?php include('modals/modal_gensettings_appname.php') ?>
<?php include('includes/all-footerscripts.php') ?>
<script>
var simplemde = new SimpleMDE({ element: $("#richText1")[0] });
</script>
</body>
</html>
