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
            <li><span>Érkezési oldal szerkesztése</span></li>
        </ul>
    </div>
    <!-- END PAGE TITLE & BREADCRUMB-->
    <!-- END PAGE HEADER-->

    <div class="margin-bottom-20"></div>

    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">
            <form action="" id="page_update_form" name="update_page_form" method='POST'>

                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet">

                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i> 
                            <?php echo $page['title_hu']; ?> - érkezési oldalának szerkesztése
                        </div>
                        <div class="actions">
                            <button class="btn green btn-sm" type="submit" name="submit_update_page"><i class="fa fa-check"></i> Mentés</button>
                            <a class="btn default btn-sm" href="admin/landingpage"><i class="fa fa-close"></i> Mégsem</a>
                        </div>							
                    </div>                        

                    <div class="portlet-body">
                        <input type="hidden" name="page_id" id="page_id" value="<?php echo $page['id'] ?>">

                        <div class="form-group">
                            <label for="status">Státusz</label>
                            <select name='status' class="form-control input-small">
                                <option value="1" <?php echo ($page['status'] == 1) ? 'selected' : ''; ?>>Aktív</option>
                                <option value="0" <?php echo ($page['status'] == 0) ? 'selected' : ''; ?>>Inaktív</option>
                            </select>
                        </div>
						
                        <div class="form-group">
                            <label for="insert_form">Kapcsolatfelvételi űrlap beillesztése</label>
                            <select name='insert_form' class="form-control input-small">
                                <option value="1" <?php echo ($page['insert_form'] == 1) ? 'selected' : ''; ?>>Igen</option>
                                <option value="0" <?php echo ($page['insert_form'] == 0) ? 'selected' : ''; ?>>Nem</option>
                            </select>
                        </div>						

                        <div class="form-group">
                            <label for="page_title_hu">Kampány (a kampányra vonatkozó elnevezés - pl.: 2017 áprilisi kampány: budapesti luxus ingatlanok</label>   
                            <input type='text' name='page_title_hu' class='form-control' value="<?php echo $page['title_hu'] ?>" required>
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
                                    <label for="page_metatitle_hu">Az oldal címe (title - az oldal tartalmához kapcsolódó cím, pl.: budapesti luxus ingatlanok)</label>   
                                    <input type='text' name='page_metatitle_hu' class='form-control' value="<?php echo $page['metatitle_hu'] ?>"/>
                                </div>

                                <div class="form-group">
                                    <label for="page_metadescription_hu">Az oldal leírása (description - max. 160 karakteres leírás)</label>  
                                    <input type='text' name='page_metadescription_hu' class='form-control' value="<?php echo $page['metadescription_hu'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="page_metakeywords_hu">Kulcsszavak</label>
                                    <input type='text' name='page_metakeywords_hu' class='form-control' value="<?php echo $page['metakeywords_hu'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="page_body_hu">Tartalom</label>
                                    <textarea type="text" name="page_body_hu" class="form-control"><?php echo $page['body_hu'] ?></textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab_1_2">


                                <div class="form-group">
                                    <label for="page_metatitle_en">Az oldal címe</label>   
                                    <input type='text' name='page_metatitle_en' class='form-control' value="<?php echo $page['metatitle_en'] ?>"/>
                                </div>

                                <div class="form-group">
                                    <label for="page_metadescription_en">Az oldal leírása</label>  
                                    <input type='text' name='page_metadescription_en' class='form-control' value="<?php echo $page['metadescription_en'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="page_metakeywords_en">Kulcsszavak</label>
                                    <input type='text' name='page_metakeywords_en' class='form-control' value="<?php echo $page['metakeywords_en'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="page_body_en">Tartalom</label>
                                    <textarea type="text" name="page_body_en" class="form-control"><?php echo $page['body_en'] ?></textarea>
                                </div>

                            </div>
                        </div> <!-- TAB-CONTENT END-->

                    </div> <!-- END USER GROUPS PORTLET BODY-->
                </div> <!-- END USER GROUPS PORTLET-->
            </form>									
        </div> <!-- END COL-MD-12 -->
    </div> <!-- END ROW -->	
</div> <!-- END PAGE CONTENT-->