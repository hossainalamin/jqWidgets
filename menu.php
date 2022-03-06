<?php
include 'inc/header.php';
?>
 <div id='jqxWidget'>
            <div id='jqxMenu'>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>About Us
                        <ul>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Our Vision</a></li>
                        </ul>
                    </li>
                    <li>Services
                    </li>
                    <li>Products
                        <ul>
                            <li><a href="#">New</a>
                                <ul>
                                    <li><a href="#">Corporate Use</a></li>
                                    <li><a href="#">Private Use</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Used</a>
                                <ul>
                                    <li><a href="#">Corporate Use</a></li>
                                    <li><a href="#">Private Use</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Featured</a></li>
                         </ul>
                    </li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function(){
    $('#jqxMenu').jqxMenu({width : '100',mode: 'vertical'});
    });
</script>
</body>
</html>