var Blog_insert = function () {

	/**
	 *	Form adatok elküldése
	 */
	var send_form = function(){

		$("#new_blog_form").submit(function (e){
			e.preventDefault();

			App.blockUI({
	            boxed: true,
	            message: 'Feldolgozás...'
	        });

			var currentForm = this;

			setTimeout(function(){
				currentForm.submit();
			}, 300);

		});
	};

    var ckeditorInit = function () {
        CKEDITOR.replace('blog_body_hu', {customConfig: 'config_max1.js?v=20180118'});
        CKEDITOR.replace('blog_body_en', {customConfig: 'config_max1.js.js?v=20180118'});
    };

    return {
        //main function to initiate the module
        init: function () {
			send_form();
			ckeditorInit();
			vframework.hideAlert();
        }
    };

}();

jQuery(document).ready(function() {    
	Blog_insert.init();
});