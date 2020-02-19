<?php
$section = '';
$page_title = 'API external sources';
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
        <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                <li class="breadcrumb-item"><a href="admin-settings-apiaccounts.php">API acounts</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
            </ol>
        </nav>
        <table class="table rbt-table-responsive rbt-table-actions">
            <caption class="sr-only">
            Table example
            </caption>
            <thead>
                <tr>
                    <th scope="col">Source name</th>
                    <th scope="col">API account name</th>
                    <th scope="col"><span class="sr-only">Actions</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><b class="rbt-table-responsive-cell-label">Source name</b> <span class="rbt-table-responsive-cell-content "> Demo API</span></th>
                    <td><b class="rbt-table-responsive-cell-label">API account name</b> <span class="rbt-table-responsive-cell-content "><a href="#0">Demo Live Data API</a></span></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th scope="row"><b class="rbt-table-responsive-cell-label">Source name</b> <span class="rbt-table-responsive-cell-content ">Personal Detail</span></th>
                    <td><b class="rbt-table-responsive-cell-label">API account name</b> <span class="rbt-table-responsive-cell-content "><a href="#">HR</a></span></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th scope="row"><b class="rbt-table-responsive-cell-label">Source name</b> <span class="rbt-table-responsive-cell-content ">IU Notify Live Data</span></th>
                    <td><b class="rbt-table-responsive-cell-label">API account name</b> <span class="rbt-table-responsive-cell-content "><a href="#">IU Notify Live Data</a></span></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th scope="row"><b class="rbt-table-responsive-cell-label">Source name</b> <span class="rbt-table-responsive-cell-content ">Bursar</span></th>
                    <td><b class="rbt-table-responsive-cell-label">API account name</b><span class="rbt-table-responsive-cell-content "> Not configured</span></td>
                    <td><b class="rbt-table-responsive-cell-label"> <span class="visible-xs"> Actions </span></b> <span class="rbt-table-responsive-cell-content"> <a href="admin-settings-apiaccounts-new.php" class="btn btn-sm btn-outline-primary" >Configure</a></span></td>
                </tr>
                <tr>
                    <th scope="row"><b class="rbt-table-responsive-cell-label">Source name</b> <span class="rbt-table-responsive-cell-content ">SIS Callback</span></th>
                    <td><b class="rbt-table-responsive-cell-label">API account name</b><span class="rbt-table-responsive-cell-content "> <a href="#">SIS</a></span></td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
