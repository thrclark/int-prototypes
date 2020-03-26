<?php
$section = '';
$page_title = 'VERIFY';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-main.php') ?>
<style>

</style>
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
            <div class="card-body">
                <h2>Verification name</h2>
                <p> On occasion, we require verification of your personal information. The item(s) listed below need your review for accuracy.</p>
                <p>This is an additional, optional paragraph that may be customized as needed. This paragraph may include <a href="#">links</a>. Esse errem aeterno id, his ad blandit imperdiet. Id unum propriae suavitate sea. Adipisci delicata ocurreret ad qui. Altera impedit expetendis vis at.</p>
                <h3 class="mt-5">Verify section name</h3>
                <p>Displayed below is the contact information on file for you. Please review and update or correct it is to receive critical alerts from IU. For more information, see about emergency notifications at Indiana University.</p>
                <div style="position: relative">
                    <div class="int-section-overlay">
                        <button class="btn btn-primary demojs_refreshbutton" style="position: absolute;top: 45%;left: 45%;"><span class="rbt-icon-sync"></span>
                        <div class="d-inline-block ml-1">Refresh</div>
                        </button>
                        <div class="spinner-border rbt-spinner--xxl demojs_refreshspinner" style="position: absolute;top: 45%;left: 45%; display: none" role="status" aria-label="Content loading" > </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <dl class="row">
                                <dt class="col-sm-4">IU Office</dt>
                                <dd class="col-sm-8"><span class="int-privatedata"> 812-855-5555</span> </dd>
                                <dt class="col-sm-4">Home</dt>
                                <dd class="col-sm-8"><span class="int-privatedata">812-336-3456</span> </dd>
                                <dt class="col-sm-4">Secondary Home</dt>
                                <dd class="col-sm-8"><span class="int-privatedata">Not Specified</span> </dd>
                                <dt class="col-sm-4">Mobile 1</dt>
                                <dd class="col-sm-8"><span class="int-privatedata">812-369-1234</span> </dd>
                                <dt class="col-sm-4">Mobile 2</dt>
                                <dd class="col-sm-8"><span class="int-privatedata">Not Specified</span> </dd>
                                <dt class="col-sm-4">Mobile 3</dt>
                                <dd class="col-sm-8"><span class="int-privatedata">Not Specified</span> </dd>
                            </dl>
                            <button class="btn btn-sm btn-outline-primary">Edit</button>
                        </li>
                        <li class="list-group-item">
                            <dl class="row">
                                <dt class="col-sm-4">Non-IU Email</dt>
                                <dd class="col-sm-8">someuser@gmail.com </dd>
                                <dt class="col-sm-4">Recieve notices from</dt>
                                <dd class="col-sm-8">IU Bloomington<br>
                                    IU Kokomo </dd>
                            </dl>
                            <button class="btn btn-sm btn-outline-primary">Edit</button>
                        </li>
                    </ul>
                </div>
                <h3 class="mt-5">Verify section name</h3>
                <p>This is a descriptive paragraph for this section. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                <div style="position: relative">
                    <div class="int-section-overlay">
                        <button class="btn btn-primary demojs_refreshbutton" style="position: absolute;top: 45%;left: 45%;"><span class="rbt-icon-sync"></span>
                        <div class="d-inline-block ml-1">Refresh</div>
                        </button>
                        <div class="spinner-border rbt-spinner--xxl demojs_refreshspinner" style="position: absolute;top: 45%;left: 45%; display: none" role="status" aria-label="Content loading" > </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <dl class="row">
                                <dt class="col-sm-4">Label</dt>
                                <dd class="col-sm-8">Value </dd>
                            </dl>
                            <button class="btn btn-sm btn-outline-primary">Edit</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="int-verify-controls py-3 px-3 px-lg-0">
            <p class="border-bottom pb-3">This is an optional paragraph that can be customized. Abundantly made days herb land called whose. Won't a night. Third hath greater face replenish whales fruit saying is meat. Us bearing. Air day called Also, abundantly forth she'd night may. They're gathered you're place fifth. Fowl they're saw midst for waters kind and make green and winged sea their whales you'll them seas set i days first itself open. </p>
            <div class="row mb-5" id="demojs_verifyscreen">
                <div class="col-md-6 d-flex pb-5 pb-md-0">
                    <div class="d-flex flex-fill flex-column">
                        <div class="mb-3 ts-20">
                            <div class="form-check form-check-inline">
                                <input id="question4" name="checked" type="checkbox" aria-invalid="false" data-container="body" data-toggle="popover" data-placement="top" data-content="Required" data-original-title="" title="">
                                <label class="form-check-label" for="question4"> I have verified that the above information is up to date and correct.</label>
                            </div>
                        </div>
                        <div class="rbt-button-group mt-auto">
                            <button type="button" class="btn btn-primary btn-block" id="submit2">Verify</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex pb-5 pb-md-0">
                    <div class="d-flex flex-fill flex-column">
                        <div class="mb-3 ts-20"> You can choose to verify later. You may choose this option 3 more time(s).</div>
                        <div class="rbt-button-group mt-auto">
                            <button type="button" class="btn btn-outline-primary btn-block">Verify later</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<div class="container p-0" id="footer_html_display">
    <div class="pt-3 pb-7 ts-12 text-center"> <a href="https://www.iu.edu/copyright/index.html" target="_blank" class="text-dark">Copyright</a> © 2020 The Trustees of <a href="https://www.iu.edu/" target="_blank" class="text-dark">Indiana University</a>. </div>
</div>
<?php include('includes/theme-controls.php') ?>
<?php include('includes/all-footerscripts.php') ?>
<script>
    $(document).ready(function() {
        $("#submit2").click(function() {
            $('#question4').popover('toggle')
        });
		
		 $("#question4").click(function() {
			 $('#question4').popover('show')
            $('#question4').popover('destroy')
        });
		
		 $('#submit2').click(function() {
            if ($('#question4').is(':checked')) {
				 $('#question4').popover('destroy')
            }
        });
    }); 
</script> 
<script>
$(document).ready(function() {
    $(".demojs_refreshbutton").click(function() {
        $(".demojs_refreshbutton").hide();
        $(".demojs_refreshspinner").show();
        setTimeout(function() {
            $('.int-section-overlay').hide();
        }, 3000)
    });

});
</script>
</body>
</html>
