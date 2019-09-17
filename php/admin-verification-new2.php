<?php
$section = '';
$page_title = 'New verification';
$page_subtitle = 'Data';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<style type="text/css"></style>
<?php include('includes/styles-admin.php') ?>
</head>
<body>
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-5 mb-5">
    <main class="main-content" id="main-content">
        <h1 class="mb-6"> <?php echo $page_title; ?></h1>
        <div class="row">
            <div class="col-2 border-right">
                <ol class="rvb-steps rvb-steps--vertical" style="overflow-x:inherit">
                    <li class="rvb-steps__item"> <a href="admin-verification-new1.php" class="rvb-steps__item-content"> <span class="rvb-steps__label">Setup</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-gear"></i></span> </a> </li>
                    <li class="rvb-steps__item"> <a href="admin-verification-new2.php" class="rvb-steps__item-content" aria-current="step"><span class="rvb-steps__item-content" aria-current="step"> <span class="rvb-steps__label">Data</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-clipboard"></i></span> </span> </a></li>
                    <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Recipients</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-users-group-solid"></i> </span> </span> </li>
                    <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Scheduling</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-calendar"></i></span> </span> </li>
                    <li class="rvb-steps__item"> <span class="rvb-steps__item-content"> <span class="rvb-steps__label">Review/Save</span> <span class="rvb-steps__indicator"> <i class="rbt-icon-eye"></i> </span> </li>
                </ol>
            </div>
            <div class="col-10 pl-5">
                <h2 class="mb-3"><?php echo $page_subtitle; ?></h2>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="rbt-collapse-accordion" id="accordion">
                            <div class="card">
                                <div class="" id="headingOne">
                                    <h3 class="mb-2" id="headingOne">
                                        <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> <i class="rbt-icon-chevron-right"></i> <span id="data-name-display">New set</span></button>
                                    </h3>
                                    <div class="int-accordion-controls">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span> </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" aria-hidden="true" role="menu"> <a class="dropdown-item" href="#">Move to top</a> <a class="dropdown-item" href="#">Move up</a> <a class="dropdown-item" href="#">Move down</a> <a class="dropdown-item" href="#">Move to bottom</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Delete </a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body" id="child1">
                                        <div class="form-group">
                                            <label class="control-label" for="nameLabel"> Name </label>
                                            <div class="" id="nameLabel"> The name of this verification (displayed on the main verification page).</div>
                                            <input type="text" class="form-control"  id="data-name" aria-describedby="nameLabel" oninput='datamnameset();datanamestore();'>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="uniquekeyLabel"> Unique Key </label>
                                            <div class="" id="uniquekeyLabel"> This uniquely identifies this section on the current verification.</div>
                                            <input aria-labelledby="uniquekeyLabel"  class="form-control" formcontrolname="uniqueid" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="descriptionLabel"> Description (optional) </label>
                                            <div class="" id=""> The description for this section. It will display at the top of this section.</div>
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
                                                        <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span> </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" aria-hidden="true" role="menu"> <a class="dropdown-item" href="#">Move to top</a> <a class="dropdown-item" href="#">Move up</a> <a class="dropdown-item" href="#">Move down</a> <a class="dropdown-item" href="#">Move to bottom</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Delete </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child1" id="uniquekey1">
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_UniqueKey"> Unique key </label>
                                                    <div class="" id="api1_UniqueKey"> This uniquely identifies this group on the whole verification. It is used to map up the live data pulled from the external application. Use this unique key in your data feed.</div>
                                                    <input aria-labelledby="api1_UniqueKey"  class="form-control" formcontrolname="name" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_liveDataEndpoint"> Live Data Endpoint </label>
                                                    <div class="" id=""> API Endpoint to pull Live Data </div>
                                                    <select  id="api1_liveDataEndpoint"  class="form-control" aria-label="Live Data Endpoint">
                                                        <option value="" class=""></option>
                                                        <option label="Demo API" value="number:1020">Demo API</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_callbackEndpoint"> Callback Endpoint </label>
                                                    <div class="" id=""> API Endpoint to call before submission is allowed </div>
                                                    <select  id="api1_callbackEndpoint"  class="form-control" aria-label="Live Data Endpoint">
                                                        <option value="" class=""></option>
                                                        <option value="" class="" selected="selected"></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_nameLabel">URL </label>
                                                    <div class="" id="api1_nameLabel"> URL to the external application that allows action to be taken.</div>
                                                    <input aria-labelledby="api1_nameLabel"  class="form-control" formcontrolname="name" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api1_buttonLabel">Button label </label>
                                                    <div class="" id="api1_buttonLabel"> The label for the button that will launch the URL.</div>
                                                    <input aria-labelledby="api1_buttonLabel"  class="form-control" formcontrolname="name" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card int-data-api">
                                            <div class="card-header border-bottom-0 p-1">
                                                <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#uniquekey2"> <i class="rbt-icon-chevron-right"></i> Unique key 2</button>
                                                <div class="int-accordion-controls">
                                                    <div class="dropdown">
                                                        <button class="dropdown-toggle rbt-btn-nostyle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Navigation menu</span> </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" aria-hidden="true" role="menu"> <a class="dropdown-item" href="#">Move to top</a> <a class="dropdown-item" href="#">Move up</a> <a class="dropdown-item" href="#">Move down</a> <a class="dropdown-item" href="#">Move to bottom</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Delete </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child1" id="uniquekey2">
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_UniqueKey"> Unique key </label>
                                                    <div class="" id="api2_UniqueKey"> This uniquely identifies this group on the whole verification. It is used to map up the live data pulled from the external application. Use this unique key in your data feed.</div>
                                                    <input aria-labelledby="api2_UniqueKey"  class="form-control" formcontrolname="name" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_liveDataEndpoint"> Live Data Endpoint </label>
                                                    <div class="" id=""> API Endpoint to pull Live Data </div>
                                                    <select  id="api2_liveDataEndpoint"  class="form-control" aria-label="Live Data Endpoint">
                                                        <option value="" class=""></option>
                                                        <option label="Demo API" value="number:1020">Demo API</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_callbackEndpoint"> Callback Endpoint </label>
                                                    <div class="" id=""> API Endpoint to call before submission is allowed </div>
                                                    <select  id="api2_callbackEndpoint"  class="form-control" aria-label="Live Data Endpoint">
                                                        <option value="" class=""></option>
                                                        <option value="" class="" selected="selected"></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_nameLabel">URL </label>
                                                    <div class="" id="api2_nameLabel"> URL to the external application that allows action to be taken.</div>
                                                    <input aria-labelledby="api2_nameLabel"  class="form-control" formcontrolname="name" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="api2_buttonLabel">Button label </label>
                                                    <div class="" id="api2_buttonLabel"> The label for the button that will launch the URL.</div>
                                                    <input aria-labelledby="api2_buttonLabel"  class="form-control" formcontrolname="name" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <hr>
                        <div class="rbt-button-group mt-3 mb-5" id="saveSetup"> <a href="admin-verification-new1.php" class="btn btn-outline-primary"> <i class="rbt-icon-chevron-left"></i> Previous </a> <a href="#" class="btn btn-primary"> Next <i class="rbt-icon-chevron-right"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
<script>
  $(document).ready(function(){
    $(".rvb-steps").sticky({topSpacing:0});
  });
</script> 
<script>
var simplemde = new SimpleMDE({ element: $("#descriptionLabel")[0] });
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

</script>
</body>
</html>
