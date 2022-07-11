<?php 
$url = $_SERVER['REQUEST_URI'];
//echo $url;
//include $url."/header.php";

   

    include('templates/head.php');
    include('templates/header.php');


    if( $url == "/"  ){
        include( "home.php");
    }

    include('templates/footer.php');


?>