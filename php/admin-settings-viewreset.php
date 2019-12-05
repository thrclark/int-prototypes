<?php
$section = '';
$page_title = 'View/Reset User Verifications';
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
    <main class="main-content" id="main-content">
        <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <div class="row mb-5">
            <div class="col-12 col-lg-8">
                <div class="form-group">
                    <label class="control-label" for="userSearch"> Search </label>
                    <div> You may reset verifications for a specific user by searching user name, ID, or email address.</div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search user name, ID, or email" id="userSearch">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="search"><i class="rbt-icon-magnifying-glass"></i> Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="mb-3 rbt-ts-20 rbt-ts-26-md-up demojs-searchresults" style="display: none">Search results for 'thrclark'</h2>
        <table class="table rbt-table-responsive rbt-table-actions demojs-searchresults" style="display: none">
            <thead>
                <tr>
                    <th>Verification name</th>
                    <th>Transaction date</th>
                    <th>Type</th>
                    <th><span class="sr-only">Actions</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Verification name</b> <span class="rbt-table-responsive-cell-content ">Citizenship Verification</span></td>
                    <td><b class="rbt-table-responsive-cell-label">transaction date</b> <span class="rbt-table-responsive-cell-content ">Oct 9, 2019 </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">Verify</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-outline-primary">Reset</button>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Verification name</b> <span class="rbt-table-responsive-cell-content ">FERPA Compliance</span></td>
                    <td><b class="rbt-table-responsive-cell-label">transaction date</b> <span class="rbt-table-responsive-cell-content ">Oct 9, 2019 </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">Verify</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-outline-primary">Reset</button>
                        </div></td>
                </tr>
            </tbody>
        </table>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
	
	
	
<script>
    $(document).ready(function() {
        $("#search").click(function() {
            $(".demojs-searchresults").show();
        });
    }); 
</script> 
</body>
</html>
