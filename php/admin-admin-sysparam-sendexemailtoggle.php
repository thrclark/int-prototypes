<?php
$section = '';
$page_title = 'Send exception email toggle';
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
                        <li class="breadcrumb-item"><a href="admin-admin-sysparam.php">System parameters</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
                    </ol>
                </nav>
                <div class="form-group">
                    <label for="send_exemail" class="ts-26">Send exception email toggle</label>
                    <div>Turn on sending of email for exceptions. Default is no.</div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="stacked1" value="option1" >
                        <label class="form-check-label" for="stacked1"> No </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="stacked2" value="option2" checked>
                        <label class="form-check-label" for="stacked2"> Yes </label>
                    </div>
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher"> <a href="admin-admin-sysparam.php" class="btn btn-primary"> Save </a> <a class="btn btn-outline-primary"  href="admin-admin-sysparam.php"> Cancel </a> </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
