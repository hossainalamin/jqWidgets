<?php
include 'inc/header.php';
?>
<body style ="margin-left : 500px; margin-top : 50px;">
    <div id="fileUpload"></div>
</div>
<script>
    $(document).ready(function(){
        $("#fileUpload").jqxFileUpload({width : 300,uploadUrl : 'upload.php'})
    })
</script>
</body>
</html>