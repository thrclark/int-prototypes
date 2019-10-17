<?php
$section = '';
$page_title = 'New API account';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-admin.php') ?>
</head>
<body>
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-3 mt-md-5 mb-5">
    <main class="main-content">
        <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                <li class="breadcrumb-item"><a href="admin-settings-apiaccounts.php">API accounts</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="form-group">
                    <label class="control-label" id="nameLabel"> Name </label>
                    <div> The API Account title is how the API Account will be referred to throughout the system. </div>
                    <input value="" aria-labelledby="" class="form-control" id="clientID" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label" id="nameLabel"> Status </label>
                    <div> The availability of this API Account. </div>
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3">
                            <select aria-labelledby="statusLabel statusDirections" class="form-control" aria-invalid="false">
                                <option label="Active" value="string:ACTIVE" selected="selected">Active</option>
                                <option label="Inactive" value="string:INACTIVE">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" id="nameLabel"> API Account Type </label>
                    <div> Maintenance accounts are used for maintaining resources within the application. External accounts are used to connect to external applications for data.</div>
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3">
                            <select aria-labelledby="statusLabel statusDirections" class="form-control" aria-invalid="false">
                                <option label="Active" value="string:ACTIVE" selected="selected">External API</option>
                                <option label="Inactive" value="string:INACTIVE">Maintenance API</option>
                            </select>
                        </div>
                    </div>
                </div>
				
				
				
				
				
				
				
					
				<br><br><br><br><br><br><br><br><br><br><br><br><br>
				
				
				
				
				
				
				 <select multiple="multiple" id="my-select" name="my-select[]">
      <option value='elem_1'>elem 1</option>
      <option value='elem_2'>elem 2</option>
      <option value='elem_3'>elem 3</option>
      <option value='elem_4'>elem 4</option>

      <option value='elem_100'>elem 100</option>
    </select>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="form-group">
                    <label class="control-label" id="nameLabel"> Email </label>
                    <div> The email is used to send a daily reminder starting 30 days from the API Account expiring. </div>
                    <input value="" aria-labelledby="" class="form-control" id="clientID" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label" id="nameLabel">Authentication Type</label>
                    <div>The authentication type to use when logging into the application.</div>
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3">
                            <select aria-labelledby="statusLabel statusDirections" class="form-control" aria-invalid="false">
                                <option label="" value="" selected="selected">Select</option>
                                <option label="" value="">Basic authentication</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher"> <a href="admin-notificationtype.php" class="btn btn-primary"> Save </a> <a class="btn btn-outline-primary" routerlink="/markets" href="admin-notificationtype.php"> Cancel </a> </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
	
	
	<script>
    $(document).ready(function() {

		$('#my-select').multiSelect()
    });
</script> 
	
	
</body>
</html>
