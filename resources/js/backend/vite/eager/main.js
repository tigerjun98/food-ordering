import 'bootstrap'
import 'bootstrap-datepicker'
import PerfectScrollbar from 'perfect-scrollbar';

$.fn.initialiseScrollbar = function(options = { suppressScrollX: true }) {
    return new PerfectScrollbar(`#${$(this).attr('id')}`, options);
}
