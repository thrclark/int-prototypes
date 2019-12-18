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
<body class="int-admin">
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-3 mt-md-5 mb-5">
    <main class="main-content" id="main-content">
        <div class="row align-items-center mb-3 mb-md-6 ">
            <div class="col">
                <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
            </div>
            <div class="col-auto"> <!--<a href="admin-settings-apiaccounts-sources.php" class="btn btn-sm btn-outline-primary"> External sources</a>-->
                <div class="dropdown d-inline">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> API documentation </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-hidden="true" role="menu" aria-labelledby="dropdownMenuButton1"> <a class="dropdown-item" href="#">Version 1 </a> <a class="dropdown-item" href="#">Version 2 </a> <a class="dropdown-item" href="#">Version 3 </a> </div>
                </div>
                <a href="admin-settings-apiaccounts-new.php" class="btn btn-sm btn-outline-primary"><i class="rbt-icon-plus"></i> API account</a> </div>
        </div>
        <table class="table rbt-table-responsive rbt-table-actions">
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Expires</th>
                    <th>Email </th>
                    <th><span class="sr-only">Actions</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content "><i class="rbt-icon-circle mr-2 text-success" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Active"></i> </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">Citizenship Status API</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">External  </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">---</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Email</b> <span class="rbt-table-responsive-cell-content ">thrclark@iu.edu</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span> </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu"> <a class="dropdown-item" href="admin-settings-apiaccounts-new.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content "><i class="rbt-icon-lightning mr-2" style="color: #CCCCCC" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Inactive"></i> </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Name</b><span class="tablesaw-cell-content ng-binding">HR Personal Information</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">External  </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">---</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Email</b> <span class="rbt-table-responsive-cell-content ">naiursd@iu.edu</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton
2" aria-hidden="true" role="menu"> <a class="dropdown-item" href="admin-settings-apiaccounts-new.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content "><i class="rbt-icon-lightning mr-2 text-success" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Active"></i> </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">IU Notify Live Data</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">External  </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">---</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Email</b> <span class="rbt-table-responsive-cell-content ">tharoh@iu.edu</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton
2" aria-hidden="true" role="menu"> <a class="dropdown-item" href="admin-settings-apiaccounts-new.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content "><i class="rbt-icon-lightning mr-2 text-success" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Active"></i> <i class="rbt-icon-lock-closed" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Locked"></i></span></td>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">IU Notify Maintenance API</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">Maintenance  </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">Mar 20, 2020</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Email</b> <span class="rbt-table-responsive-cell-content ">yjalek@iu.edu</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton
2" aria-hidden="true" role="menu"> <a class="dropdown-item" href="admin-settings-apiaccounts-new.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Status</b> <span class="rbt-table-responsive-cell-content "><i class="rbt-icon-lightning mr-2 text-success" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Active"></i> <i class="rbt-icon-lock-open" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Unlocked"></i></span></td>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content ">TAM PRD Notifications</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Type</b> <span class="rbt-table-responsive-cell-content ">Maintenance </span></td>
                    <td><b class="rbt-table-responsive-cell-label">Expires</b> <span class="rbt-table-responsive-cell-content ">Mar 20, 2020</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Email</b> <span class="rbt-table-responsive-cell-content ">marcte@iu.edu</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton
2" aria-hidden="true" role="menu"> <a class="dropdown-item" href="admin-settings-apiaccounts-new.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </div></td>
                </tr>
            </tbody>
        </table>
        
        
        
        
        
        
        
        
        
        
        
        
        
<ul class="list-unstyled form-row demo-icons">
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-star"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-star-solid"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-home"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-eye"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-ban"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-alarm"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-arrow-down"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-arrow-left"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-arrow-right"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-arrow-up"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-audio-off"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-audio-on"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-bell"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-building"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-calendar"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-chat"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-check"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-check-all"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-check-circle-breakout"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-check-circle"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-chevron-down"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-chevron-left"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-chevron-right"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-chevron-up"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-chevrons-left"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-chevrons-right"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-clipboard"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-clock"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-close"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-close-circle"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-close-circle-solid"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-code"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-copy"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-download"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-ellipsis"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-ellipsis-vertical"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-envelope"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-exclamation"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-file"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-flag"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-gear"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-grid"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-info-circle"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-lightning"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-lightning-box"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-link-external"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-list"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-lock-closed"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-lock-open"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-magnifying-glass"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-map-pin"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-menu"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-minus"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-minus-circle"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-note"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-pencil"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-phone"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-pin"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-plus"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-plus-circle"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-printer"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-question-mark"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-redo"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-save"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-settings"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-sync"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-transfer"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-transfer-alternate"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-trash"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-filter"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-undo"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-upload"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-user"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-user-add"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-user-add-solid"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-user-remove"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-user-remove-solid"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-user-solid"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-users"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-users-group-solid"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-users-solid"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-gears"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-rss"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-play"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-pause"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-circle-empty"></i></div>
    </li>
    <li class="col-auto">
        <div class="border"><i class="rbt-icon-circle"></i></div>
    </li>
</ul>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>
