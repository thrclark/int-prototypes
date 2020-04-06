<?php
$section = '';
$page_title = 'System parameters';
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
        <table class="table rbt-table-responsive rbt-table-actions">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Value</th>
                    <th><span class="sr-only">Actions</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Application email</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content "> The address from which global emails are sent.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> one@iu.edu </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="xxxxxxxxxx.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Google Analytics rollup ID</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Data for selected tenants will be sent to this Google Analytics ID.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> UA-39645822-16 </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="xxxxxxxxxx.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Send exception email</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Space delimited list of email addresses to which exception reports are sent.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> jhopf@iu.edu </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="xxxxxxxxxx.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Send exception email Toggle</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Turn on sending of email for exceptions. Default is no.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> Yes </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="xxxxxxxxxx.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Update Server</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Enter the name of one of the servers that will be used for updating new data on releases.</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Value</b> <span class="rbt-table-responsive-cell-content"> esappj82.uits.iupui.edu </span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span> </b> <span class="rbt-table-responsive-cell-content"> <a href="xxxxxxxxxx.php" class="btn btn-sm btn-outline-primary">Edit</a> </span></td>
                </tr>
            </tbody>
        </table>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
