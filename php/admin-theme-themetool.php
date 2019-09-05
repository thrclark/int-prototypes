<?php 
$section = '';
$page_title = 'Theming tool';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-admin.php') ?>
</head>
<body>
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-5 mb-5">
    <main class="main-content" id="main-content">
        <h1> <?php echo $page_title; ?></h1>
         <p class="ts-20">Use the theming tool to customize the end user view to align with your institutional brand. This tool allows you to select custom colors, add logos, and specify typography. </p>
                <div class="mt-7 text-centerr"> <a href="verification-themetool.php" target="_blank" class="btn btn-primary">Launch theming tool <i class="rbt-icon-link-external ml-3"></i> </a></div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
