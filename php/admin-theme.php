<?php
$section = '';
$page_title = 'Theme';
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
        <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <ul class="nav nav-pills int-tabs" id="pills-tab" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" tabindex="0">Theme tool</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">Custom header &amp; footer</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">Application icons</button>
            </li>
        </ul>
        <div class="tab-content pt-5" id="myTabContent" tabindex="0" role="tabpanel" >
            <div class="tab-pane fade show active" id="pills-home"  role="tabpanel" aria-labelledby="tab1" aria-hidden="false" >
                <div class="row">
                    <div class="col-8">
                        <h2 class="mb-3 rbt-ts-20 rbt-ts-26-md-up">Theme tool</h2>
                        <p class="">Use the theming tool to customize the end user view to align with your institutional brand. This tool allows you to select custom colors, add logos, and specify typography. </p>
                        <div class="mt-7"> <a href="verification-themetool-var1.php" target="_blank" class="btn btn-primary">Launch theming tool <i class="rbt-icon-link-external ml-3"></i> </a></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="tab2" aria-hidden="true" >
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h2>Custom header &amp; footer</h2>
                        <p class="">Add an optional custom header and footer to the page view. </p>
                        <div class="form-group">
                            <label for="customheaderhtml">Custom header HTML</label>
                            <textarea class="form-control" id="customheaderhtml" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="customfooterhtml">Custom footer HTML</label>
                            <textarea class="form-control" id="customfooterhtml" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="customcss">Custom CSS</label>
                            <textarea class="form-control" id="customcss" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="rbt-button-group">
                    <button class="btn btn-primary">Save</button>
                    <button class="btn btn-outline-primary">Cancel</button>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="tab3" aria-hidden="true" >
                <h3 class="rbt-ts-23 font-weight-bold mb-3">A grid inside a tab panel</h3>
                <div class="row">
                    <div class="col-4">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-8">
                        <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
