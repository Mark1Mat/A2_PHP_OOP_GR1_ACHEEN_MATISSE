<?php

require __DIR__.'/_header.php';

$isConnected = false;
if(isset($_SESSION['connected']) && $_SESSION['connected'] = true){
    $isConnected = true;
}

echo $twig->render('rules.html.twig',[
    'isConnected' => $isConnected,
]);