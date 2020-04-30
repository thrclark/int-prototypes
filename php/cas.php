<?php
$section = '';
$page_title = 'LOGIN';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-main.php') ?>
<style>
.int-help {
    text-align: center;
    font-size: 0.875rem !important;
    margin-top: 2.5rem !important;
}
.int-help a {
    text-decoration: none;
}
</style>
</head>
<body class="int-user cas">
<header class="container p-3 px-sm-0 pt-sm-5">
    <div class="d-flex"> <img src="http://www.indiana.edu/~espd/int/img/trident-large.png" alt="" class="int-brand-image">
        <div class="int-lockup-group text-nowrap" style="display: block">
            <div class="int-lockup-org" id="org-name-display">INDIANA UNIVERSITY</div>
            <h1 class="int-lockup-pagetitle" id="app-name-display">LOGIN</h1>
        </div>
    </div>
</header>
<main class="container p-0">
    <section>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="username">
                </div>
                <div class="form-group">
                    <label for="passphrase">Passphrase</label>
                    <input type="password" class="form-control" id="passphrase" aria-describedby="passphrase">
                </div>
                <button type="button" class="btn btn-primary btn-block mt-6" onclick="location.href='verification-base.php';">Log in</button>
                <div class="int-help"> <a href="https://kb.iu.edu/d/auog" target="_blank" class="mr-5"><i class="rbt-icon-info-circle"></i> About the new look</a> <a href="https://kb.iu.edu/d/alpu" target="_blank"><i class="rbt-icon-question-mark"></i> Get help</a></div>
            </div>
        </div>
    </section>
</main>
<?php include('includes/all-footer.php') ?>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>