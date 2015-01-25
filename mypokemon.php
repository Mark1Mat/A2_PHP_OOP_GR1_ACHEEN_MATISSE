<?php

require __DIR__.'/_header.php';

$em = require __DIR__.'/bootstrap.php';
$pokemonRepository = $em->getRepository('Mark1Mat\PokemonBattle\PokemonModel');

$isConnected = false;
if(isset($_SESSION['connected']) && $_SESSION['connected'] = true){
    $isConnected = true;

    //récuperation du Pokemon de l'User Connecté
    $userName = $_SESSION['username'];
    $userId = $_SESSION['id'];
    $criteria = array('trainerId' => $userId);
    $userPokemon = $pokemonRepository->findOneBy($criteria);

    if($userPokemon != null) {
        $pokemonHp = $userPokemon->getHp();

        echo $twig->render('mypokemon.html.twig', [
            'isConnected' => $isConnected,
            'userPokemon' => $userPokemon,
            'userName' => $userName,
            'pokemonHp' => $pokemonHp
        ]);
    }echo $twig->render('no_pokemon.html.twig', [
        'isConnected' => $isConnected]);
}else{
    header('Location: index.php');
}
