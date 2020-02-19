<?php
$section = '';
$page_title = 'Reset user verifications';
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
        <div class="form-group">
            <label class="control-label" for="userSearch"> Search </label>
            <div class="mb-2"> You may reset verifications for a specific user by searching user name, ID, or email address.</div>
            <div class="row mb-5">
                <div class="col-12 col-lg-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search user name, ID, or email" id="userSearch">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="search"><i class="rbt-icon-magnifying-glass"></i> Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demojs-searchresults" style="display: none">
            <h2 class="mb-3 rbt-ts-20 rbt-ts-26-md-up  d-inline-block" >Search results for 'thrclark'</h2>
            <button class="btn btn-link ts-14 font-italic font-weight-normal p-0" id="clearresults">(Clear results)</button>
        </div>
        <table class="table rbt-table-responsive rbt-table-actions demojs-searchresults" style="display: none">
            <thead>
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
                            <button class="btn btn-sm btn-outline-primary demojs-showGrowl1">Reset</button>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Verification name</b> <span class="rbt-table-responsive-cell-content ">FERPA Compliance</span></td>
                    <td><b class="rbt-table-responsive-cell-label">transaction date</b> <span class="rbt-table-responsive-cell-content ">Oct 9, 2019 </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">Verify</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-outline-primary demojs-showGrowl2">Reset</button>
                        </div></td>
                </tr>
            </tbody>
        </table>
        <growls>
            <div>
                <alert dismissible="true">
                    <div role="alert" class="alert alert-success alert-dismissible mb-3" style="display:none" id="growl1">
                        <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                        <span>Citizenship Verification has now been reset for user '<span class="font-weight-bold">thrclark</span>'.</span> </div>
                    <div role="alert" class="alert alert-success alert-dismissible mb-3" style="display:none" id="growl2">
                        <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                        <span>FERPA Compliance has now been reset for user '<span class="font-weight-bold">thrclark</span>'.</span> </div>
                </alert>
            </div>
        </growls>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
    $(document).ready(function() {
        $("#search").click(function() {
            $(".demojs-searchresults").show();
        });
        $("#clearresults").click(function() {
            $(".demojs-searchresults").hide();
        });
    }); 
</script> 
<script >
    $(document).ready(function() {
        $(".demojs-showGrowl1").click(function() {
            $("#growl1").fadeIn().delay(5000).fadeOut();
        });
        $(".demojs-showGrowl2").click(function() {
            $("#growl2").fadeIn().delay(5000).fadeOut();
        });
    });
</script>
</body>
</html>
