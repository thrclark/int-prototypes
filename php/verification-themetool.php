<?php 
$section = '';
$page_title = 'VERIFY';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<style type="text/css"></style>
<?php include('includes/styles-main.php') ?>
</head>
<body class="int-user">
<main class="rbt-shell-main" style="max-width:inherit">
    <div class="rbt-shell">
        <div class="rbt-shell-sidebar d-none d-md-block" style="box-shadow: 0 1px 3px 2px rgba(0, 0, 0, 0.07); flex-basis: 20rem;width: 20rem;">
            <h2 class="mb-3">Theme controls</h2>
            <section class="predefined-themes mb-5">
                <div class="">Predefined Themes</div>
                <button data-theme="white" style="background-color: white"> white </button>
                <button data-theme="brown" style="background-color: #6f5929"> brown </button>
                <button data-theme="blue" style="background-color: #3f51b5"> blue </button>
                <button data-theme="yellow" style="background-color: #ffe08f"> yellow </button>
                <button data-theme="black" style="background-color: #222"> black </button>
            </section>
            <div class="rbt-collapse-accordion demo-theme-builder mb-5" id="accordion">
                <div class="card">
                    <h5 class="mb-2" id="headingOne">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> <i class="rbt-icon-chevron-right"></i> Logo/lockup </button>
                    </h5>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <label for="logoimage-visibility">Logo image</label>
                            <select class="form-control mb-3" id="logoimage-visibility">
                                <option selected="" value="block">Visible</option>
                                <option value="none">Hidden</option>
                            </select>
                            <label for="logoimage-url" class="demojs-logourl">Logo image URL</label>
                            <input type="text" class="form-control mb-3 demojs-logourl" id="logoimage-url" value="">
                            <label for="lockup-visibility">Lockup</label>
                            <select class="form-control mb-3" id="lockup-visibility">
                                <option selected="" value="block">Visible</option>
                                <option value="none">Hidden</option>
                            </select>
                            <label for="org-name" class="demojs-lockupcontrols">Organization name</label>
                            <input type="text" class="form-control mb-3 demojs-lockupcontrols"  id="org-name" aria-describedby="textinput" oninput='orgnameset();orgnamestore();'>
                            <label for="app-name" class="demojs-lockupcontrols">Application name</label>
                            <input type="text" class="form-control mb-3 demojs-lockupcontrols" id="app-name" aria-describedby="textinput" oninput='appnameset();appnamestore();'>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="mb-2" id="headingTwo">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <i class="rbt-icon-chevron-right"></i> Colors</button>
                    </h5>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <label for="body-bg-color">Body background color</label>
                            <input type="color" class="form-control mb-3" id="body-bg-color" value="#444444">
                            <label for="body-text-color">Body text color</label>
                            <input type="color" class="form-control mb-3" id="body-text-color" value="#444444">
                            <label for="panel-bg-color">Panel background color</label>
                            <input type="color" class="form-control mb-3" id="panel-bg-color" value="#444444">
                            <label for="panel-text-color">Panel text color</label>
                            <input type="color" class="form-control mb-3" id="panel-text-color" value="#444444">
                            <label for="action-color">Action color</label>
                            <input type="color" class="form-control mb-3" id="action-color" value="#006298">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="mb-2" id="headingThree">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <i class="rbt-icon-chevron-right"></i> Typography</button>
                    </h5>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body"> Nostrum fugit a natus. Corporis voluptates ut odio omnis nobis voluptas. Est dolor et eum quis deleniti explicabo autem est magnam. Unde expedita ab quia maxime quia. Qui voluptas distinctio ipsa laborum laboriosam. </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-block" id="savetheme" disabled>Apply changes</button>
        </div>
        <div class="rbt-shell-stage p-3">
            <header class="container p-0 mt-7 mb-3" style="max-width:880px">
                <div class="d-flex"> <img alt="" class="int-brand-image">
                    <div class="int-lockup-group text-nowrap">
                        <div class="int-lockup-org" id="org-name-display">INDIANA UNIVERSITY</div>
                        <h1 class="int-lockup-pagetitle" id="app-name-display"><?php echo $page_title; ?></h1>
                    </div>
                    <div class="w-100"></div>
                    <div class="d-none d-lg-block text-nowrap">
                        <div class="rbt-header-avatar-id"> <span class="rbt-header-avatar" aria-hidden="true">UN</span> username </div>
                    </div>
                </div>
            </header>
            <main>
                <section>
                    <div class="card">
                        <div class="card-body">
                            <h2 class="ts-26">Verify your data</h2>
                            <p> On occasion, we require verification of your personal information. The item(s) listed below need your review for accuracy.</p>
                            <h3 class="ts-26 mt-5">Sample data</h3>
                            <p>This is a paragraph that is used to describe the nature of this verification item to the user. It is possible to use a <a href="#">link</a> in this section.</p>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <dl class="row">
                                        <dt class="col-sm-4">Phone 1</dt>
                                        <dd class="col-sm-8"><span class="int-privatedata"> 123-456-7890</span> </dd>
                                        <dt class="col-sm-4">Phone 2</dt>
                                        <dd class="col-sm-8"><span class="int-privatedata"> 123-456-7890</span> </dd>
                                        <dt class="col-sm-4">Phone 3</dt>
                                        <dd class="col-sm-8"><span class="int-privatedata"> 123-456-7890</span> </dd>
                                    </dl>
                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="int-verify-controls p-3">
                        <div class="row mb-5" id="demojs_verifyscreen">
                            <div class="col-md-6 d-flex">
                                <div class="d-flex flex-column">
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
                            <div class="col-md-6 d-flex">
                                <div class="d-flex flex-column">
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
        </div>
    </div>
</main>
<?php include('includes/theme-controls.php') ?>
<?php include('modals/modal-theme.php') ?>
<?php include('includes/all-footerscripts.php') ?>
<script>
    $(".demojs-reveal").click(function() {
        $(".int-mask").hide();
		$(".alert").hide();
		$("#demojs_revealskipscreen").hide();
		$("#demojs_verifyscreen").show();
        $(".int-privatedata").show();	
    });
</script> 
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
        $('#lockup-visibility').change(function() {
            if ($(this).val() == "block") {
                $(".demojs-lockupcontrols").show();
            }
            if ($(this).val() == "none") {
                $(".demojs-lockupcontrols").hide();
            }

        });
		
		
		
		 $('#logoimage-visibility').change(function() {
            if ($(this).val() == "block") {
                $(".demojs-logourl").show();
            }
            if ($(this).val() == "none") {
                $(".demojs-logourl").hide();
            }

        });
		
		
	



    }); 
</script>
</body>
</html>
