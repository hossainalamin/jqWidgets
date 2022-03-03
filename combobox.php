<?php
include 'inc/header.php';
?>
<body style ="margin-left : 500px;">
    <h4>Combobox</h4>
    <div id="combobox"></div>
<script>
    var source = ['alamin', 'rokib', 'yeasin'];
    $("#combobox").jqxComboBox({ source: source, selectedIndex: 0, width: '200px', height: '25px' });
</script>
</body>
</html>