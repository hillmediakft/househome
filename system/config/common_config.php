<?php

$config['hash_cost_factor'] = 10;

$config['language_default_site'] = 'hu';
$config['language_default_admin'] = 'hu';
$config['allowed_languages'] = array('hu', 'en');

$config['languages_names'] = array(
    'hu' => 'Magyar',
    'en' => 'Angol'
);

$config['reg_email_verify'] = true;

//log fileok adatai
$config['log'] = array(
    'error' => 'logs_error.log',
    'notice' => 'logs_notice.log'
);

//default html layout beállítása
$config['layout'] = array(
    'default_site' => 'tpl_layout',
    'default_admin' => 'tpl_layout'
);


//default helperek beállítása
$config['default_helpers'] = array(
    'site' => array('html_site_helper', 'url_helper', 'str_helper'),
    'admin' => array('html_admin_helper', 'url_helper')
);

$config['email'] = array(
    'password_reset' => array(
        'admin_url' => BASE_URL . 'admin/login/verifypasswordreset',
        'site_url' => BASE_URL . 'users/verifypasswordreset',
        'subject' => 'Új jelszó kérése.',
        'link' => 'Kattints a linkre a jelszó reseteléséhez.'
    ),
    'verification' => array(
        'site_url' => BASE_URL . 'felhasznalok/ellenorzes',
        'subject' => 'Regisztráció hitelesítése.',
        'link' => 'Kattints erre a linkre a regisztrációd aktiválásához.'
    ),
    'verification_newsletter' => array(
        'site_url' => BASE_URL . 'felhasznalok/ellenorzes_hirlevel',
        'subject' => 'Hírlevélre feliratkozás hitelesítése.',
        'link' => 'Kattints erre a linkre a feliratkozás aktiválásához.'
    )
);

$config['login'] = array(
    'facebook_login' => false,
    'facebook_login_app_id' => 'xxx',
    'facebook_login_app_secret' => 'xxx',
    'facebook_login_path' => 'login/loginWithFacebook',
    'facebook_register_path' => 'login/registerWithFacebook',
    'use_gravatar' => false,
    'avatar_size' => 44,
    'avatar_jpeg_quality' => 85,
    'avatar_default_image' => 'default.jpg',
    'avatar_path' => ''
);

$config['cookie'] = array(
    'runtime' => 1209600,
    'domain' => '.localhost'
);

$config['slider'] = array(
    'width' => 1920,
    'height' => 900,
    'thumb_width' => 200,
    'thumb_height' => 84,
    'upload_path' => UPLOADS . 'slider_photo/'
);

$config['photogallery'] = array(
    'width' => 800,
    'height' => 600,
    'thumb_width' => 320,
    'thumb_height' => 240,
    'upload_path' => UPLOADS . 'photo_gallery/'
);

$config['user'] = array(
    'width' => 600,
    'height' => 200,
    //'thumb_width' => 80,
    'upload_path' => UPLOADS . 'user_photo/',
    'default_photo' => 'user_placeholder.png'
);

$config['clientphoto'] = array(
    'width' => 150,
    'height' => 100,
    'thumb_width' => 150,
    'upload_path' => UPLOADS . 'client_photo/',
    'default_photo' => 'client_placeholder.png'
);

$config['session'] = array(
    'expire_time_admin' => 3000000000,
    'expire_time_site' => 300600
        // 'last_activity_name_admin' => 'user_last_activity', // A $_SESSION['last_activity'] elem fogja tárolni az utolsó aktivitás idejét
        // 'last_activity_name_site' => 'user_site_last_activity' // A $_SESSION['last_activity'] elem fogja tárolni az utolsó aktivitás idejét
);
$config['blogphoto'] = array(
    'width' => 600,
    'height' => 400,
    'thumb_width' => 150,
    'upload_path' => UPLOADS . 'blog_photo/'
);

$config['ingatlan_photo'] = array(
    'width' => 800,
    'height' => 600, //csak akkor van hatása, ha az y_ratio false
    'thumb_width' => 80,
    'thumb_height' => 60,
    'small_width' => 400,
    'small_height' => 300,
    'y_ratio' => true, // ha true, akkor megtartja az eredeti képarányt, ha false, akkor a height érték lép életbe az átméretezésnél
    'upload_path' => UPLOADS . 'ingatlan_photo/',
    //'default_photo' => 'default.jpg',
    'placeholder' => ADMIN_ASSETS . 'img/placeholder_323x242.jpg',
    'placeholder_thumb' => ADMIN_ASSETS . 'img/placeholder_80x60.jpg'
);

$config['ingatlan_photo_floor_plan'] = array(
    'width' => 800,
    'height' => 600, //csak akkor van hatása, ha az y_ratio false
    'thumb_width' => 80,
    'thumb_height' => 60,
    'small_width' => 400,
    'small_height' => 300,
    'y_ratio' => true, // ha true, akkor megtartja az eredeti képarányt, ha false, akkor a height érték lép életbe az átméretezésnél
    'upload_path' => UPLOADS . 'ingatlan_photo_floor_plan/',
    //'default_photo' => 'default.jpg',
    'placeholder' => ADMIN_ASSETS . 'img/placeholder_323x242.jpg',
    'placeholder_thumb' => ADMIN_ASSETS . 'img/placeholder_80x60.jpg'
);

$config['documents'] = array(
    'upload_path' => UPLOADS . 'documents/'
);

$config['ingatlan_doc'] = array(
    'upload_path' => UPLOADS . 'ingatlan_doc/'
);

// az extra jellemzők oszlopnevei az adatbazisból
$config['extra'] = array(
    'ext_butor',
    'ext_medence',
    'ext_szauna',
    'ext_jacuzzi',
    'ext_kandallo',
    'ext_riaszto',
    'ext_klima',
    'ext_ontozorendszer',
    'ext_automata_kapu',
    'ext_elektromos_redony',
    'ext_konditerem',
    'ext_galeria',                          
    'ext_furdoben_kad', 
    'ext_furdoben_zuhany',
    'ext_masszazskad',
    'ext_amerikaikonyha',
    'ext_konyhaablak',
    'ext_kamra',
    'ext_pince',
    'ext_panorama',
    'ext_biztonsagi_ajto',
    'ext_redony',
    'ext_racs',
    'ext_video_kaputelefon',
    'ext_porta_szolgalat',
    'ext_beepitett_szekreny',
    'ext_tarolo_helyiseg'
);
?>