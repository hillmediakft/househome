<?php 
use System\Libs\Config;
use System\Libs\Language as Lang;
?>
<div class="widget banner">
    <div class="banner-img">
        <img src="<?php echo SITE_IMAGE; ?>ingatlan-kezeles.jpg" alt="">
        <div class="banner-entry">
	        <span class="banner-title"> <a href="<?php echo $this->request->get_uri('site_url') . Config::get('url.ingatlan-kezeles.index.' . LANG); ?>"><?php echo Lang::get('home_szolgaltatasok_2_cim'); ?></a></span>
	        <span class="banner-sub"><?php echo Lang::get('home_szolgaltatasok_2_szoveg'); ?></span>
	        
    	</div>
    </div>
    
</div>