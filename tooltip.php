<?php
include 'inc/header.php';
?>
<body style ="margin-left : 500px; margin-top : 50px;">
<input type="button" id="button" value="Button">
</div>
<script>
    $('#button').jqxButton({width : '100',height : '50'});
    $('#button').jqxTooltip({
        content : "Tool tip for drag and drop",
        position : 'top'
    });
</script>
</body>
</html>