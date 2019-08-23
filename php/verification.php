<?php 
$section = '';
$page_title = 'VERIFY';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles.php') ?>
</head>
<body class="int-user">
<header class="align-items-center"> <img alt="" class="int-brand-image">
    <div class="int-lockup-group flex-grow-1">
        <div class="int-lockup-org">INDIANA UNIVERSITY</div>
        <h1 class="int-lockup-pagetitle"><?php echo $page_title; ?></h1>
    </div>
    <div class="d-none d-lg-block">
        <div class="rbt-header-avatar-id"> <span class="rbt-header-avatar" aria-hidden="true">TC</span> thrclark </div>
    </div>
</header>
<main>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="alert alert-primary mb-5" role="alert">
                    <h2 class="alert-heading">Privacy note</h2>
                    <p class="small mb-3">This page contains personally sensitive data, which is masked to protect your privacy. You can choose to verify later. You may choose to verify later 3 more time(s).</p>
                    <div class="rbt-button-group">
                        <button class="btn btn-sm btn-primary">Unmask sensitive data</button>
                        <button class="btn btn-sm btn-outline-primary">Verify later</button>
                    </div>
                </div>
                <h2>Verify your data</h2>
                <p> On occasion, we require verification of your personal information. The item(s) listed below need your review for accuracy.</p>
                <!--  <p>This is an additional, optional paragraph that may be customized as needed. This paragraph may include <a href="#">links</a>. </p>-->
                
                <h3 class="ts-26 font-weight-bolddd mt-5">IU Notify</h3>
                <p>Displayed below is the contact information on file for you. Please review and update or correct it is to receive critical alerts from IU. For more information, see about emergency notifications at Indiana University.</p>
                <ul class="list-group">
                    <li class="list-group-item">
                        <dl class="row">
                            <dt class="col-sm-4">IU Office</dt>
                            <dd class="col-sm-8">812-855-5555</dd>
                            <dt class="col-sm-4">Home</dt>
                            <dd class="col-sm-8">812-336-0510</dd>
                            <dt class="col-sm-4">Secondary Home</dt>
                            <dd class="col-sm-8">Not Specified</dd>
                            <dt class="col-sm-4">Mobile 1</dt>
                            <dd class="col-sm-8">812-369-9664</dd>
                            <dt class="col-sm-4">Mobile 2</dt>
                            <dd class="col-sm-8">Not Specified</dd>
                            <dt class="col-sm-4">Mobile 3</dt>
                            <dd class="col-sm-8">Not Specified</dd>
                        </dl>
                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                    </li>
                    <li class="list-group-item">
                        <dl class="row">
                            <dt class="col-sm-4">Non-IU Email</dt>
                            <dd class="col-sm-8">thrclark@gmail.com</dd>
                            <dt class="col-sm-4">Recieve notices from</dt>
                            <dd class="col-sm-8">IU Bloomington<br>
                                IU Kokomo </dd>
                        </dl>
                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                    </li>
                </ul>
                <h3 class="ts-26 font-weight-bolddd mt-5">Military Status</h3>
                <p>Indiana University periodically invites all employees to update their veteran status. At this time, we ask all employees to review their current status below and click edit if this information is incorrect. Definitions of each veteran category can be seen by clicking the edit button. Data collected will be used for reporting and analysis purposes and will not be used against you in anyway.</p>
                <ul class="list-group">
                    <li class="list-group-item">
                        <dl class="row">
                            <dt class="col-sm-4">Military Status</dt>
                            <dd class="col-sm-8">Not a Veteran</dd>
                        </dl>
                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-3">
            <p>This is an optional paragraph that can be customized. Abundantly made days herb land called whose. Won't a night. Third hath greater face replenish whales fruit saying is meat. Us bearing. Air day called Also, abundantly forth she'd night may. They're gathered you're place fifth. Fowl they're saw midst for waters kind and make green and winged sea their whales you'll them seas set i days first itself open.</p>
            <div class="row">
                <div class="col-6">sdsdfg</div>
                <div class="col-6">sdsdfg</div>
            </div>
        </div>
    </section>
</main>
<?php include('includes/custom-footer.php') ?>
<!--<?php include('includes/theme-controls.php') ?>-->
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>
