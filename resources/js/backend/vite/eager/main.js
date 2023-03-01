import 'bootstrap'
import 'bootstrap-datepicker'
import PerfectScrollbar from 'perfect-scrollbar';
import Sortable from 'sortablejs'; // https://github.com/SortableJS/Sortable
import Dropzone from "dropzone"; // https://docs.dropzone.dev/configuration/basics/layout

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

const options = {
    broadcaster: 'pusher',
    key: 'your-pusher-key',
    wsHost: window.location.hostname,
    wsPort: import.meta.env.VITE_PUSHER_PORT,
    forceTLS: false,
    disableStats: true,
}

window.Echo = new Echo({
    ...options,
    cluster:import.meta.env.VITE_PUSHER_APP_CLUSTER,
});

$.fn.initialiseDropzone = function(options) {
    Dropzone.autoDiscover = false;
    options.previewTemplate = `<div class="dz-preview dz-file-preview mb-3"><div class="d-flex flex-row "><div class="p-0 w-30 position-relative"><div class="dz-error-mark"><span><i></i></span></div><div class="dz-success-mark"><span><i></i></span></div><div class="preview-container"><img data-dz-thumbnail class="img-thumbnail border-0" /><i class="simple-icon-doc preview-icon" ></i></div></div><div class="pl-3 pt-2 pr-2 pb-1 w-70 dz-details position-relative"><div><span data-dz-name></span></div><div class="text-primary text-extra-small" data-dz-size /><div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div><a href="#/" class="remove dz-remove" data-dz-remove><i class="glyph-icon simple-icon-trash"></i></a></div>`;
    return new Dropzone(`#${$(this).attr('id')}`, options);
}

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
