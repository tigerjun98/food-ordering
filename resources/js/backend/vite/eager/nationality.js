import Dropzone from "dropzone";



const formatCountry = (country) => {
    if (!country.id) { return country.text; }
    var $country = $(
        '<span class="flag-icon flag-icon-'+ country.id.toLowerCase() +' flag-icon-squared"></span>' +
        '<span class="flag-text">'+ country.text+"</span>"
    );
    return $country;
}

(function($) {
    $(function() {




        //Assuming you have a select element with name country
        // e.g. <select name="name"></select>




    });
})(jQuery);
