<?php

namespace System\Admin\Controller;

use System\Core\AdminController;
use System\Libs\DI;
use System\Libs\Config;
use System\Libs\Emailer;
//use System\Libs\Message;
use System\Libs\Cookie;
use System\Core\View;

class Logs extends AdminController {

    function __construct() {
        parent::__construct();
        $this->loadModel('logs_model');
    }

    public function index() {
        // last_log_id beállítása
        $last_log_id = $this->logs_model->lastLogId();
        Cookie::set('last_log_id', $last_log_id, -1);
        // last_log_number értéke 0
        Cookie::set('last_log_number', 0, -1);

        $data['title'] = 'Naplózás oldal';
        $data['description'] = 'Naplózás oldal description';
        // userek adatainak lekérdezése
        $data['logs'] = $this->logs_model->get_logs();
        //var_dump($data);die;
        $view = new View();
        $view->add_links(array('datatable', 'vframework', 'logs'));
//$view->debug(true);   
        $view->render('logs/tpl_logs', $data);
    }

    public function sendLogEmail() {

        $cron_key = $this->request->get_query('key');
        if ($cron_key != 'DH7AVdT0uGeN-WfZLkgfutDfDeYrqELjjTZrnulm3RY') {
            die('No permission!');
        }


        $this->loadModel('settings_model');
        $settings = $this->settings_model->get_settings();
        $this->loadModel('property_model');


        $daily_logs = $this->logs_model->getDailyLogs();
        $data = array();
        foreach ($daily_logs as $key => $log) {
            $result = explode('/', $log['message']);
            $id = substr($result[0], 1);

            $data[] = $this->property_model->getPropertyDetails($id);

            $data[$key]['message'] = $log['message'];
            $data[$key]['referens'] = $log['first_name'] . ' ' . $log['last_name'];
        }


        $photo_link = BASE_URL . UPLOADS . 'ingatlan_photo/';
        $url_helper = DI::get('url_helper');
        $str_helper = DI::get('str_helper');

        $html_data = "";
        $html_data .= "<tr style='background: #eee;'>\r\n";
        $html_data .= "<td></td>";
        $html_data .= "<td style='padding: 4px;'><strong>Megnevezés</strong></td>";
        $html_data .= "<td style='padding: 4px;'><strong>Ref.sz. | módosítás | referens</strong></td>";
        $html_data .= "<td style='padding: 4px;'><strong>Link</strong></td>";
        $html_data .= "</tr>\r\n";
        foreach ($data as $key => $value) {

            if (!empty($value['kepek'])) {
                $kep_arr = json_decode($value['kepek']);
                $img = "<img src='" . BASE_URL . $url_helper->thumbPath(Config::get('ingatlan_photo.upload_path') . $kep_arr[0]) . "' />";
            } else {
                $img = "<img src='" . BASE_URL . $url_helper->thumbPath(Config::get('ingatlan_photo.upload_path') . 'placeholder.jpg') . "' />";
            }

            $html_data .= "<tr>\r\n";
            $html_data .= "<td>" . $img . "</td>";
            $html_data .= "<td>" . $value['ingatlan_nev_hu'] . "</td>";
            $html_data .= "<td>" . $value['message'] . " | " . $value['referens'] . "</td>";
            $html_data .= "<td><a style='color:blue;' href='" . BASE_URL . 'ingatlanok/adatlap/' . $value['id'] . '/' . $str_helper->stringToSlug($value['ingatlan_nev_hu']) . "' target='_blank'>link-></a></td>";
            $html_data .= "</tr>\r\n";
        }



        // template-be kerülő változók
        $template_data = array(
            'html_data' => $html_data,
            'present_time' => date('Y-m-d h:i', time()),
            'past_time' => date('Y-m-d h:i', time() - (60 * 60 * 24))
        );

        $to_email = 'vucuka@gmail.com';
        $to_name = '';
        $subject = 'Napi értesítés ingatlan módosításokról';
        $template = 'daily_logs_email';
        $from_email = $settings['email'];
        $from_name = $settings['ceg'];

        $emailer = new Emailer($from_email, $from_name, $to_email, $to_name, $subject, $template_data, $template);
        $emailer->setArea('admin');
        //$emailer->setDebug(true);
        // true vagy false
        $emailer->send();
    }

}

?>