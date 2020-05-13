<?php
$section = '';
$page_title = 'CampusConfirm';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-main.php') ?>
<style>
.highlight-object {
    outline-style: dotted;
    outline-offset: 4px;
}
.demojs_validation {
    display: none !important;
}
.alert.alert-inline.demojs_validation {
    display: none !important;
}
</style>
</head>
<body class="int-user">
<main class="rbt-shell-main d-lg-flex" style="max-width:inherit">
    <div class="rbt-shell">
        <div class="rbt-shell-sidebar d-none d-md-block" style="box-shadow: 0 1px 3px 2px rgba(0, 0, 0, 0.07); flex-basis: 30rem;width: 30rem; position:relative; overflow: inherit;transition: all 0.3s ease; ">
            <button class="int-themehandle" id="demojs-themehandle"><i class="rbt-icon-chevron-left"></i></button>
            <h2 class="mb-5 mt-5">Customize theme</h2>
            <div class="alert alert-inline alert-danger mb-3 demojs_validation" role="alert" ><span class="rbt-icon-exclamation" aria-hidden="true"></span>
                <p class="rbt-ts-14" id="standalone4	"> Please correct any errors before resubmitting.</p>
            </div>
            <div class="demo-theme-builder">
                <nav class="newsidebar-nav" id="theme_nav">
                    <button type="button" class="btn btn-link btn-block border d-flex align-items-center mb-3 text-body demojs_show_theme_colors">
                    <div class="font-weight-normal flex-grow-1 text-left">Colors</div>
                    <i class="rbt-icon-exclamation mb-0 ml-auto text-danger demojs_validation"></i>
                    <div class="ml-3 mt-1"><i class="rbt-icon-chevron-right mb-0"></i></div>
                    </button>
                    <button type="button" class="btn btn-link btn-block border d-flex align-items-center mb-3 text-body demojs_show_theme_name">
                    <div class="font-weight-normal flex-grow-1 text-left">Name</div>
                    <i class="rbt-icon-exclamation mb-0 ml-auto text-danger demojs_validation"></i>
                    <div class="ml-3 mt-1"><i class="rbt-icon-chevron-right mb-0"></i></div>
                    </button>
                    <button type="button" class="btn btn-link btn-block border d-flex align-items-center mb-3 text-body demojs_show_theme_applogo">
                    <div class="font-weight-normal flex-grow-1 text-left">Application logo</div>
                    <i class="rbt-icon-exclamation mb-0 ml-auto text-danger demojs_validation"></i>
                    <div class="ml-3 mt-1"><i class="rbt-icon-chevron-right mb-0"></i></div>
                    </button>
                    <button type="button" class="btn btn-link btn-block border d-flex align-items-center mb-3 text-body demojs_show_theme_appicons">
                    <div class="font-weight-normal flex-grow-1 text-left">Application icons</div>
                    <i class="rbt-icon-exclamation mb-0 ml-auto text-danger demojs_validation"></i>
                    <div class="ml-3 mt-1"><i class="rbt-icon-chevron-right mb-0"></i></div>
                    </button>
                    <button type="button" class="btn btn-link btn-block border d-flex align-items-center mb-3 text-body demojs_show_theme_customheadfoot">
                    <div class="font-weight-normal flex-grow-1 text-left">Custom header &amp; footer</div>
                    <i class="rbt-icon-exclamation mb-0 ml-auto text-danger demojs_validation"></i>
                    <div class="ml-3 mt-1"><i class="rbt-icon-chevron-right mb-0"></i></div>
                    </button>
                    <button type="button" class="btn btn-link btn-block border d-flex align-items-center mb-3 text-body demojs_show_theme_fontfamily">
                    <div class="font-weight-normal flex-grow-1 text-left">Font family</div>
                    <i class="rbt-icon-exclamation mb-0 ml-auto text-danger demojs_validation"></i>
                    <div class="ml-3 mt-1"><i class="rbt-icon-chevron-right mb-0"></i></div>
                    </button>
                    <button type="button" class="btn btn-link btn-block border d-flex align-items-center mb-3 text-body demojs_show_theme_fontsize">
                    <div class="font-weight-normal flex-grow-1 text-left">Font size</div>
                    <i class="rbt-icon-exclamation mb-0 ml-auto text-danger demojs_validation"></i>
                    <div class="ml-3 mt-1"><i class="rbt-icon-chevron-right mb-0"></i></div>
                    </button>
                    <button type="button" class="btn btn-link btn-block border d-flex align-items-center mb-3 text-body demojs_show_theme_marginradius">
                    <div class="font-weight-normal flex-grow-1 text-left">Margin &amp; radius</div>
                    <i class="rbt-icon-exclamation mb-0 ml-auto text-danger demojs_validation"></i>
                    <div class="ml-3 mt-1"><i class="rbt-icon-chevron-right mb-0"></i></div>
                    </button>
                </nav>
                <div class="newsidebar-section" id="theme_colors" style="display: none">
                    <div class="newsidebar-section-content card">
                        <div class="card-header d-flex align-items-center p-0" style="padding-left: 5px">
                            <button class="btn btn-link text-body p-2 mr-1 demojs_backtothemenav"><i class="rbt-icon-chevron-left ts-20" style="margin-top: 8px;"></i><span class="sr-only">Back to categories</span></button>
                            <h3 class="newsidebar-section-header mb-0 ts-20 mb-0 ts-20">Colors</h3>
                        </div>
                        <div class="card-body">
                            <div class="border-bottom pb-3 mb-3">
                                <div class="mb-2 font-weight-bold ts-14"> Color palettes</div>
                                <button data-theme="white" style="background-color: #eaeaea"> white </button>
                                <button data-theme="brown" style="background-color: #fdf7eb"> brown </button>
                                <button data-theme="yellow" style="background-color: #ffe08f"> yellow </button>
                                <button data-theme="blue" style="background-color: #01a9c9"> blue </button>
                                <button data-theme="red" style="background-color: #990000"> red </button>
                                <button data-theme="purple" style="background-color: #62449b"> purple </button>
                                <button data-theme="black" style="background-color: #222"> black </button>
                            </div>
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="body-bg-color" class="font-weight-bold ts-14 mb-2">Body background color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="body-bg-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="body-bg-color-hexcolor">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="body-text-color" class="font-weight-bold ts-14 mb-2">Body text color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="body-text-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="body-text-color-hexcolor">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="panel-bg-color" class="font-weight-bold ts-14 mb-2">Panel background color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="panel-bg-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="panel-bg-color-hexcolor">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="panel-text-color" class="font-weight-bold ts-14 mb-2">Panel text color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="panel-text-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="panel-text-color-hexcolor">
                                    </div>
                                    <div class="alert alert-inline alert-danger mb-3 demojs_validation mt-0" role="alert" style="margin-top: 0px !important" ><span class="rbt-icon-exclamation" aria-hidden="true"></span>
                                        <p class="rbt-ts-14" id="standalone4"> Please provide a valid hex value for this color (e.g. #990000).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="action-color" class="font-weight-bold ts-14 mb-2">Action color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="action-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="action-color-hexcolor">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="border-color" class="font-weight-bold ts-14 mb-2">Border color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="border-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="border-color-hexcolor">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between my-3">
                        <div></div>
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_name font-weight-normal" id="">Next <i class="rbt-icon-chevron-right ts-14"></i></button>
                        </div>
                    </div>
                </div>
                <div class="newsidebar-section" id="theme_name"  style="display: none">
                    <div class="newsidebar-section-content card">
                        <div class="card-header d-flex align-items-center p-0" style="padding-left: 5px">
                            <button class="btn btn-link text-body p-2 mr-1 demojs_backtothemenav"><i class="rbt-icon-chevron-left ts-20" style="margin-top: 8px;"></i><span class="sr-only">Back to categories</span></button>
                            <h3 class="newsidebar-section-header mb-0 ts-20 mb-0 ts-20">Name</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="d-flex">
                                    <label for="org-name" class=" font-weight-bold">Organization name </label>
                                </div>
                                <countdown>
                                    <div class="rbt-charcount">
                                        <input aria-labelledby="org-name" class="form-control mb-2" formcontrolname="title" id="org-name" aria-describedby="textinput" oninput='orgnameset();orgnamestore();'>
                                        <div class="alert alert-inline alert-danger mb-3 demojs_validation mt-0" role="alert" style="margin-top: 0px !important" ><span class="rbt-icon-exclamation" aria-hidden="true"></span>
                                            <p class="rbt-ts-14" id="standalone4"> Character count exceeds the maximum allowed limit.</p>
                                        </div>
                                        <span class="badge badge-success" id="org-name_badge"> <span id="org-name_counter">40</span> </span> </div>
                                </countdown>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="showonpage-orgname" value="option1" checked>
                                    <label class="form-check-label font-weight-normal" for="showonpage-orgname">Show on page</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="caps-orgname" value="option2">
                                    <label class="form-check-label font-weight-normal" for="caps-orgname">All caps</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="app-name" class=" font-weight-bold">Application name <span class="font-weight-normal ts-12">(required)</span></label>
                                <countdown>
                                    <div class="rbt-charcount">
                                        <input aria-labelledby="app-name" value="CampusConfirm" class="form-control mb-2" formcontrolname="title" id="app-name" aria-describedby="textinput" oninput='appnameset();appnamestore();'>
                                        <span class="badge badge-success" id="app-name_badge"> <span id="app-name_counter">40</span> </span> </div>
                                </countdown>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="showonpage-appname" value="option1" checked>
                                    <label class="form-check-label font-weight-normal" for="showonpage-appname">Show on page</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="caps-appname" value="option2">
                                    <label class="form-check-label font-weight-normal" for="caps-appname">All caps</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between my-3">
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_colors font-weight-normal" id=""><i class="rbt-icon-chevron-left ts-14"></i> Previous </button>
                        </div>
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_applogo font-weight-normal" id="">Next <i class="rbt-icon-chevron-right ts-14"></i></button>
                        </div>
                    </div>
                </div>
                <div class="newsidebar-section" id="theme_applogo"  style="display: none">
                    <div class="newsidebar-section-content card">
                        <div class="card-header d-flex align-items-center p-0" style="padding-left: 5px">
                            <button class="btn btn-link text-body p-2 mr-1 demojs_backtothemenav"><i class="rbt-icon-chevron-left ts-20" style="margin-top: 8px;"></i><span class="sr-only">Back to categories</span></button>
                            <h3 class="newsidebar-section-header mb-0 ts-20 mb-0 ts-20">Application logo</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="chooselogoimage" class="font-weight-bold ts-16">Logo source</label>
                                <select class="form-control mb-3" id="chooselogoimage">
                                    <option value="default">Default logo</option>
                                    <option value="upload">Upload logo</option>
                                    <option value="none">None</option>
                                </select>
                            </div>
                            <div class="card demojs_defaultimages" >
                                <div class="card-body text-center"> <img src="../img/logo-red.png" alt=""/ style="max-height: 70px"> </div>
                            </div>
                            <div class="form-group demojs-logourl" style="display: none">
                                <div class="mb-3">
                                    <div class="mb-2 font-weight-bold ts-14">For large screens <span class="ts-12 font-weight-normal">(required)</span></div>
                                    <div class="int-fielddescription"> For best results, the large screen logo should have a height of 72px, and a width that does not exceed 450px.</div>
                                    <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" >
                                        <image-upload >
                                            <div  filedrop="" class="img-ul"  >
                                                <div  class="img-ul-file-upload img-ul-hr-inline-group" >
                                                    <label  class="img-ul-upload img-ul-button" tabindex="0"> <span >Upload Image</span>
                                                        <input  multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                    </label>
                                                    <label  class="img-ul-clear img-ul-button"> <span >Clear</span> </label>
                                                </div>
                                            </div>
                                        </image-upload>
                                        <div class="img-preview rbt-checkered-bg" draggable="false" style="cursor: pointer;">
                                            <div draggable="true" style="cursor: move;" class=""> <img alt="" tabindex="0" src="http://www.indiana.edu/~espd/rvb/develop/img/trident-large.png" class="">
                                                <button class="btn btn-sm btn-outline-primary"> <i class="rbt-icon-close"></i> <span class="sr-only">
                                                <message key="global.buttons.delete">Delete</message>
                                                </span> </button>
                                            </div>
                                        </div>
                                        <div class="alert alert-inline alert-danger mb-3 demojs_validation" role="alert" style="margin-top: 0px !important" ><span class="rbt-icon-exclamation" aria-hidden="true"></span>
                                            <p class="rbt-ts-14" id="standalone4"> File size must be less than 2mb.</p>
                                        </div>
                                    </ccf-image-upload>
                                </div>
                                <div class="mb-3">
                                    <div class="mb-2 font-weight-bold ts-14">For small screens </div>
                                    <div class="int-fielddescription"> For best results, the small screen logo should have a height of 48px, and a width that does not exceed 300px.</div>
                                    <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" >
                                        <image-upload >
                                            <div  filedrop="" class="img-ul"  >
                                                <div  class="img-ul-file-upload img-ul-hr-inline-group" >
                                                    <label  class="img-ul-upload img-ul-button" tabindex="0"> <span >Upload Image</span>
                                                        <input  multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                    </label>
                                                    <label  class="img-ul-clear img-ul-button"> <span >Clear</span> </label>
                                                </div>
                                            </div>
                                        </image-upload>
                                        <div class="img-preview rbt-checkered-bg" draggable="false" style="cursor: pointer;">
                                            <div draggable="true" style="cursor: move;" class=""> <img alt="" tabindex="0" src="http://www.indiana.edu/~espd/rvb/develop/img/trident-large.png" class="">
                                                <button class="btn btn-sm btn-outline-primary"> <i class="rbt-icon-close"></i> <span class="sr-only">
                                                <message key="global.buttons.delete">Delete</message>
                                                </span> </button>
                                            </div>
                                        </div>
                                    </ccf-image-upload>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between my-3">
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_name font-weight-normal" id=""><i class="rbt-icon-chevron-left ts-14"></i> Previous </button>
                        </div>
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_appicons font-weight-normal" id="">Next <i class="rbt-icon-chevron-right ts-14"></i></button>
                        </div>
                    </div>
                </div>
                <div class="newsidebar-section" id="theme_appicons"  style="display: none">
                    <div class="newsidebar-section-content card">
                        <div class="card-header d-flex align-items-center p-0" style="padding-left: 5px">
                            <button class="btn btn-link text-body p-2 mr-1 demojs_backtothemenav"><i class="rbt-icon-chevron-left ts-20" style="margin-top: 8px;"></i><span class="sr-only">Back to categories</span></button>
                            <h3 class="newsidebar-section-header mb-0 ts-20 mb-0 ts-20">Application icons</h3>
                        </div>
                        <div class="card-body">
                            <div class="ts-14 font-italic mb-3 mt-3"> Note - application icons are used for bookmarks, browser tab icons, etc, and are not displayed here in the theming tool. </div>
                            <div class="form-group">
                                <label>Favicon icon</label>
                                <div class="int-fielddescription">Icon to display as the favicon. This must be an .ico file.</div>
                                <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" >
                                    <image-upload >
                                        <div  filedrop="" class="img-ul"  >
                                            <div  class="img-ul-file-upload img-ul-hr-inline-group" >
                                                <label  class="img-ul-upload img-ul-button" tabindex="0"> <span >Upload</span>
                                                    <input  multiple type="file">
                                                </label>
                                            </div>
                                        </div>
                                    </image-upload>
                                    <div class="img-preview" draggable="false" style="cursor: pointer;"> </div>
                                    <div class="alert alert-inline alert-danger mb-3 demojs_validation mt-0" role="alert" style="margin-top: 0px !important" ><span class="rbt-icon-exclamation" aria-hidden="true"></span>
                                        <p class="rbt-ts-14" id="standalone4"> File must be an .ico format.</p>
                                    </div>
                                </ccf-image-upload>
                            </div>
                            <div class="form-group">
                                <label>Favicon image</label>
                                <div class="int-fielddescription">For best results, image should be a minimum of 196x196 pixels.</div>
                                <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" >
                                    <image-upload >
                                        <div  filedrop="" class="img-ul"  >
                                            <div  class="img-ul-file-upload img-ul-hr-inline-group" >
                                                <label  class="img-ul-upload img-ul-button" tabindex="0"> <span >Upload</span>
                                                    <input  multiple type="file">
                                                </label>
                                            </div>
                                        </div>
                                    </image-upload>
                                    <div class="img-preview" draggable="false" style="cursor: pointer;"> </div>
                                </ccf-image-upload>
                            </div>
                            <div class="form-group">
                                <label>iOS homescreen shortcut image</label>
                                <div class="int-fielddescription">For best results, image should be 180x180 pixels.</div>
                                <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" >
                                    <image-upload >
                                        <div  filedrop="" class="img-ul"  >
                                            <div  class="img-ul-file-upload img-ul-hr-inline-group" >
                                                <label  class="img-ul-upload img-ul-button" tabindex="0"> <span >Upload</span>
                                                    <input  multiple type="file">
                                                </label>
                                            </div>
                                        </div>
                                    </image-upload>
                                    <div class="img-preview" draggable="false" style="cursor: pointer;"> </div>
                                </ccf-image-upload>
                            </div>
                            <div class="form-group">
                                <label>MS Tile image (square - 310x310 px)</label>
                                <div class="int-fielddescription">Image to display as the Microsoft tile for size 310x310. The image should represent a solid white icon with a transparent background.</div>
                                <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" >
                                    <image-upload >
                                        <div  filedrop="" class="img-ul"  >
                                            <div  class="img-ul-file-upload img-ul-hr-inline-group" >
                                                <label  class="img-ul-upload img-ul-button" tabindex="0"> <span >Upload</span>
                                                    <input  multiple type="file">
                                                </label>
                                            </div>
                                        </div>
                                    </image-upload>
                                    <div class="img-preview mstile-bg-color" draggable="false" style="cursor: pointer;">
                                        <div draggable="true" style="cursor: move;" class=""> <img alt="" tabindex="0" src="http://via.placeholder.com/310x310" class="">
                                            <button class="btn btn-sm btn-outline-primary"> <i class="rbt-icon-close"></i> <span class="sr-only">
                                            <message key="global.buttons.delete">Delete</message>
                                            </span> </button>
                                        </div>
                                    </div>
                                </ccf-image-upload>
                            </div>
                            <div class="form-group">
                                <label>MS Tile image (wide - 310x150 px)</label>
                                <div class="int-fielddescription">Image to display as the Microsoft tile for size 310x150. The image should represent a solid white icon with a transparent background.</div>
                                <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" >
                                    <image-upload >
                                        <div  filedrop="" class="img-ul"  >
                                            <div  class="img-ul-file-upload img-ul-hr-inline-group" >
                                                <label  class="img-ul-upload img-ul-button" tabindex="0"> <span >Upload</span>
                                                    <input  multiple type="file">
                                                </label>
                                            </div>
                                        </div>
                                    </image-upload>
                                    <div class="img-preview mstile-bg-color" draggable="false" style="cursor: pointer;">
                                        <div draggable="true" style="cursor: move;" class=""> <img alt="" tabindex="0" src="http://via.placeholder.com/310x150" class="">
                                            <button class="btn btn-sm btn-outline-primary"> <i class="rbt-icon-close"></i> <span class="sr-only">
                                            <message key="global.buttons.delete">Delete</message>
                                            </span> </button>
                                        </div>
                                    </div>
                                </ccf-image-upload>
                            </div>
                            <div class="form-group colorpick" style="margin-bottom: .5rem !important">
                                <label for="mstile-bg-color" class="font-weight-bold ts-14 mb-2">MS Tile background color</label>
                                <div class="input-group">
                                    <input type="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control mb-3 d-inline" id="mstile-bg-color" value="#444444">
                                    <div class="input-group-append">
                                        <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" class="form-control d-inline w-75" value="" id="mstile-bg-color-hexcolor">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between my-3">
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_applogo font-weight-normal" id=""><i class="rbt-icon-chevron-left ts-14"></i> Previous </button>
                        </div>
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_customheadfoot font-weight-normal" id="">Next <i class="rbt-icon-chevron-right ts-14"></i></button>
                        </div>
                    </div>
                </div>
                <div class="newsidebar-section" id="theme_customheadfoot"  style="display: none">
                    <div class="newsidebar-section-content card">
                        <div class="card-header d-flex align-items-center p-0" style="padding-left: 5px">
                            <button class="btn btn-link text-body p-2 mr-1 demojs_backtothemenav"><i class="rbt-icon-chevron-left ts-20" style="margin-top: 8px;"></i><span class="sr-only">Back to categories</span></button>
                            <h3 class="newsidebar-section-header mb-0 ts-20 mb-0 ts-20">Custom header &amp; footer</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="header_html">Header HTML</label>
                                <div class="input-group">
                                    <textarea class="form-control" aria-label="header_html" id="header_html" rows="5" oninput='headerhtml_set();headerhtml_store();'></textarea>
                                    <div class="input-group-append"> <span class="input-group-text p-0">
                                        <button class="btn btn-link btn-sm d-block w-100 h-100" ><span class="rbt-icon-sync"></span><span class="sr-only">Edit</span></button>
                                        </span> </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="footer_html">Footer HTML</label>
                                <div class="input-group">
                                    <textarea class="form-control" aria-label="header_html" id="footer_html" rows="5" oninput='footerhtml_set();footerhtml_store();'></textarea>
                                    <div class="input-group-append"> <span class="input-group-text p-0">
                                        <button class="btn btn-link btn-sm d-block w-100 h-100" ><span class="rbt-icon-sync"></span><span class="sr-only">Edit</span></button>
                                        </span> </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="headerfooter_css">Header/footer CSS</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="headerfooter_css" rows="5"></textarea>
                                    <div class="input-group-append"> <span class="input-group-text p-0">
                                        <button class="btn btn-link btn-sm d-block w-100 h-100" ><span class="rbt-icon-sync"></span><span class="sr-only">Edit</span></button>
                                        </span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between my-3">
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_appicons font-weight-normal" id=""><i class="rbt-icon-chevron-left ts-14"></i> Previous </button>
                        </div>
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_fontfamily font-weight-normal" id="">Next <i class="rbt-icon-chevron-right ts-14"></i></button>
                        </div>
                    </div>
                </div>
                <div class="newsidebar-section" id="theme_fontfamily"  style="display: none">
                    <div class="newsidebar-section-content card">
                        <div class="card-header d-flex align-items-center p-0" style="padding-left: 5px">
                            <button class="btn btn-link text-body p-2 mr-1 demojs_backtothemenav"><i class="rbt-icon-chevron-left ts-20" style="margin-top: 8px;"></i><span class="sr-only">Back to categories</span></button>
                            <h3 class="newsidebar-section-header mb-0 ts-20 mb-0 ts-20">Font family</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="font_header">Header font face</label>
                                <select class="form-control mb-3" id="font_header">
                                    <option value="Arial, Helvetica, sans-serif">Sans-Serif Arial, Helvetica, sans-serif</option>
                                    <option value="'Arial Black', Gadget, sans-serif">Sans-Serif 'Arial Black', Gadget, sans-serif</option>
                                    <option value="Impact, Charcoal, sans-serif">Sans-Serif Impact, Charcoal, sans-serif</option>
                                    <option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Sans-Serif 'Lucida Sans Unicode', 'Lucida Grande', sans-serif</option>
                                    <option value="Tahoma, Geneva, sans-serif">Sans-Serif Tahoma, Geneva, sans-serif</option>
                                    <option value="'Trebuchet MS', Helvetica, sans-serif">Sans-Serif 'Trebuchet MS', Helvetica, sans-serif</option>
                                    <option value="Verdana, Geneva, sans-serif">Sans-Serif Verdana, Geneva, sans-serif</option>
                                    <option value="Georgia, serif">Serif Georgia, serif</option>
                                    <option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif">Serif 'Palatino Linotype', 'Book Antiqua', Palatino, serif</option>
                                    <option value="'Times New Roman', Times, serif">Serif 'Times New Roman', Times, serif</option>
                                    <option value="'BentonSans', 'Helvetica Neue', 'Helvetica', sans-serif"> Benton (prototype only)</option>
                                    <option value="demojs-customheaderfont"> Use Custom Font</option>
                                </select>
                            </div>
                            <div class="form-group demojs-customheaderfont" style="display: none">
                                <label for="custom_headerfontname">Font family name</label>
                                <div class="int-fielddescription">Specify the name of this custom font. You may also provide fallback fonts to your custom font by separating each name with commas.</div>
                                <input type="text" class="form-control" id="custom_headerfontname" aria-describedby="textinput"  placeholder="e.g.: 'CustomFontName', sans-serif;'">
                                <div class="alert alert-inline alert-danger mb-3 demojs_validation" role="alert" style="margin-top: .5rem !important" ><span class="rbt-icon-exclamation" aria-hidden="true"></span>
                                    <p class="rbt-ts-14" id="standalone4"> Please provide a custom font family name.</p>
                                </div>
                            </div>
                            <div class="form-group demojs-customheaderfont" style="display: none">
                                <label for="custom_headerfontweight">Weight</label>
                                <div class="int-fielddescription">Specify the weight of this custom font.</div>
                                <select class="form-control" id="custom_headerfontweight">
                                    <option value="NORMAL">normal</option>
                                    <option value="BOLD">bold</option>
                                    <option value="W_100">100</option>
                                    <option value="W_200">200</option>
                                    <option value="W_300">300</option>
                                    <option value="W_400">400</option>
                                    <option value="W_500">500</option>
                                    <option value="W_600">600</option>
                                    <option value="W_700">700</option>
                                    <option value="W_800">800</option>
                                    <option value="W_900">900</option>
                                </select>
                            </div>
                            <div class="form-group demojs-customheaderfont" style="display: none">
                                <label for="custom_headerfontstyle">Style</label>
                                <div class="int-fielddescription">Specify the style of this custom font.</div>
                                <select class="form-control" id="custom_headerfontstyle">
                                    <option value="NORMAL">normal</option>
                                    <option value="ITALIC">italic</option>
                                    <option value="OBLIQUE">oblique</option>
                                </select>
                            </div>
                            <div class="row mb-2 demojs-customheaderfont" style="display: none">
                                <div class="col">
                                    <div class="ts-14 font-weight-bold mr-auto">Header font file sources</div>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-sm rbt-btn-link text-primary" data-toggle="modal" data-target="#custom_headerfont_urls"><span class="sr-only">Edit</span> <i class="rbt-icon-pencil"></i> </button>
                                </div>
                            </div>
                            <div class="card demojs-customheaderfont mb-3" style="display: none">
                                <ul class="int-fontlinks list-group list-group-flush rbt-list-group-compact">
                                    <li class="list-group-item"><code>https://fonts.iu.edu/fonts/benton-sans-regular.eot</code> </li>
                                    <li class="list-group-item"><code>https://fonts.iu.edu/fonts/benton-sans-regular.woff</code> </li>
                                    <li class="list-group-item"><code>https://fonts.iu.edu/fonts/benton-sans-regular.ttf</code> </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label for="font_body">Body font face</label>
                                    <button class="btn btn-sm btn-link ts-12 font-italic font-weight-normal p-1 mb-2">Same as header</button>
                                </div>
                                <select class="form-control mb-3" id="font_body">
                                    <option value="Arial, Helvetica, sans-serif">Sans-Serif Arial, Helvetica, sans-serif</option>
                                    <option value="'Arial Black', Gadget, sans-serif">Sans-Serif 'Arial Black', Gadget, sans-serif</option>
                                    <option value="Impact, Charcoal, sans-serif">Sans-Serif Impact, Charcoal, sans-serif</option>
                                    <option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Sans-Serif 'Lucida Sans Unicode', 'Lucida Grande', sans-serif</option>
                                    <option value="Tahoma, Geneva, sans-serif">Sans-Serif Tahoma, Geneva, sans-serif</option>
                                    <option value="'Trebuchet MS', Helvetica, sans-serif">Sans-Serif 'Trebuchet MS', Helvetica, sans-serif</option>
                                    <option value="Verdana, Geneva, sans-serif">Sans-Serif Verdana, Geneva, sans-serif</option>
                                    <option value="Georgia, serif">Serif Georgia, serif</option>
                                    <option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif">Serif 'Palatino Linotype', 'Book Antiqua', Palatino, serif</option>
                                    <option value="'Times New Roman', Times, serif">Serif 'Times New Roman', Times, serif</option>
                                    <option value="'BentonSans', 'Helvetica Neue', 'Helvetica', sans-serif"> Benton (prototype only)</option>
                                    <option value="demojs-custombodyfont"> Use Custom Font</option>
                                </select>
                            </div>
                            <div class="form-group demojs-custombodyfont" style="display: none">
                                <label for="custom_bodyfontname">Font family name</label>
                                <div class="int-fielddescription">Specify the name of this custom font. You may also provide fallback fonts to your custom font by separating each name with commas.</div>
                                <input type="text" class="form-control" id="custom_bodyfontname" aria-describedby="textinput">
                                <div class="alert alert-inline alert-danger mb-3 demojs_validation" role="alert" style="margin-top: .5rem !important" ><span class="rbt-icon-exclamation" aria-hidden="true"></span>
                                    <p class="rbt-ts-14" id="standalone4"> Please provide a custom font family name.</p>
                                </div>
                            </div>
                            <div class="form-group demojs-custombodyfont" style="display: none">
                                <label for="custom_bodyfontweight">Weight</label>
                                <div class="int-fielddescription">Specify the weight of this custom font.</div>
                                <select class="form-control" id="custom_bodyfontweight">
                                    <option value="NORMAL">normal</option>
                                    <option value="BOLD">bold</option>
                                    <option value="W_100">100</option>
                                    <option value="W_200">200</option>
                                    <option value="W_300">300</option>
                                    <option value="W_400">400</option>
                                    <option value="W_500">500</option>
                                    <option value="W_600">600</option>
                                    <option value="W_700">700</option>
                                    <option value="W_800">800</option>
                                    <option value="W_900">900</option>
                                </select>
                            </div>
                            <div class="form-group demojs-custombodyfont" style="display: none">
                                <label for="custom_bodyfontstyle">Style</label>
                                <div class="int-fielddescription">Specify the style of this custom font.</div>
                                <select class="form-control" id="custom_bodyfontstyle">
                                    <option value="NORMAL">normal</option>
                                    <option value="ITALIC">italic</option>
                                    <option value="OBLIQUE">oblique</option>
                                </select>
                            </div>
                            <div class="row mb-2 demojs-custombodyfont" style="display: none">
                                <div class="col">
                                    <div class="ts-14 font-weight-bold mr-auto">Body font file sources</div>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-sm rbt-btn-link text-primary" data-toggle="modal" data-target="#custom_bodyfont_urls"><span class="sr-only">Edit</span> <i class="rbt-icon-pencil"></i> </button>
                                </div>
                            </div>
                            <div class="card demojs-custombodyfont" style="display: none">
                                <ul class="int-fontlinks list-group list-group-flush rbt-list-group-compact">
                                    <li class="list-group-item"><code>https://fonts.iu.edu/fonts/benton-sans-regular.eot</code> </li>
                                    <li class="list-group-item"><code>https://fonts.iu.edu/fonts/benton-sans-regular.woff</code> </li>
                                    <li class="list-group-item"><code>https://fonts.iu.edu/fonts/benton-sans-regular.ttf</code> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between my-3">
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_customheadfoot font-weight-normal" id=""><i class="rbt-icon-chevron-left ts-14"></i> Previous </button>
                        </div>
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_fontsize font-weight-normal" id="">Next <i class="rbt-icon-chevron-right ts-14"></i></button>
                        </div>
                    </div>
                </div>
                <div class="newsidebar-section" id="theme_fontsize"  style="display: none">
                    <div class="newsidebar-section-content card">
                        <div class="card-header d-flex align-items-center p-0" style="padding-left: 5px">
                            <button class="btn btn-link text-body p-2 mr-1 demojs_backtothemenav"><i class="rbt-icon-chevron-left ts-20" style="margin-top: 8px;"></i><span class="sr-only">Back to categories</span></button>
                            <h3 class="newsidebar-section-header mb-0 ts-20 mb-0 ts-20">Font size</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group" id="fontsize_orgname_block">
                                <label class="d-block" for="fontsize_orgname">Organization name </label>
                                <div class="d-flex border rounded  px-3 py-1">
                                    <input id="show_fontsize_orgname_value" name="price" value="14px" class="ts-20 flex-shrink-1" style="width: 75px;border: none;">
                                    <input type="range" id="fontsize_orgname" value="14px" min="12" max="48" step="1" class="form-control-range w-100">
                                </div>
                                <div class="alert alert-inline alert-danger mb-3 demojs_validation" role="alert" style="margin-top: .5rem !important" ><span class="rbt-icon-exclamation" aria-hidden="true"></span>
                                    <p class="rbt-ts-14" id="standalone4"> Value exceeds the maximum limit.</p>
                                </div>
                            </div>
                            <div class="form-group" id="fontsize_appname_block">
                                <label class="d-block" for="fontsize_appname">Application name </label>
                                <div class="d-flex border rounded  px-3 py-1">
                                    <input id="show_fontsize_appname_value" name="price" value="26px" class="ts-20 flex-shrink-1" style="width: 75px;border: none;">
                                    <input type="range" id="fontsize_appname" value="26px" min="12" max="48" step="1" class="form-control-range w-100">
                                </div>
                                <div class="alert alert-inline alert-danger mb-3 demojs_validation" role="alert" style="margin-top: .5rem !important" ><span class="rbt-icon-exclamation" aria-hidden="true"></span>
                                    <p class="rbt-ts-14" id="standalone4"> Value exceeds the maximum limit.</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block" for="fontsize_header">Header </label>
                                <div class="d-flex border rounded  px-3 py-1">
                                    <input id="show_fontsize_header_value" name="price" value="32px" class="ts-20 flex-shrink-1" style="width: 75px;border: none;">
                                    <input type="range" id="fontsize_header" value="32px" min="20" max="48" step="1" class="form-control-range w-100">
                                </div>
                                <div class="alert alert-inline alert-danger mb-3 demojs_validation" role="alert" style="margin-top: .5rem !important" ><span class="rbt-icon-exclamation" aria-hidden="true"></span>
                                    <p class="rbt-ts-14" id="standalone4"> Value exceeds the maximum limit.</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block" for="fontsize_body">Body </label>
                                <div class="d-flex border rounded  px-3 py-1">
                                    <input id="show_fontsize_body_value" name="price" value="16px" class="ts-20 flex-shrink-1" style="width: 75px;border: none;">
                                    <input type="range" id="fontsize_body" value="16" min="12" max="16" class="form-control-range w-100">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block" for="fontsize_verifyblock">Verify block </label>
                                <div class="d-flex border rounded  px-3 py-1">
                                    <input id="show_fontsize_verifyblock_value" name="price" value="20px" class="ts-20 flex-shrink-1" style="width: 75px;border: none;">
                                    <input type="range" id="fontsize_verifyblock" value="20" min="12" max="32" class="form-control-range w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between my-3">
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_fontfamily font-weight-normal" id=""><i class="rbt-icon-chevron-left ts-14"></i> Previous </button>
                        </div>
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_marginradius font-weight-normal" id="">Next <i class="rbt-icon-chevron-right ts-14"></i></button>
                        </div>
                    </div>
                </div>
                <div class="newsidebar-section" id="theme_marginradius"  style="display: none">
                    <div class="newsidebar-section-content card">
                        <div class="card-header d-flex align-items-center p-0" style="padding-left: 5px">
                            <button class="btn btn-link text-body p-2 mr-1 demojs_backtothemenav"><i class="rbt-icon-chevron-left ts-20" style="margin-top: 8px;"></i><span class="sr-only">Back to categories</span></button>
                            <h3 class="newsidebar-section-header mb-0 ts-20 mb-0 ts-20">Margin &amp; radius</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="d-block"  for="theme_border_radius">Border radius</label>
                                <div class="d-flex border rounded  px-3 py-1">
                                    <input id="show_border_value" name="price" value="4px" class="ts-20 flex-shrink-1" style="width: 75px;border: none;">
                                    <input id="theme_border_radius" type="range" min="0" max="20" value="4"  class="form-control-range w-100">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block"  for="theme_page_margin">Page margin</label>
                                <div class="d-flex border rounded  px-3 py-1">
                                    <input id="show_margin_value" name="price" value="880px" class="ts-20 flex-shrink-1" style="width: 75px;border: none;">
                                    <input id="theme_page_margin" type="range" min="440"max="880"step="10" value="880" class="form-control-range w-100">
                                </div>
                                <div class="alert alert-inline alert-danger mb-3 demojs_validation" role="alert" style="margin-top: .5rem !important" ><span class="rbt-icon-exclamation" aria-hidden="true"></span>
                                    <p class="rbt-ts-14" id="standalone4"> Value exceeds the minimum limit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between my-3">
                        <div>
                            <button class="btn btn-link mr-1 demojs_show_theme_fontsize font-weight-normal" id=""><i class="rbt-icon-chevron-left ts-14"></i> Previous</button>
                        </div>
                        <div> </div>
                    </div>
                </div>
                <div class="form-row newsidebar-nav mt-5">
                    <div class="col-12">
                        <button type="button" class="btn btn-primary btn-block demojs-savetheme" id="savetheme" disabled> <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span> <span class="visible">Publish theme</span> </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="rbt-shell-stage p-3">
            <growls style=" display: none; position: fixed; right:10px; top:80px;" id="growl1">
                <alert dismissible="true">
                    <div role="alert" class="alert alert-success alert-dismissible mb-3">
                        <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                        <span>Save successful.</span> </div>
                </alert>
            </growls>
            <div class="container p-0" id="header_html_display"></div>
            <header class="container p-0 mt-7 mb-3">
                <div class="d-flex align-content-center"> <img alt="" class="int-brand-image">
                    <div class="d-flex flex-column align-self-center int-lockup-group text-nowrap">
                        <div class="int-lockup-org" id="org-name-display">XYZ Institution</div>
                        <h1 class="int-lockup-pagetitle" id="app-name-display"><?php echo $page_title; ?></h1>
                    </div>
                    <div class="w-100"></div>
                    <div class="d-none d-lg-block text-nowrap">
                        <div class="rbt-header-avatar-id"> <span class="rbt-header-avatar" aria-hidden="true">UN</span> username </div>
                    </div>
                </div>
            </header>
            <main class="container p-0">
                <section>
                    <div class="card">
                        <div class="card-body"> 
                            <!--  <div class="alert alert-warning mb-5" role="alert">
                                <h2 class="alert-heading">Privacy note</h2>
                                <p>A message box such as this one will appear here in the cases where private data is displayed in this verification.</p>
                            </div>-->
                            <h2>Verification name</h2>
                            <p> On occasion, we require verification of your personal information. The item(s) listed below need your review for accuracy.</p>
                            <h3 class="mt-5">Verification data</h3>
                            <p>This is a paragraph that is used to describe the nature of this verification item to the user. It is possible to use a <a href="#">link</a> in this section.</p>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <dl class="row">
                                        <dt class="col-sm-4">Street address</dt>
                                        <dd class="col-sm-8"><span class="int-privatedata"> 1234 Elm Street</span> </dd>
                                        <dt class="col-sm-4">City</dt>
                                        <dd class="col-sm-8"><span class="int-privatedata"> Springfield</span> </dd>
                                        <dt class="col-sm-4">State</dt>
                                        <dd class="col-sm-8"><span class="int-privatedata"> Indiana</span> </dd>
                                        <dt class="col-sm-4">Zip</dt>
                                        <dd class="col-sm-8"><span class="int-privatedata"> 48576</span> </dd>
                                    </dl>
                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="border-bottom mb-3 pb-3">This is an optional paragraph that can be customized. This is an optional paragraph that can be customized. This is an optional paragraph that can be customized. </p>
                    <div class="int-verify-controls py-3">
                        <div class="row mb-5" id="demojs_verifyscreen">
                            <div class="col-md-6 d-flex pb-5 pb-md-0">
                                <div class="d-flex flex-fill flex-column">
                                    <div class="mb-3" id="verifystatement">
                                        <div class="form-check form-check-inline">
                                            <input id="question4" name="checked" type="checkbox" aria-invalid="false" data-container="body" data-toggle="popover" data-placement="top" data-content="Required" data-original-title="" title="">
                                            <label class="form-check-label" for="question4" > I have verified that the above information is up to date and correct.</label>
                                        </div>
                                    </div>
                                    <div class="rbt-button-group mt-auto">
                                        <button type="button" class="btn btn-primary btn-block" id="submit2">Verify</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex pb-5 pb-md-0">
                                <div class="d-flex flex-fill flex-column">
                                    <div class="mb-3" id="deferstatement"> You can choose to verify later. You may choose this option 3 more time(s). </div>
                                    <div class="rbt-button-group mt-auto">
                                        <button type="button" class="btn btn-outline-primary btn-block">Verify later</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <?php include('includes/all-footer.php') ?>
        </div>
    </div>
</main>
<?php include('modals/modal-headerfont-urls.php') ?>
<?php include('modals/modal-bodyfont-urls.php') ?>
<?php include('includes/theme-controls.php') ?>
<?php include('includes/all-footerscripts.php') ?>
<script>
    $(document).ready(function() {

        $(".demojs_show_theme_colors").click(function(){
          $(".newsidebar-nav, [id^=theme_]").hide();
          $("#theme_colors").show();
        });
        
        
        $(".demojs_show_theme_name").click(function(){
          $(".newsidebar-nav, [id^=theme_]").hide();
          $("#theme_name").show();
        });
        
         $(".demojs_show_theme_applogo").click(function(){
          $(".newsidebar-nav, [id^=theme_]").hide();
          $("#theme_applogo").show();
        });
        
        
         $(".demojs_show_theme_appicons").click(function(){
           $(".newsidebar-nav, [id^=theme_]").hide();
          $("#theme_appicons").show();
        });
        
        
          
         $(".demojs_show_theme_customheadfoot").click(function(){
           $(".newsidebar-nav, [id^=theme_]").hide();
          $("#theme_customheadfoot").show();
        });
        
            
         $(".demojs_show_theme_fontfamily").click(function(){
           $(".newsidebar-nav, [id^=theme_]").hide();
          $("#theme_fontfamily").show();
        });
             
         $(".demojs_show_theme_fontsize").click(function(){
           $(".newsidebar-nav, [id^=theme_]").hide();
          $("#theme_fontsize").show();
        });
        
        
          $(".demojs_show_theme_marginradius").click(function(){
           $(".newsidebar-nav, [id^=theme_]").hide();
          $("#theme_marginradius").show();
        });
        
        
         $(".demojs_backtothemenav").click(function(){
          $("#theme_nav, .newsidebar-nav").show();
          $("#theme_colors, #theme_name, #theme_applogo, #theme_appicons, #theme_customheadfoot, #theme_fontfamily, #theme_fontsize, #theme_marginradius").hide();
        });
        
        
        //
    });
</script> 
<script type = "text/javascript" language = "javascript">
    $(document).ready(function() {
        $('#org-name, #fontsize_orgname, #show_fontsize_orgname_value').hover(
            function() {
                $(".int-lockup-org").addClass("highlight-object");
            },
            function() {
                $(".int-lockup-org").removeClass("highlight-object");
            }
        );
        $('#app-name, #fontsize_appname, #show_fontsize_appname_value').hover(
            function() {
                $(".int-lockup-pagetitle").addClass("highlight-object");
            },
            function() {
                $(".int-lockup-pagetitle").removeClass("highlight-object");
            }
        );
        $('#chooselogoimage').hover(
            function() {
                $(".int-brand-image").addClass("highlight-object");
            },
            function() {
                $(".int-brand-image").removeClass("highlight-object");
            }
        );
        $('#header_html').hover(
            function() {
                $("#header_html_display").addClass("highlight-object");
            },
            function() {
                $("#header_html_display").removeClass("highlight-object");
            }
        );
        $('#footer_html').hover(
            function() {
                $("#footer_html_display").addClass("highlight-object");
            },
            function() {
                $("#footer_html_display").removeClass("highlight-object");
            }
        );
        $('#font_header').hover(
            function() {
                $(".rbt-shell-stage h2, .rbt-shell-stage h3, .int-lockup-group").addClass("highlight-object");
            },
            function() {
                $(".rbt-shell-stage h2, .rbt-shell-stage h3, .int-lockup-group").removeClass("highlight-object");
            }
        );
        $('#fontsize_header, #show_fontsize_header_value').hover(
            function() {
                $(".rbt-shell-stage h2, .rbt-shell-stage h3").addClass("highlight-object");
            },
            function() {
                $(".rbt-shell-stage h2, .rbt-shell-stage h3").removeClass("highlight-object");
            }
        );
        $('#font_body, #fontsize_body, #show_fontsize_body_value').hover(
            function() {
                $(".rbt-shell-stage p, .rbt-shell-stage dl").addClass("highlight-object");
            },
            function() {
                $(".rbt-shell-stage p, .rbt-shell-stage dl").removeClass("highlight-object");
            }
        );
        $('#fontsize_verifyblock, #show_fontsize_verifyblock_value').hover(
            function() {
                $("#deferstatement, #verifystatement").addClass("highlight-object");
            },
            function() {
                $("#deferstatement, #verifystatement").removeClass("highlight-object");
            }
        );
    });
</script> 
<script>
    $(document).ready(function() {
        $('#chooselogoimage').change(function() {
            if ($(this).val() == "default") {
                $(".int-brand-image").show();
                $(".demojs_defaultimages").show();
                $(".demojs-logourl").hide();
            }
            if ($(this).val() == "upload") {
                $(".int-brand-image").show();
                $(".demojs_defaultimages").hide();
                $(".demojs-logourl").show();
            }
            if ($(this).val() == "none") {
                $(".int-brand-image").hide();
                $(".demojs_defaultimages").hide();
                $(".demojs-logourl").hide();
            }
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#showonpage-orgname").click(function() {
            if ($(this).is(":checked")) {
                $(".int-lockup-org, #fontsize_orgname_block").show();
            } else {
                $(".int-lockup-org, #fontsize_orgname_block").hide();
            }
        });
        $("#showonpage-appname").click(function() {
            if ($(this).is(":checked")) {
                $(".int-lockup-pagetitle, #fontsize_appname_block").show();
            } else {
                $(".int-lockup-pagetitle, #fontsize_appname_block").hide();
            }
        });
        $("#caps-orgname").click(function() {
            if ($(this).is(":checked")) {
                $(".int-lockup-org").addClass("text-uppercase");
            } else {
                $(".int-lockup-org").removeClass("text-uppercase");
            }
        });
        $("#caps-appname").click(function() {
            if ($(this).is(":checked")) {
                $(".int-lockup-pagetitle").addClass("text-uppercase");
            } else {
                $(".int-lockup-pagetitle").removeClass("text-uppercase");
            }
        });
    })
</script> 
<script>
    $(document).ready(function() {
        $("#lockup-visibility2").click(function() {
            if ($(this).is(":checked")) {
                $(".int-lockup-group").show();
            } else {
                $(".int-lockup-group").hide();
            }
        });
    })
</script> 
<script>
    $(document).ready(function() {
        $("#logo-visibility2").click(function() {
            if ($(this).is(":checked")) {
                $(".int-brand-image").show();
            } else {
                $(".int-brand-image").hide();
            }
        });
    })
</script> 
<script>
    $(document).ready(function() {
        $(function() {
            $('#font_header').change(function() {
                $('.demojs-customheaderfont').hide();
                $('.' + $(this).val()).show();
            });
             $('#font_body').change(function() {
                $('.demojs-custombodyfont').hide();
                $('.' + $(this).val()).show();
            });
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $('#theme_page_margin').on('input', function() {
            var newVal = $(this).val();
            $("#show_margin_value").val(newVal);
            $("#show_margin_value").val(function() {return this.value + 'px';});
        });
        $('#show_margin_value').on('input', function() {
            $('#theme_page_margin').val($(this).val())
        });
        $('#theme_border_radius').on('input', function() {
            var newVal = $(this).val();
            $("#show_border_value").val(newVal);
            $("#show_border_value").val(function() {return this.value + 'px';});
        });
        $('#show_border_value').on('input', function() {
            $('#theme_border_radius').val($(this).val())
        });
        $('#fontsize_body').on('input', function() {
            var newVal = $(this).val();
            $("#show_fontsize_body_value").val(newVal);
            $("#show_fontsize_body_value").val(function() {return this.value + 'px';});
        });
        $('#show_fontsize_body_value').on('input', function() {
            $('#fontsize_body').val($(this).val())
        });
         $('#fontsize_verifyblock').on('input', function() {
            var newVal = $(this).val();
            $("#show_fontsize_verifyblock_value").val(newVal);
            $("#show_fontsize_verifyblock_value").val(function() {return this.value + 'px';});
        });
        $('#show_fontsize_verifyblock_value').on('input', function() {
            $('#fontsize_verifyblock').val($(this).val())
        });
        
        
        
        $('#fontsize_header').on('input', function() {
            var newVal = $(this).val();
            $("#show_fontsize_header_value").val(newVal);
            $("#show_fontsize_header_value").val(function() {return this.value + 'px';});
        });
        $('#show_fontsize_header_value').on('input', function() {
            $('#fontsize_header').val($(this).val())
        });
        
        
        $('#fontsize_appname').on('input', function() {
            var newVal = $(this).val();
            $("#show_fontsize_appname_value").val(newVal);
            $("#show_fontsize_appname_value").val(function() {return this.value + 'px';});
        });
        $('#show_fontsize_appname_value').on('input', function() {
            $('#fontsize_appname').val($(this).val())
        });
        
        
         
        $('#fontsize_orgname').on('input', function() {
            var newVal = $(this).val();
            $("#show_fontsize_orgname_value").val(newVal);
            $("#show_fontsize_orgname_value").val(function() {return this.value + 'px';});
        });
        $('#show_fontsize_orgname_value').on('input', function() {
            $('#fontsize_orgname').val($(this).val())
        });
        
        
        
        
        
        
    });
</script> 
<script>
    $(document).ready(function(){
      $("#demojs-themehandle").click(function(){
        $(".rbt-shell-sidebar").toggleClass("int-themeclose");
      });
    });
</script> 
<script>
    $(".demojs-reveal").click(function() {
        $(".int-mask").hide();
		$(".alert").hide();
		$("#demojs_revealskipscreen").hide();
		$("#demojs_verifyscreen").show();
        $(".int-privatedata").show();	
    });
</script> 
<script>
    $(document).ready(function() {
        $("#submit2").click(function() {
            $('#question4').popover('toggle')
        });
		 $("#question4").click(function() {
			 $('#question4').popover('show')
            $('#question4').popover('destroy')
        });
		 $('#submit2').click(function() {
            if ($('#question4').is(':checked')) {
				 $('#question4').popover('destroy')
            }
        });
    }); 
</script> 
<script>
	$(document).ready(function() {
		$(".card-body .form-control, .predefined-themes .card-body button").click(function() {
			$('.demojs-savetheme').prop("disabled", false); // Element(s) are now enabled.
		});
	});
</script> 
<script>
    $(document).ready(function() {
        $(function() {
            $("#savetheme").click(function() {
                $('.btn.btn-primary').addClass('rbt-loading');
				$('.btn.btn-primary .spinner-border').removeClass('d-none');
				$('.btn.btn-primary .visible').toggleClass('invisible');
				$('.demojs-savetheme').prop('disabled', true);
                $("#growl1").delay(2000).fadeIn().delay(5000).fadeOut();
                setTimeout(function() {
                    $('.btn.btn-primary').removeClass('rbt-loading');
					$('.btn.btn-primary .spinner-border').addClass('d-none');
					$('.demojs-savetheme').prop('disabled', true);
					$('.btn.btn-primary .invisible').removeClass('invisible');
                }, 3000)
            });
        });
    });
</script> 
<script>
	$('#body-bg-color').on('change', function() {
		$('#body-bg-color-hexcolor').val(this.value);
	});
	$('#body-bg-color-hexcolor').on('change', function() {
		$('#body-bg-color').val(this.value);
	});
	$('#body-text-color').on('change', function() {
		$('#body-text-color-hexcolor').val(this.value);
	});
	$('#body-text-color-hexcolor').on('change', function() {
		$('#body-text-color').val(this.value);
	});
	$('#panel-bg-color').on('change', function() {
		$('#panel-bg-color-hexcolor').val(this.value);
	});
	$('#panel-bg-color-hexcolor').on('change', function() {
		$('#panel-bg-color').val(this.value);
	});
	$('#panel-text-color').on('change', function() {
		$('#panel-text-color-hexcolor').val(this.value);
	});
	$('#panel-text-color-hexcolor').on('change', function() {
		$('#panel-text-color').val(this.value);
	});
	$('#action-color').on('change', function() {
		$('#action-color-hexcolor').val(this.value);
	});
	$('#action-color-hexcolor').on('change', function() {
		$('#action-color-color').val(this.value);
	});	
	$('#border-color').on('change', function() {
		$('#border-color-hexcolor').val(this.value);
	});
	$('#border-color-hexcolor').on('change', function() {
		$('#border-color-color').val(this.value);
	});
    	$('#mstile-bg-color').on('change', function() {
		$('#mstile-bg-color-hexcolor').val(this.value);
	});
	$('#mstile-bg-color-hexcolor').on('change', function() {
		$('#mstile-bg-color').val(this.value);
	});
</script> 
<script>
    $(document).ready(function() {
        $("#org-name").keyup(function() {
            var length = $(this).val().length;
            length = 40 - length;
            $('#org-name_counter').text(length);
            if ($("#org-name").val().length > 40) {
                $("#org-name_badge").last().addClass("badge-danger");
            } else {
                $("org-name_badge").last().removeClass("badge-danger");
            }
        });
        $("#app-name").keyup(function() {
            var length = $(this).val().length;
            length = 40 - length;
            $('#app-name_counter').text(length);
            if ($("#app-name").val().length > 40) {
                $("#app-name_badge").last().addClass("badge-danger");
            } else {
                $("app-name_badge").last().removeClass("badge-danger");
            }
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#savetheme").click(function() {
            $(".demojs_validation").removeClass("demojs_validation");
        });
    });
</script>
</body>
</html>
