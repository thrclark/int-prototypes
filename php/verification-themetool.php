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
        <div class="rbt-shell-sidebar d-none d-md-block" style="box-shadow: 0 1px 3px 2px rgba(0, 0, 0, 0.07); flex-basis: 30rem;width: 30rem; position:relative; overflow: inherit;transition: all 0.3s ease; " >
            <button class="int-themehandle" id="demojs-themehandle"><i class="rbt-icon-chevron-left"></i></button>
            <h2 class="mb-3 mt-7">Customize theme</h2>
            <div class="rbt-collapse-accordion demo-theme-builder mb-5" id="accordion">
                <div class="card predefined-themes">
                    <h5 class="mb-2" id="headingOne1">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"> <i class="rbt-icon-chevron-right"></i> Predefined Themes </button>
                    </h5>
                    <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1" data-parent="#accordion">
                        <div class="card-body p-3">
                            <button data-theme="white" style="background-color: white"> white </button>
                            <button data-theme="brown" style="background-color: #6f5929"> brown </button>
                            <button data-theme="blue" style="background-color: #3f51b5"> blue </button>
                            <button data-theme="yellow" style="background-color: #ffe08f"> yellow </button>
                            <button data-theme="black" style="background-color: #222"> black </button>
                        </div>
                    </div>
                </div>
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
                            <div class="media">
                                <div class="rbt-media-prepend p-2">
                                    <input type="color" class="form-control mb-3" id="body-bg-color" value="#444444">
                                </div>
                                <div class="media-body p-2">
                                    <label for="body-bg-color">Body background color</label>
                                </div>
                            </div>
                            <div class="media">
                                <div class="rbt-media-prepend p-2">
                                    <input type="color" class="form-control mb-3" id="body-text-color" value="#444444">
                                </div>
                                <div class="media-body p-2">
                                    <label for="body-text-color">Body text color</label>
                                </div>
                            </div>
                            <div class="media">
                                <div class="rbt-media-prepend p-2">
                                    <input type="color" class="form-control mb-3" id="panel-bg-color" value="#444444">
                                </div>
                                <div class="media-body p-2">
                                    <label for="panel-bg-color">Panel background color</label>
                                </div>
                            </div>
                            <div class="media">
                                <div class="rbt-media-prepend p-2">
                                    <input type="color" class="form-control mb-3" id="panel-text-color" value="#444444">
                                </div>
                                <div class="media-body p-2">
                                    <label for="panel-text-color">Panel text color</label>
                                </div>
                            </div>
                            <div class="media">
                                <div class="rbt-media-prepend p-2">
                                    <input type="color" class="form-control mb-3" id="action-color" value="#006298">
                                </div>
                                <div class="media-body p-2">
                                    <label for="action-color">Action color</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="mb-2" id="headingThree">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <i class="rbt-icon-chevron-right"></i> Typography</button>
                    </h5>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <label for="font-header">Header font</label>
                            <select class="form-control mb-3" id="font-header">
                                <option value="Arial, Helvetica, sans-serif">Sans-Serif Arial, Helvetica, sans-serif</option>
                                <option value="'Arial Black', Gadget, sans-serif">Sans-Serif 'Arial Black', Gadget, sans-serif</option>
                                <option value="Impact, Charcoal, sans-serif">Sans-Serif Impact, Charcoal, sans-serif</option>
                                <option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Sans-Serif 'Lucida Sans Unicode', 'Lucida Grande', sans-serif</option>
                                <option value="Tahoma, Geneva, sans-serif">Sans-Serif Tahoma, Geneva, sans-serif</option>
                                <option value="'Trebuchet MS', Helvetica, sans-serif">Sans-Serif 'Trebuchet MS', Helvetica, sans-serif</option>
                                <option value="Verdana, Geneva, sans-serif">Sans-Serif Verdana, Geneva, sans-serif</option>
                                <option value="Georgia, serif">Serif Georgia, serif</option>
                                <option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif">Serif 'Palatino Linotype', 'Book Antiqua', Palatino, serif</option>
                                <option value="'Times New Roman', Times, serif">Serif 'Times New Roman', Times, serif</option>
                                <option value="'BentonSans', 'Helvetica Neue', 'Helvetica', sans-serif"> Use Custom Font</option>
                            </select>
                            <label for="font-header">Body font</label>
                            <select class="form-control mb-3" id="font-body">
                                <option value="Arial, Helvetica, sans-serif">Sans-Serif Arial, Helvetica, sans-serif</option>
                                <option value="'Arial Black', Gadget, sans-serif">Sans-Serif 'Arial Black', Gadget, sans-serif</option>
                                <option value="Impact, Charcoal, sans-serif">Sans-Serif Impact, Charcoal, sans-serif</option>
                                <option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Sans-Serif 'Lucida Sans Unicode', 'Lucida Grande', sans-serif</option>
                                <option value="Tahoma, Geneva, sans-serif">Sans-Serif Tahoma, Geneva, sans-serif</option>
                                <option value="'Trebuchet MS', Helvetica, sans-serif">Sans-Serif 'Trebuchet MS', Helvetica, sans-serif</option>
                                <option value="Verdana, Geneva, sans-serif">Sans-Serif Verdana, Geneva, sans-serif</option>
                                <option value="Georgia, serif">Serif Georgia, serif</option>
                                <option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif">Serif 'Palatino Linotype', 'Book Antiqua', Palatino, serif</option>
                                <option value="'Times New Roman', Times, serif">Serif 'Times New Roman', Times, serif</option>
                                <option value="'BentonSans', 'Helvetica Neue', 'Helvetica', sans-serif"> Use Custom Font</option>
                            </select>
                            <label for="base-font-size">Base font size</label>
                            <input type="range" id="base-font-size" min="12" max="16" step="1" value="16" class="mb-3 w-100">
                            <label for="base-line-height">Base line height</label>
                            <input type="range"id="base-line-height"min="1.2"max="2.0"step="0.1"value="1.6" class="mb-3 w-100">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="mb-2" id="headingFour">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> <i class="rbt-icon-chevron-right"></i> Layout</button>
                    </h5>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            <label for="border-radius">Border radius</label>
                            <input type="range" id="border-radius" min="0" max="20" step="1" value="4" class="mb-3 w-100">
                            <label for="page-margin">Page margin</label>
                            <input type="range"id="page-margin"min="440"max="880"step="10"value="880" class="mb-3 w-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-6">
                    <button type="button" class="btn btn-primary btn-block demojs-savetheme" id="savetheme" disabled> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Publish theme</span> </button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-outline-primary btn-block demojs-savetheme" id="" disabled> Restore values </button>
                </div>
            </div>
        </div>
        <div class="rbt-shell-stage p-3">
            <header class="container p-0 mt-7 mb-3">
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
$(document).ready(function(){
  $("#demojs-themehandle").click(function(){
    $(".rbt-shell-sidebar").toggleClass("int-themeclose");
  });
});
</script> 
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
		
		
		
		 $("[data-theme='white']").click(function() {
			 $(".demojs-lockupcontrols").show();
			 $(".demojs-logourl").show();
        });
		 $("[data-theme='brown']").click(function() {
			 $(".demojs-lockupcontrols").show();
			 $(".demojs-logourl").show();
        });
		 $("[data-theme='blue']").click(function() {
			 $(".demojs-lockupcontrols").show();
			 $(".demojs-logourl").show();
        });
		 $("[data-theme='yellow']").click(function() {
			$(".demojs-lockupcontrols").hide();
			$(".demojs-logourl").show();
        });
		 $("[data-theme='black']").click(function() {
			$(".demojs-logourl").hide();
			$(".demojs-lockupcontrols").show();
        });
		
	


    }); 
</script> 
<script>
    $(document).ready(function() {
		
		
		
		$( ".card-body .form-control, .predefined-themes .card-body button" ).click(function() {
  $('.demojs-savetheme').prop("disabled", false); // Element(s) are now enabled.
});





 }); 

</script> 
<script>
    $(document).ready(function() {
        $(function() {
            $("#savetheme").click(function() {
                $('.btn.btn-primary').addClass('rbt-loading');
				$('.btn.btn-primary .spinner-border').removeClass('d-none');
				$('.btn.btn-primary .visible').toggleClass('invisible');
				$('.demojs-savetheme').prop('disabled', true);
				
                setTimeout(function() {
                    $('.btn.btn-primary').removeClass('rbt-loading');
					$('.btn.btn-primary .spinner-border').addClass('d-none');
					$('.demojs-savetheme').prop('disabled', true);
					$('.btn.btn-primary .invisible').removeClass('invisible');
					
                }, 3000)
            });
        });
    });
</script>
</body>
</html>
