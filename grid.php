<?php
include 'inc/header.php';
?>
<body style ="margin-top : 50px;">
    <div id="jqxGrid">

    </div>
<script>
    $(document).ready(function(){
        var data = new Array();
        var firstName = [
            "alamin",'Rokib',"Yeasin","Sajib","Kanon"
        ]
        var lastName = [
            "Hossain","Islam","Arafat","Uzzajamn","Hossain"
        ]
        var priceValues = [
            "10","20","30","40","50"
        ]
        var productName = [
            "Tea","Rice","Burger","Beef","Mutton"
        ]
        for(i = 0;i<100 ; i++){
            var row = {};
            var productindex = Math.floor(Math.random() * productName.length);
            var price = parseFloat(priceValues[productindex]);
            var quantity = 1 + Math.round(Math.random() * 10);
            row["firstName"] = firstName[Math.floor(Math.random() * firstName.length)];
            row["lastName"] = lastName[Math.floor(Math.random() * lastName.length)];
            row["productName"] = productName[productindex];
            row["price"] = price;
            row["quantity"] = quantity;
            row["total"] = price * quantity;
            data[i] = row;
        }
        var source = {
            localdata : data,
            datatype : "array"
        }
        var dataAdapter = new $.jqx.dataAdapter(source, {
            loadComplete: function (data) { },
            loadError: function (xhr, status, error) { }      
        });
        $("#jqxGrid").jqxGrid(
            {
                source: dataAdapter,
                columns: [
                  { text: 'First Name', datafield: 'firstName', width: 100 },
                  { text: 'Last Name', datafield: 'lastName', width: 100 },
                  { text: 'Product', datafield: 'productName', width: 180 },
                  { text: 'Quantity', datafield: 'quantity', width: 80, cellsalign: 'right' },
                  { text: 'Unit Price', datafield: 'price', width: 90, cellsalign: 'right', cellsformat: 'c2' },
                  { text: 'Total', datafield: 'total', width: 100, cellsalign: 'right', cellsformat: 'c2' }
                ]
            });
    });
</script>
</body>
</html>