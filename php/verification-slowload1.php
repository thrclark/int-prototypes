<?php
$section = '';
$page_title = 'VERIFY';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-main.php') ?>
<style></style>
</head>
<body class="int-user">
<header class="container p-3 px-sm-0 pt-sm-5">
    <div class="d-flex"> <img src="http://www.indiana.edu/~espd/int/img/trident-large.png" alt="" class="int-brand-image">
        <div class="int-lockup-group text-nowrap" style="display: block">
            <div class="int-lockup-org" id="org-name-display">INDIANA UNIVERSITY</div>
            <h1 class="int-lockup-pagetitle" id="app-name-display">VERIFY</h1>
        </div>
        <div class="w-100"></div>
        <div class="d-none d-lg-block text-nowrap">
            <div class="rbt-header-avatar-id"> <span class="rbt-header-avatar" aria-hidden="true">UN</span> username </div>
        </div>
    </div>
</header>
<main class="container p-0">
    <section>
        <div class="card">
            <div class="card-body position-relative" style="min-height: 500px">
                <div class="int-section-overlay " style="top: 0px; left: 0px">
                    <div class="spinner-border rbt-spinner--xxl demojs_refreshspinner" style="position: absolute;top: 45%;left: 45%;" role="status" aria-label="Content loading" > </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('includes/all-footer.php') ?>
<?php include('includes/theme-controls.php') ?>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
