<?php
$section = '';
$page_title = 'System parameters';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-main.php') ?>
</head>
<body>
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-3 mt-md-5 mb-7">
    <main class="main-content" id="main-content">
        <div class="demojs-section" id="view_main">
            <div class="d-flex justify-content-between">
                <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
                <growls style=" display: none; position: fixed; right:10px; top:80px;" id="growl1">
                    <alert dismissible="true">
                        <div role="alert" class="alert alert-success alert-dismissible mb-3">
                            <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                            <span>Save successful.</span> </div>
                    </alert>
                </growls>
            </div>
            <div class="int-panel p-3">
                <table class="table rbt-table-responsive rbt-table-actions">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Value</th>
                            <th><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Application email <span class="ts-12 d-block">The address from which global emails are sent.</span></span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> one@iu.edu </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview1">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Google Analytics rollup ID<span class="ts-12 d-block">Data for selected tenants will be sent to this Google Analytics ID.</span></span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> UA-39645822-16 </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview2">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Send exception email<span class="ts-12 d-block">Space delimited list of email addresses to which exception reports are sent.</span></span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> jhopf@iu.edu </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview3">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Send exception email Toggle<span class="ts-12 d-block">Turn on sending of email for exceptions. Default is no.</span></span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> Yes </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview4">Edit</button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Update Server<span class="ts-12 d-block">Enter the name of one of the servers that will be used for updating new data on releases.</span></span></td>
                            <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> esappj82.uits.iupui.edu </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-sm btn-outline-primary" id="showview5">Edit</button>
                                </span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="demojs-section" id="view1" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Application email</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-admin-sysparam.php">System parameters</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Application email</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="app_email">Application email</label>
                            <div class="int-fielddescription"> The address from which global emails are sent.</div>
                            <countdown>
                                <div class="rbt-charcount">
                                    <input aria-labelledby="app_email" class="form-control " formcontrolname="title" id="app_email">
                                    <span class="badge badge-success" id="app_email_badge"> <span id="app_email_counter">100</span> </span> </div>
                            </countdown>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view2" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Google Analytics rollup ID</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-admin-sysparam.php">System parameters</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Google Analytics rollup ID</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="ga_id">Google Analytics rollup ID</label>
                            <div class="int-fielddescription">Data for selected tenants will be sent to this Google Analytics ID.</div>
                            <input type="text" class="form-control" id="app_email" aria-describedby="app_email">
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view3" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Send exception email</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-admin-sysparam.php">System parameters</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Send exception email</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="send_exemail">Send exception email</label>
                            <div class="int-fielddescription">Space delimited list of email addresses to which exception reports are sent.</div>
                            <countdown>
                                <div class="rbt-charcount">
                                    <textarea class="form-control" id="send_exemail" aria-describedby="send_exemail" rows="5"></textarea>
                                    <span class="badge badge-success" id="send_exemail_badge"> <span id="send_exemail_counter">1000</span> </span> </div>
                            </countdown>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view4" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Send exception email Toggle</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-admin-sysparam.php">System parameters</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Send exception email Toggle</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="send_exemail">Send exception email toggle</label>
                            <div class="int-fielddescription">Turn on sending of email for exceptions. Default is no.</div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="stacked1" value="option1">
                                <label class="form-check-label" for="stacked1"> No </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="stacked2" value="option2" checked>
                                <label class="form-check-label" for="stacked2"> Yes </label>
                            </div>
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-section" id="view5" style="display: none">
            <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Update server</h1>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                    <li class="breadcrumb-item"><a href="admin-admin-sysparam.php">System parameters</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update server</li>
                </ol>
            </nav>
            <div class="int-panel p-3">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="form-group">
                            <label for="ghjkfrtyn">Update server</label>
                            <div class="int-fielddescription">Enter the name of one of the servers that will be used for updating new data on releases.</div>
                            <input type="text" class="form-control" id="ghjkfrtyn" aria-describedby="ghjkfrtyn">
                        </div>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5">
                            <button class="btn btn-primary demojs_showmainview"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                            <button class="btn btn-outline-primary demojs_cancelaction"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
    $(document).ready(function() {
        
        
        $("#app_email").keyup(function() {
            var length = $(this).val().length;
            length = 100 - length;
            $('#app_email_counter').text(length);
            if ($("#app_email").val().length > 100) {
                $("#app_email_badge").last().addClass("badge-danger");
            } else {
                $("app_email_badge").last().removeClass("badge-danger");
            }
        });
        
        
        
        
         $("#send_exemail").keyup(function() {
            var length = $(this).val().length;
            length = 1000 - length;
            $('#send_exemail_counter').text(length);
            if ($("#send_exemail").val().length > 1000) {
                $("#send_exemail_badge").last().addClass("badge-danger");
            } else {
                $("send_exemail_badge").last().removeClass("badge-danger");
            }
        });
        
        
        
        
    });
</script> 
<script>
$(document).ready(function() {
    $("#showview1").click(function() {
        $("#view_main, .demojs-section").hide();
        $("#view1").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview2").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view2").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview3").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view3").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview4").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view4").show();
        $(".demojs_showmainview").prop('disabled', false);
    });
    $("#showview5").click(function() {

        $("#view_main, .demojs-section").hide();
        $("#view5").show();
        $(".demojs_showmainview").prop('disabled', false);
    });

});
</script> 
<script>
    $(document).ready(function() {
        $(function() {
            $(".demojs_showmainview").click(function() {
                $('.btn.btn-primary').addClass('rbt-loading');
				$('.btn.btn-primary .spinner-border').removeClass('d-none');
				$('.btn.btn-primary .visible').toggleClass('invisible');
				$(".demojs_showmainview").prop('disabled', true);
                setTimeout(function() {
                    $('.btn.btn-primary').removeClass('rbt-loading');
					$('.btn.btn-primary .spinner-border').addClass('d-none');
					
					$('.btn.btn-primary .invisible').removeClass('invisible');
                    $(".demojs-section").hide();
                    $("#view_main").show();
                }, 1000)
            });
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $(".demojs_showmainview").click(function() {
            $("#growl1").delay(1500).fadeIn().delay(50000000).fadeOut();
        });
        
        $(".demojs_cancelaction").click(function() {
             $(".demojs-section").hide();
            $("#view_main").show();
        });
       
    });
</script>
</body>
</html>
