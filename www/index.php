<?php 
$url = $_SERVER['REQUEST_URI'];
//echo $url;
//include $url."/header.php";

   

    include('templates/head.php');
    include('templates/header.php');


    if( $url == "/"  ){
        include( "home.php");
    }
    elseif( $url == "/pagina1/" ){
        include( "pagina1.php" );
    }
    elseif( $url == "/politica-de-privacidad/" ){
        include( "privacidad.php" );
    }
    elseif( $url == "/aviso-legal/" ){
        include( "legal.php" );
    }
    elseif( $url == "/politica-de-cookies/" ){
        include( "cookies.php" );
    }
    elseif( $url == "/contacto/" ){
        include( "contacto.php" );
    }

    include('templates/footer.php');


?>