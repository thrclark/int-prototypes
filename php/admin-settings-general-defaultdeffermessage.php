<?php
$section = '';
$page_title = 'Default defer message';
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
                        <li class="breadcrumb-item"><a href="admin-settings-general.php">General settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
                    </ol>
                </nav>
                <div class="form-group">
                    <label for="textinput-full" class="ts-26">Default defer message</label>
                    <div>Text to be displayed next to the Defer option. This can be overridden by an individual verification.</div>
                    <input type="text" class="form-control" id="textinput-full" aria-describedby="textinput">
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher"> <a href="admin-notificationtype.php" class="btn btn-primary"> Save </a> <a class="btn btn-outline-primary"  href="admin-notificationtype.php"> Cancel </a> </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
var simplemde = new SimpleMDE({ element: $("#richText1")[0] });
</script>
</body>
</html>
