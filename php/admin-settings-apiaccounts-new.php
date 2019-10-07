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
                <p> asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf . </p>
                <div class="form-group">
                    <label class="control-label" id="nameLabel"> Name </label>
                    <div> sdfg sdfg dsfg </div>
                    <input value="" aria-labelledby="keyLabel keyDirections" ccfvalidated="" class="form-control" id="clientID" formcontrolname="clientid" type="text">
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher"> <a href="admin-notificationtype.php" class="btn btn-primary"> Save </a> <a class="btn btn-outline-primary" routerlink="/markets" href="admin-notificationtype.php"> Cancel </a> </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
