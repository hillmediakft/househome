<?php

use System\Libs\Language as Lang;
use System\Libs\Config;
?>

<div id="content" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumbs">
                    <span class="clickable"><a href="<?php echo $this->request->get_uri('site_url'); ?>"><?php echo Lang::get('menu_home'); ?></a></span>
                    <span class="delimiter">/</span>
                    <span class="clickable"><a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.hirek.index.' . LANG); ?>"><?php echo Lang::get('menu_hirek'); ?></a></span>
                    <span class="delimiter">/</span>
                    <span class="active-page"><?php echo $blog['title_' . LANG]; ?></span>                
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="blog-single-post">
                    <div class="row">
                        <div class="blog-post-entry">
                            <div class="col-md-3">
                                <img src="<?php echo Config::get('blogphoto.upload_path') . $blog['picture']; ?>" class="img-responsive img-thumbnail" alt="<?php echo $blog['title_' . LANG]; ?>">
                            </div>
                            <div class="col-md-9">
                                <h1 class="title"><?php echo $title; ?></h1>
                                <div class="item-thumbnail">
                                    <div class="single-item date">
                                        <i class="fa fa-folder-open-o"></i> <?php echo Lang::get('hirek_kategoria'); ?>: <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.hirek.kategoria.' . LANG) . '/' . $blog['category_id']; ?>"><?php echo $blog['category_name_' . LANG]; ?></a> | <i class="fa fa-calendar"></i> <?php echo date('Y-m-d', strtotime($blog['add_date'])); ?>
                                    </div>
                                </div>
                                <p><?php echo $blog['body_' . LANG]; ?></p>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        <?php require($this->path('tpl_sidebar_blog')); ?>
        </div>
    </div>
</div>
