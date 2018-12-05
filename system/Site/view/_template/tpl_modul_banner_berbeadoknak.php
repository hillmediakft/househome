<?php 
use System\Libs\Config;
use System\Libs\Language as Lang;
?>
<div class="widget banner">
    <div class="banner-img">
        <img src="<?php echo SITE_IMAGE; ?>berbeadoknak_banner.jpg" alt="">

	<div class="banner-entry">
        <span class="banner-title"><a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.berbeadoknak.index.' . LANG); ?>"><?php echo Lang::get('home_szolgaltatasok_4_cim'); ?></a></span>
        <span class="banner-sub"><?php echo Lang::get('home_szolgaltatasok_4_szoveg'); ?></span>
       
    </div>

    </div>
    
</div>