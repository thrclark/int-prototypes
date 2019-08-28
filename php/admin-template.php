<?php 
$section = '';
$page_title = 'Admin list view';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-admin.php') ?>
</head>
<body>
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-5 mb-5">
    <main class="main-content">
        <div class="form-row">
            <div class="col-12">
                <main class="main-content" id="main-content">
                    <h1> <?php echo $page_title; ?></h1>
                    <div class="form-row align-items-center mb-3">
                        <div class="col"> </div>
                        <div class="col-auto"> <a href="xxxxxxxxxxxxxxxxx.php" class="btn btn-sm btn-outline-primary"> <i aria-hidden="true" class="fa fa-plus"></i> Item</a> </div>
                    </div>
                    <table class="table rbt-table-responsive">
                        <caption class="sr-only">
                        Table example
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col">Service</th>
                                <th scope="col">Description</th>
                                <th scope="col">URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><b class="rbt-table-responsive-cell-label">Service</b> <span class="rbt-table-responsive-cell-content "> One.IU</span></th>
                                <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">One.IU was created to bring a modern app store experience to finding what you need at IU. With One.IU, you search for what you want to do, and click to launch it.</span></td>
                                <td><b class="rbt-table-responsive-cell-label">URL</b> <span class="rbt-table-responsive-cell-content "> <a href="xxxxxxxxxxxxxxxxx.php">one.iu.edu</a></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><b class="rbt-table-responsive-cell-label">Service</b> <span class="rbt-table-responsive-cell-content ">Box</span></th>
                                <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Box is a no-cost cloud storage and collaboration environment available to students, faculty, and staff.</span></td>
                                <td><b class="rbt-table-responsive-cell-label">URL</b> <span class="rbt-table-responsive-cell-content "> <a href="xxxxxxxxxxxxxxxxx.php">box.iu.edu</a></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><b class="rbt-table-responsive-cell-label">Service</b> <span class="rbt-table-responsive-cell-content ">Zoom</span></th>
                                <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content ">Zoom is a web collaboration tool available to all Indiana University students, faculty, and staff.</span></td>
                                <td><b class="rbt-table-responsive-cell-label">URL</b><span class="rbt-table-responsive-cell-content "> <a href="xxxxxxxxxxxxxxxxx.php">zoom.iu.edu</a></span></td>
                            </tr>
                            <tr>
                                <th scope="row"><b class="rbt-table-responsive-cell-label">Service</b> <span class="rbt-table-responsive-cell-content ">Canvas</span></th>
                                <td><b class="rbt-table-responsive-cell-label">Description</b><span class="rbt-table-responsive-cell-content "> Canvas is a learning management system developed by Instructure, Inc.</span></td>
                                <td><b class="rbt-table-responsive-cell-label">URL</b><span class="rbt-table-responsive-cell-content "> <a href="xxxxxxxxxxxxxxxxx.php">canvas.iu.edu</a></span></td>
                            </tr>
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
    </main>
</div>

<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
