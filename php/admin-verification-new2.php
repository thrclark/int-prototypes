<?php
$section = '';
$page_title = 'New verification';
$page_subtitle = 'Data';
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
    <main class="main-content" id="main-content">
        <h1 class="rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb rbt-breadcrumb-no-bkg">
                <li class="breadcrumb-item"><a href="admin-verifications.php" class="">All verifications</a></li>
                <li class="breadcrumb-item active" aria-current="page">New verification</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-2 border-right d-none d-sm-block">
                <div id="sticky">
                    <ol class="rvb-steps rvb-steps--vertical mb-5" style="overflow-x:inherit">
                        <li class="rvb-steps__item"> <a href="admin-verification-new1.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Setup</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i></span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content" aria-current="step"><span class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label  d-none d-lg-block">Data</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i></span> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new3.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Recipients</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new5.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Scheduling</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new6.php" class="rvb-steps__item-content"> <span class="rvb-steps__label  d-none d-lg-block">Review/save</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i></span> </a> </li>
                    </ol>
                </div>
            </div>
            <div class="col-12 col-sm-10 pl-sm-5">
                <div class="row">
                    <div class="col">
                        <h2 class="mb-3 rbt-ts-20 rbt-ts-26-md-up"><?php echo $page_subtitle; ?></h2>
                    </div>
                </div>
                <div id="sticky2" class="pb-2 d-sm-none rbt-z-1000 int-wizardmenu-mobile">
                    <ol class="rvb-steps mb-5 d-sm-none">
                        <li class="rvb-steps__item"> <a href="admin-verification-new1.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Setup</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label"><span class="sr-only">Data</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new3.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Recipients</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new5.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Scheduling</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i> </span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new6.php" class="rvb-steps__item-content"> <span class="rvb-steps__label"><span class="sr-only">Review/save</span></span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i> </span> </a> </li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="rbt-collapse-accordion" id="accordion">
                            <div class="card" id='datacard1'>
                                <div class="" id="headingOne">
                                    <h3 >
                                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> <i class="rbt-icon-chevron-right"></i> Section <span id="showdash1" style="display: none">-</span> <span id="data-name-display"> </span></button>
                                    </h3>
                                    <div class="int-accordion-controls d-flex align-items-center"> <span class="text-danger bg-white rounded px-2 py-0 mr-3">2 errors</span>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="sr-only">Navigation menu</span> </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton1" aria-hidden="true" role="menu">
                                                <button class="dropdown-item disabled" id="xxxxxx">Move to top</button>
                                                <button class="dropdown-item disabled" id="xxxxxx">Move up</button>
                                                <button class="dropdown-item disabled" id="xxxxxx">Move down</button>
                                                <button class="dropdown-item disabled" id="xxxxxx">Move to bottom</button>
                                                <div class="dropdown-divider"></div>
                                                <button class="dropdown-item" id="deletedatacard1">Delete </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body" id="child1">
                                        <div class="form-group">
                                            <label class="control-label" for="vfy2_section_name"> Name </label>
                                            <div class="int-fielddescription"> The name of this verification section.</div>
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <countdown>
                                                        <div class="rbt-charcount">
                                                            <input aria-labelledby="vfy2_section_name" class="form-control " formcontrolname="title" id="vfy2_section_name">
                                                            <span class="badge badge-success" id="vfy2_section_name_badge"> <span id="vfy2_section_name_counter">100</span> </span> </div>
                                                    </countdown>
                                                    <div class="alert alert-inline alert-danger mb-2" role="alert">
                                                        <p class="rbt-ts-14"> This field is required.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="vfy2_section_unkey"> Unique key </label>
                                            <div class="int-fielddescription"> This uniquely identifies this section on the current verification.</div>
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <countdown>
                                                        <div class="rbt-charcount">
                                                            <input aria-labelledby="vfy2_section_unkey" class="form-control " formcontrolname="title" id="vfy2_section_unkey">
                                                            <span class="badge badge-success" id="vfy2_section_unkey_badge"> <span id="vfy2_section_unkey_counter">100</span> </span> </div>
                                                    </countdown>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="font-weight-bold mb-2 ts-14">Sensitive data</div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="maskdata1">
                                            <label class="form-check-label" for="maskdata1"> Mask this data for the user until the user takes action to unmask it. </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="descriptionLabel"> Description (optional) </label>
                                            <div class="int-fielddescription"> The description for this section. It will display at the top of this section.</div>
                                            <textarea id="descriptionLabel"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="font-weight-bold mb-3">Field groups</div>
                                            </div>
                                        </div>
                                        <div class="card int-data-api">
                                            <div class="card-header border-bottom-0 p-0">
                                                <button class="rbt-btn-nostyle btn-block p-1" type="button" data-toggle="collapse" data-target="#uniquekey1"> <i class="rbt-icon-chevron-right"></i> Field group 1</button>
                                                <div class="int-accordion-controls">
                                                    <div class="dropdown">
                                                        <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span> </button>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu">
                                                            <button class="dropdown-item disabled" id="xxxxxx">Move to top</button>
                                                            <button class="dropdown-item disabled" id="xxxxxx">Move up</button>
                                                            <button class="dropdown-item" id="xxxxxx">Move down</button>
                                                            <button class="dropdown-item" id="xxxxxx">Move to bottom</button>
                                                            <div class="dropdown-divider"></div>
                                                            <button class="dropdown-item" id="xxxxxx">Delete </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child1" id="uniquekey1">
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_uniquekey"> Unique key </label>
                                                    <div class="int-fielddescription"> This uniquely identifies this group on the whole verification. It is used to map up the live data pulled from the external application. Use this unique key in your data feed.</div>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <countdown>
                                                                <div class="rbt-charcount">
                                                                    <input aria-labelledby="api1_uniquekey" class="form-control " formcontrolname="title" id="api1_uniquekey" value="Field group 1">
                                                                    <span class="badge badge-success" id="api1_uniquekey_badge"> <span id="api1_uniquekey_counter">100</span> </span> </div>
                                                            </countdown>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_liveDataEndpoint"> Live data endpoint </label>
                                                    <div class="int-fielddescription"> API Endpoint to pull Live Data </div>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <select  id="api1_liveDataEndpoint"  class="form-control" aria-label="Live Data Endpoint">
                                                                <option label="" value=""></option>
                                                                <option label="Demo API" value="number:1020">Demo API</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_callbackEndpoint"> Callback endpoint </label>
                                                    <div class="int-fielddescription"> API Endpoint to call before submission is allowed </div>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <select  id="api1_callbackEndpoint"  class="form-control" aria-label="Live Data Endpoint">
                                                                <option label="" value=""></option>
                                                                <option value="" class="" selected="selected">yes</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_url">URL </label>
                                                    <div class="int-fielddescription"> URL to the external application that allows action to be taken.</div>
                                                    <countdown>
                                                        <div class="rbt-charcount">
                                                            <input aria-labelledby="api1_url" class="form-control " formcontrolname="title" id="api1_url">
                                                            <span class="badge badge-success" id="api1_url_badge"> <span id="api1_url_counter">2000</span> </span> </div>
                                                    </countdown>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_buttonlable"> Button label </label>
                                                    <div class="int-fielddescription"> The label for the button that will launch the URL.</div>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <countdown>
                                                                <div class="rbt-charcount">
                                                                    <input aria-labelledby="api1_buttonlable" class="form-control " formcontrolname="title" id="api1_buttonlable" value="Edit">
                                                                    <span class="badge badge-success" id="api1_buttonlable_badge"> <span id="api1_buttonlable_counter">15</span> </span> </div>
                                                            </countdown>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card int-data-api">
                                            <div class="card-header border-bottom-0 p-0">
                                                <button class="rbt-btn-nostyle btn-block p-1" type="button" data-toggle="collapse" data-target="#uniquekey2"> <i class="rbt-icon-chevron-right"></i> Field group 2</button>
                                                <div class="int-accordion-controls d-flex align-items-center"> <span class="text-danger bg-white rounded px-2 py-0 mt-1 mr-3">1 error</span>
                                                    <div class="dropdown">
                                                        <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span> </button>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton3" aria-hidden="true" role="menu">
                                                            <button class="dropdown-item" id="xxxxxx">Move to top</button>
                                                            <button class="dropdown-item" id="xxxxxx">Move up</button>
                                                            <button class="dropdown-item disabled" id="xxxxxx">Move down</button>
                                                            <button class="dropdown-item disabled" id="xxxxxx">Move to bottom</button>
                                                            <div class="dropdown-divider"></div>
                                                            <button class="dropdown-item" id="xxxxxx">Delete </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child1" id="uniquekey2">
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_uniquekey"> Unique key </label>
                                                    <div class="int-fielddescription"> This uniquely identifies this group on the whole verification. It is used to map up the live data pulled from the external application. Use this unique key in your data feed.</div>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <countdown>
                                                                <div class="rbt-charcount">
                                                                    <input aria-labelledby="api2_uniquekey" class="form-control " formcontrolname="title" id="api2_uniquekey" value="Field group 2">
                                                                    <span class="badge badge-success" id="api2_uniquekey_badge"> <span id="api2_uniquekey_counter">100</span> </span> </div>
                                                            </countdown>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_liveDataEndpoint"> Live data endpoint </label>
                                                    <div class="int-fielddescription"> API Endpoint to pull Live Data </div>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <select  id="api2_liveDataEndpoint"  class="form-control" aria-label="Live Data Endpoint">
                                                                <option label="" value=""></option>
                                                                <option label="Demo API" value="number:1020">Demo API</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_callbackEndpoint"> Callback endpoint </label>
                                                    <div class="int-fielddescription"> API Endpoint to call before submission is allowed </div>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <select  id="api2_callbackEndpoint"  class="form-control" aria-label="Live Data Endpoint">
                                                                <option label="" value=""></option>
                                                                <option value="" class="" selected="selected">yes</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_url">URL </label>
                                                    <div class="int-fielddescription"> URL to the external application that allows action to be taken.</div>
                                                    <countdown>
                                                        <div class="rbt-charcount">
                                                            <input aria-labelledby="api2_url" class="form-control " formcontrolname="title" id="api2_url">
                                                            <span class="badge badge-success" id="api2_url_badge"> <span id="api2_url_counter">2000</span> </span> </div>
                                                    </countdown>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_buttonlable"> Button label </label>
                                                    <div class="int-fielddescription"> The label for the button that will launch the URL.</div>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <countdown>
                                                                <div class="rbt-charcount">
                                                                    <input aria-labelledby="api2_buttonlable" class="form-control " formcontrolname="title" id="api2_buttonlable" value="Edit">
                                                                    <span class="badge badge-success" id="api2_buttonlable_badge"> <span id="api2_buttonlable_counter">15</span> </span> </div>
                                                            </countdown>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-sm btn-outline-primary"><i class="rbt-icon-plus"></i> Field group</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id='datacard2' style="display: none">
                                <div class="" id="headingTwo">
                                    <h3 >
                                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <i class="rbt-icon-chevron-right"></i> Section <span id="showdash2" style="display: none">-</span> <span id="data-name2-display"></span></button>
                                    </h3>
                                    <div class="int-accordion-controls">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="sr-only">Navigation menu</span> </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton11" aria-hidden="true" role="menu">
                                                <button class="dropdown-item disabled" id="xxxxxx">Move to top</button>
                                                <button class="dropdown-item disabled" id="xxxxxx">Move up</button>
                                                <button class="dropdown-item disabled" id="xxxxxx">Move down</button>
                                                <button class="dropdown-item disabled" id="xxxxxx">Move to bottom</button>
                                                <div class="dropdown-divider"></div>
                                                <button class="dropdown-item" id="deletedatacard2">Delete </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body" id="child2">
                                        <div class="form-group">
                                            <label class="control-label" for="data-name2"> Name </label>
                                            <div class="int-fielddescription"> The name of this verification (displayed on the main verification page).</div>
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <input type="text" class="form-control"  id="data-name2" aria-describedby="data-name2" oninput='datamnameset2();datanamestore2();'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="uniquekeyLabel2"> Unique Key </label>
                                            <div class="int-fielddescription"> This uniquely identifies this section on the current verification.</div>
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <input id="uniquekeyLabel2" aria-labelledby="uniquekeyLabel2"  class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="font-weight-bold mb-2 ts-14">Sensitive Data</div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="maskdata1">
                                            <label class="form-check-label" for="maskdata1"> Mask this data for the user until the user takes action to unmask it. </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="descriptionLabel2"> Description (optional) </label>
                                            <div class="int-fielddescription"> The description for this section. It will display at the top of this section.</div>
                                            <textarea id="descriptionLabel2"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="font-weight-bold mb-3">Field groups</div>
                                            </div>
                                        </div>
                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <div class="ts-20 text-center"> No field groups specified.</div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-sm btn-outline-primary"><i class="rbt-icon-plus"></i> Field group</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-sm btn-outline-primary" id="add-data-card"><i class="rbt-icon-plus"></i> Section</button>
                        </div>
                        <div class="rbt-button-group mt-3 mb-5" id="saveSetup"> <a href="admin-verification-new1.php" class="btn btn-primary"> <i class="rbt-icon-chevron-left"></i> Previous </a> <a href="admin-verification-new3.php" class="btn btn-primary"> Next <i class="rbt-icon-chevron-right"></i> </a> <a href="admin-verifications.php" class="btn btn-outline-primary demojs_cancelaction"> Cancel </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
  $(document).ready(function(){
    $("#sticky").sticky({topSpacing:0});
  });
	
	  $(document).ready(function(){
    $("#sticky2").sticky({topSpacing:0});
  });
	
	
