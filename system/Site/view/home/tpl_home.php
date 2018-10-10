<?php

use System\Libs\Config;
use System\Libs\Language as Lang;
?>

<!-- KERESÉS FORM -->
<div class="main-filter hidden-xs">
    <?php include($this->path('tpl_home_filter')); ?>
</div>


<!-- KERESÉS FORM MOBIL -->
<div class="main-filter hidden-sm hidden-md hidden-lg">
    <?php include($this->path('tpl_home_filter_mobile')); ?>
</div> 
<div class="nav-block">
    <div class="col-sm-12">
        <a style="float: none;" href="<?php echo $this->request->get_uri('site_url') . Config::get('url.kereses.index.' . LANG); ?>" class="submit-nav hidden-sm hidden-md hidden-lg text-center"><i class="fa fa-search"></i> <?php echo Lang::get('menu_kereses'); ?></a>
    </div>
</div>


<div id="content" class="container-fluid">


    <div class="row">
        <div class="our-features-banner gray-bg light">
            <div class="container">
                <h2 class="block-title"><?php echo Lang::get('home_szolgaltatasok_cim'); ?></h2>
                <span class="sub-title"><?php echo Lang::get('home_szolgaltatasok_szoveg'); ?></span>
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="single-feature">
                            <div class="icon-container">
                                <div class="icon-border">
                                    <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.berbeadoknak.index.' . LANG); ?>"><span class="icon lg-icon papers"></span></a>
                                </div>
                            </div>
                            <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.mennyit-er-az-ingatlanom.index.' . LANG); ?>">
                                <span class="main-title"><?php echo Lang::get('home_szolgaltatasok_1_cim'); ?></span>
                                <span class="featured-sub-title colored"><?php echo Lang::get('home_szolgaltatasok_1_szoveg'); ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="single-feature">
                            <div class="icon-container">
                                <div class="icon-border">
                                    <span class="icon lg-icon like"></span>
                                </div>
                            </div>
                            <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.befektetoknek.index.' . LANG); ?>">
                                <span class="main-title"><?php echo Lang::get('home_szolgaltatasok_2_cim'); ?></span>
                                <span class="featured-sub-title colored"><?php echo Lang::get('home_szolgaltatasok_2_szoveg'); ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="single-feature">
                            <div class="icon-container">
                                <div class="icon-border">
                                    <span class="icon lg-icon human"></span>
                                </div>
                            </div>
                            <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.berbeadoknak.index.' . LANG); ?>">
                                <span class="main-title"><?php echo Lang::get('home_szolgaltatasok_3_cim'); ?></span>
                                <span class="featured-sub-title colored"><?php echo Lang::get('home_szolgaltatasok_3_szoveg'); ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="single-feature">
                            <div class="icon-container">
                                <div class="icon-border">
                                    <span class="icon lg-icon home"></span>
                                </div>
                            </div>
                            <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.berbeadoknak.index.' . LANG); ?>">
                                <span class="main-title"><?php echo Lang::get('home_szolgaltatasok_3_cim'); ?></span>
                                <span class="featured-sub-title colored"><?php echo Lang::get('home_szolgaltatasok_3_szoveg'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   









    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="object-slider interesting-offer">
                    <div class="block-title-style-2">
                        <span class="block-title-text"><?php echo Lang::get('home_kiemelt_ingatlanok'); ?></span>
                        <div class="right-block">
                            <div class="jcarousel-arrows">
                                <a href="#" class="prev-slide" data-jcarouselcontrol="true"><i class="fa fa-angle-left"></i></a>
                                <a href="#" class="next-slide" data-jcarouselcontrol="true"><i class="fa fa-angle-right"></i></a>
                            </div>
                            <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.ingatlanok.index.' . LANG); ?>" class="all-offers-btn hidden-xs"><?php echo Lang::get('home_osszes_ingatlan'); ?></a>
                        </div>
                    </div>
                    <div class="obj-carousel carousel" data-jcarousel="true">
                        <ul style="left: -300px; top: 0px;">


                            <?php
                            foreach ($all_properties as $value) {
                                $photo_array = json_decode($value['kepek']);
                                ?>


                                <li style="width: 270px;">
                                    <div class="item">
                                        <div class="preview">
                                            <?php $this->html_helper->showLowerPriceIcon($value); ?>
                                            <!-- eladó/kiadó cimke-->                                        
                                            <?php
                                            if ($value['tipus'] == 1) {
                                                $label = Lang::get('kereso_elado');
                                                $css_class = 'sale';
                                            } else {
                                                $label = Lang::get('kereso_kiado');
                                                $css_class = 'rest';
                                            }
                                            ?>
                                            <span class="item-label <?php echo $css_class; ?>"><?php echo $label; ?></span>
                                            <?php if ($value['kepek']) { ?>
                                                <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.ingatlanok.adatlap.' . LANG) . '/' . $value['id'] . '/' . $this->str_helper->stringToSlug($value['ingatlan_nev_' . LANG]); ?>">
                                                    <img src="<?php echo $this->url_helper->thumbPath(Config::get('ingatlan_photo.upload_path') . $photo_array[0], false, 'small'); ?>" alt="<?php echo $value['ingatlan_nev_' . LANG]; ?>">
                                                </a>
                                            <?php } ?>
                                            <?php if ($value['kepek'] == null) { ?>
                                                <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.ingatlanok.adatlap.' . LANG) . '/' . $value['id'] . '/' . $this->str_helper->stringToSlug($value['ingatlan_nev_' . LANG]); ?>">
                                                    <img src="<?php echo Config::get('ingatlan_photo.upload_path') . 'placeholder.jpg'; ?>" alt="<?php echo $value['ingatlan_nev_' . LANG]; ?>">
                                                </a>
                                            <?php } ?>
                                            <?php $this->html_helper->showHeartIcon($value); ?>
                                            <span class="price-box">
                                                <?php $this->html_helper->showPrice($value); ?>
                                            </span>
                                        </div>
                                        <div class="item-thumbnail">
                                            <div class="single-thumbnail">

                                                <span class="value"><?php echo $value['kat_nev_' . LANG]; ?></span>
                                            </div>
                                            <div class="single-thumbnail">

                                                <span class="value"><?php
                                                    $felszobaszam = (!empty($value['felszobaszam'])) ? '+ ' . $value['felszobaszam'] . ' ' : '';
                                                    echo (!empty($value['szobaszam'])) ? $value['szobaszam'] . ' ' . $felszobaszam . mb_strtolower(Lang::get('jell_szobaszam'), 'UTF-8') : '';
                                                    ?></span>
                                            </div>
                                            <div class="single-thumbnail">

                                                <span class="value"><?php echo $value['alapterulet']; ?> m<sup>2</sup></span>
                                            </div>
                                        </div>
                                        <div class="item-entry">
                                            <span class="item-title">
                                                <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.ingatlanok.adatlap.' . LANG) . '/' . $value['id'] . '/' . $this->str_helper->stringToSlug($value['ingatlan_nev_' . LANG]); ?>"><?php echo $value['ingatlan_nev_' . LANG]; ?>
                                                </a>
                                            </span>
                                            <p class="item-text"><?php
                                                echo $value['city_name'];
                                                echo (isset($value['kerulet'])) ? ', ' . $value['kerulet'] . '. ' . Lang::get('adatlap_kerulet') : '';
                                                ?></p>

                                        </div>
                                    </div>
                                </li>

                            <?php } ?>

                        </ul>
                    </div>
                    <div class="jcarousel-pagination"></div>
                </div>
            </div>
        </div>

    </div>











    <div class="row">
        <div class="our-agents gray-bg">
            <div class="container">
                <h2 class="block-title"><?php echo Lang::get('home_referensek'); ?></h2>
                <div class="best-agents">
                    <div class="jcarousel-arrows">
                        <a href="#" class="prev-slide"><i class="fa fa-angle-left"></i></a>

                        <a href="#" class="next-slide"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="ag-carousel carousel">
                        <ul>
                            <?php foreach ($agents as $agent) : ?>
                                <li>
                                    <div class="item">
                                        <div class="preview">
                                            <img src="<?php echo Config::get('user.upload_path') . $agent['photo']; ?>" alt="<?php echo $agent['last_name'] . $agent['first_name']; ?>">
                                            <div class="overlay">
                                                <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.ingatlanok.ertekesito.' . LANG) . '/' . $this->str_helper->stringToSlug($agent['first_name']) . '-' . $this->str_helper->stringToSlug($agent['last_name']) . '/' . $agent['id']; ?>"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <span class="name"><?php echo $agent['first_name'] . ' ' . $agent['last_name']; ?></span>
                                        <span class="properties">
                                            <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.ingatlanok.ertekesito.' . LANG) . '/' . $this->str_helper->stringToSlug($agent['first_name']) . '-' . $this->str_helper->stringToSlug($agent['last_name']) . '/' . $agent['id']; ?>" class="simple-btn sm-button outlined red"><?php echo $agent['property'] . ' ' . Lang::get('referens_ingatlan'); ?></a>
                                        </span>
                                        <ul class="contact-listing">
                                            <li>
                                                <span class="icon"><i class="fa fa-phone"></i></span>
                                                <span class="phone"><?php echo $agent['phone']; ?></span>
                                            </li>
                                            <li>
                                                <span class="icon"><i class="fa fa-envelope"></i></span>
                                                <a href="mailto:<?php echo $agent['email']; ?>" class="mail"><?php echo $agent['email']; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            <?php endforeach; ?>




                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="subscribe-banner">
                    <div class="banner-text-block">
                        <span class="banner-title inversed"><?php echo Lang::get('home_cta_title'); ?></span>
                        <p class="banner-text"><?php echo Lang::get('home_cta_body'); ?></p>
                    </div>
                    <div class="subscribe-block">
                        <a href="<?php echo Lang::get('home_cta_link'); ?>" class="subscribe-btn"><?php echo Lang::get('altalanos_gomb'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="latest gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="block-title">Hírek</h2>
                        <ul class="latest-news-listing row">
                            <?php foreach ($blog_list as $blog) : ?>
                                <li class="col-sm-3">
                                    <div class="item">
                                        <div class="preview">
                                            <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.hirek.index.' . LANG) . '/' . $this->str_helper->stringToSlug($blog['title_' . LANG]) . '/' . $blog['id']; ?>">
                                                <img alt="<?php echo $blog['title_' . LANG]; ?>" src="<?php echo Config::get('blogphoto.upload_path') . $blog['picture']; ?>">
                                            </a>
                                        </div>
                                        <span class="title"><a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.hirek.index.' . LANG) . '/' . $this->str_helper->stringToSlug($blog['title_' . LANG]) . '/' . $blog['id']; ?>"><?php echo $blog['title_' . LANG]; ?></a></span>
                                        <p><?php echo $this->str_helper->sentenceTrim($blog['body_' . LANG], 1); ?></p>
                                        <div class="item-thumbnail">
                                            <div class="single-item date">
                                                <i class="fa fa-calendar"></i>
                                                <a class="value" href=""><?php echo $blog['add_date']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach ?>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="empty-space"></div>
        </div>
    </div>


</div>

<!-- kezdőkép adat a javascriptnek -->
<script type="text/javascript">
    var home_background_path = '<?php echo $home_background_path; ?>';
</script>