import intlTelInput from 'intl-tel-input';

$.fn.intlTelInputForm = function(options) {
    const input = document.getElementById($(this).attr('id'))
    return intlTelInput(input, {
        nationalMode: true,
        preferredCountries: ['my', 'sg'],
        // onlyCountries: ["my"],
        separateDialCode: true,
        utilsScript: 'intltel.utils.js',
        initialCountry: "auto",
        autoPlaceholder: "polite",
        hiddenInput: options.name,
        // geoIpLookup: function (callback) {
        //     $.get('https://ipinfo.io', function () {
        //     }, "jsonp").always(function (resp) {
        //         var countryCode = (resp && resp.country) ? resp.country : "my";
        //         callback(countryCode);
        //     });
        // },
    });
}
