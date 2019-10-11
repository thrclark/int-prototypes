<?php
$section = '';
$page_title = 'API Accounts';
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
        <div class="row align-items-center mb-3 mb-md-6 ">
            <div class="col">
                <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
            </div>
            <div class="col-auto">
                <div class="dropdown d-inline">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> API documentation </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-hidden="true" role="menu" aria-labelledby="dropdownMenuButton1"> <a class="dropdown-item" href="#">Version 1 </a> <a class="dropdown-item" href="#">Version 2 </a> <a class="dropdown-item" href="#">Version 3 </a> </div>
                </div>
                <a href="admin-settings-apiaccounts-new.php" class="btn btn-sm btn-outline-primary"><i class="rbt-icon-plus"></i> API</a> </div>
        </div>
        <table class="table rbt-table-responsive rbt-table-actions">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Expires</th>
                    <th>Locked </th>
                    <th>Status</th>
                    <th><span class="sr-only">Actions</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Citizenship Status API</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">External API </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">-</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Locked</b> <span class="rbt-table-responsive-cell-content ">-</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content ">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span> </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b><span class="tablesaw-cell-content ng-binding">HR Personal Information</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">External API </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">-</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Locked</b> <span class="rbt-table-responsive-cell-content ">-</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content ">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3" aria-hidden="true" role="menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">IU Notify Live Data</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">External API </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">-</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Locked</b> <span class="rbt-table-responsive-cell-content ">-</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content ">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4" aria-hidden="true" role="menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">IU Notify Maintenance API</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">Maintenance API </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">Mar 20, 2020</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Locked</b> <span class="rbt-table-responsive-cell-content ">No</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content ">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5" aria-hidden="true" role="menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a> <a class="dropdown-item" href="#">Renew account</a></div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">TAM PRD Notifications</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">Maintenance API</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">Mar 20, 2020</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Locked</b> <span class="rbt-table-responsive-cell-content ">No</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content ">Active</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6" aria-hidden="true" role="menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a> <a class="dropdown-item" href="#">Renew account</a></div>
                            </div>
                        </div></td>
                </tr>
            </tbody>
        </table>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
