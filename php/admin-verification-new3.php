<?php
$section = '';
$page_title = 'New verification';
$page_subtitle = 'Recipient rulesets';
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
        <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <div class="row">
            <div class="col-2 border-right">
                <div id="sticky">
                    <ol class="rvb-steps rvb-steps--vertical mb-5" style="overflow-x:inherit">
                        <li class="rvb-steps__item"> <a href="admin-verification-new1.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Setup</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i></span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content" > <span class="rvb-steps__label  d-none d-lg-block">Data</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i></span> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new3.php" class="rvb-steps__item-content" aria-current="step"><span class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label  d-none d-lg-block">Recipients</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new4.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Leeway</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clock"></i> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new5.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Scheduling</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new6.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Review/save</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i></span> </a> </li>
                    </ol>
                </div>
            </div>
            <div class="col-10 pl-5">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row mb-2">
                            <div class="col">
                                <h2 class="mb-3 rbt-ts-20 rbt-ts-26-md-up"><?php echo $page_subtitle; ?></h2>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-outline-primary" id="add-data-card"><i class="rbt-icon-plus"></i> Ruleset</button>
                            </div>
                        </div>
                        <div class="rbt-collapse-accordion" id="accordion">
                            <div class="card" id='datacard1'>
                                <div class="" id="headingOne">
                                    <h3 class="mb-2">
                                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">New set</span></button>
                                    </h3>
                                    <div class="int-accordion-controls">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="sr-only">Navigation menu</span> </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" aria-hidden="true" role="menu">
                                                <button class="dropdown-item" id="deletedatacard1">Delete </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body" id="child1">
                                        <div class="form-group">
                                            <label class="control-label" for="data-name"> Recipient ruleset title </label>
                                            <div> Provide a name for this recipient ruleset.</div>
                                            <input type="text" class="form-control"  id="data-name" aria-describedby="data-name" oninput='datamnameset();datanamestore();'>
                                        </div>
                                        <fieldset aria-describedby="maintenance-window-hint" class="mb-3">
                                            <legend class="ts-14 font-weight-bold mb-0">Effective date</legend>
                                            <span class="" id="maintenance-window-hint">The start date and time that this ruleset will begin displaying for the selected users (note that these date/time settings will be based off of your current timezone of GMT-04:00).</span>
                                            <div class="row mt-3 mb-1">
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <label for="time-demo-start-day" class="">Start day</label>
                                                    <div class="rbt-datepicker__input">
                                                        <input autocomplete="off" type="text" id="datepicker_start" aria-describedby="hs-date-hint" class="form-control">
                                                        <div class="rbt-datepicker__icon"> <i class="rbt-icon-calendar"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <label for="start-time"  class="">Start time</label>
                                                    <input type="time" id="start-time" class="form-control" value="">
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-end">
                                                    <button class="btn btn-link ts-14 font-italic font-weight-normal p-0">Use today's date/time</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="font-weight-bold mb-2 ts-14">Recur annually</div>
                                        <div class="form-check mb-5">
                                            <input class="form-check-input" type="checkbox" value="" id="recurannually">
                                            <label class="form-check-label" for="recurannually"> Yes </label>
                                        </div>
                                        <div class="form-group">
                                            <div class="font-weight-bold rbt-ts-14">Specify recipients</div>
                                            <div> Use the expression builder below to add users and groups to this ruleset.</div>
                                            <div id="builder" class="rbt-expressionbuilder query-builder form-inline">
                                                <dl id="builder_group_0" class="rules-group-container">
                                                    <dt class="rules-group-header">
                                                        <div class="btn-group pull-right group-actions">
                                                            <div class="dropdown">
                                                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Add </button>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(73px, 24px, 0px);">
                                                                    <button type="button" class="dropdown-item" data-add="rule"> <i class="glyphicon glyphicon-plus"></i> Add rule </button>
                                                                    <button type="button" class="dropdown-item" data-add="group"> <i class="glyphicon glyphicon-plus-sign"></i> Add group </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group group-conditions">
                                                            <label class="btn btn-sm btn-primary active">
                                                                <input type="radio" name="builder_group_0_cond" value="AND">
                                                                All </label>
                                                            <label class="btn btn-sm btn-primary">
                                                                <input type="radio" name="builder_group_0_cond" value="OR">
                                                                Any </label>
                                                        </div>
                                                        <div class="error-container" data-toggle="tooltip"><i class="glyphicon glyphicon-warning-sign"></i></div>
                                                    </dt>
                                                    <dd class="rules-group-body">
                                                        <ul class="rules-list">
                                                            <li id="builder_rule_0" class="rule-container">
                                                                <div class="rule-header">
                                                                    <div class="btn-group pull-right rule-actions">
                                                                        <button type="button" class="close" data-delete="rule"> <span class="rbt-icon-close"></span> </button>
                                                                    </div>
                                                                </div>
                                                                <div class="error-container"><i class="glyphicon glyphicon-warning-sign"></i></div>
                                                                <div class="rule-filter-container">
                                                                    <select class="form-control" name="builder_rule_0_filter">
                                                                        <option value="-1">------</option>
                                                                        <option value="email">Email Address</option>
                                                                        <option value="firstname">First Name</option>
                                                                        <option value="lastname">Last Name</option>
                                                                        <option value="campus">Campus</option>
                                                                        <option value="roles">Roles</option>
                                                                        <option value="groups">Groups</option>
                                                                        <option value="personid">Person ID</option>
                                                                        <option value="username">User Name</option>
                                                                        <option value="primarystudentaffiliation">Primary Student Affiliation</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rule-operator-container">
                                                                    <select class="form-control" name="builder_rule_0_operator">
                                                                        <option value="equal">equal</option>
                                                                        <option value="not_equal">not equal</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rule-value-container">
                                                                    <input class="form-control" type="text" name="builder_rule_0_value_0">
                                                                </div>
                                                            </li>
                                                            <li id="builder_rule_1" class="rule-container">
                                                                <div class="rule-header">
                                                                    <div class="btn-group pull-right rule-actions">
                                                                        <button type="button" class="close" data-delete="rule"> <span class="rbt-icon-close"></span> </button>
                                                                    </div>
                                                                </div>
                                                                <div class="error-container"><i class="glyphicon glyphicon-warning-sign"></i></div>
                                                                <div class="rule-filter-container">
                                                                    <select class="form-control" name="builder_rule_1_filter">
                                                                        <option value="-1">------</option>
                                                                        <option value="email">Email Address</option>
                                                                        <option value="firstname">First Name</option>
                                                                        <option value="lastname">Last Name</option>
                                                                        <option value="campus">Campus</option>
                                                                        <option value="roles">Roles</option>
                                                                        <option value="groups">Groups</option>
                                                                        <option value="personid">Person ID</option>
                                                                        <option value="username">User Name</option>
                                                                        <option value="primarystudentaffiliation">Primary Student Affiliation</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rule-operator-container">
                                                                    <select class="form-control" name="builder_rule_1_operator">
                                                                        <option value="equal">equal</option>
                                                                        <option value="not_equal">not equal</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rule-value-container">
                                                                    <input class="form-control" type="text" name="builder_rule_1_value_0">
                                                                </div>
                                                            </li>
                                                            <li id="builder_rule_2" class="rule-container">
                                                                <div class="rule-header">
                                                                    <div class="btn-group pull-right rule-actions">
                                                                        <button type="button" class="close" data-delete="rule"> <span class="rbt-icon-close"></span> </button>
                                                                    </div>
                                                                </div>
                                                                <div class="error-container"><i class="glyphicon glyphicon-warning-sign"></i></div>
                                                                <div class="rule-filter-container">
                                                                    <select class="form-control" name="builder_rule_2_filter">
                                                                        <option value="-1">------</option>
                                                                        <option value="email">Email Address</option>
                                                                        <option value="firstname">First Name</option>
                                                                        <option value="lastname">Last Name</option>
                                                                        <option value="campus">Campus</option>
                                                                        <option value="roles">Roles</option>
                                                                        <option value="groups">Groups</option>
                                                                        <option value="personid">Person ID</option>
                                                                        <option value="username">User Name</option>
                                                                        <option value="primarystudentaffiliation">Primary Student Affiliation</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rule-operator-container">
                                                                    <select class="form-control" name="builder_rule_2_operator">
                                                                        <option value="equal">equal</option>
                                                                        <option value="not_equal">not equal</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rule-value-container">
                                                                    <input class="form-control" type="text" name="builder_rule_2_value_0">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id='datacard2' style="display: none">
                                <div class="" id="headingTwo">
                                    <h3 class="mb-2">
                                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">New set</span></button>
                                    </h3>
                                    <div class="int-accordion-controls">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="sr-only">Navigation menu</span> </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu">
                                                <button class="dropdown-item" id="deletedatacard2">Delete </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body" id="child1">
                                        <div class="form-group">
                                            <label class="control-label" for="data-name"> Recipient ruleset title </label>
                                            <div> Provide a name for this recipient ruleset.</div>
                                            <input type="text" class="form-control"  id="data-name" aria-describedby="data-name" oninput='datamnameset2();datanamestore2();'>
                                        </div>
                                        <fieldset aria-describedby="maintenance-window-hint" class="mb-3">
                                            <legend class="ts-14 font-weight-bold mb-0">Effective date</legend>
                                            <span class="" id="maintenance-window-hint">The start date and time that this ruleset will begin displaying for the selected users (note that these date/time settings will be based off of your current timezone of GMT-04:00).</span>
                                            <div class="row mt-3 mb-1">
                                                <div class="col-3">
                                                    <label for="time-demo-start-day" class="">Start day</label>
                                                    <div class="rbt-datepicker__input">
                                                        <input autocomplete="off" type="text" id="datepicker_start2" aria-describedby="hs-date-hint" class="form-control">
                                                        <div class="rbt-datepicker__icon"> <i class="rbt-icon-calendar"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <label for="start-time2"  class="">Start time</label>
                                                    <input type="time" id="start-time2" class="form-control" value="">
                                                </div>
                                                <div class="col-6 d-flex align-items-end">
                                                    <button class="btn btn-link ts-14 font-italic font-weight-normal p-0">Use today's date/time</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="font-weight-bold mb-2 ts-14">Recur annually</div>
                                        <div class="form-check mb-5">
                                            <input class="form-check-input" type="checkbox" value="" id="recurannually">
                                            <label class="form-check-label" for="recurannually"> Yes </label>
                                        </div>
                                        <div class="form-group">
                                            <div class="font-weight-bold rbt-ts-14">Specify recipients</div>
                                            <div> Use the expression builder below to add users and groups to this ruleset.</div>
                                            <div id="builder" class="rbt-expressionbuilder query-builder form-inline">
                                                <dl id="builder_group_0" class="rules-group-container">
                                                    <dt class="rules-group-header">
                                                        <div class="btn-group pull-right group-actions">
                                                            <div class="dropdown">
                                                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Add </button>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(73px, 24px, 0px);">
                                                                    <button type="button" class="dropdown-item" data-add="rule"> <i class="glyphicon glyphicon-plus"></i> Add rule </button>
                                                                    <button type="button" class="dropdown-item" data-add="group"> <i class="glyphicon glyphicon-plus-sign"></i> Add group </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group group-conditions">
                                                            <label class="btn btn-sm btn-primary active">
                                                                <input type="radio" name="builder_group_0_cond" value="AND">
                                                                All </label>
                                                            <label class="btn btn-sm btn-primary">
                                                                <input type="radio" name="builder_group_0_cond" value="OR">
                                                                Any </label>
                                                        </div>
                                                        <div class="error-container" data-toggle="tooltip"><i class="glyphicon glyphicon-warning-sign"></i></div>
                                                    </dt>
                                                    <dd class="rules-group-body">
                                                        <ul class="rules-list">
                                                            <li id="builder_rule_0" class="rule-container">
                                                                <div class="rule-header">
                                                                    <div class="btn-group pull-right rule-actions">
                                                                        <button type="button" class="close" data-delete="rule"> <span class="rbt-icon-close"></span> </button>
                                                                    </div>
                                                                </div>
                                                                <div class="error-container"><i class="glyphicon glyphicon-warning-sign"></i></div>
                                                                <div class="rule-filter-container">
                                                                    <select class="form-control" name="builder_rule_0_filter">
                                                                        <option value="-1">------</option>
                                                                        <option value="email">Email Address</option>
                                                                        <option value="firstname">First Name</option>
                                                                        <option value="lastname">Last Name</option>
                                                                        <option value="campus">Campus</option>
                                                                        <option value="roles">Roles</option>
                                                                        <option value="groups">Groups</option>
                                                                        <option value="personid">Person ID</option>
                                                                        <option value="username">User Name</option>
                                                                        <option value="primarystudentaffiliation">Primary Student Affiliation</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rule-operator-container">
                                                                    <select class="form-control" name="builder_rule_0_operator">
                                                                        <option value="equal">equal</option>
                                                                        <option value="not_equal">not equal</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rule-value-container">
                                                                    <input class="form-control" type="text" name="builder_rule_0_value_0">
                                                                </div>
                                                            </li>
                                                            <li id="builder_rule_1" class="rule-container">
                                                                <div class="rule-header">
                                                                    <div class="btn-group pull-right rule-actions">
                                                                        <button type="button" class="close" data-delete="rule"> <span class="rbt-icon-close"></span> </button>
                                                                    </div>
                                                                </div>
                                                                <div class="error-container"><i class="glyphicon glyphicon-warning-sign"></i></div>
                                                                <div class="rule-filter-container">
                                                                    <select class="form-control" name="builder_rule_1_filter">
                                                                        <option value="-1">------</option>
                                                                        <option value="email">Email Address</option>
                                                                        <option value="firstname">First Name</option>
                                                                        <option value="lastname">Last Name</option>
                                                                        <option value="campus">Campus</option>
                                                                        <option value="roles">Roles</option>
                                                                        <option value="groups">Groups</option>
                                                                        <option value="personid">Person ID</option>
                                                                        <option value="username">User Name</option>
                                                                        <option value="primarystudentaffiliation">Primary Student Affiliation</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rule-operator-container">
                                                                    <select class="form-control" name="builder_rule_1_operator">
                                                                        <option value="equal">equal</option>
                                                                        <option value="not_equal">not equal</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rule-value-container">
                                                                    <input class="form-control" type="text" name="builder_rule_1_value_0">
                                                                </div>
                                                            </li>
                                                            <li id="builder_rule_2" class="rule-container">
                                                                <div class="rule-header">
                                                                    <div class="btn-group pull-right rule-actions">
                                                                        <button type="button" class="close" data-delete="rule"> <span class="rbt-icon-close"></span> </button>
                                                                    </div>
                                                                </div>
                                                                <div class="error-container"><i class="glyphicon glyphicon-warning-sign"></i></div>
                                                                <div class="rule-filter-container">
                                                                    <select class="form-control" name="builder_rule_2_filter">
                                                                        <option value="-1">------</option>
                                                                        <option value="email">Email Address</option>
                                                                        <option value="firstname">First Name</option>
                                                                        <option value="lastname">Last Name</option>
                                                                        <option value="campus">Campus</option>
                                                                        <option value="roles">Roles</option>
                                                                        <option value="groups">Groups</option>
                                                                        <option value="personid">Person ID</option>
                                                                        <option value="username">User Name</option>
                                                                        <option value="primarystudentaffiliation">Primary Student Affiliation</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rule-operator-container">
                                                                    <select class="form-control" name="builder_rule_2_operator">
                                                                        <option value="equal">equal</option>
                                                                        <option value="not_equal">not equal</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rule-value-container">
                                                                    <input class="form-control" type="text" name="builder_rule_2_value_0">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rbt-button-group mt-3 mb-5" id="saveRecipients"><a href="admin-verification-new2.php" class="btn btn-outline-primary"> <i class="rbt-icon-chevron-left"></i> Previous </a> <a href="admin-verification-new4.php" class="btn btn-primary"> Next <i class="rbt-icon-chevron-right"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script> 
