var Home = function () {

/*
    var locationsInput = function () {

        //kerület és városrész option lista megjelenítése, ha a kiválasztott megye Budapest
        $("#megye_select").change(function () {

            alert('hhh');
            var str = "";
            //option listaelem tartalom
            str = $("select#megye_select option:selected").text();
            // option listaelem value
            option_value = $("select#megye_select option:selected").val();

            // az érték üres lesz, ha a válassz elemet választjuk ki az option listából
            if (option_value !== '') {

                $('#loadingDiv').html('<img src="public/admin_assets/img/loader.gif">');
                $('#loadingDiv').show();

                var county_id = $("#megye_select").val();

                $.ajax({
                    type: "post",
                    url: "admin/property/county_city_list",
                    data: "county_id=" + county_id,
                    beforeSent: function () {
                        $('#loadingDiv').show();
                    },
                    complete: function () {
                        $('#loadingDiv').hide();
                    },
                    success: function (data) {
                        //console.log(data);
                        $("#varos_div > select").html(data);
                    }
                });

            }
        })
    };
*/    

/*
    var enableDistrict = function () {

        var option_value = $("select#varos option:selected").val();
        // az érték üres lesz, ha a válassz elemet választjuk ki az option listából
        if (option_value == '88') {
            $('#district').prop("disabled", false);
        }

        //kerület és városrész option lista megjelenítése, ha a kiválasztott megye Budapest
        $("#varos").change(function () {

            //option listaelem tartalom
            var str = $("select#varos option:selected").text();
            // option listaelem value
            option_value = $("select#varos option:selected").val();
            // az érték üres lesz, ha a válassz elemet választjuk ki az option listából
            if (option_value == '88') {
                $('#district').prop("disabled", false);

            } else {
                $('#district option[value=""]').prop('selected', true);
                $('#district').prop("disabled", true);

            }
        })
    };
*/

    // kezdőkép elérési út beállítása
	 var width = $(window).width();
        if (width > 480) {
            document.getElementById("home_background_image").style.backgroundImage = "url(" + home_background_path + ")";
        } else {
        //  document.getElementById("home_background_image_mobile").style.backgroundImage = "url(" + home_background_path + ")";
        }

    var equalHeights = function () {
        setTimeout(function () {
            $('.object-slider.interesting-offer div.item').equalHeights();
        }, 200);
    };
    
     var equalHeightsServices = function () {
        setTimeout(function () {
            $('.col-sm-3.col-xs-6 div.single-feature').equalHeights();
        }, 200);
    };   

    return {
        //main function to initiate the module
        init: function () {
            //enableDistrict();
            //locationsInput();
            equalHeights();
            equalHeightsServices();
        }
    };

}();


jQuery(document).ready(function ($) {
    Home.init();
});