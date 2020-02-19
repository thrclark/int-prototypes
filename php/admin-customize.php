<?php
$section = '';
$page_title = 'Custom theme';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-admin.php') ?>
</head>
<body class="int-admin">
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-3 mt-md-5 mb-7">
    <main class="main-content" id="main-content">
        <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <p class="">Use the theming tool to customize the end user view to align with your institutional brand. This tool allows you to select custom colors, add logos, and specify typography. </p>
        <div class="mt-7"> <a href="verification-themetool.php" target="_blank" class="btn btn-primary">Launch theming tool <i class="rbt-icon-link-external ml-3"></i> </a></div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