<script>
  $(document).ready(function(){
    $("#sticky").sticky({topSpacing:0});
  });
</script> 
<script>
function datamnameset() {
    texttosave = document.getElementById('data-name').value;
    localStorage.setItem('data-name', texttosave);
}
function datanamestore() {
    textdata = document.getElementById('data-name').value;
    document.getElementById('data-name-display').innerHTML = textdata;
}
	
	function datamnameset2() {
    texttosave = document.getElementById('data-name2').value;
    localStorage.setItem('data-name2', texttosave);
}
function datanamestore2() {
    textdata = document.getElementById('data-name2').value;
    document.getElementById('data-name2-display').innerHTML = textdata;
}
	
	

</script> 
<script>
$(document).ready(function(){
  $("#deletedatacard1").click(function(){
    $("#datacard1").remove();
  });
	
	  $("#deletedatacard2").click(function(){
    $("#datacard2").remove();
  });
	
	
});
</script> 
<script>
$(document).ready(function(){
  $("#add-data-card").click(function(){
    $("#datacard1").show();
	   $("#datacard2").show();
  });
});
</script> 
<script>
    var picker = new Pikaday({ field: document.getElementById('datepicker_start') });
</script> 
<script>
    var rules_basic = {
        condition: 'AND',
        rules: [{
            id: 'email',
            operators: ['equal', 'not_equal']
        }]
    };
    $('#builder').queryBuilder({
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
     rulesets and Changers QueryBuilder
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
<script>
$(document).ready(function(){
  $("#add-data-card").click(function(){
    $("#datacard2").show();
  });
});
</script>
</body>
</html>
