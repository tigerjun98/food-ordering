<table class="data-table responsive nowrap backend-table" id="exportTable">
    <thead>
    <tr>
        <th>Referral</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Commission</th>
    </tr>

    </thead>
    <tbody>
    @foreach($data as $key => $d)
        <tr class="text-muted">
            <td>{{$d->referral}}</td>
            <td>{{$d->product}}</td>
            <td>{{$d->quantity}}</td>
            <td>{{$d->unit_price}}</td>
            <td>{{$d->total_commission}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function(){
        // $('.ajax-load').removeClass('ds');
        $("#exportTable").DataTable({
            "dom": 'Bfrtip',
            "searching": false,   // Search Box will Be Disabled
            "ordering": false,
            "paging": false,
            "info": false, // Will show "1 to n of n entries" Text at bottom
            "lengthChange": false, // Will Disabled Record number per page
            "autoWidth": true,
            buttons: [
                // 'csvHtml5', 'excelHtml5',
                {
                    extend: 'excelHtml5',
                    text: 'Export', // file name
                    sheetName: 'Overall Summary',
                    filename: "Failed Report",
                    // filename: function() {
                    //     var date_edition = moment().format("YYYY-MM-DD HH[h]mm")
                    //     var selected_machine_name = $("#output_select_machine select option:selected").text()
                    //     return date_edition + ' - ' + selected_machine_name
                    // },
                    title : 'DATE: 234',
                    messageTop: null,
                    messageBottom: null,
                    // messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.',
                    exportOptions: {
                        // columns: [ 0, 1, 2, 3 ],
                        // modifier: {
                        //     page: 'current',
                        // }
                    },
                    customize: function( xlsx ) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];
                        var col = $('col', sheet);
                        // $(col[0]).attr('width', 17);
                        // $(col[2]).attr('width', 5);
                        // $('row:first c', sheet).attr( 's', '2' ); // second row is bold
                        // $('row c', sheet).attr('s', '25'); //All cells border
                        var ro = ["A","B","C","D","E","F","G","H","I","J","K","L","M"];
                        for($i=0; $i<ro.length; $i++){
                            $('row c[r^='+ro[$i]+']', sheet).each(function() {
                                var tt = $('is t', this).text();
                                if(tt == 'Category' || tt == 'Type' || tt == 'No' || tt == 'Amount' || tt == 'Remark'){
                                    $(this).attr('s', '32'); // bold n gray BG with border
                                }
                                else{
                                    $(this).attr('s', '25'); // border
                                }
                            });
                        }
                        var sheet = xlsx.xl['styles.xml'];
                        var tagName = sheet.getElementsByTagName('sz');
                        for (i = 0; i < tagName.length; i++) {
                            tagName[i].setAttribute("val", "13")
                        }
                    },
                },
            ],
            initComplete: function () {
                // $('#export_success').removeClass('ds');
                // $('.ajax-load').addClass('ds');
            }
        });
        $('.buttons-excel').addClass('mb-5');

        $('.buttons-excel').click();
    });
</script>
