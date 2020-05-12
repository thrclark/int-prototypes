<?php
$section = '';
$page_title = 'LDAP Configuration';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-admin.php') ?>
</head>
<body class="int-admin">
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-3 mt-md-5 mb-7">
    <growls style=" display: none; position: fixed; right:10px; top:80px;" id="growl1">
        <alert dismissible="true">
            <div role="alert" class="alert alert-success alert-dismissible mb-3">
                <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                <span>Save successful.</span> </div>
        </alert>
    </growls>
    <main class="main-content" id="main-content">
        <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                    <div class="alert-heading">Notice</div>
                    <p class="small mb-3">Changes to this LDAP configuration will affect the following tenants:</p>
                    <dl class="row ts-14">
                        <dt class="col-sm-4">Verify App</dt>
                        <dd class="col-sm-8">IU Verify STG<br>
                            IU Verify Test</dd>
                        <dt class="col-sm-4">Classifieds App</dt>
                        <dd class="col-sm-8">Classifieds.IU stage</dd>
                        <dt class="col-sm-4">Central Notification Service</dt>
                        <dd class="col-sm-8">Notification Center</dd>
                        <dt class="col-sm-4">Mobile API</dt>
                        <dd class="col-sm-8">IU Mobile API</dd>
                        <dt class="col-sm-4">Mobile Native</dt>
                        <dd class="col-sm-8">IU Mobile</dd>
                    </dl>
                </div>
                <div class="form-group">
                    <label class="control-label" for="ldap_url"> LDAP URL </label>
                    <div class="int-fielddescription"> URL to the LDAP server (example: ldap://ads.mydomain.edu). </div>
                    <countdown>
                        <div class="rbt-charcount">
                            <input aria-labelledby="ldap_url" class="form-control " formcontrolname="title" id="ldap_url">
                            <span class="badge badge-success" id="ldap_url_badge"> <span id="ldap_url_counter">2000</span> </span> </div>
                    </countdown>
                </div>
                <div class="form-group">
                    <label class="control-label" for="ldap_base">Base </label>
                    <div class="int-fielddescription"> LDAP base information. (example: ou=myOu,dc=ads,dc=myDomain,dc=edu). </div>
                    <countdown>
                        <div class="rbt-charcount">
                            <input aria-labelledby="ldap_base" class="form-control " formcontrolname="title" id="ldap_base">
                            <span class="badge badge-success" id="ldap_base_badge"> <span id="ldap_base_counter">200</span> </span> </div>
                    </countdown>
                </div>
                <div class="form-group">
                    <label class="control-label" for="ldap_username">User name </label>
                    <div class="int-fielddescription"> LDAP account user name. (example: cn=myUser,ou=myOu,dc=ads,dc=myDomain,dc=edu). </div>
                    <countdown>
                        <div class="rbt-charcount">
                            <input aria-labelledby="ldap_username" class="form-control " formcontrolname="title" id="ldap_username">
                            <span class="badge badge-success" id="ldap_username_badge"> <span id="ldap_username_counter">200</span> </span> </div>
                    </countdown>
                </div>
                <div class="form-group">
                    <label class="control-label" for="ldap_password">Password </label>
                    <div class="int-fielddescription"> LDAP user account password. </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input value="" aria-labelledby="" class="form-control" id="ldap_password" type="password">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="ldap_passwordconfirm">Confirm password </label>
                    <div class="int-fielddescription"> Confirm the password. Passwords must match. </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input value="" aria-labelledby="" class="form-control" id="ldap_passwordconfirm" type="password">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher">
                    <button class="btn btn-primary" id="submitform"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
    $(document).ready(function() {
        $("#ldap_url").keyup(function() {
            var length = $(this).val().length;
            length = 2000 - length;
            $('#ldap_url_counter').text(length);
            if ($("#ldap_url").val().length > 2000) {
                $("#ldap_url_badge").last().addClass("badge-danger");
            } else {
                $("#ldap_url_badge").last().removeClass("badge-danger");
            }
        });
        $("#ldap_base").keyup(function() {
            var length = $(this).val().length;
            length = 200 - length;
            $('#ldap_base_counter').text(length);
            if ($("#ldap_base").val().length > 200) {
                $("#ldap_base_badge").last().addClass("badge-danger");
            } else {
                $("#ldap_base_badge").last().removeClass("badge-danger");
            }
        });
        $("#ldap_username").keyup(function() {
            var length = $(this).val().length;
            length = 200 - length;
            $('#ldap_username_counter').text(length);
            if ($("#ldap_username").val().length > 200) {
                $("#ldap_username_badge").last().addClass("badge-danger");
            } else {
                $("#ldap_username_badge").last().removeClass("badge-danger");
            }
        });
    });
</script> 
<script>
	$(document).ready(function() {
     $('#submitform').prop('disabled', true);
     $('.form-control').keyup(function() {
        if($(this).val() != '') {
           $('#submitform').prop('disabled', false);
        }
     });
 });
</script> 
<script>
    $(document).ready(function() {
        $(function() {
            $("#submitform").click(function() {
                $('.btn.btn-primary').addClass('rbt-loading');
				$('.btn.btn-primary .spinner-border').removeClass('d-none');
				$('.btn.btn-primary .visible').toggleClass('invisible');
				$("#submitform").prop('disabled', true);
                setTimeout(function() {
                    $('.btn.btn-primary').removeClass('rbt-loading');
					$('.btn.btn-primary .spinner-border').addClass('d-none');
					$("#submitform").prop('disabled', true);
					$('.btn.btn-primary .invisible').removeClass('invisible');
                }, 2000)
            });
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#submitform").click(function() {
            $("#growl1").delay(2000).fadeIn().delay(5000).fadeOut();
        });
       
    });
</script>
</body>
</html>
