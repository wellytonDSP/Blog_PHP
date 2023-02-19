<?php

include_once("helpers/url.php");
include_once("data/categories.php");
include_once("data/posts.php");


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <!-- Estilo da pagina -->
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>/css/style.css">
    <!-- Fonte do google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</li>
                <li><a href="#" class="nav-link">Sobre</li>
                <li><a href="#" class="nav-link">Projetos</li>
                <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contato</li>
            </ul>
        </nav>
    </header>