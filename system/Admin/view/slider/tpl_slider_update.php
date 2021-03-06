<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="admin/home">Kezdőoldal</a> 
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="admin/slider">Slider lista</a> 
                <i class="fa fa-angle-right"></i>
            </li>
            <li><span>Slide szerkesztése</span></li>
        </ul>
    </div>
    <!-- END PAGE TITLE & BREADCRUMB-->
    <!-- END PAGE HEADER-->

    <div class="margin-bottom-20"></div>

    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">

            <!-- ÜZENETEK -->
            <div id="ajax_message"></div> 				
            <?php $this->renderFeedbackMessages(); ?>	

            <form action="" method="POST" id="slider_update_form" enctype="multipart/form-data">	

                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-film"></i> 
                            Slide szerkesztése
                        </div>
                        <div class="actions">
                            <button class="btn green btn-sm" type="submit" name="submit_update_slide"><i class="fa fa-check"></i> Mentés</button>
                            <a class="btn default btn-sm" href="admin/slider"><i class="fa fa-close"></i> Mégsem</a>
                        </div>
                    </div>

                    <div class="margin-bottom-20"></div>

                    <div class="portlet-body">

                        <div class="row">	
                            <div class="col-md-12">						

                                <!-- bootstrap file upload -->
                                <label class="control-label">Slide kép</label>
                                <div class="form-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 585px">
                                            <img src="<?php echo $this->getConfig('slider.upload_path') . $slider['picture']; ?>" alt=""/>
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 585px; max-height: 210px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn default btn-file">
                                                <span class="fileinput-new">Kiválasztás</span>
                                                <span class="fileinput-exists">Módosít</span>
                                                <input id="uploadprofile" class="img" type="file" name="update_slide_picture">
                                            </span>
                                            <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">Töröl</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- bootstrap file upload END -->

                                <div class="clearfix"></div>
                                <div class="note note-info">
                                    Kattintson a kiválasztás gombra! Ha másik képet szeretne kiválasztani, kattintson a megjelenő módosít gombra! Ha mégsem kívánja a kiválasztott képet feltölteni, kattintson a töröl gombra! <strong>Az optimális képméret 1920x550 képpont</strong>.
                                </div>

                                <div class="form-group">
                                    <label for="slider_link" class="control-label">Slide link</label>
                                    <input type="text" name="slider_link" id="slider_link" placeholder="A slide linkje" class="form-control input-xlarge" value="<?php echo $slider['target_url']; ?>"/>
                                </div>                                          

                                <!--Státusz beállítása-->
                                <div class="form-group">
                                    <label for="slider_status">Slide státusz</label>
                                    <select name='slider_status' class="form-control input-xlarge">
                                        <option value="1" <?php echo ($slider['active'] == 1) ? 'selected' : ''; ?>>Aktív</option>
                                        <option value="0" <?php echo ($slider['active'] == 0) ? 'selected' : ''; ?>>Inaktív</option>
                                    </select>
                                </div>

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab"> Magyar </a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_2" data-toggle="tab"> Angol </a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab_1_1">

                                        <div class="form-group">
                                            <label for="slider_title_hu" class="control-label">Slide cím</label>
                                            <input type="text" name="slider_title_hu" id="slider_title_hu" placeholder="A slide címe" class="form-control input-xlarge" value="<?php echo $slider['title_hu']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="slider_text_hu" class="control-label">Slide szöveg</label>
                                            <input type="text" name="slider_text_hu" id="slider_text_hu" placeholder="A slide szövege" class="form-control input-xlarge" value="<?php echo $slider['text_hu']; ?>"/>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="tab_1_2">

                                        <div class="form-group">
                                            <label for="slider_title_en" class="control-label">Slide cím</label>
                                            <input type="text" name="slider_title_en" id="slider_title_en" placeholder="A slide címe" class="form-control input-xlarge" value="<?php echo $slider['title_en']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="slider_text_en" class="control-label">Slide szöveg</label>
                                            <input type="text" name="slider_text_en" id="slider_text_en" placeholder="A slide szövege" class="form-control input-xlarge" value="<?php echo $slider['text_en']; ?>"/>
                                        </div>

                                    </div>
                                </div>

                                <!-- régi kép elérési útja-->
                                <input type="hidden" name="old_img" id="old_img" value="<?php echo $slider['picture']; ?>">				

                            </div>
                        </div>	


                    </div> <!-- END USER GROUPS PORTLET BODY-->
                </div> <!-- END USER GROUPS PORTLET-->

            </form>

        </div> <!-- END COL-MD-12 -->
    </div> <!-- END ROW -->	
</div> <!-- END PAGE CONTENT-->