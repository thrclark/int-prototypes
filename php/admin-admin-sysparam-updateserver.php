<?php
$section = '';
$page_title = 'Update server';
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
        <div class="row">
            <div class="col-12 col-lg-8">
                <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                        <li class="breadcrumb-item"><a href="admin-admin-sysparam.php">System parameters</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
                    </ol>
                </nav>
                <div class="form-group">
                    <label for="ghjkfrtyn" class="ts-26">Update server</label>
                    <div class="int-fielddescription">Enter the name of one of the servers that will be used for updating new data on releases.</div>
                    <input type="text" class="form-control" id="ghjkfrtyn" aria-describedby="ghjkfrtyn">
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher">
                    <button class="btn btn-primary" id="submitform"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                    <a class="btn btn-outline-primary"  href="admin-admin-sysparam.php"> Cancel </a> </div>
            </div>
        </div>
        <growls>
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
