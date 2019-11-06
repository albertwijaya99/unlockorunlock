<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php echo $style;echo $script;?>
    <title>Sales Report</title>
    <link rel="icon" href="<?php echo base_url()?>assets/resources/ikon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <?php echo $sidenav;?>
</head>
<body>
<?php echo $header;?>

    <div id="mySidenav" class="sidenav">
        <a id="dashboard" href="<?php echo base_url();?>admin/dashboard"> <img src="<?php echo base_url();?>assets/resources/dashboard.png" alt="dashboard" width="45" height="45">Dashboard</a>
        <a id ="dataItem" href="<?php echo base_url();?>admin/products"><img src="<?php echo base_url();?>assets/resources/dataItem.png" alt="dataItem" width="40" height="40"> Data Item</a>
        <a id="salesReport" href="<?php echo base_url();?>admin/sales" style="background-color:#3399ff;color:#FFF"><img src="<?php echo base_url();?>assets/resources/salesReport.png" alt="salesReport" width="40" height="40"> Sales Report</a>
        <a href="<?php echo base_url();?>login/logout"><img src="<?php echo base_url();?>assets/resources/logout.png" alt="dashboard" width="35" height="35"> Logout</a>
    </div>

    <div id="main">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th>Sales ID</th>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
            </thead>
        </table>
    </div>

    
    <script>
        function rupiah(angka){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return rupiah
		}
        function format ( d, salesdetail ) {
            var salesdetail=<?php echo $salesdetail?>;
            var str="";
            for(let saledetail in salesdetail){
                if(salesdetail[saledetail].SalesID == d.SalesID){
                    str +='<table style="padding-left:50px;width:50%;">'+
                    '<tr>'+
                        '<td>Picture</td>'+
                        '<td><img src="<?php echo base_url()?>assets/uploads/pic/'+salesdetail[saledetail].Pic+'" class="rounded img-fluid zoom" width="100px"></td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>ProductID  </td>'+
                        '<td>'+salesdetail[saledetail].ProductID+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Name</td>'+
                        '<td>'+salesdetail[saledetail].Name+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Quantity</td>'+
                        '<td>'+salesdetail[saledetail].Quantity+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Price</td>'+
                        '<td>Rp '+rupiah(salesdetail[saledetail].Price)+',-</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Description</td>'+
                        '<td>'+salesdetail[saledetail].Description+'</td>'+
                    '</tr>'+
                    '</table><br>';
                }
            }
            return str;
        }
            
        $(document).ready(function() {
            var dataSet=<?php echo $sales;?>;
            var salesdetail=<?php echo $salesdetail?>;
            var table = $('#example').DataTable( {
                data : dataSet,
                columns : [
                    {
                        "className":      'details-control',
                        "orderable":      false,
                        "data":           null,
                        "defaultContent": ''
                    },
                    { "data": "SalesID" },
                    { "data": "UserID" },
                    { "data": "FirstName" },
                    { "data": "LastName" },
                    { "data": "Total",
                        render: $.fn.dataTable.render.number('.', ',',0,'Rp ',',-' )
                        },
                    { "data": "Date" },
                    { "data": "Address" },
                    { "data": "Phone" }
                ]
            } );
            
            // Add event listener for opening and closing details
            $('#example tbody').on('click', 'td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = table.row( tr );
                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child( format(row.data()) ).show();
                    tr.addClass('shown');
                }
            } );
        } );
    </script>
    <style>
    td.details-control {
        background: url('<?php echo base_url()?>assets/resources/details_open.png') no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url('<?php echo base_url()?>assets/resources/details_close.png') no-repeat center center;
    }
    </style>
</body>
</html>