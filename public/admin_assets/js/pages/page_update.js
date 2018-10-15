var Page_update = function () {

	var updatePageConfirm = function () {
		$('#page_update_form').submit(function(e){
            e.preventDefault();
			
			var currentForm = this;
			
			bootbox.setDefaults({
				locale: "hu", 
			});
			bootbox.confirm("Biztosan menti a módosításokat?", function(result) {
				if (result) {

					App.blockUI({
			            boxed: true,
			            message: 'Feldolgozás...'
			        });

					setTimeout(function(){
						currentForm.submit();
					}, 300); 	
				}
            }); 
        });	 		
	};

    var handleMaxlength = function() {
        $('#maxlength_page_metadescription_hu').maxlength({
            limitReachedClass: "label label-danger",
            threshold: 150
        });

        $('#maxlength_page_metadescription_en').maxlength({
            limitReachedClass: "label label-danger",
            threshold: 150
        });

        $('#maxlength_page_metatitle_hu').maxlength({
            limitReachedClass: "label label-danger",
            threshold: 50
        });

        $('#maxlength_page_metatitle_en').maxlength({
            limitReachedClass: "label label-danger",
            threshold: 50
        });        

    }	

    return {

        //main function to initiate the module
        init: function () {
			updatePageConfirm();

			vframework.hideAlert();
			
			vframework.ckeditorInit({
				page_body_hu: "config_max1",
				page_body_en: "config_max1"
			});
			handleMaxlength();
			
        }

    };

}();

$(document).ready(function() {    
	Page_update.init();
});