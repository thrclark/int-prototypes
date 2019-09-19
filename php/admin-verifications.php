<?php 
$section = '';
$page_title = 'Verifications';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-admin.php') ?>
<style>


@media (max-width: 767.98px) {
.rbt-table-actions td:last-child {
	width: auto !important;
	text-align: left !important;
	white-space: normal !important;
}
}
</style>
</head>
<body>
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-5 mb-5">
    <main class="main-content" id="main-content">
        <div class="row align-items-center mb-5">
            <div class="col">
                <h1> <?php echo $page_title; ?></h1>
            </div>
            <div class="col-auto"><a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary"> <i class="rbt-icon-plus"></i> Verification</a></div>
        </div>
        <table class="table rbt-table-responsive rbt-table-actions">
            <caption class="sr-only">
            List of all verifications
            </caption>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Expiration</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Acceptable Use Agreement</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Citizenship Verification</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">External Email Flag</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">12/31/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">FERPA Compliance</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">IU Login</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Inactive</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">7/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">IU-Notify</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Personal Information</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 6.12.19</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">7/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 6.19.19</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">7/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 6.27.19</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">7/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 6.5.19</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">7/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 7.3.19</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">7/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Travel or out-of-pocket Reimbursement Account</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Two-Step Login With Duo</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content">Inactive</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expiration</b> <span class="rbt-table-responsive-cell-content">9/15/2019</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="#" class="btn btn-sm btn-outline-primary">Edit</a></span></td>
                </tr>
            </tbody>
        </table>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
