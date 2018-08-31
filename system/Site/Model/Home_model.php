<?php
namespace System\Site\Model;
use System\Core\SiteModel;

class Home_model extends SiteModel {

	function __construct()
	{
		parent::__construct();
	}


    /**
     * Kezdőoldal háttérkép visszaadása
     * (az összes kép nevét visszaadja sorrendben)
     * 	
     * @return Array (az összes slide minden adata a "slider_order" szerint rendezve)
     */
    public function getBackground()
    {
		$this->query->set_table('slider');
		$this->query->set_columns('picture');
		$this->query->set_where('active', '=', 1);
        $this->query->set_orderby(array('slider_order'));
        $result = $this->query->select();
        return (!empty($result)) ? $result[0]['picture'] : '';
    }

}
?>