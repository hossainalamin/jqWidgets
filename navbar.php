<?php
include 'inc/header.php';
?>

<body style ="margin-top : 50px;">
    <div id="navBar">
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </div>
<script>
    $(document).ready(function(){
    $('#navBar').jqxNavBar({height : '50',selectedItem : 0});
    $("#navBar").on('change',function(event){
        var val = event.args.selectedItem;
        alert(val)
    })
    });
</script>
</body>
</html>