<?php
include 'inc/header.php';
?>
<body style ="margin-left : 500px; margin-top : 50px;">
<div id = "expander">
    <div>
        Header
    </div>
    <div>
        content
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#expander').jqxExpander({width : 200,height : 100});
        $('#expander').bind('collapsed',function(){
            alert("collapsed");
        });
        $('#expander').bind('expanded',function(){
            alert("expanded");
        });

    })
  
</script>
</body>
</html>