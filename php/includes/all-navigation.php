
<header class="d-flex flex-nowrap rbt-app-header"> <img src="../img/trident-large.png" alt="trident" class="rbt-brand-image mr-3"/>
    <div class="rbt-brand-title-container flex-grow-1"> <a href="#" class="rbt-brand-title">Notification Center
            <?php if ($page_type == 'admin') { echo 'Admin'; } ?>
        </a> </div>
    <nav class="d-none d-lg-block mr-5">
        <ul class="nav align-items-center d-flex flex-nowrap">
            <li class="nav-item"> <a href="nc-main.php" class="nav-link <?php if ($page == 'notification_center') { echo 'active'; } ?>" >Notifications</a> </li>
            <li class="nav-item"> <a href="nc-settings.php"class="nav-link <?php if ($page == 'notification_settings') { echo 'active'; } ?>">Settings</a> </li>
            <li class="nav-item dropdown">
                <button class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</button>
                <div class="dropdown-menu">
                    <div class="dropdown-header">Publishing</div>
                    <a class="dropdown-item <?php if ($page == 'admin_notificationtype') { echo 'active'; } ?>" href="admin-notificationtype.php">Notification types</a> <a class="dropdown-item <?php if ($page == 'admin_approvals') { echo 'active'; } ?>" href="admin-submissions.php">Submitted notification types (3) </a> <a class="dropdown-item <?php if ($page == 'admin_systems') { echo 'active'; } ?>" href="admin-system.php">Systems</a> <a class="dropdown-item <?php if ($page == 'admin_publisher') { echo 'active'; } ?>" href="admin-publisher.php">Publishers</a> <a class="dropdown-item <?php if ($page == 'admin_api') { echo 'active'; } ?>" href="admin-api.php">API accounts</a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-header">System</div>
                    <a class="dropdown-item <?php if ($page == 'admin_parameters') { echo 'active'; } ?>" href="admin-systemparams.php">System parameters</a> <a class="dropdown-item <?php if ($page == 'admin_notifications') { echo 'active'; } ?>" href="admin-notifications.php">Notification management</a> <a class="dropdown-item <?php if ($page == 'admin_device') { echo 'active'; } ?>" href="admin-devices.php">Device management</a> </div>
            </li>
        </ul>
    </nav>
    <div class="d-none d-lg-block mr-3">
        <div class="rbt-header-avatar-id border-right pr-3 mr-3 py-1"> <span class="rbt-header-avatar" aria-hidden="true">TC</span> thrclark </div>
        <a href="#" class="pr-3 text-primary">Log out</a> </div>
    <div class="d-lg-none rbt-drawer-button">
        <button class="btn btn-link"><span class="rbt-icon-menu" aria-hidden="true"><span class="sr-only">Menu</span></span> </button>
    </div>
</header>
<div class="rbt-drawer d-lg-none">
    <nav>
        <h3 class="rbt-ts-14 text-uppercase mt-4 mb-2 d-none">Notification Center</h3>
        <ul class="list-group mt-3">
            <li class="list-group-item"> <a href="nc-main.php">Notifications</a> </li>
            <li class="list-group-item"> <a href="nc-settings.php">Settings</a> </li>
        </ul>
        <h3 class="rbt-ts-14 text-uppercase mt-4 mb-2">Administration</h3>
        <ul class="list-group mt-3">
            <li class="list-group-item rbt-collapsable"> <a href="#" class="collapsed"  data-toggle="collapse" data-target="#demo">Publishing</a>
                <ul class="collapse" id="demo">
                    <li class="list-group-item"> <a href="admin-notificationtype.php">Notification types</a> </li>
                    <li class="list-group-item"> <a href="admin-submissions.php">Submitted notification types (3)</a> </li>
                    <li class="list-group-item"> <a href="admin-system.php">Systems</a> </li>
                    <li class="list-group-item"> <a href="admin-publisher.php">Publishers</a> </li>
                    <li class="list-group-item"> <a href="admin-api.php">API accounts</a></li>
                </ul>
            </li>
            <li class="list-group-item rbt-collapsable"> <a href="#" class="collapsed"  data-toggle="collapse" data-target="#demo1">System</a>
                <ul class="collapse" id="demo1">
                    <li class="list-group-item"> <a href="admin-systemparams.php">System parameters</a> </li>
                    <li class="list-group-item"> <a href="admin-notifications.php">Notification management</a></li>
                    <li class="list-group-item"> <a href="admin-devices.php">Device management</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
