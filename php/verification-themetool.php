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
<main class="rbt-shell-main" style="max-width:inherit">
    <div class="rbt-shell">
        <div class="rbt-shell-sidebar d-none d-md-block" style="box-shadow: 0 1px 3px 2px rgba(0, 0, 0, 0.07); flex-basis: 30rem;width: 30rem; position:relative; overflow: inherit;transition: all 0.3s ease; " >
            <button class="int-themehandle" id="demojs-themehandle"><i class="rbt-icon-chevron-left"></i></button>
            <h2 class="mb-3 mt-7">Customize</h2>
            <div class="rbt-collapse-accordion demo-theme-builder mb-5" id="accordion">
                <div class="card predefined-themes">
                    <h3 class="mb-2" id="">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#panel_preset" aria-expanded="false" aria-controls="panel_preset"> <i class="rbt-icon-chevron-right"></i> Predefined themes </button>
                    </h3>
                    <div id="panel_preset" class="collapse" aria-labelledby="" data-parent="#accordion">
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
                    <h3 class="mb-2" id="">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#panel_customheadfoot" aria-expanded="false" aria-controls="panel_customheadfoot"> <i class="rbt-icon-chevron-right"></i> Custom header/footer </button>
                    </h3>
                    <div id="panel_customheadfoot" class="collapse" aria-labelledby="" data-parent="#accordion">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="header_html">Header HTML</label>
                                <textarea class="form-control" id="header_html" rows="5" oninput='headerhtml_set();headerhtml_store();'></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="footer_html">Footer HTML</label>
                                <textarea class="form-control" id="footer_html" rows="5" oninput='footerhtml_set();footerhtml_store();'></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="headerfooter_css">Header/footer CSS</label>
                                <textarea class="form-control" id="headerfooter_css" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="mb-2" id="">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#panel_logolockup" aria-expanded="false" aria-controls="panel_logolockup"> <i class="rbt-icon-chevron-right"></i> Logo/lockup </button>
                    </h3>
                    <div id="panel_logolockup" class="collapse" aria-labelledby="" data-parent="#accordion">
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
                    <h3 class="mb-2" id="">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#panel_colors" aria-expanded="false" aria-controls="panel_colors"> <i class="rbt-icon-chevron-right"></i> Colors</button>
                    </h3>
                    <div id="panel_colors" class="collapse" aria-labelledby="" data-parent="#accordion">
                        <div class="card-body">
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="body-bg-color" class="font-weight-normal ts-16 mb-2">Body background color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="body-bg-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="body-bg-color-hexcolor">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="body-text-color" class="font-weight-normal ts-16 mb-2">Body text color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="body-text-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="body-text-color-hexcolor">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="panel-bg-color" class="font-weight-normal ts-16 mb-2">Panel background color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="panel-bg-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="panel-bg-color-hexcolor">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="panel-text-color" class="font-weight-normal ts-16 mb-2">Panel text color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="panel-text-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="panel-text-color-hexcolor">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="action-color" class="font-weight-normal ts-16 mb-2">Action color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="action-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="action-color-hexcolor">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="border-color" class="font-weight-normal ts-16 mb-2">Border color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="border-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="border-color-hexcolor">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="mb-2" id="">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#panel_headerfonts" aria-expanded="false" aria-controls="panel_headerfonts"> <i class="rbt-icon-chevron-right"></i> Header font</button>
                    </h3>
                    <div id="panel_headerfonts" class="collapse" aria-labelledby="" data-parent="#accordion">
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
                            <label for="base_headerfont_size">Base font size</label>
                            <input type="range" id="base_headerfont_size" value="16" min="12" max="16" class="mb-3 w-75" oninput="headerfont_size_output.value = base_headerfont_size.value">
                            <output id="headerfont_size_output">16</output>
                            px 
                            <!--<label for="base_line_height">Base line height</label>
                            <input type="range"id="base_line_height"min="1.2"max="2.0"step="0.1"value="1.6" class="mb-3 w-75" oninput="line_height_output.value = base_line_height.value">
                            <span id="line_height_output">1.5</span>
                            rem --></div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="mb-2" id="">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#panel_bodyfonts" aria-expanded="false" aria-controls="panel_bodyfonts"> <i class="rbt-icon-chevron-right"></i> Body font</button>
                    </h3>
                    <div id="panel_bodyfonts" class="collapse" aria-labelledby="" data-parent="#accordion">
                        <div class="card-body">
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
                            <label for="base_bodyfont_size">Base font size</label>
                            <input type="range" id="base_bodyfont_size" value="16" min="12" max="16" class="mb-3 w-75" oninput="bodyfont_size_output.value = base_bodyfont_size.value">
                            <output id="bodyfont_size_output">16</output>
                            px 
                            <!--<label for="base_line_height">Base line height</label>
                            <input type="range"id="base_line_height"min="1.2"max="2.0"step="0.1"value="1.6" class="mb-3 w-75" oninput="line_height_output.value = base_line_height.value">
                            <span id="line_height_output">1.5</span>
                            rem --></div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="mb-2" id="">
                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#panel_layout" aria-expanded="false" aria-controls="panel_layout"> <i class="rbt-icon-chevron-right"></i> Layout</button>
                    </h3>
                    <div id="panel_layout" class="collapse" aria-labelledby="" data-parent="#accordion">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="d-block font-weight-normal" style="font-size: 1rem !important" for="theme_border_radius">Border radius</label>
                                <div class="row">
                                    <div class="col-12">
                                        <input id="theme_border_radius" type="range"min="0" max="20" step="1" value="4"  class="w-100">
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group mb-5">
                                            <input id="show_border_value" name="price" value="4" class="form-control">
                                            <div class="input-group-append"> <span class="input-group-text">px</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block font-weight-normal" style="font-size: 1rem !important" for="theme_page_margin">Page margin</label>
                                <div class="row">
                                    <div class="col-12">
                                        <input id="theme_page_margin" type="range"min="440"max="880"step="10"value="880" class="w-100">
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group mb-5">
                                            <input id="show_margin_value" name="price" value="880" class="form-control">
                                            <div class="input-group-append"> <span class="input-group-text">px</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            <div class="container p-0" id="header_html_display"></div>
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
                            <div class="alert alert-warning mb-5" role="alert">
                                <h2 class="alert-heading">Privacy note</h2>
                                <p>A message box such as this one will appear here in the cases where private data is displayed in this verification.</p>
                            </div>
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
                    <p class="border-bottom mb-3 pb-3">This is an optional paragraph that can be customized. This is an optional paragraph that can be customized. This is an optional paragraph that can be customized. </p>
                    <div class="int-verify-controls p-3">
                        <div class="row mb-5" id="demojs_verifyscreen">
                            <div class="col-md-6 d-flex pb-5 pb-md-0">
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
                            <div class="col-md-6 d-flex pb-5 pb-md-0">
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
            <div class="container p-0" id="footer_html_display"></div>
        </div>
    </div>