</script> 
<script>
    var easyMDE = new EasyMDE({
        element: $('#descriptionLabel')[0],
        toolbar: ["bold", "italic", "link", "|", "preview"],
        status: 'false'
    });
    var easyMDE = new EasyMDE({
        element: $('#descriptionLabel2')[0],
        toolbar: ["bold", "italic", "link", "|", "preview"],
        status: 'false'
    })
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
    $('#data-name').blur(function(){
        if(!$(this).val()){
            $('#showdash1').hide();
        } else{
             $('#showdash1').show();
        }
    });
    
    
    $('#data-name2').blur(function(){
        if(!$(this).val()){
            $('#showdash2').hide();
        } else{
             $('#showdash2').show();
        }
    });
});
</script> 
<script>
$(document).ready(function(){
  $("#deletedatacard1").click(function(){
    $("#datacard1").remove();
  });
});
</script> 
<script>
$(document).ready(function(){
  $("#add-data-card").click(function(){
    $("#datacard2").show();
  });
});
</script> 
<script>
$(document).ready(function() {
    $("#vfy2_section_name").keyup(function() {
        var length = $(this).val().length;
        length = 100 - length;
        $('#vfy2_section_name_counter').text(length);
        if ($("#vfy2_section_name").val().length > 100) {
            $("#vfy2_section_name_badge").last().addClass("badge-danger");
        } else {
            $("#vfy2_section_name_badge").last().removeClass("badge-danger");
        }
    });
    $("#vfy2_section_unkey").keyup(function() {
        var length = $(this).val().length;
        length = 100 - length;
        $('#vfy2_section_unkey_counter').text(length);
        if ($("#vfy2_section_unkey").val().length > 100) {
            $("#vfy2_section_unkey_badge").last().addClass("badge-danger");
        } else {
            $("#vfy2_section_unkey_badge").last().removeClass("badge-danger");
        }
    });
    $("#api1_uniquekey").keyup(function() {
        var length = $(this).val().length;
        length = 100 - length;
        $('#api1_uniquekey_counter').text(length);
        if ($("#api1_uniquekey").val().length > 100) {
            $("#api1_uniquekey_badge").last().addClass("badge-danger");
        } else {
            $("#api1_uniquekey_badge").last().removeClass("badge-danger");
        }
    });
    $("#api2_uniquekey").keyup(function() {
        var length = $(this).val().length;
        length = 100 - length;
        $('#api2_uniquekey_counter').text(length);
        if ($("#api2_uniquekey").val().length > 100) {
            $("#api2_uniquekey_badge").last().addClass("badge-danger");
        } else {
            $("#api2_uniquekey_badge").last().removeClass("badge-danger");
        }
    });
    $("#api1_buttonlable").keyup(function() {
        var length = $(this).val().length;
        length = 15 - length;
        $('#api1_buttonlable_counter').text(length);
        if ($("#api1_buttonlable").val().length > 15) {
            $("#api1_buttonlable_badge").last().addClass("badge-danger");
        } else {
            $("#api1_buttonlable_badge").last().removeClass("badge-danger");
        }
    });
    $("#api2_buttonlable").keyup(function() {
        var length = $(this).val().length;
        length = 15 - length;
        $('#api2_buttonlable_counter').text(length);
        if ($("#api2_buttonlable").val().length > 15) {
            $("#api2_buttonlable_badge").last().addClass("badge-danger");
        } else {
            $("#api2_buttonlable_badge").last().removeClass("badge-danger");
        }
    });
     
    
    $("#api1_url").keyup(function() {
        var length = $(this).val().length;
        length = 2000 - length;
        $('#api1_url_counter').text(length);
        if ($("#api1_url").val().length > 2000) {
            $("api1_url_badge").last().addClass("badge-danger");
        } else {
            $("#api1_url_badge").last().removeClass("badge-danger");
        }
    });
    
    
    
       
    $("#api2_url").keyup(function() {
        var length = $(this).val().length;
        length = 2000 - length;
        $('#api2_url_counter').text(length);
        if ($("#api2_url").val().length > 2000) {
            $("api2_url_badge").last().addClass("badge-danger");
        } else {
            $("#api2_url_badge").last().removeClass("badge-danger");
        }
    });
    
    
    
    
    
    //api1_url
});
</script> 
<script>
     $(window).resize(function(){location.reload();});
</script>
</body>
</html>
