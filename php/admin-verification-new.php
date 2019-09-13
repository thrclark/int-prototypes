<?php 
$section = '';
$page_title = 'New verification';
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
        <ol class="rvb-steps rvb-steps--vertical">
            <li class="rvb-steps__item"> <a href="#" class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label">Setup</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i></span> </a> </li>
            <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Data</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i></span> </span> </li>
            <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Recipients</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </span> </li>
            <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Scheduling</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i></span> </span> </li>
            <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Review/Save</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i> </span> </li>
        </ol>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
