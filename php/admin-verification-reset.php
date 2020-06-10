<?php
$section = '';
$page_title = 'Reset user verifications';
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
    <growls style=" display: none; position: fixed; right:10px; top:80px;" id="growl1">
        <alert dismissible="true">
            <div role="alert" class="alert alert-success alert-dismissible mb-3">
                <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                <span>Verification reset.</span> </div>
        </alert>
    </growls>
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
                            <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modal1" data-backdrop="static" data-keyboard="false">Reset</button>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Verification name</b> <span class="rbt-table-responsive-cell-content ">FERPA Compliance</span></td>
                    <td><b class="rbt-table-responsive-cell-label">transaction date</b> <span class="rbt-table-responsive-cell-content ">Oct 9, 2019 </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">Verify</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modal2" data-backdrop="static" data-keyboard="false">Reset</button>
                        </div></td>
                </tr>
            </tbody>
        </table>
    
    
    
     <div class="demojs-nosearchresults" style="display: none">
            <h2 class="mb-3 rbt-ts-20 rbt-ts-26-md-up  d-inline-block" >No results</h2>
            <button class="btn btn-link ts-14 font-italic font-weight-normal p-0" id="clearresults2">(Clear)</button>
        </div>
    
    
        <!-- Modal -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title" id="exampleModalLabel">Confirm reset user verification</div>
                    </div>
                    <div class="modal-body">
                         <p> If this user has responded to this verification in the past (and still has access), they will see it again the next time this verification is triggered. Are you sure you want to reset this verification for this user?</p>
                        <dl>
                            <dt>Name</dt>
                            <dd>Citizenship Verification</dd>
                            <dt>Username/Id/Email</dt>
                            <dd>thrclark</dd>
                        </dl>
                    </div>
                    <div class="modal-footer">
                        <div class="rbt-button-group">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="resetbutton1">Reset verification</button>
                            <button class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title" id="exampleModalLabel">Confirm reset user verification</div>
                    </div>
                    <div class="modal-body">
                        <p> If this user has responded to this verification in the past (and still has access), they will see it again the next time this verification is triggered. Are you sure you want to reset this verification for this user?</p>
                        <dl>
                            <dt>Name</dt>
                            <dd>FERPA Compliance</dd>
                            <dt>Username/Id/Email</dt>
                            <dd>thrclark</dd>
                        </dl>
                    </div>
                    <div class="modal-footer">
                        <div class="rbt-button-group">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="resetbutton2">Reset verification</button>
                            <button class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
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
    $('#search').click(function() {
        if ($('#userSearch').val() == 'thrclark') {
            $(".demojs-searchresults").show();
            $(".demojs-nosearchresults").hide();
        } else {
            $(".demojs-searchresults").hide();
            $(".demojs-nosearchresults").show();
        }
    });
    $("#clearresults, #clearresults2").click(function() {
        $(".demojs-searchresults").hide();
        $(".demojs-nosearchresults").hide();
    });
});
</script> 
<script>
    $(document).ready(function() {
        $(function() {
            $("#resetbutton1,#resetbutton2").click(function() {
                $("#growl1").delay(1000).fadeIn().delay(5000).fadeOut();
            });
        });
    });

</script>
</body>
</html>
