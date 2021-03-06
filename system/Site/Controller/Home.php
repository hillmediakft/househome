<?php
namespace System\Site\Controller;

use System\Core\SiteController;
use System\Core\View;
use System\Libs\Config;
use System\Libs\Session;
use System\Libs\DI;

class Home extends SiteController {

    function __construct()
    {
        parent::__construct();
        $this->loadModel('home_model');
        $this->loadModel('ingatlanok_model');
        $this->loadModel('blog_model');
    }

    public function index()
    {
        $page_data = $this->home_model->getPageData('kezdo_oldal');
       
        
        $data = $this->addGlobalData();
        $data['title'] = $page_data['metatitle_' . $this->lang];
        $data['description'] = $page_data['metadescription_' . $this->lang];
        $data['keywords'] = $page_data['metakeywords_' . $this->lang];
        // kezdokep    
        $home_background_image = $this->home_model->getBackground();
        if ($home_background_image !== '') {
            $data['home_background_path'] =  Config::get('slider.upload_path') . $home_background_image;
        } else {
            $data['home_background_path'] = 'public/site_assets/images/home-bg.jpg';
        }
        // oldal id-je
        $data['page_id'] = 'home';
        // szűrési paramétereket tartalmazó tömb
        $data['filter_params'] = $this->ingatlanok_model->get_filter_params(Session::get('ingatlan_filter'));
//var_dump($data['filter_params']);
        // a keresőhöz szükséges listák alőállítása
        $data['city_list'] = $this->ingatlanok_model->city_list_query_with_prop_no();
        $data['category_list'] = $this->ingatlanok_model->list_query('ingatlan_kategoria');
        $data['district_list'] = $this->ingatlanok_model->district_list_query_with_prop_no();
        
        // kiemelt ingatlanok
        $featured_properties = $this->ingatlanok_model->kiemelt_properties_query(10);
        $arr_helper = DI::get('arr_helper');
        // tömb véletlenszerű újrarendezése, hogy ne mindig a legfrissebbek jelenjenek meg elől
        $data['all_properties'] = $arr_helper->shuffle_assoc($featured_properties);
        
        // ingatlan értékesítők
        $data['agents'] = $this->ingatlanok_model->get_agent();
        // csak azok az ügynökök jelennek meg, akiknek van ingatlanjuk
        if ($data['agents'] !== false) {
            foreach ($data['agents'] as $key => $value) {
                if ($value['property'] == 0) {
                    unset($data['agents'][$key]);
                }
            }
            shuffle($data['agents']);
        } else {
            $data['agents'] = array();
        }

        $data['blog_list'] = $this->blog_model->getBlogSidebar(4);

        $view = new View();
        $view->setHelper(array('url_helper', 'str_helper', 'html_helper'));

        //$view->setLazyRender();
//$this->view->debug(true);
        $view->add_links(array('bootstrap-select')); 
        $view->add_link('js', SITE_JS . 'pages/handle_search.js');
        $view->add_link('js', SITE_JS . 'pages/home.js');
        $view->render('home/tpl_home', $data);
    }
}
?>