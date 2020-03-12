<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Prototype index</title>
<link href="css/admin.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="background-color: #fafafa;">
<a class="rbt-skip-link" href="#main-content">Skip to content</a> <a class="rbt-skip-link" href="#main-content">Skip to content</a>
<header class="d-flex flex-nowrap rbt-app-header rbt-app-header--light mb-5">
    <div class="rbt-brand-title-container flex-grow-1" style="text-align:center"> <a href="#" class="rbt-brand-title"><span class="font-weight-bold">Verify </span>Prototypes</a> </div>
</header>
<main class="container" style="max-width:880px">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                <div class="alert-heading">Note</div>
                <p class="small">If any of these prototypes appear to have broken CSS, go to the <a href="php/verification-themetool.php" target="_blank">theme tool</a>, then 'Predefiend themes', and click the first white box.</p>
            </div>
            <div class="card bg-white mb-4 rbt-box-raised">
                <div class="card-body">
                    <div class="font-weight-bold rbt-ts-20 flex-grow-1 mb-5">End user views</div>
                    <div class="card mb-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/verification-base.php" target="_blank" class="font-weight-bold">Base view</a>
                                        <div class="ts-14">Base view of the verification for the end user.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/verification-sections.php" target="_blank" class="font-weight-bold">Multiple sections &amp; datasets</a>
                                        <div class="ts-14">View with multiple sections and datasets.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/verification-privatedata.php" target="_blank" class="font-weight-bold">Private data</a>
                                        <div class="ts-14">Verification with private data that must be revealed prior to verification.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/verification-skip.php" target="_blank" class="font-weight-bold">Skip verification</a>
                                        <div class="ts-14">System error that prevents a verification from being registered. Click the 'Verify' button.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/verification-overlay.php" target="_blank" class="font-weight-bold">Data loading overlay</a>
                                        <div class="ts-14">Masking overlay displayed while data is loading on the page.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/verification-validate.php" target="_blank" class="font-weight-bold">Error messaging</a>
                                        <div class="ts-14">Error message that displays above data section.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/verification-nodeferrals.php" target="_blank" class="font-weight-bold">No more deferrals</a>
                                        <div class="ts-14">End user view when defferals are disabled or unavailable.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/verification-none.php" target="_blank" class="font-weight-bold">No more verifications</a>
                                        <div class="ts-14">End user view when there are no verifications to complete.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/verification-preview.php" target="_blank" class="font-weight-bold">Preview banner</a>
                                        <div class="ts-14">Banner that shows up when a publisher previews a verification in the publishing interface.</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-7">
            <div class="card bg-white mb-4 rbt-box-raised">
                <div class="card-body">
                    <div class="font-weight-bold rbt-ts-20 flex-grow-1 mb-5">Admin views</div>
                    <div class="card mb-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/admin-verifications.php" target="_blank" class="font-weight-bold">Verifications</a>
                                        <div class="ts-14">List of verifications in the system.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/admin-verification-new1.php" target="_blank" class="font-weight-bold">New/edit verification</a>
                                        <div class="ts-14">Create or edit a verification.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/admin-customize.php" target="_blank" class="font-weight-bold">Theme tool</a>
                                        <div class="ts-14">Theme tool used to configure branding colors, fonts, etc. </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body"> <a href="php/admin-settings-general.php" target="_blank" class="font-weight-bold">Settings</a>
                                        <div class="ts-14">Admin view for application settings </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="rbt-footer fixed-bottom">
    <ul class="rbt-footer-aux-links">
        <li class="rbt-footer-aux-item"> <a href="https://accessibility.iu.edu/">Accessibility </a> </li>
        <li class="rbt-footer-aux-item"> <a href="#0">Privacy Notice</a> </li>
        <li class="rbt-footer-aux-item"> <a href="https://www.iu.edu/copyright/index.html">Copyright</a> © 2019 The Trustees of <a href="https://www.iu.edu/"> Indiana University </a> </li>
    </ul>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
</body>
</html>