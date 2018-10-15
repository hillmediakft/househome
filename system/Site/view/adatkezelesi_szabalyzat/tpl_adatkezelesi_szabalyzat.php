<?php use System\Libs\Language as Lang; ?>
<div id="content" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumbs">
                    <span class="clickable"><a href="<?php echo $this->request->get_uri('site_url');?>"><?php echo Lang::get('menu_home'); ?></a></span>
                    <span class="delimiter">/</span>
                    <span class="active-page"><?php echo Lang::get('footer_adatkezelesi_szabalyzat'); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <?php echo $body; ?>
            </div>
            <!-- SIDEBAR -->
                <div class="col-md-3">
                    <aside class="sidebar main-sidebar">
                        <!-- KIEMELT INGATLANOK DOBOZ -->
                        <?php include($this->path('tpl_modul_kiemeltingatlanok')); ?>
                        <!-- KIEMELT INGATLANOK DOBOZ -->
                        <?php include($this->path('tpl_modul_banner_mennyiterazingatlanom')); ?>
                    </aside>        
                </div> <!-- SIDEBAR END -->
        </div>
    </div>
</div>