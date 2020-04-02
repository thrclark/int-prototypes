<?php
$section = '';
$page_title = 'VERIFY';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-main.php') ?>
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
        <div class="border-top text-center mb-2">
            <p class="ts-23  pt-7 mb-3"> Sorry, there was a problem.</p>
            <button class="btn btn-primary mb-5">Home</button>
            <div class="mb-7 ts-12"> Error: This is a detailed error message. This is a second sentence for this error.</div>
        </div>
    </section>
</main>
<div class="container p-0 mt-auto" id="footer_html_display">
    <div class="pt-3 pb-7 ts-12 text-center"> <a href="https://www.iu.edu/copyright/index.html" target="_blank" class="text-dark">Copyright</a> © 2020 The Trustees of <a href="https://www.iu.edu/" target="_blank" class="text-dark">Indiana University</a>. </div>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
