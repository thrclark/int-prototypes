<?php
$section = '';
$page_title = 'Add publisher';
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
        <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                <li class="breadcrumb-item"><a href="admin-settings-publishers.php">Publishers</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="form-group">
                    <label class="control-label" for="nameLabel"> Name </label>
                    <div> Display name of the publisher </div>
                    <input value="" class="form-control" id="nameLabel" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label" for="fcLabel"> Functional Contact (Tier 2) </label>
                    <div> Tier 2 functional contact information </div>
                    <input value="" class="form-control" id="fcLabel" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label" for="tcLabel"> Technical Contact (Tier 2) </label>
                    <div> Tier 2 technical contact information</div>
                    <input value="" class="form-control" id="tcLabel" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label" for="descLabel"> Description </label>
                    <div> Description of the publisher. This is helpful for distinguishing publishers with similar names.</div>
                    <textarea class="form-control" id="descLabel" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label" for="aclLabel">Publisher permissions </label>
                    <div id="aclLabel" class="rbt-expressionbuilder"></div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="emailLabel"> Email </label>
                    <div> The email address is used to send updates/information to the publisher.</div>
                    <input value="" class="form-control" id="emailLabel" type="text">
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher"> <a href="admin-settings-publishers.php" class="btn btn-primary"> Save </a> <a class="btn btn-outline-primary"  href="admin-settings-publishers.php"> Cancel </a> </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script> 
<script src='../js/query-builder.standalone.js'></script> 
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script> 
<script>
    var rules_basic = {
        condition: 'AND',
        rules: [{
            id: 'email',
            operators: ['equal', 'not_equal']
        }]
    };
    $('#aclLabel').queryBuilder({
        plugins: ['bt-tooltip-errors'],
        filters: [{
                id: 'email',
                label: 'Email Address',
                type: 'string',
                operators: ['equal', 'not_equal']
            },
            {
                id: 'firstname',
                label: 'First Name',
                type: 'string',
                operators: ['equal', 'not_equal']
            },
            {
                id: 'lastname',
                label: 'Last Name',
                type: 'string',
                operators: ['equal', 'not_equal']
            },
            {
                id: 'campus',
                label: 'Campus',
                type: 'string',
                operators: ['equal', 'not_equal']
            },
            {
                id: 'roles',
                label: 'Roles',
                type: 'string',
                operators: ['equal', 'not_equal']
            },
            {
                id: 'groups',
                label: 'Groups',
                type: 'string',
                operators: ['equal', 'not_equal']
            },
            {
                id: 'personid',
                label: 'Person ID',
                type: 'string',
                operators: ['equal', 'not_equal']
            },

            {
                id: 'username',
                label: 'User Name',
                type: 'string',
                operators: ['equal', 'not_equal']
            },
            {
                id: 'primarystudentaffiliation',
                label: 'Primary Student Affiliation',
                type: 'string',
                operators: ['equal', 'not_equal']
            }
        ],
        rules: rules_basic
    });
    /****************************************************************
     Triggers and Changers QueryBuilder
     *****************************************************************/

    $('#btn-get').on('click', function() {
        var result = $('#builder').queryBuilder('getRules');
        if (!$.isEmptyObject(result)) {
            alert(JSON.stringify(result, null, 2));
        } else {
            console.log("invalid object :");
        }
        console.log(result);
    });

    $('#btn-reset').on('click', function() {
        $('#builder').queryBuilder('reset');
    });

    $('#btn-set').on('click', function() {
        //$('#builder').queryBuilder('setRules', rules_basic);
        var result = $('#builder').queryBuilder('getRules');
        if (!$.isEmptyObject(result)) {
            rules_basic = result;
        }
    });
    //When rules changed :
    $('#builder').on('getRules.queryBuilder.filter', function(e) {
        //$log.info(e.value);
    });
</script>
</body>
</html>
