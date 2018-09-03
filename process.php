<?php
echo 'processing';
//check for get variable
if(isset($_GET['name'])){

    echo 'Get: Your name is '.$_GET['name'] ';
}