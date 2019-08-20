<?php 
$section = '';
$page_title = 'LOGIN';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles.php') ?>
</head>
<body class="int-user">
<header> <img alt="" class="int-brand-image">
    <div class="int-lockup-group">
        <div class="int-lockup-org">INDIANA UNIVERSITY</div>
        <h1 class="int-lockup-pagetitle"><?php echo $page_title; ?></h1>
    </div>
</header>
<main>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="username" >
                </div>
                <div class="form-group">
                    <label for="passphrase">Passphrase</label>
                    <input type="password" class="form-control" id="passphrase" aria-describedby="passphrase" >
                </div>
                <button type="button" class="btn btn-primary btn-block mt-6">Log in</button>
                <div class="int-help"> <a href="https://kb.iu.edu/d/auog" target="_blank" class="mr-5"><i class="rbt-icon-info-circle"></i> About the new look</a> <a href="https://kb.iu.edu/d/alpu" target="_blank"><i class="rbt-icon-question-mark"></i> Get help</a></div>
            </div>
        </div>
    </section>
</main>

<!--Custom footer-->

<footer class="custom-footer">
    <p> <a href="https://www.iu.edu/copyright/index.html" target="_blank" rel="noopener noreferrer">Copyright</a> © 2019 The Trustees of <a href="http://www.iu.edu/" target="_blank" rel="noopener noreferrer">Indiana University</a>. </p>
</footer>

<!--<?php include('includes/theme-controls.php') ?>-->
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
