<?php
$section = '';
$page_title = 'New verification';
$page_subtitle = 'Data';
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
    <main class="main-content" id="main-content">
        <h1 class="mb-6"> <?php echo $page_title; ?></h1>
        <div class="row">
            <div class="col-2 border-right">
                <div id="sticky">
                    <ol class="rvb-steps rvb-steps--vertical mb-5" style="overflow-x:inherit">
                        <li class="rvb-steps__item"> <a href="admin-verification-new1.php" class="rvb-steps__item-content"> <span class="rvb-steps__label">Setup</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i></span> </a> </li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content" aria-current="step"><span class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label">Data</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i></span> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new3.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content"> <span class="rvb-steps__label">Recipients</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new4.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content"> <span class="rvb-steps__label">Leeway</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clock"></i> </span> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new5.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content"> <span class="rvb-steps__label">Scheduling</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i> </span> </span> </a></li>
                        <li class="rvb-steps__item"> <a href="admin-verification-new6.php" class="rvb-steps__item-content"><span class="rvb-steps__item-content"> <span class="rvb-steps__label">Review/save</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i></span> </span></a> </li>
                    </ol>
                </div>
            </div>
            <div class="col-10 pl-5">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row mb-2">
                            <div class="col">
                                <h2><?php echo $page_subtitle; ?></h2>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-outline-primary" id="add-data-card"><i class="rbt-icon-plus"></i> Data</button>
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
                                            <label class="control-label" for="data-name"> Name </label>
                                            <div> The name of this verification (displayed on the main verification page).</div>
                                            <input type="text" class="form-control"  id="data-name" aria-describedby="data-name" oninput='datamnameset();datanamestore();'>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="uniquekeyLabel"> Unique Key </label>
                                            <div class="" > This uniquely identifies this section on the current verification.</div>
                                            <input id="uniquekeyLabel" aria-labelledby="uniquekeyLabel"  class="form-control" type="text">
                                        </div>
                                        <div class="font-weight-bold mb-2 ts-14">Sensitive Data</div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="maskdata1">
                                            <label class="form-check-label" for="maskdata1"> Mask this data for the user until the user takes action to unmask it. </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="descriptionLabel"> Description (optional) </label>
                                            <div> The description for this section. It will display at the top of this section.</div>
                                            <textarea id="descriptionLabel"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="font-weight-bold mb-3">APIs</div>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-sm btn-outline-primary"><i class="rbt-icon-plus"></i> API</button>
                                            </div>
                                        </div>
                                        <div class="card int-data-api">
                                            <div class="card-header border-bottom-0 p-1">
                                                <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#uniquekey1"> <i class="rbt-icon-chevron-right"></i> Unique key 1</button>
                                                <div class="int-accordion-controls">
                                                    <div class="dropdown">
                                                        <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span> </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2" aria-hidden="true" role="menu">
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
                                                    <label class="control-label" for="api1_UniqueKey"> Unique key </label>
                                                    <div class="" > This uniquely identifies this group on the whole verification. It is used to map up the live data pulled from the external application. Use this unique key in your data feed.</div>
                                                    <input id="api1_UniqueKey" aria-labelledby="api1_UniqueKey"  class="form-control" type="text" value="Unique key 1">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_liveDataEndpoint"> Live Data Endpoint </label>
                                                    <div> API Endpoint to pull Live Data </div>
                                                    <select  id="api1_liveDataEndpoint"  class="form-control" aria-label="Live Data Endpoint">
                                                        <option label="" value=""></option>
                                                        <option label="Demo API" value="number:1020">Demo API</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_callbackEndpoint"> Callback Endpoint </label>
                                                    <div> API Endpoint to call before submission is allowed </div>
                                                    <select  id="api1_callbackEndpoint"  class="form-control" aria-label="Live Data Endpoint">
                                                        <option label="" value=""></option>
                                                        <option value="" class="" selected="selected">yes</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_nameLabel">URL </label>
                                                    <div class="" > URL to the external application that allows action to be taken.</div>
                                                    <input id="api1_nameLabel" aria-labelledby="api1_nameLabel"  class="form-control" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_buttonLabel">Button label </label>
                                                    <div class="" > The label for the button that will launch the URL.</div>
                                                    <input id="api1_buttonLabel" aria-labelledby="api1_buttonLabel"  class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card int-data-api">
                                            <div class="card-header border-bottom-0 p-1">
                                                <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#uniquekey2"> <i class="rbt-icon-chevron-right"></i> Unique key 2</button>
                                                <div class="int-accordion-controls">
                                                    <div class="dropdown">
                                                        <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span> </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3" aria-hidden="true" role="menu">
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
                                                    <label class="control-label" for="api2_UniqueKey"> Unique key </label>
                                                    <div class="" > This uniquely identifies this group on the whole verification. It is used to map up the live data pulled from the external application. Use this unique key in your data feed.</div>
                                                    <input id="api2_UniqueKey" aria-labelledby="api2_UniqueKey"  class="form-control" type="text" value="Unique key 2">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_liveDataEndpoint"> Live Data Endpoint </label>
                                                    <div> API Endpoint to pull Live Data </div>
                                                    <select  id="api2_liveDataEndpoint"  class="form-control" aria-label="Live Data Endpoint">
                                                        <option label="" value=""></option>
                                                        <option label="Demo API" value="number:1020">Demo API</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_callbackEndpoint"> Callback Endpoint </label>
                                                    <div> API Endpoint to call before submission is allowed </div>
                                                    <select  id="api2_callbackEndpoint"  class="form-control" aria-label="Live Data Endpoint">
                                                        <option label="" value=""></option>
                                                        <option value="" class="" selected="selected">yes</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_nameLabel">URL </label>
                                                    <div class="" > URL to the external application that allows action to be taken.</div>
                                                    <input id="api2_nameLabel" aria-labelledby="api2_nameLabel"  class="form-control" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_buttonLabel">Button label </label>
                                                    <div class="" > The label for the button that will launch the URL.</div>
                                                    <input id="api2_buttonLabel" aria-labelledby="api2_buttonLabel"  class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id='datacard2' style="display: none">
                                <div class="" id="headingTwo">
                                    <h3 class="mb-2">
                                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <i class="rbt-icon-chevron-right"></i> <span id="data-name2-display">New set</span></button>
                                    </h3>
                                    <div class="int-accordion-controls">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="sr-only">Navigation menu</span> </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton11" aria-hidden="true" role="menu">
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
                                            <div> The name of this verification (displayed on the main verification page).</div>
                                            <input type="text" class="form-control"  id="data-name2" aria-describedby="data-name2" oninput='datamnameset2();datanamestore2();'>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="uniquekeyLabel2"> Unique Key </label>
                                            <div class="" > This uniquely identifies this section on the current verification.</div>
                                            <input id="uniquekeyLabel2" aria-labelledby="uniquekeyLabel2"  class="form-control" type="text">
                                        </div>
                                        <div class="font-weight-bold mb-2 ts-14">Sensitive Data</div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="maskdata1">
                                            <label class="form-check-label" for="maskdata1"> Mask this data for the user until the user takes action to unmask it. </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="descriptionLabel2"> Description (optional) </label>
                                            <div> The description for this section. It will display at the top of this section.</div>
                                            <textarea id="descriptionLabel2"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="font-weight-bold mb-3">APIs</div>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-sm btn-outline-primary"><i class="rbt-icon-plus"></i> API</button>
                                            </div>
                                        </div>
                                        <div class="card mt-3" style="margin-bottom: 3rem !important">
                                            <div class="card-body">
                                                <div class="ts-20 text-center"> No APIs specified.</div>
                                            </div>
                                        </div>
                                        
                                        <!--           <div class="card int-data-api">
                                            <div class="card-header border-bottom-0 p-1">
                                                <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#uniquekey11"> <i class="rbt-icon-chevron-right"></i> Unique key 1</button>
                                                <div class="int-accordion-controls">
                                                    <div class="dropdown">
                                                        <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span> </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton22" aria-hidden="true" role="menu">
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
                                            <div class="card-body collapse" data-parent="#child2" id="uniquekey11">
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_UniqueKey11"> Unique key </label>
                                                    <div class="" > This uniquely identifies this group on the whole verification. It is used to map up the live data pulled from the external application. Use this unique key in your data feed.</div>
                                                    <input id="api1_UniqueKey11" aria-labelledby="api1_UniqueKey11"  class="form-control" type="text" value="Unique key 1">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_liveDataEndpoint11"> Live Data Endpoint </label>
                                                    <div> API Endpoint to pull Live Data </div>
                                                    <select  id="api1_liveDataEndpoint11"  class="form-control" aria-label="Live Data Endpoint">
                                                        <option label="" value=""></option>
                                                        <option label="Demo API" value="number:1020">Demo API</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_callbackEndpoint11"> Callback Endpoint </label>
                                                    <div> API Endpoint to call before submission is allowed </div>
                                                    <select  id="api1_callbackEndpoint11"  class="form-control" aria-label="Live Data Endpoint">
                                                        <option label="" value=""></option>
                                                        <option value="" class="" selected="selected">yes</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_nameLabel11">URL </label>
                                                    <div class="" > URL to the external application that allows action to be taken.</div>
                                                    <input id="api1_nameLabel11" aria-labelledby="api1_nameLabel11"  class="form-control" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_buttonLabel11">Button label </label>
                                                    <div class="" > The label for the button that will launch the URL.</div>
                                                    <input id="api1_buttonLabel11" aria-labelledby="api1_buttonLabel11"  class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card int-data-api">
                                            <div class="card-header border-bottom-0 p-1">
                                                <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#uniquekey22"> <i class="rbt-icon-chevron-right"></i> Unique key 2</button>
                                                <div class="int-accordion-controls">
                                                    <div class="dropdown">
                                                        <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton33" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span> </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton33" aria-hidden="true" role="menu">
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
                                            <div class="card-body collapse" data-parent="#child2" id="uniquekey22">
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_UniqueKey22"> Unique key </label>
                                                    <div class="" > This uniquely identifies this group on the whole verification. It is used to map up the live data pulled from the external application. Use this unique key in your data feed.</div>
                                                    <input id="api2_UniqueKey22" aria-labelledby="api2_UniqueKey22"  class="form-control" type="text" value="Unique key 2">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_liveDataEndpoint22"> Live Data Endpoint </label>
                                                    <div> API Endpoint to pull Live Data </div>
                                                    <select  id="api2_liveDataEndpoint22"  class="form-control" aria-label="Live Data Endpoint">
                                                        <option label="" value=""></option>
                                                        <option label="Demo API" value="number:1020">Demo API</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_callbackEndpoint22"> Callback Endpoint </label>
                                                    <div> API Endpoint to call before submission is allowed </div>
                                                    <select  id="api2_callbackEndpoint22"  class="form-control" aria-label="Live Data Endpoint">
                                                        <option label="" value=""></option>
                                                        <option value="" class="" selected="selected">yes</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_nameLabel22">URL </label>
                                                    <div class="" > URL to the external application that allows action to be taken.</div>
                                                    <input id="api2_nameLabel22" aria-labelledby="api2_nameLabel22"  class="form-control" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_buttonLabel22">Button label </label>
                                                    <div class="" > The label for the button that will launch the URL.</div>
                                                    <input id="api2_buttonLabel22" aria-labelledby="api2_buttonLabel22"  class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>--> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rbt-button-group mt-3 mb-5" id="saveSetup"> <a href="admin-verification-new1.php" class="btn btn-outline-primary"> <i class="rbt-icon-chevron-left"></i> Previous </a> <a href="admin-verification-new3.php" class="btn btn-primary"> Next <i class="rbt-icon-chevron-right"></i> </a> </div>
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
</script> 
<script>
var simplemde = new SimpleMDE({ element: $("#descriptionLabel")[0] });
var simplemde = new SimpleMDE({ element: $("#descriptionLabel2")[0] });
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
