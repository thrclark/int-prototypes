<?php
$section = '';
$page_title = 'Google Analytics';
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
    <main class="main-content" id="main-content">
        <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="form-group">
                    <label class="control-label" for="ldap_url"> Google Analytics rollup ID</label>
                    <div>Specify a Google Analytics ID to which tenant data will be submitted.</div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <input value="UA-39645822-17" aria-labelledby="" class="form-control" id="ldap_url" type="text">
                        </div>
                    </div>
                </div>
                <div class="font-weight-bold ts-14"> Included Tenants</div>
                <div class="mb-3">Select the tenants that will submit data to the specified Google Analytics ID.</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Tenant1.IU CNV </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">Tenant2.IU STG</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">Tenant3.IU PRD</label>
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher">
                    <button class="btn btn-primary" id="submitform" disabled> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                </div>
            </div>
        </div> <growls>
     
            <alert dismissible="true">
                <div role="alert" class="alert alert-success alert-dismissible mb-3" style="display:none" id="growl1">
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                    <span>Changes have been saved.</span> </div>
            </alert>
    
    </growls>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
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

        $(".form-check-input").click(function() {
           $("#submitform").prop('disabled', false);
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
