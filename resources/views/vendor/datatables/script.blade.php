let actionBtnId = ''
let optional = {
scrollY:        "44vh",
scrollX:        true,
scrollCollapse: true,
sDom: '<"row view-filter"<"col-sm-12"<"float-right"l><"float-left"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
language: {
paginate: {
previous: "<i class='simple-icon-arrow-left'></i>",
next: "<i class='simple-icon-arrow-right'></i>"
},
search: "_INPUT_",
searchPlaceholder: "Search...",
lengthMenu: "Items Per Page _MENU_"
},
"fnPreDrawCallback":function(){
$(%2$s).setLoader({fullScreen: true});
},
"fnInitComplete": function(oSettings, json) {
$('.dataTables_scrollBody').attr('id', 'dataTablesScrollBody')
$('#dataTablesScrollBody').initialiseScrollbar({})
{{--let dataTablePs = new PerfectScrollbar('.dataTables_scrollBody', { suppressScrollX: true });--}}
{{--dataTablePs.isRtl = false;--}}
let input = document.querySelector('div.dataTables_filter input');
if(input){
input.addEventListener('keyup', function () {
document.getElementById("searchVal").value = this.value;
});
}

},
drawCallback: function () {
$($(".dataTables_wrapper .pagination li:first-of-type")).find("a").addClass("prev");
$($(".dataTables_wrapper .pagination li:last-of-type"))
.find("a")
.addClass("next");
$(".dataTables_wrapper .pagination").addClass("pagination-sm");
$(".dataTables_wrapper .pagination").addClass("pagination-sm");
var api = $(this).dataTable().api();
$("#pageCountDatatable span").html("Displaying " + parseInt(api.page.info().start + 1) + "-" + api.page.info().end + " of " + api.page.info().recordsTotal + " items");
initialTable()
},
fixedColumns:{
leftColumns: 1,
rightColumns: 1
},
columnDefs: [
{ "targets": -1, "createdCell": function (td, cellData, rowData, row, col) { $(td).css('padding-right', '30px') }, },
{
"targets": '_all',
"createdCell": function (td, cellData, rowData, row, col) {
$(td).css('padding-right', '25px')
},
}],
aaSorting: [], // remove default sorting
processing: true,
responsive: true,
searching: false,
info: true,
ordering: true,
paging:true,
};
let obj = Object.assign(%2$s, optional);
$(function(){
window.{{ config('datatables-html.namespace', 'LaravelDataTables') }}=window.{{ config('datatables-html.namespace', 'LaravelDataTables') }}||{};window.{{ config('datatables-html.namespace', 'LaravelDataTables') }}["%1$s"]=$("#%1$s").DataTable(obj);
let table = $("#%1$s");
table.on('preXhr.dt', function (e, settings, data){
$('.js-datatable-filter-form :input').each(function () {
data[$(this).prop('name')] = $(this).val();
});
});

let formId = !!document.getElementById('js-datatable-filter-form');
if(formId) {
let form = document.querySelector('#js-datatable-filter-form');
form.addEventListener('change', function () {
refreshDataTable()
return false;
});
}
});
