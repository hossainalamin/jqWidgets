<?php
include 'inc/header.php';
?>
<body class="default">
    <div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: left;">
        <div id="jqxgrid">
        </div>
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
        var pagerrenderer = function () {
                var element = $("<div style='margin-top: 5px; width: 100%; height: 100%;'></div>")
                var paginginfo = $("#jqxgrid").jqxGrid('getpaginginformation');
                for (i = 0; i < paginginfo.pagescount; i++) {
                    var anchor = $("<a style='padding: 5px;' href='#" + i + "'>" + i + "</a>");
                    anchor.appendTo(element);
                    anchor.click(function (event) {
                    var pagenum = parseInt($(event.target).text());
                        $("#jqxgrid").jqxGrid('gotopage', pagenum);
                    });
                }
                return element;
        }
        $("#jqxgrid").jqxGrid(
            {
                width:670,
                source: source,
                pageable: true,
                autoheight: true,
                pagerrenderer: pagerrenderer,
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