<?php
/*----------------- MODUL LINKEK --------------------*/

$link['bootbox'] = array(
	'js' => ADMIN_ASSETS . 'plugins/bootbox/bootbox.min.js'
);

$link['bootstrap-fileupload'] = array(
	'css' => ADMIN_ASSETS . 'plugins/bootstrap-fileupload/bootstrap-fileupload.css',
	'js' => ADMIN_ASSETS . 'plugins/bootstrap-fileupload/bootstrap-fileupload.js'
);

$link['bootstrap-fileinput'] = array(
	'css' => ADMIN_ASSETS . 'plugins/bootstrap-fileinput/bootstrap-fileinput.css',
	'js' => ADMIN_ASSETS . 'plugins/bootstrap-fileinput/bootstrap-fileinput.js'
);

$link['bootstrap-editable'] = array(
	'css' => ADMIN_ASSETS . 'plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css',
	'js' => ADMIN_ASSETS . 'plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js'
);

$link['bootstrap-toastr'] = array(
	'css' => ADMIN_ASSETS . 'plugins/bootstrap-toastr/toastr.min.css',
	'js' => ADMIN_ASSETS . 'plugins/bootstrap-toastr/toastr.min.js'
);

$link['bootstrap-sessiontimeout'] = array(
	'js' => ADMIN_ASSETS . 'plugins/bootstrap-sessiontimeout/bootstrap-session-timeout.min.js',
	'js' => ADMIN_ASSETS . 'plugins/bootstrap-sessiontimeout/ui-session-timeout.js',
);

$link['ckeditor'] = array(
	'js' => ADMIN_ASSETS . 'plugins/ckeditor/ckeditor.js'
);

$link['croppic'] = array(
	'css' => ADMIN_ASSETS . 'plugins/croppic/croppic.css',
	'js' => ADMIN_ASSETS . 'plugins/croppic/croppic.min.js'
);

$link['datatable'] = array(
	'css' => array(
		ADMIN_ASSETS . 'plugins/datatables/datatables.min.css',
		ADMIN_ASSETS . 'plugins/datatables/plugins/bootstrap/datatables.bootstrap.css'
	),
	'js' => array(
		ADMIN_JS . 'datatable.js',
		ADMIN_ASSETS . 'plugins/datatables/datatables.min.js',
		ADMIN_ASSETS . 'plugins/datatables/plugins/bootstrap/datatables.bootstrap.js'
	)
);

$link['datepicker'] = array(
	'css' => ADMIN_ASSETS . 'plugins/bootstrap-datepicker/css/bootstrap-datepicker.css',
	'js' => array(
		ADMIN_ASSETS . 'plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
		ADMIN_ASSETS . 'plugins/bootstrap-datepicker/locales/bootstrap-datepicker.hu.min.js'
	)
);


$link['elfinder'] = array(
	'css' => array(
		ADMIN_ASSETS . 'plugins/elfinder/css/elfinder.min.css',
		ADMIN_ASSETS . 'plugins/elfinder/css/theme.css'
	),
	'js' => array(
		ADMIN_ASSETS . 'plugins/elfinder/js/elfinder.min.js',
		ADMIN_ASSETS . 'plugins/elfinder/js/i18n/elfinder.hu.js'
	)
);
$link['jquery-ui-elfinder'] = array(
	'css' => array(
		ADMIN_ASSETS . 'plugins/jquery-ui-elfinder/jquery-ui-theme-smoothness.css'
	),
	'js' => array(
		ADMIN_ASSETS . 'plugins/jquery-ui-elfinder/jquery-ui.min.js'
	)
);


$link['fancybox'] = array(
	'css' => ADMIN_ASSETS . 'plugins/fancybox/source/jquery.fancybox.css',	
	'js' => ADMIN_ASSETS . 'plugins/fancybox/source/jquery.fancybox.pack.js'
);

$link['jquery-ui'] = array(
	'css' => ADMIN_ASSETS . 'plugins/jquery-ui/jquery-ui.min.css',
	'js' => ADMIN_ASSETS . 'plugins/jquery-ui/jquery-ui.min.js'
);

$link['jquery-ui-custom'] = array(
	'css' => ADMIN_ASSETS . 'plugins/jquery-ui-custom/jquery-ui-1.10.3.custom.min.css',
	'js' => ADMIN_ASSETS . 'plugins/jquery-ui-custom/jquery-ui-1.10.3.custom.min.js'
);

$link['mixitup'] = array(
	'js' => ADMIN_ASSETS . 'plugins/jquery-mixitup/jquery.mixitup.min.js'
);

$link['select2'] = array(
	'css' => ADMIN_ASSETS . 'plugins/select2/css/select2.css',
	'js' => ADMIN_ASSETS . 'plugins/select2/js/select2.min.js'
);

$link['validation'] = array(
	'js' => array(
		ADMIN_ASSETS . 'plugins/jquery-validation/jquery.validate.js',
		ADMIN_ASSETS . 'plugins/jquery-validation/additional-methods.min.js',
		ADMIN_ASSETS . 'plugins/jquery-validation/localization/messages_hu.js'
	)
);

$link['kartik-bootstrap-fileinput'] = array(
	'css' => ADMIN_ASSETS . 'plugins/kartik-bootstrap-fileinput/css/fileinput.css',
	'js' => array(
		ADMIN_ASSETS . 'plugins/kartik-bootstrap-fileinput/js/fileinput.js',
		ADMIN_ASSETS . 'plugins/kartik-bootstrap-fileinput/js/fileinput_locale_hu.js'
	) 
);

