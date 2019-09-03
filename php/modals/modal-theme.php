<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="rbt-collapse-accordion" id="accordion_single">
                        <div class="card">
                            <h5 class="mb-2" id="heading_single">
                                <button class="rbt-btn-nostyle btn-block" type="button" data-toggle="collapse" data-target="#collapseSingle" aria-expanded="false" aria-controls="collapseSingle"> <i class="rbt-icon-chevron-right"></i> Theming </button>
                            </h5>
                            <div id="collapseSingle" class="collapse" aria-labelledby="heading_single" data-parent="#accordion_single">
                                <div class="card-body demo-theme-builder">
                                    <section class="predefined-themes mb-5">
                                        <h2 class="mb-5">Predefined Themes</h2>
                                        <button data-theme="white" style="background-color: white"> white </button>
                                        <button data-theme="brown" style="background-color: #6f5929"> brown </button>
                                        <button data-theme="blue" style="background-color: #3f51b5"> blue </button>
                                        <button data-theme="yellow" style="background-color: #ffe08f"> yellow </button>
                                        <button data-theme="black" style="background-color: #222"> black </button>
                                    </section>
                                    <div class="row color-picker" id="logoimageselector">
                                        <div class="col-3">
                                            <label for="logo-image-url">Logo image URL</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" id="logo-image-url" value="http://www.indiana.edu/~espd/rvb/develop/img/trident-large.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="rbt-button-group">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    <button class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
