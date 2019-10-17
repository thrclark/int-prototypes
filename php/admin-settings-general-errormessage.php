<?php
$section = '';
$page_title = 'Error message';
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
        <div class="row">
            <div class="col-12 col-lg-8">
                <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                        <li class="breadcrumb-item"><a href="admin-settings-genereal.php">General settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
                    </ol>
                </nav>
                <div class="form-group"> <label for="textinput-full" class="ts-26">Error message</label>
                    <div>A message that is displayed when an error occurs preventing a verification from being completed.</div>
                    <textarea class="form-control" id="textarea-full" rows="5" placeholder="There is a system error that is currently preventing verification of your information. Please skip verification at this time to proceed with your login. You will be prompted to verify your information at a later time."></textarea>
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher"> <a href="admin-notificationtype.php" class="btn btn-primary"> Save </a> <a class="btn btn-outline-primary"  href="admin-notificationtype.php"> Cancel </a> </div>
            </div>
        </div>
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


