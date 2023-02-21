import 'bootstrap'
import 'bootstrap-datepicker'
import PerfectScrollbar from 'perfect-scrollbar';
import Sortable from 'sortablejs';

$.fn.initialiseScrollbar = function(options = { suppressScrollX: true }) {
    return new PerfectScrollbar(`#${$(this).attr('id')}`, options);
}

$.fn.initialiseSortable = function(options) {
    const el = document.getElementById($(this).attr('id'));
    return new Sortable(el, options);
}

$.fn.initialiseDynamicSelect2 = function(options) {
    $($(this)).select2({
        // minimumInputLength: 1,
        theme: "bootstrap",
        dir: "ltr",
        placeholder: "",
        maximumSelectionSize: 6,
        containerCssClass: ":all:",
        tags: true,
        tokenSeparators: [','],
        allowClear: true,
        createTag: function (params) {
            var term = $.trim(params.term);
            if (term === '') {
                return null;
            }

            return {
                id: term,
                text: term,
                newTag: true // add additional parameters
            }
        },
        ajax: {
            url: options.url,
            dataType: 'json',
            delay: 250,
            data: function (params) {
                var query = {
                    search: params.term,
                    page: params.page || 1
                }
                return query;
            },
            processResults: function (data, params) {
                params.page = params.page || 1;
                return {
                    results: $.map(data.data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    }),
                    pagination: {
                        more: data.next_page_url != null && data.next_page_url.length > 0
                    }
                };
            },
            cache: true
        }
    });
}
