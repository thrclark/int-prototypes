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
<body>
<div style="background: #444" class="py-5 mb-5">
    <div class="container text-white text-center rbt-ts-26">Verification preview</div>
</div>
<?php include('includes/user-header.php') ?>
<main class="main-content container int-theme-margin  p-0">
    
        <div class="card int-verifyinfo">
            <div class="card-body">
                <h2>Verification name</h2>
                <p> On occasion, we require verification of your personal information. The item(s) listed below need your review for accuracy. 
                    This is a paragraph that may be customized as needed. This paragraph may include <a href="#">links</a>. Esse errem aeterno id, his ad blandit imperdiet. Id unum propriae suavitate sea. Adipisci delicata ocurreret ad qui. Altera impedit expetendis vis at.</p>
                <h3 class="mt-5">Verify section name</h3>
                <p>Displayed below is the contact information on file for you. Please review and update or correct it is to receive critical alerts from IU. For more information, see about emergency notifications at Indiana University.</p>
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
                </ul>
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
    
</main>
<?php include('includes/all-footer.php') ?>

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
</body>
</html>
