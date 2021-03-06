var Common = function () {

    var initToastr = function () {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "2000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    };

    var kedvencek = function () {
        $('#kedvencek').click(function () {
            var lang = $('html').attr('lang');

            if (lang == 'hu') {
                lang = '';
            } else {
                lang = lang + '/';
            }
            $.ajax({
                type: "post",
                url: lang + "ajaxrequest/kedvencek",
                success: function (data) {
                    //console.log(data);
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        toastr[data.status](data.message, data.title)
                    }
                }
            });
        })
    };

    var initMobileMenu = function () {
        console.log('init mobile menu');
        $("#mobile_menu").slicknav({
            'appendTo': '.header',
            'brand': '<a href="/"><img src="public/site_assets/images/logo.png" alt=""></a>'
        });
    };

    return {
        //main method to initiate page
        init: function () {
            // call local function
            initToastr();
            kedvencek();
            initMobileMenu();
        },

    };
}();

$(document).ready(function () {
    Common.init();
});