</main>
<?php include('includes/theme-controls.php') ?>
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
<script>
$('#body-bg-color').on('change', function() {
    $('#body-bg-color-hexcolor').val(this.value);
});
$('#body-bg-color-hexcolor').on('change', function() {
    $('#body-bg-color').val(this.value);
});
$('#body-text-color').on('change', function() {
    $('#body-text-color-hexcolor').val(this.value);
});
$('#body-text-color-hexcolor').on('change', function() {
    $('#body-text-color').val(this.value);
});
$('#panel-bg-color').on('change', function() {
    $('#panel-bg-color-hexcolor').val(this.value);
});
$('#panel-bg-color-hexcolor').on('change', function() {
    $('#panel-bg-color').val(this.value);
});
$('#panel-text-color').on('change', function() {
    $('#panel-text-color-hexcolor').val(this.value);
});
$('#panel-text-color-hexcolor').on('change', function() {
    $('#panel-text-color').val(this.value);
});
$('#action-color').on('change', function() {
    $('#action-color-hexcolor').val(this.value);
});
$('#action-color-hexcolor').on('change', function() {
    $('#action-color-color').val(this.value);
});	
$('#border-color').on('change', function() {
    $('#border-color-hexcolor').val(this.value);
});
$('#border-color-hexcolor').on('change', function() {
    $('#border-color-color').val(this.value);
});
	
</script> 
<script>
$(document).ready(function() {

    $('#theme_page_margin').on('input', function() {
        var newVal = $(this).val();
        $("#show_margin_value").val(newVal);
    });
    $('#show_margin_value').on('input', function() {
        $('#theme_page_margin').val($(this).val())
    });
	 $('#theme_border_radius').on('input', function() {
        var newVal = $(this).val();
        $("#show_border_value").val(newVal);
    });
    $('#show_border_value').on('input', function() {
        $('#theme_border_radius').val($(this).val())
    });
});
	
</script>
</body>
</html>
