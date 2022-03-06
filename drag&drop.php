<?php
include 'inc/header.php';
?>
<body style ="margin-left : 500px;">
<div style="width: 50px; height: 50px; border: 1px solid #A67E3A; background-color: #FFC663;" id="element">
    <div style = "margin-left: 3px; margin-top: 20px; font-size: 10px; font-family: Verdana;" >Drop me</div>
</div>
<script>
    $('#element').jqxDragDrop();
</script>
</body>
</html>