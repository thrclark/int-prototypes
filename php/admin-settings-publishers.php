<?php
$section = '';
$page_title = 'Publishers';
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
                <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                <span>Save successful.</span> </div>
        </alert>
    </growls>
    <growls style=" display: none; position: fixed; right:10px; top:80px;" id="growl2">
        <alert dismissible="true">
            <div role="alert" class="alert alert-success alert-dismissible mb-3">
                <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                <span>Publisher deleted.</span> </div>
        </alert>
    </growls>
    <main class="main-content demojs_listview" id="main-content">
        <div class="row align-items-center mb-3 mb-md-6 ">
            <div class="col">
                <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
            </div>
            <div class="col-auto"><a href="#" class="btn btn-sm btn-outline-primary demojs_addpublisher"> <i class="rbt-icon-plus"></i> Publisher</a></div>
        </div>
        
        
        
        
        
        
        <div class="int-panel p-3">
            
            
            
        <table class="table rbt-table-responsive rbt-table-actions">
            <caption class="sr-only">
            List of all verifications
            </caption>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th><span class="sr-only">Actions</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">Enterprise Student Services</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content">ESS Student Services team, managed by Todd Neal</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span> </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu">
                                    <button class="dropdown-item demojs_addapi">Edit</button>
                                    <button class="dropdown-item" data-toggle="modal" data-target="#speedbump_deletepublisher_success">Delete...</button>
                                </div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">HR</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content">--</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu">
                                    <button class="dropdown-item demojs_addapi">Edit</button>
                                    <button class="dropdown-item" data-toggle="modal" data-target="#speedbump_deletepublisher_fail">Delete...</button>
                                </div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td><b class="rbt-table-responsive-cell-label">Name</b> <span class="rbt-table-responsive-cell-content">IMS</span></td>
                    <td><b class="rbt-table-responsive-cell-label">Description</b> <span class="rbt-table-responsive-cell-content">The Identity Management Systems team</span></td>
                    <td><b class="rbt-table-responsive-cell-label visible-xs"> Actions </b>
                        <div class="rbt-table-responsive-cell-content">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle pl-2 pr-3" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Navigation menu</span></button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu">
                                    <button class="dropdown-item demojs_addapi">Edit</button>
                                    <button class="dropdown-item" data-toggle="modal" data-target="#speedbump_deletepublisher_fail">Delete...</button>
                                </div>
                            </div>
                        </div></td>
                </tr>
            </tbody>
        </table>
            
             </div>
            
            
            
        <div class="modal fade" id="speedbump_deletepublisher_success" tabindex="-1" role="dialog" aria-labelledby="speedbump_deletepublisher_success" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title" id="exampleModalLabel">Delete publisher</div>
                    </div>
                    <div class="modal-body">
                        <p> The publisher 'IMS' will be deleted immediately. Are you sure you wish to proceed? </p>
                    </div>
                    <div class="modal-footer">
                        <div class="rbt-button-group">
                            <button type="button" class="btn btn-primary" id="delete_publisher_success" data-dismiss="modal">Delete publisher</button>
                            <button class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="speedbump_deletepublisher_fail" tabindex="-1" role="dialog" aria-labelledby="speedbump_deletepublisher_fail" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="failpage1">
                    <div class="modal-header">
                        <div class="modal-title" id="exampleModalLabel">Delete publisher</div>
                    </div>
                    <div class="modal-body">
                        <p> The publisher 'IMS' will be deleted immediately. Are you sure you wish to proceed? </p>
                    </div>
                    <div class="modal-footer">
                        <div class="rbt-button-group">
                            <button type="button" class="btn btn-primary" id="delete_publisher_fail">Delete publisher</button>
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
    <main class="main-content demojs_newview" id="main-content" style="display: none">
        <h1 class="rbt-ts-23 rbt-ts-32-md-up"> Add publisher</h1>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                <li class="breadcrumb-item"><a href="#" class="demojs_showlistview">Publishers</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add publisher</li>
            </ol>
        </nav>
        
        
        
        
          <div class="int-panel p-3">
              
              
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="form-group">
                    <label class="control-label" for="pub_name"> Name </label>
                    <div class="int-fielddescription"> Display name of the publisher </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <countdown>
                                <div class="rbt-charcount">
                                    <input aria-labelledby="pub_name" class="form-control" id="pub_name">
                                    <span class="badge badge-success" id="pub_name_badge"> <span id="pub_name_counter">100</span> </span> </div>
                            </countdown>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="fcLabel"> Functional Contact (Tier 2) </label>
                    <div class="int-fielddescription"> Tier 2 functional contact information. </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <countdown>
                                <div class="rbt-charcount">
                                    <input aria-labelledby="fcLabel" class="form-control" id="fcLabel">
                                    <span class="badge badge-success" id="fcLabel_badge"> <span id="fcLabel_counter">100</span> </span> </div>
                            </countdown>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="tcLabel"> Technical Contact (Tier 2) </label>
                    <div class="int-fielddescription"> Tier 2 technical contact information.</div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <countdown>
                                <div class="rbt-charcount">
                                    <input aria-labelledby="tcLabel" class="form-control" id="tcLabel">
                                    <span class="badge badge-success" id="tcLabel_badge"> <span id="tcLabel_counter">100</span> </span> </div>
                            </countdown>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="pub_description"> Description </label>
                    <div class="int-fielddescription"> Description of the publisher. This is helpful for distinguishing publishers with similar names. </div>
                    <countdown>
                        <div class="rbt-charcount">
                            <textarea class="form-control" rows="5" id="pub_description"></textarea>
                            <span class="badge badge-success" id="pub_description_badge"> <span id="pub_description_counter">1000</span> </span> </div>
                    </countdown>
                </div>
                <div class="form-group">
                    <label class="control-label" for="aclLabel">Publisher permissions </label>
                    <div id="aclLabel" class="rbt-expressionbuilder"></div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="emailLabel"> Email </label>
                    <div class="int-fielddescription"> The email address is used to send updates/information to the publisher.</div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <countdown>
                                <div class="rbt-charcount">
                                    <input aria-labelledby="emailLabel" class="form-control" id="emailLabel">
                                    <span class="badge badge-success" id="emailLabel_badge"> <span id="emailLabel_counter">100</span> </span> </div>
                            </countdown>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="rbt-button-group mt-3 mb-5" id="savePublisher">
                    <button class="btn btn-primary demojs_showlistview" id="submitform"> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Save</span> </button>
                    <a class="btn btn-outline-primary"  href="admin-settings-publishers.php"> Cancel </a> </div>
            </div>
        </div>
              
               </div>
        
        
        
        
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
    $(document).ready(function() {
        $("#delete_publisher_fail").click(function() {
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
    $(document).ready(function(){

    
            $("#pub_name").keyup(function() {
            var length = $(this).val().length;
            length = 100 - length;
            $('#pub_name_counter').text(length);
            if ($("#pub_name").val().length > 100) {
                $("#pub_name_badge").last().addClass("badge-danger");
            } else {
                $("#pub_name_badge").last().removeClass("badge-danger");
            }
        });
        
        
            
    
    
            $("#pub_description").keyup(function() {
            var length = $(this).val().length;
            length = 1000 - length;
            $('#pub_description_counter').text(length);
            if ($("#pub_description").val().length > 1000) {
                $("#pub_description_badge").last().addClass("badge-danger");
            } else {
                $("#pub_description_badge").last().removeClass("badge-danger");
            }
        });
        
        
        
         $("#fcLabel").keyup(function() {
            var length = $(this).val().length;
            length = 100 - length;
            $('#fcLabel_counter').text(length);
            if ($("#fcLabel").val().length > 100) {
                $("#fcLabel_badge").last().addClass("badge-danger");
            } else {
                $("#fcLabel_badge").last().removeClass("badge-danger");
            }
        });
    
    
         $("#tcLabel").keyup(function() {
            var length = $(this).val().length;
            length = 100 - length;
            $('#tcLabel_counter').text(length);
            if ($("#tcLabel").val().length > 100) {
                $("#tcLabel_badge").last().addClass("badge-danger");
            } else {
                $("#tcLabel_badge").last().removeClass("badge-danger");
            }
        });
    
        
        $("#emailLabel").keyup(function() {
            var length = $(this).val().length;
            length = 100 - length;
            $('#emailLabel_counter').text(length);
            if ($("#emailLabel").val().length > 100) {
                $("#emailLabel_badge").last().addClass("badge-danger");
            } else {
                $("#emailLabel_badge").last().removeClass("badge-danger");
            }
        });
    
    
    
    //

    });
</script> 
<script>
$(document).ready(function(){
  $(".demojs_addpublisher").click(function(){
    $(".demojs_listview").hide();
    $(".demojs_newview").show();
  });
    
     $(".demojs_showlistview").click(function(){
    $(".demojs_listview").show();
    $(".demojs_newview").hide();
  });
    

});
</script> 
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
<script>
	$(document).ready(function() {
     $('#submitform').prop('disabled', true);
     $('.form-control').keyup(function() {
        if($(this).val() != '') {
           $('#submitform').prop('disabled', false);
        }
     });
 });
</script> 
<script>
    $(document).ready(function() {
        $(function() {
            $("#submitform").click(function() {
                $('.btn.btn-primary').addClass('rbt-loading');
				$('.btn.btn-primary .spinner-border').removeClass('d-none');
				$('.btn.btn-primary .visible').toggleClass('invisible');
				$("#submitform").prop('disabled', true);
                setTimeout(function() {
                    $('.btn.btn-primary').removeClass('rbt-loading');
					$('.btn.btn-primary .spinner-border').addClass('d-none');
					$("#submitform").prop('disabled', true);
					$('.btn.btn-primary .invisible').removeClass('invisible');
                }, 2000)
            });
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#submitform").click(function() {
            $("#growl1").delay(2000).fadeIn().delay(5000).fadeOut();
        });
       
    });
</script>
    
    
    <script>
    $(document).ready(function() {
        $("#delete_publisher_success").click(function() {
            $("#growl2").delay(500).fadeIn().delay(5000).fadeOut();
        });
       
    });
</script>
</body>
</html>