$link['vframework'] = array(
	'js' => ADMIN_JS . 'vframework_object.js'
);

$link['autocomplete'] = array(
	'js' => ADMIN_ASSETS . 'plugins/autocomplete/src/jquery.autocomplete.js'
);

$link['bootstrap_maxlength'] = array(
	'js' => ADMIN_ASSETS . 'plugins/bootstrap-maxlength/bootstrap-maxlength.min.js'
);

/*----------------- OLDALSPECIFIKUS LINKEK --------------------*/

// blog
$link['blog'] = array('js' => ADMIN_JS . 'pages/blog.js');
$link['blog_insert'] = array('js' => ADMIN_JS . 'pages/blog_insert.js');
$link['blog_update'] = array('js' => ADMIN_JS . 'pages/blog_update.js');
$link['blog_category'] = array('js' => ADMIN_JS . 'pages/blog_category.js');
$link['blog_category_insert'] = array('js' => ADMIN_JS . 'pages/blog_category_insert.js');
$link['blog_category_update'] = array('js' => ADMIN_JS . 'pages/blog_category_update.js');

// content (pl. lábléc stb.)
$link['content'] = array('js' => ADMIN_JS . 'pages/content.js');
$link['edit_content'] = array('js' => ADMIN_JS . 'pages/edit_content.js');

// partnerek
$link['clients'] = array('js' => ADMIN_JS . 'pages/clients.js');
$link['client_insert'] = array('js' => ADMIN_JS . 'pages/client_insert.js');
$link['client_update'] = array('js' => ADMIN_JS . 'pages/client_update.js');

// hírlevél
$link['newsletter_eventsource'] = array('js' => ADMIN_JS . 'pages/newsletter_eventsource.js');
$link['newsletter_insert'] = array('js' => ADMIN_JS . 'pages/newsletter_insert.js');
$link['newsletter_update'] = array('js' => ADMIN_JS . 'pages/newsletter_update.js');
$link['newsletter_stats'] = array('js' => ADMIN_JS . 'pages/newsletter_stats.js');

// oldalak
$link['pages'] = array('js' => ADMIN_JS . 'pages/pages.js');
$link['page_update'] = array('js' => ADMIN_JS . 'pages/page_update.js');

// users
$link['users'] = array('js' => ADMIN_JS . 'pages/users.js');
$link['user_insert'] = array('js' => ADMIN_JS . 'pages/user_insert.js');
$link['user_profile'] = array('js' => ADMIN_JS . 'pages/user_profile.js');

// slider
$link['slider'] = array('js' => ADMIN_JS . 'pages/slider.js');
$link['slider_insert'] = array('js' => ADMIN_JS . 'pages/slider_insert.js');
$link['slider_update'] = array('js' => ADMIN_JS . 'pages/slider_update.js');

// filemanager
$link['filemanager'] = array('js' => ADMIN_JS . 'pages/file_manager.js');

// fotó galéria
$link['photo_gallery'] = array('js' => ADMIN_JS . 'pages/photo_gallery.js');
$link['photo_gallery_insert_update'] = array('js' => ADMIN_JS . 'pages/photo_gallery_insert_update.js');
$link['photo_category'] = array('js' => ADMIN_JS . 'pages/photo_category.js');
$link['photo_category_insert'] = array('js' => ADMIN_JS . 'pages/photo_category_insert.js');
$link['photo_category_update'] = array('js' => ADMIN_JS . 'pages/photo_category_update.js');

// rólunk mondták
$link['testimonials'] = array('js' => ADMIN_JS . 'pages/testimonials.js');
$link['testimonial_insert'] = array('js' => ADMIN_JS . 'pages/testimonial_insert.js');
$link['testimonial_update'] = array('js' => ADMIN_JS . 'pages/testimonial_update.js');

// property
$link['property_list'] = array('js' => ADMIN_JS . 'pages/property_list.js');
$link['property_list_superadmin'] = array('js' => ADMIN_JS . 'pages/property_list_superadmin.js');
$link['property_details'] = array('js' => ADMIN_JS . 'pages/property_details.js');
$link['property_insert'] = array('js' => ADMIN_JS . 'pages/property_insert.js');
$link['property_update'] = array('js' => ADMIN_JS . 'pages/property_update.js');

// datatables
$link['datatable_lists'] = array('js' => ADMIN_JS . 'pages/datatable_lists.js');

// Google Maps
$link['google-maps'] = array(
	'js' => array(
		'https://maps.googleapis.com/maps/api/js?key=AIzaSyDsyHr_ERbn8TBSwHRB1mWk28VDByR-oL0',
		ADMIN_ASSETS . 'plugins/gmaps/gmaps.min.js'
	) 
);

// logs
$link['logs'] = array('js' => ADMIN_JS . 'pages/logs.js');

// documents
$link['documents'] = array('js' => ADMIN_JS . 'pages/documents.js');
$link['document_insert'] = array('js' => ADMIN_JS . 'pages/document_insert.js');
$link['document_update'] = array('js' => ADMIN_JS . 'pages/document_update.js');
$link['document_category'] = array('js' => ADMIN_JS . 'pages/document_category.js');
$link['document_category_insert'] = array('js' => ADMIN_JS . 'pages/document_category_insert.js');
$link['document_category_update'] = array('js' => ADMIN_JS . 'pages/document_category_update.js');

// ajánlások
$link['ajanlasok'] = array('js' => ADMIN_JS . 'pages/ajanlasok.js');

return $link;
?>