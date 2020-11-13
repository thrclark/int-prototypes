<?php
$section = '';
$page_title = 'All verifications';
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
                <button type="button" class="close" aria-label="Close" data-dismiss="alert"><span class="rbt-icon-close"></span></button>
                <span>Verification has been reset.</span></div>
        </alert>
    </growls>
    <main class="main-content" id="main-content">
        <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"><?php echo $page_title; ?></h1>
        <div class="int-panel p-3">
            <div class="form-row align-items-center my-3">
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="showinactive" value="option1" checked>
                        <label class="form-check-label" for="showinactive">Live &amp; scheduled verifications only</label>
                    </div>
                </div>
                <div class="col-auto"><a href="admin-verification-new1.php" class="btn btn-sm btn-outline-primary"><i class="rbt-icon-plus"></i> Verification</a></div>
            </div>
            <table class="table rbt-table-responsive rbt-table-actions">
                <caption class="sr-only">
                List of all verifications
                </caption>
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="demojs-active">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Acceptable Use Agreement</span></td>
                        <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'active'.</li><li>There is at least one recipient group which has an effective date in the past.</li><li>The end date (4/21/2024) has not yet transpired.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Live </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-active">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Citizenship Verification</span></td>
                        <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'active'.</li><li>There is at least one recipient group which has an effective date in the past.</li><li>The end date (4/21/2024) has not yet transpired.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Live </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_fail" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-inactive" style="display: none">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">External Email Flag</span></td>
                        <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'active'.</li><li>The end date (4/21/2020) has transpired.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Expired </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-active">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">FERPA Compliance</span></td>
                        <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'active'.</li><li>There is at least one recipient group which has an effective date in the past.</li><li>The end date (4/21/2024) has not yet transpired.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Live </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-inactive" style="display: none">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">IU Login</span></td>
                        <td class="demojs-active"><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'inactive'.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Inactive </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-active">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">IU-Notify</span></td>
                        <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'active'.</li><li>There is at least one recipient group which has an effective date in the past.</li><li>The end date (4/21/2024) has not yet transpired.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Live </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-active">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Personal Information</span></td>
                        <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'active'.</li><li>A recipient group is scheduled to start receiving this verification on 04/21/2024.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Scheduled </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-active">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 6.12.19</span></td>
                        <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'active'.</li><li>There is at least one recipient group which has an effective date in the past.</li><li>The end date (4/21/2024) has not yet transpired.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Live </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-active">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 6.19.19</span></td>
                        <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'active'.</li><li>There is at least one recipient group which has an effective date in the past.</li><li>The end date (4/21/2024) has not yet transpired.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Live </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-active">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 6.27.19</span></td>
                        <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'active'.</li><li>A recipient group is scheduled to start receiving this verification on 04/21/2024.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Scheduled </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-active">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 6.5.19</span></td>
                        <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'active'.</li><li>There is at least one recipient group which has an effective date in the past.</li><li>The end date (4/21/2024) has not yet transpired.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Live </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-active">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Sign Acceptable Use Agreement By 7.3.19</span></td>
                        <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'active'.</li><li>There is at least one recipient group which has an effective date in the past.</li><li>The end date (4/21/2024) has not yet transpired.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Live </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-active">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Travel or out-of-pocket Reimbursement Account</span></td>
                        <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'active'.</li><li>There is at least one recipient group which has an effective date in the past.</li><li>The end date (4/21/2024) has not yet transpired.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Live </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                    <tr class="demojs-inactive" style="display: none">
                        <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Two-Step Login With Duo</span></td>
                        <td class="demojs-active"><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">
                            <button class="btn btn-sm btn-link text-decoration-none p-1 mb-0 mr-2" role="button" data-toggle="popover"  data-trigger="focus" data-placement="bottom" data-content=" <ul class='mb-2 list-unstyled'><li>The verification is set to 'inactive'.</li></ul>"><i class="rbt-icon-info-circle"><span class="sr-only">Info</span></i></button>
                            Inactive </span></td>
                        <td><b class="rbt-table-responsive-cell-label"><span class="visible-xs"> Actions </span></b><span class="rbt-table-responsive-cell-content"><!-- <a href="admin-verification-new1.php" class="btn btn-sm b tn-outline-primary">Edit</a> -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"><a class="dropdown-item" href="admin-verification-new1.php">Edit</a><a class="dropdown-item" href="#"  data-toggle="modal" data-target="#reset_speedbump_success" data-backdrop="static" data-keyboard="false">Reset verification...</a></div>
                            </div>
                            </span></td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Pagination" class="my-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item "><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link disabled" href="#" tabindex="-1" aria-hidden="true"><i class="rbt-icon-ellipsis"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">20</a></li>
                </ul>
            </nav>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="reset_speedbump_success" tabindex="-1" role="dialog" aria-labelledby="reset_speedbump_success" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title" id="exampleModalLabel">Reset verification</div>
                    </div>
                    <div class="modal-body">
                        <p>Resetting this verification will cause it to be reset for all users, meaning that any user who has responded to this in the past (and still has access) will see it again the next time it is triggered.</p>
                        <p>If you only want to reset this verification for a specific user, this may be done on the 'Reset user verifications' page.</p>
                    </div>
                    <div class="modal-footer">
                        <div class="rbt-button-group">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="resetverification">Reset for all users</button>
                            <button class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="reset_speedbump_fail" tabindex="-1" role="dialog" aria-labelledby="reset_speedbump_fail" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="failpage1">
                    <div class="modal-header">
                        <div class="modal-title" id="exampleModalLabel">Reset verification</div>
                    </div>
                    <div class="modal-body">
                        <p>Resetting this verification will cause it to be reset for all users, meaning that any user who has responded to this in the past (and still has access) will see it again the next time it is triggered.</p>
                        <p>If you only want to reset this verification for a specific user, this may be done on the 'Reset user verifications' page.</p>
                    </div>
                    <div class="modal-footer">
                        <div class="rbt-button-group">
                            <button type="button" class="btn btn-primary" id="resetverification_fail">Reset for all users</button>
                            <button class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="modal-content" id="failpage2" style="display: none">
                    <div class="modal-header">
                        <div class="modal-title" id="exampleModalLabel">Unexpected error</div>
                    </div>
                    <div class="modal-body">
                        <p>An unexpected error has occurred. If this problem persists, please contact your administrator.</p>
                    </div>
                    <div class="modal-footer">
                        <div class="rbt-button-group">
                            <button class="btn btn-primary" data-dismiss="modal" id="close_error">Close</button>
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
        $("#resetverification_fail").click(function() {
            $("#failpage1").hide();
            $("#failpage2").show();
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#close_error").click(function() {
            $("#failpage1").show();
            $("#failpage2").hide();
        });
    });
</script> 
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
<script>
    $(document).ready(function() {
        $(function() {
            $('[data-toggle="popover"]').popover({
                container: 'body',
                html: true
            })
        })
    });
</script> 
<script>
    $(document).ready(function() {
        $("#resetverification").click(function() {
            $("#growl1").delay(500).fadeIn().delay(5000).fadeOut();
        });
    });
</script>
</body>
</html>
