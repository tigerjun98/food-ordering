let actionBtnId = ''
let optional = {
scrollY:        "62vh",
scrollX:        true,
scrollCollapse: true,
sDom: '<"row view-filter"<"col-sm-12"<"float-right"l><"float-left"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
paging:true,
language: {
paginate: {
previous: "<i class='simple-icon-arrow-left'></i>",
next: "<i class='simple-icon-arrow-right'></i>"
},
search: "_INPUT_",
searchPlaceholder: "Search...",
lengthMenu: "Items Per Page _MENU_"
},
"fnInitComplete": function(oSettings, json) {
let input = document.querySelector('div.dataTables_filter input');
input.addEventListener('keyup', function () {
document.getElementById("searchVal").value = this.value;
});
},
drawCallback: function () {
$($(".dataTables_wrapper .pagination li:first-of-type"))
.find("a")
.addClass("prev");
$($(".dataTables_wrapper .pagination li:last-of-type"))
.find("a")
.addClass("next");
$(".dataTables_wrapper .pagination").addClass("pagination-sm");
$(".dataTables_wrapper .pagination").addClass("pagination-sm");
var api = $(this).dataTable().api();
$("#pageCountDatatable span").html("Displaying " + parseInt(api.page.info().start + 1) + "-" + api.page.info().end + " of " + api.page.info().recordsTotal + " items");
},
fixedColumns:   {
leftColumns: 1,
rightColumns: 1
},
columnDefs: [
{ "targets": -1,
"createdCell": function (td, cellData, rowData, row, col) {
$(td).css('padding-right', '90px')
},
},
{
"targets": '_all',
"createdCell": function (td, cellData, rowData, row, col) {
$(td).css('padding-right', '50px')
},
}],
responsive: false,
searching: true,
info: false,
ordering: true,
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
$(window).keydown(function(event){
if(event.keyCode == 13) {
event.preventDefault();
refreshDataTable()
}
});
});
