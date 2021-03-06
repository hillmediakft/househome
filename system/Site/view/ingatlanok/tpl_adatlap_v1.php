<?php

use System\Libs\Config;
use System\Libs\Cookie;
use System\Libs\Session;
use System\Libs\Language as Lang;
?>

<div id="content" class="container-fluid">

    <div id="map_circle_size_div" data-mapsize="<?php echo $ingatlan['map_circle_size']; ?>" style="display:none;"></div>

    <!-- Szürke doboz felül ingatlan-info-box -->
    <div id="sticker">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">

                    <div class="ingatlan-info-box">

                        <div class="col-sm-8">
                            <h1 class="section-title"><?php echo $ingatlan['ingatlan_nev_' . LANG]; ?></h1>
                            <?php $district = (!is_null($ingatlan['district_name'])) ? $ingatlan['district_name'] . ' ' . Lang::get('adatlap_kerulet') : ''; ?>
                            <h5>
                                <?php echo $ingatlan['city_name'] . ' ' . $district; ?>
                                <?php echo (($ingatlan['utca_megjelenites'] == 1) && (!is_null($ingatlan['utca']))) ? ', ' . $ingatlan['utca'] : ''; ?>    
                                <?php echo (($ingatlan['hazszam_megjelenites'] == 1) && ($ingatlan['hazszam'] !== '')) ? '&nbsp;' . $ingatlan['hazszam'] . '.' : ''; ?>    
                            </h5>


                            <h3 class="section-title">
                            </h3>


                            <div class="icon-box">
                                <div class="heading">
                                    <span class="title">
                                        <span class="price">
                                            Ár: <?php $this->html_helper->showPrice($ingatlan); ?>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <!-- 
                        <span class="price">
                            <span class="value">
                               
                            <?php //$this->html_helper->showPrice($ingatlan); ?>
                            </span>
                        </span>
                            -->


                            <div class="icon-box">
                                <div class="heading">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <span class="title"><?php echo $ingatlan['kat_nev_' . LANG]; ?></span>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="heading">
                                    <div class="icon">
                                        <i class="fa fa-square"></i>
                                    </div>
                                    <span class="title"><?php echo $ingatlan['alapterulet']; ?> m<sup>2</sup></span>
                                </div>
                            </div>

                            <?php if (!is_null($ingatlan['szobaszam'])) { ?>
                                <?php $felszoba = (!is_null($ingatlan['felszobaszam'])) ? '+' . $ingatlan['felszobaszam'] : ''; ?>
                                <div class="icon-box" style="; float: none;">
                                    <div class="heading">
                                        <div class="icon">
                                            <i class="fa fa-bed"></i>
                                        </div>
                                        <span class="title"><?php echo Lang::get('jell_szobaszam') . ': ' . $ingatlan['szobaszam'] . $felszoba; ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                            <!--             <div style="padding: 0px 0px;">
                            <?php echo Lang::get('kereso_ref_szam'); ?>: <span style="font-weight: 700; color:#000;"><?php echo 'S-' . $ingatlan['ref_num']; ?></span>
                                         </div> -->


                        </div>

                        <div class="col-sm-4">
                            <div class="agent-box">
                                <div class="agent-image">
                                    <img class="img-thumbnail" src="<?php echo Config::get('user.upload_path') . $agent['photo']; ?>">
                                </div>

                                <div class="agent-details">
                                    <div class="agent-name">
                                        <h6><?php echo $agent['first_name'] . ' ' . $agent['last_name']; ?></h6>
                                        <div><?php echo $agent['title_' . LANG]; ?></div>
                                    </div>
  <!--                                  <div class="label label-danger"><?php //echo Lang::get('adatlap_hivjon_most_cimke');               ?></div> -->
                                    <input type="hidden" name="agent_id" id="agent_id" value="<?php echo $agent['id']; ?>">
                                    <div>
                                        <div id="phone_number_box">
                                            <i class="fa fa-phone-square"></i> <?php echo substr($agent['phone'], 0, -4); ?><a id="show_phone_number" class="simple-btn sm-button outlined red">Mutat</a>
                                        </div>
                                    </div>


                                </div>
                            </div>   
                        </div>

                    </div> <!-- END ingatlan-info-box -->

                </div> <!-- END col-sm-12 -->

            </div> <!-- END ROW -->
        </div> <!-- END CONTAINER -->
    </div>

    <div class="container">
        <div class="row">

            <!-- TARTALOM -->
            <div class="col-sm-12 col-md-8">

                <div class="single-item-page">

                    <?php if (!empty($pictures)) { ?>
                        <!-- PHOTO SLIDER -->
                        <div class="row">
                            <div class="col-sm-12">
                                                                <!-- <h3 class="section-title">Retail Space In West Side <span class="price">USD <span class="value">999,000</span></span></h3> -->
                                <div class="item-photos">

                                    <div id="slideshow-main" class="main-slides">
                                        <div id="kedvencek_<?php echo $ingatlan['id']; ?>" class="like <?php echo (Cookie::is_id_in_cookie('kedvencek', $ingatlan['id'])) ? 'active' : ''; ?>">
                                            <i class="fa fa-heart"></i>
                                        </div>

                                        <div class="jcarousel-arrows">
                                            <a href="#" class="prev-slide"><i class="fa fa-angle-left"></i></a>
                                            <a href="#" class="next-slide"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <div class="slides-container" id="slides-to-show">
                                            <ul>
                                                <?php foreach ($pictures as $picture) { ?>
                                                    <li>
                                                        <img alt="<?php echo $ingatlan['ingatlan_nev_' . LANG]; ?>" src="<?php echo $this->getConfig('ingatlan_photo.upload_path') . $picture; ?>"/>
                                                    </li>
                                                <?php } ?>
                                                <?php if (!empty($floor_plans)) : ?>
                                                    <?php foreach ($floor_plans as $floor_plan) { ?>
                                                        <li>
                                                            <img alt="<?php echo $ingatlan['ingatlan_nev_' . LANG]; ?>" src="<?php echo $this->getConfig('ingatlan_photo_floor_plan.upload_path') . $floor_plan; ?>"/>
                                                        </li>
                                                    <?php } ?>
                                                <?php endif ?>
                                            </ul>   
                                        </div>                                  
                                    </div>
                                    <div id="slideshow-carousel" class="main-thumbnail">
                                        <ul id="carousel" class="jcarousel jcarousel-skin-tango">
                                            <?php foreach ($pictures as $picture) { ?>
                                                <li>
                                                    <img alt="<?php echo $ingatlan['ingatlan_nev_' . LANG]; ?>" src="<?php echo $this->getConfig('ingatlan_photo.upload_path') . $picture; ?>"/>
                                                </li>
                                            <?php } ?> 
                                            <?php if (!empty($floor_plans)) : ?>
                                                <?php foreach ($floor_plans as $floor_plan) { ?>
                                                    <li>
                                                        <img alt="<?php echo $ingatlan['ingatlan_nev_' . LANG]; ?>" src="<?php echo $this->getConfig('ingatlan_photo_floor_plan.upload_path') . $floor_plan; ?>"/>
                                                    </li>
                                                <?php } ?>
                                            <?php endif ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <!-- 
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="empty-space-25"></div>
                            </div>
                        </div>
                        -->
                    <?php } ?>

                </div>
            </div>

            <!-- SIDEBAR -->
            <div class="col-sm-12 col-md-4">
                <aside class="sidebar main-sidebar" style="padding-top: 0;">

                    <!-- GOMBOK -->
                    <div class="row">
                        <div class="col-sm-12">
                            <a style="text-align: center; width: 100%; border-radius: 12px" id="arvaltozas_ertesites" class="simple-btn sm-button outlined main-color <?php echo ($ertesites_arvaltozasrol) ? 'disabled' : ''; ?>" data-id="<?php echo $ingatlan['id']; ?>" href="javascript:void(0);"><i class="fa fa-paper-plane-o"></i> <?php echo Lang::get('adatlap_arvaltozas_gomb'); ?></a>
                        </div>

                    </div>
                    <!-- GOMBOK LISTA -->

                    <div class="row">
                        <div class="col-md-12">
                            <ul class="adatlap_gombok">
                                <li>
                                    <a id="kedvencekhez_<?php echo $ingatlan['id']; ?>" data-id="<?php echo $ingatlan['id']; ?>" class="simple-btn sm-button outlined main-color <?php echo (Cookie::is_id_in_cookie('kedvencek', $ingatlan['id'])) ? 'disabled' : ''; ?>" href="javascript:void(0);" title="<?php echo Lang::get('adatlap_kedvencekhez_gomb'); ?>"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <form style="display: inline;" id="adatlap_nyomtatas_form" method="POST" action="adatlap/<?php echo $ingatlan['id']; ?>">
                                        <a id="adatlap_nyomtatas" class="simple-btn sm-button outlined main-color" title="<?php echo Lang::get('adatlap_nyomtatas_gomb'); ?>"><i class="fa fa-print"></i></a>
                                        <input type="hidden" name="agent_id" value="<?php echo $agent['id']; ?>"/>
                                        <!-- <button id="adatlap_nyomtatas" type="submit" class="send-btn"><i class="fa fa-print"></i> <?php //echo Lang::get('adatlap_nyomtatas_gomb');                 ?></button> -->
                                    </form>
                                </li>
                                <!--      <li>
                                          <a id="myPopover" data-toggle="popover" data-placement="bottom" data-content="<?php echo $this->html_helper->socialMediaShare($this->getConfig('ingatlan_photo.upload_path') . $pictures[0], $ingatlan['ingatlan_nev_' . LANG]); ?>" class="simple-btn sm-button outlined main-color" href="javascript:void(0)" title="<?php echo Lang::get('adatlap_megosztas_gomb'); ?>"><i class="fa fa-share-alt"></i></a>
                                      </li> -->
                                <li>
                                    <?php echo $this->html_helper->socialMediaShare($this->getConfig('ingatlan_photo.upload_path') . $pictures[0], $ingatlan['ingatlan_nev_' . LANG]); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <!-- ELŐZŐ-KÖVETKEZŐ INGATLAN -->
                        <?php $talali_lista = Session::get('talalati_lista'); ?>
                        <?php if ($talali_lista) : ?>
                            <div class="col-sm-12">
                                <div>
                                    <a style="text-align: center; width: 20%; float: left" class="simple-btn sm-button outlined red" href="<?php echo $this->url_helper->talalatiListaElozo($ingatlan['id'], LANG, Session::get('talalati_lista')); ?>"><i class="fa fa-arrow-left"></i> </a>
                                </div>
                                <div>
                                    <a style="text-align: center; width: 52%; float: left; margin: 0 4% 0 4%;" class="simple-btn sm-button outlined red" href="<?php echo Session::get('talalati_lista_url'); ?>"><?php echo Lang::get('adatlap_talalati_lista'); ?></a>
                                </div>
                                <div>
                                    <a style="text-align: center; width: 20%; float: right" class="simple-btn sm-button outlined red" href="<?php echo $this->url_helper->talalatiListaKovetkezo($ingatlan['id'], LANG, Session::get('talalati_lista')); ?>"><i class="fa fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div style="margin-bottom: 30px;" class="widget questions">
                                <div class="heading">
                                    <span class="widget-title"><?php echo Lang::get('adatlap_kapcsolat_cim'); ?></span>
                                </div>
                                <div class="widget-entry">
                                    <div class="questions-form">
                                        <form action="<?php echo (LANG != 'hu') ? LANG . '/' : ''; ?>sendemail/init/agent" method="post" id="contact-form-agent">
                                            <input type="text" class="name" name="name" placeholder="<?php echo Lang::get('kapcsolat_email_nev'); ?>" required oninvalid="this.setCustomValidity('Töltse ki ezt a mezőt!')" oninput="setCustomValidity('')">
                                            <input type="email" class="email" name="email" placeholder="Email" required oninvalid="this.setCustomValidity('Adjon meg egy email címet!')" oninput="setCustomValidity('')">
                                            <input type="text" class="name" name="phone" placeholder="<?php echo Lang::get('kapcsolat_email_telefon'); ?>">
                                            <textarea class="message" name="message" placeholder="" required oninvalid="this.setCustomValidity('Töltse ki ezt a mezőt!')" oninput="setCustomValidity('')"><?php echo 'Érdeklődöm a ' . $ingatlan['ref_num'] . ' ref. sz. ingatlanról.'; ?></textarea>

                                            <input type="text" name="mezes_bodon" id="mezes_bodon">

                                            <input type="hidden" name="agent_name" value="<?php echo $agent['first_name'] . ' ' . $agent['last_name']; ?>">
                                            <input type="hidden" name="agent_email" value="<?php echo $agent['email']; ?>">
                                            <input type="hidden" name="ref_num" value="<?php echo 'S-' . $ingatlan['ref_num']; ?>">
                                            <input type="hidden" name="url" value="<?php echo $this->request->get_uri('current_url'); ?>">
                                            <input type="checkbox" name="afsz_confirm" required oninvalid="this.setCustomValidity('Nem fogadta el az Adatvédelmi Nyilatkozatot.')" oninput="setCustomValidity('')"/><span><span class="checkbox-text">Elfogadom az <a href="/uploads/files/adatvedelmi-szabalyzat.pdf">Adatvédelmi Nyilatkozatot</span></a></span>
                                            <button type="submit" class="send-btn" id="submit-button"><?php echo Lang::get('kapcsolat_email_kuldes'); ?></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

        </div>
    </div> <!-- END CONTAINER -->

    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-8">
                <div class="single-item-page">

                    <!-- DETAIL INFO -->
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="panel heading">
                                <span class="widget-title"><i class="fa fa-info-circle"></i> Adatok</span>
                            </div>
                            <!-- <h4 class="small-section-title">Detail Information</h4> -->
                            <div class="detail-info-block">



                                <!-- BAL OSZLOP -->
                                <div class="column-2">
                                    <div class="info-item">
                                        <span class="label-item"><?php echo Lang::get('jell_tipus'); ?>:</span>
                                        <span class="value"><?php echo ($ingatlan['tipus'] == 1) ? Lang::get('jell_elado') : Lang::get('jell_kiado'); ?></span>
                                    </div>

                                    <div class="info-item">
                                        <span class="label-item"><?php echo Lang::get('jell_kategoria'); ?>:</span>
                                        <span class="value"><?php echo $ingatlan['kat_nev_' . LANG]; ?></span>
                                    </div>

                                    <?php if (!is_null($ingatlan['szerkezet'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_szerkezet'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['szerkezet_leiras_' . LANG]; ?></span>
                                        </div>
                                    <?php } ?>

                                    <div class="info-item">
                                        <span class="label-item"><?php echo Lang::get('jell_alapterulet'); ?>:</span>
                                        <span class="value"><?php echo $ingatlan['alapterulet']; ?> m<sup>2</sup></span>
                                    </div>

                                    <?php if (!is_null($ingatlan['szobaszam'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_szobaszam'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['szobaszam']; ?></span>
                                        </div>
                                    <?php } ?>

                                    <?php if (!is_null($ingatlan['felszobaszam'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_felszobaszam'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['felszobaszam']; ?></span>
                                        </div>
                                    <?php } ?>

                                    <?php if (!is_null($ingatlan['szoba_elrendezes'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_szoba_elrendezes'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['szoba_elrendezes_leiras_' . LANG]; ?></span>
                                        </div>
                                    <?php } ?>

                                    <?php if (!is_null($ingatlan['kilatas'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_kilatas'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['kilatas_leiras_' . LANG]; ?></span>
                                        </div>
                                    <?php } ?>

                                </div>

                                <!-- JOBB OSZLOP -->
                                <div class="column-2">

                                    <?php if (!is_null($ingatlan['allapot'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_allapot'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['all_leiras_' . LANG]; ?></span>
                                        </div>
                                    <?php } ?> 

                                    <?php if (!is_null($ingatlan['emelet'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_emelet'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['emelet_leiras_' . LANG]; ?></span>
                                        </div>
                                    <?php } ?> 								

                                    <?php if (!is_null($ingatlan['futes'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_futes'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['futes_leiras_' . LANG]; ?></span>
                                        </div>
                                    <?php } ?>

                                    <?php if (!is_null($ingatlan['belmagassag'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_belmagassag'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['belmagassag']; ?> cm</span>
                                        </div>
                                    <?php } ?>

                                    <?php if (!is_null($ingatlan['tajolas'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_tajolas'); ?>:</span>
                                            <span class="value"><?php echo Config::get('orientation.' . LANG . '.' . $ingatlan['tajolas']); ?></span>
                                        </div>
                                    <?php } ?>

                                    <?php if (!is_null($ingatlan['haz_allapot_kivul'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_haz_allapot_kivul'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['haz_allapot_kivul_leiras_' . LANG]; ?></span>
                                        </div>
                                    <?php } ?>

                                    <?php if ($ingatlan['lift'] == 1) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_lift'); ?>:</span>
                                            <span class="value"><?php echo Lang::get('jell_van'); ?></span>
                                        </div>
                                    <?php } ?>

                                    <?php if (!is_null($ingatlan['telek_alapterulet'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_telek_alapterulet'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['telek_alapterulet']; ?> m<sup>2</sup></span>
                                        </div>
                                    <?php } ?>

                                    <?php if (!is_null($ingatlan['rezsi'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_rezsi'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['rezsi']; ?> Ft</span>
                                        </div>
                                    <?php } ?>

                                    <?php if (!is_null($ingatlan['kozos_koltseg'])) { ?>
                                        <div class="info-item">
                                            <span class="label-item"><?php echo Lang::get('jell_kozos_koltseg'); ?>:</span>
                                            <span class="value"><?php echo $ingatlan['kozos_koltseg']; ?> Ft</span>
                                        </div>
                                    <?php } ?>									

                                </div>

                            </div> <!-- detail-info-block END -->
                        </div>
                    </div>


                    <div class="panel heading">
                        <span class="widget-title"><i class="fa fa-table"></i> Jellemzők</span>
                    </div>
                    <!-- FEATURES -->
                    <?php if (!empty($features)) { ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- <h4 class="small-section-title">Features</h4> -->
                                <div class="features-info-block">
                                    <?php foreach ($features as $feature) { ?>
                                        <div class="column-2">
                                            <div class="info-item">
                                                <span class="feature-item"><?php echo Lang::get($feature); ?></span>
                                            </div>
                                        </div>
                                    <?php } ?>    
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- LEÍRÁS -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel heading">
                                <span class="widget-title"><i class="fa fa-file-text-o"></i> <?php echo Lang::get('adatlap_leiras_cim'); ?></span>
                            </div>
                            <div class="detail-info-block">
                                <div class="column-1">
                                    <?php echo $ingatlan['leiras_' . LANG]; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if ($ingatlan['terkep'] == 1) { ?>
                        <!-- TÉRKÉP -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel heading">
                                    <span class="widget-title"><i class="fa fa-map-marker"></i> <?php echo Lang::get('adatlap_terkep_cim'); ?></span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="map-container style-2">
                                    <div id="map-banner-canvas" class="map-banner" data-lat="<?php echo $ingatlan['latitude']; ?>" data-lng="<?php echo $ingatlan['longitude']; ?>">
                                        <!-- A main.js file initBannerMap1() metodusa kezeli a térkép megjelenítését -->
                                        <script>
                                            var locations = [['', <?php echo $ingatlan['latitude']; ?>, <?php echo $ingatlan['longitude']; ?>, 'public/site_assets/images/markers/banner-map/1.6.png']];
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- HASONLÓ INGATLANOK -->
                    <?php if (!empty($hasonlo_ingatlan)) { ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="object-slider latest-properties style-2">
                                    <div class="heading">
                                        <h4 class="small-section-title"><?php echo Lang::get('adatlap_hasonlo_ingatlan_cim'); ?></h4>
                                        <div class="jcarousel-arrows">
                                            <a href="#" class="prev-slide"><i class="fa fa-angle-left"></i></a>
                                            <a href="#" class="next-slide"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="ag-carousel carousel">
                                        <ul>
                                            <?php
                                            foreach ($hasonlo_ingatlan as $value) {
                                                $photo_array = json_decode($value['kepek']);
                                                ?>
                                                <li>

                                                    <a class="item-anchor" href="<?php echo $this->request->get_uri('site_url') . Config::get('url.ingatlanok.adatlap.' . LANG) . '/' . $value['id'] . '/' . $this->str_helper->stringToSlug($value['ingatlan_nev_' . LANG]); ?>">

                                                        <div class="item">
                                                            <div class="preview">
                                                                <?php $this->html_helper->showLowerPriceIcon($value); ?>

                                                                <?php if (!is_null($value['kepek'])) { ?>
                                                                    <img src="<?php echo $this->url_helper->thumbPath(Config::get('ingatlan_photo.upload_path') . $photo_array[0], false, 'small'); ?>" alt="<?php echo $value['ingatlan_nev_' . LANG]; ?>">
                                                                <?php } else { ?>
                                                                    <img src="<?php echo Config::get('ingatlan_photo.upload_path') . 'placeholder.jpg'; ?>" alt="<?php echo $value['ingatlan_nev_' . LANG]; ?>">
                                                                <?php } ?>

                                                                <?php $this->html_helper->showHeartIcon($value); ?>

                                                                                                                <!-- <span class="price-box"> -->
                                                                <?php //$this->html_helper->showPrice($value); ?>
                                                                <!-- </span> -->
                                                            </div>
                                                            <div class="item-thumbnail">
                                                                <div class="single-thumbnail">
                                                                    <span class="value"><?php echo $value['kat_nev_' . LANG]; ?></span>
                                                                </div>
                                                                <div class="single-thumbnail">
                                                                    <span class="value">
                                                                        <?php
                                                                        $felszobaszam = (!empty($value['felszobaszam'])) ? '+ ' . $value['felszobaszam'] . ' ' : '';
                                                                        echo (!empty($value['szobaszam'])) ? $value['szobaszam'] . ' ' . $felszobaszam . mb_strtolower(Lang::get('jell_szobaszam'), 'UTF-8') : '';
                                                                        ?>
                                                                    </span>
                                                                </div>
                                                                <div class="single-thumbnail">
                                                                    <span class="value"><?php echo $value['alapterulet']; ?> m<sup>2</sup></span>
                                                                </div>
                                                            </div>

                                                            <!-- item info  -->
                                                            <div class="item-info">
                                                                <span class="price"><?php $this->html_helper->showPrice($value); ?></span>
                                                            </div>

                                                            <div class="item-entry">
                                                                <span class="item-title">
                                                                    <?php echo $value['ingatlan_nev_' . LANG]; ?>
                                                                </span>
                                                                <p>
                                                                    <?php
                                                                    echo $value['city_name'];
                                                                    echo (isset($value['kerulet'])) ? ', ' . $value['kerulet'] . '. ' . Lang::get('adatlap_kerulet') : '';
                                                                    echo (($value['utca_megjelenites'] == 1) && (!is_null($value['utca']))) ? '<br>' . $value['utca'] : '';
                                                                    ?>
                                                                </p>
                                                                <!-- <div class="item-info"></div> -->
                                                            </div>
                                                        </div>

                                                    </a>

                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                        </div>

                    <?php } ?>                        


                    <!-- NEMRÉG MEGTEKINTETT INGATLANOK -->
                    <?php if (!empty($nemreg_megtekintett_ingatlanok)) { ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="object-slider latest-properties style-2">
                                    <div class="heading">
                                        <h4 class="small-section-title"><?php echo Lang::get('adatlap_nemreg_megtekintett'); ?></h4>
                                        <div class="jcarousel-arrows">
                                            <a href="#" class="prev-slide"><i class="fa fa-angle-left"></i></a>
                                            <a href="#" class="next-slide"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="ag-carousel carousel">
                                        <ul>
                                            <?php
                                            foreach ($nemreg_megtekintett_ingatlanok as $value) {
                                                $photo_array = json_decode($value['kepek']);
                                                ?>
                                                <li>

                                                    <a class="item-anchor" href="<?php echo $this->request->get_uri('site_url') . Config::get('url.ingatlanok.adatlap.' . LANG) . '/' . $value['id'] . '/' . $this->str_helper->stringToSlug($value['ingatlan_nev_' . LANG]); ?>">

                                                        <div class="item">


                                                            <div class="preview">
                                                                <?php $this->html_helper->showLowerPriceIcon($value); ?>

                                                                                                                                                                                                                                        <!-- <a href="<?php //echo $this->request->get_uri('site_url') . Config::get('url.ingatlanok.adatlap.' . LANG) . '/' . $value['id'] . '/' . $this->str_helper->stringToSlug($value['ingatlan_nev_' . LANG]);                      ?>"></a> -->

                                                                <?php if (!is_null($value['kepek'])) { ?>
                                                                    <img src="<?php echo $this->url_helper->thumbPath(Config::get('ingatlan_photo.upload_path') . $photo_array[0], false, 'small'); ?>" alt="<?php echo $value['ingatlan_nev_' . LANG]; ?>">
                                                                <?php } else { ?>
                                                                    <img src="<?php echo Config::get('ingatlan_photo.upload_path') . 'placeholder.jpg'; ?>" alt="<?php echo $value['ingatlan_nev_' . LANG]; ?>">
                                                                <?php } ?>

                                                                <?php $this->html_helper->showHeartIcon($value); ?>

                                                                                                                            <!-- <span class="price-box"> -->
                                                                <?php //$this->html_helper->showPrice($value); ?>
                                                                <!-- </span> -->
                                                            </div>
                                                            <div class="item-thumbnail">
                                                                <div class="single-thumbnail">
                                                                    <span class="value"><?php echo $value['kat_nev_' . LANG]; ?></span>
                                                                </div>
                                                                <div class="single-thumbnail">
                                                                    <span class="value">
                                                                        <?php
                                                                        $felszobaszam = (!empty($value['felszobaszam'])) ? '+ ' . $value['felszobaszam'] . ' ' : '';
                                                                        echo (!empty($value['szobaszam'])) ? $value['szobaszam'] . ' ' . $felszobaszam . mb_strtolower(Lang::get('jell_szobaszam'), 'UTF-8') : '';
                                                                        ?>                                                                        
                                                                    </span>
                                                                </div>
                                                                <div class="single-thumbnail">
                                                                    <span class="value"><?php echo $value['alapterulet']; ?> m<sup>2</sup></span>
                                                                </div>
                                                            </div>

                                                            <!-- item info  -->
                                                            <div class="item-info">
                                                                <span class="price"><?php $this->html_helper->showPrice($value); ?></span>
                                                            </div>


                                                            <div class="item-entry">
                                                                <span class="item-title">

                                                                    <?php echo $value['ingatlan_nev_' . LANG]; ?>
                                                                </span>
                                                                <p>
                                                                    <?php
                                                                    echo $value['city_name'];
                                                                    echo (isset($value['kerulet'])) ? ', ' . $value['kerulet'] . '. ' . Lang::get('adatlap_kerulet') : '';
                                                                    echo!is_null($value['utca']) ? '<br>' . $value['utca'] : '';
                                                                    ?>
                                                                </p>

                                                            </div>
                                                        </div>

                                                    </a>

                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                        </div>

                    <?php } ?>						



                </div> <!-- single-item-page END -->
            </div> 

            <!-- SIDEBAR -->
            <div class="col-sm-12 col-md-4">
                <aside class="sidebar main-sidebar" style="padding-top: 0;">

                    <?php //include($this->path('tpl_modul_banner')); ?>
                    <?php include($this->path('tpl_modul_banner_mennyiterazingatlanom_notopmargin')); ?>
                    <?php include($this->path('tpl_modul_banner_ingatlan_kezeles')); ?>
                    <?php include($this->path('tpl_modul_banner_berbeadoknak')); ?>

                </aside>
            </div>

        </div>
    </div> <!-- END CONTAINER -->


</div> <!-- Fluid container END -->