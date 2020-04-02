<?php
$section = '';
$page_title = 'All verifications';
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
        <div class="row align-items-center mb-3 mb-md-6 ">
            <div class="col"> </div>
            <div class="col-auto"></div>
        </div>
        <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <div class="form-row align-items-center my-3">
            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="showinactive" value="option1" checked>
                    <label class="form-check-label" for="showinactive">Active verifications only</label>
                </div>
            </div>
            <div class="col-auto"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary"> <i class="rbt-icon-plus"></i> Verification</a> </div>
        </div>
        <table class="table rbt-table-responsive rbt-table-actions">
            <caption class="sr-only">
            List of all verifications
            </caption>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">End date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="demojs-active">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Acceptable Use Agreement</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-active">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Citizenship Verification</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-active">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">External Email Flag</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">12/31/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-active">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">FERPA Compliance</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-inactive" style="display: none">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">IU Login</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Inactive</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">7/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-active">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">IU-Notify</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-active">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Personal Information</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-active">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 6.12.19</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">7/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-active">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 6.19.19</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">7/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-active">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 6.27.19</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">7/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-active">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 6.5.19</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">7/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-active">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 7.3.19</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">7/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-active">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Travel or out-of-pocket Reimbursement Account</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr class="demojs-inactive" style="display: none">
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Two-Step Login With Duo</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Inactive</span></td>
                    <td><b class="rbt-table-responsive-cell-label">End date</b> <span class="rbt-table-responsive-cell-content">9/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
            </tbody>
        </table>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
   $(document).ready(function() {
    $('#showinactive').change(function() {
        if (this.checked) {
            $(".demojs-inactive").hide();
        } else {
            $(".demojs-inactive").show();
        }
    });
});
</script>
</body>
</html>
