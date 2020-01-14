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
<div class="container mt-3 mt-md-5 mb-5">
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
                    <div> URL to the LDAP server (example: ldap://ads.mydomain.edu). </div>
                    <div class="row">
                        <div class="col-12">
                            <input value="" aria-labelledby="" class="form-control" id="ldap_url" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="ldap_base">Base </label>
                    <div> LDAP base information. (example: ou=myOu,dc=ads,dc=myDomain,dc=edu). </div>
                    <div class="row">
                        <div class="col-12">
                            <input value="" aria-labelledby="" class="form-control" id="ldap_base" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="ldap_username">User name </label>
                    <div> LDAP account user name. (example: cn=myUser,ou=myOu,dc=ads,dc=myDomain,dc=edu). </div>
                    <div class="row">
                        <div class="col-12">
                            <input value="" aria-labelledby="" class="form-control" id="ldap_username" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="ldap_password">Password </label>
                    <div> LDAP user account password. </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input value="" aria-labelledby="" class="form-control" id="ldap_password" type="password">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="ldap_passwordconfirm">Confirm password </label>
                    <div> Confirm the password. Passwords must match. </div>
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
        <growls>
            <div>
                <alert dismissible="true">
                    <div role="alert" class="alert alert-success alert-dismissible mb-3" style="display:none" id="growl1">
                        <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                        <span>Changes have been saved.</span> </div>
                </alert>
            </div>
        </growls>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
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
