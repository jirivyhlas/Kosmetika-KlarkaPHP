<?php

$poleStranek = array(
    "domu" => array(
    "titulek"=> "Kosmetika Klarka",
        "navigace"=>"Domů", 
    ),
    "osetreni"=> array(
    "titulek"=> "Ošetření",
    "navigace"=> "Ošetření",
    
    ),

    "galerie"=> array(
    "titulek" => "Fotografie",
    "navigace"=> "Galerie",
    ),
    "Eshop"=> array(
    "titulek"=>"Nakupujte u nás",
    "navigace"=>"Eshop",
    
    ),
    "404"=> array(
    "titulek"=>"Stranka neexistuje",    
    "navigace"=>"",
    ),


);

if (array_key_exists("stranka",$_GET))
{

    $stranka = $_GET["stranka"];


if (!array_key_exists($stranka,$poleStranek))
{
        $stranka="404";
        http_response_code(404);

}   
}
else
{
$stranka = "osetreni";
}

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $poleStranek[$stranka]["titulek"]?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon"   href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/grid-gallery.min.css"/>
    
    
</head>
<body>
    <header>
        
    <div class="container">
        <div class="headerKon">
            <a href="tel:+420774523157">+420774523157</a>
            <div class="headerIkony">
               <a href="https://www.facebook.com/Kosmetika-Klarka-798369223657880" target="blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/kosmetika_klarka/?hl=cs" target="blank"><i class="fab fa-instagram"></i></a>
                
            </div>
        </div>
    </div>
</div>
    <a href="./" class="logo">
            <p>Kosmetika</p>
            <p>Klárka</p>
</a>

<div class="menu">
    <ul>
    <?php
    foreach ($poleStranek as $kodStranky =>$informaceOStrance)
        {

                echo "<li><a href='?stranka=$kodStranky'>{$informaceOStrance["navigace"]}</a></li>";

        }   
?>
    <!--      <li><a href="Osetreni.html">Ošetření</a></li>
        <li><a href="#">ceny</a></li>
        <li><a href="galerie.html">galerie</a></li>
        <li><a href="#">kontakt</a></li> -->
    </ul>

</div>

</header>



<section>
 
 <?php
 require "$stranka.html";
 ?>
 
</section>
<footer>
    <div class="pata">
        <div class="container">
            <div class="menu">
                <ul>
                <?php
            foreach ($poleStranek as $kodStranky =>$informaceOStrance)
            {

                    echo "<li><a href='?stranka=$kodStranky'>{$informaceOStrance["navigace"]}</a></li>";
            }
            ?>


            </div>
            <a href="index.html" class="logo">
                <p>Kosmetika</p>
                <p>Klárka</p>
    </a>
    <p>
        <i class="fas fa-map-pin"></i>
        <a href="https://goo.gl/maps/MgBv6sRJh2Wb2FDn6" target="_blank">Pod Višňovkou 1371/11
        140 00 Praha 4-Krč</a>
    </p>
    <p>
        <i class="fas fa-phone-alt"></i>
        <a href="tel:+420774523157">+420 774 523 157</a> 
    </p>
    <p>
        <i class="far fa-envelope"></i>
       <a href="mailto:klaraminarikova@icloud.com"> <span>klaraminarikova@icloud.com</span></a>
    </p>
    <div class="headerIkony">
        <a href="https://www.facebook.com/Kosmetika-Klarka-798369223657880" target="blank"><i class="fab fa-facebook-f"></i></a>
         <a href="https://www.instagram.com/kosmetika_klarka/?hl=cs" target="blank"><i class="fab fa-instagram"></i></a>
         
     </div>


        </div>

    </div>
</footer>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/grid-gallery.min.js"></script>

</body>
</html>