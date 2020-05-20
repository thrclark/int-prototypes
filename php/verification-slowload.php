<?php
$section = '';
$page_title = 'VERIFY';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-main.php') ?>
<style></style>
</head>
<body>
<?php include('includes/user-header.php') ?>
<main class="container p-0">
    <section>
        <div class="card">
            <div class="card-body position-relative" style="min-height: 500px">
                <div class="int-section-overlay " style="top: 0px; left: 0px">
                    <div class="spinner-border rbt-spinner--xxl demojs_refreshspinner" style="position: absolute;top: 45%;left: 45%;" role="status" aria-label="Content loading" > </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('includes/all-footer.php') ?>
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
