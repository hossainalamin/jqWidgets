<?php
include 'inc/header.php';
?>
<body style ="margin-left : 500px; margin-top : 50px;">
<input type="button" id="button" value="Button">
<div  id="button1">Radio button 1</div>
<div  id="button2">Radio button 2</div>
</div>
<script>
    $('#button').jqxButton({width : '100',height : '50'});
    $("#button").on('mouseenter',function(){
        alert("Hello Alamin");
    })
    $("#button1").jqxRadioButton({});
    $("#button1").bind('change',function(event){
        var checked = event.args.checked;
        alert("Radio button one checked" +checked)
    })
    $("#button2").jqxRadioButton({})
    $("#button2").bind('change',function(event){
        var val = event.args.checked;
        alert("Radio button two checked"+val)
    })
</script>
</body>
</html>