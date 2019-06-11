<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

use smd\controllers\UserController;
use smd\Database;
use smd\repositories\UserRepository;

$userRepository = new UserRepository(Database::getConnection());
$userController = new UserController($userRepository);
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/src/public/style/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
    <!-- start of the papaparse api "to create a csv file" -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.0.0/papaparse.js"></script>
    <!-- end of the papaparse api-->
    <!-- start of the translate module -->
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/src/public/scripts/app_translator.js"></script>
    <!-- End of the translate module -->

    <link rel="stylesheet" href="/src/public/style/style.css">
</head>
<body data-spy="scroll" data-target=".follow-navbar" data-offset="50">
<nav id="topNavbar" class="navbar navbar-expand-md fixed-top">
    <a href="/index.php" class="logo navbar-brand"><img src="/src/public/img/logo.svg" alt="Brand Logo"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navList">
        <i class="fas fa-bars"></i>
    </button>
    <div id="navList" class="collapse navbar-collapse">
        <ul class="nav navbar-nav w-100 justify-content-end">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownHome" data-toggle="dropdown">
                    Home
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownHome">
                    <a href="/index.php#theApp" class="dropdown-item">De app</a>
                    <a href="/index.php#aboutUs" class="dropdown-item">Over ons</a>
                    <div class="dropdown-divider"></div>
                    <a href="/index.php#Company" class="dropdown-item">Bedrijven</a>
                    <a href="/src/views/sections/contact.php" class="dropdown-item">Contact</a>
                </div>
            </li>

            <li class="nav-item"><a href="/src/views/sections/festivals.php" class="nav-link">Festivals</a></li>
            <?php if ($userController->isLoggedIn()): ?>
                <li class="nav-item"><a href="/src/views/sections/user/profile.php" class="nav-link">Profiel</a></li>
                <li class="nav-item"><a href="/src/views/sections/organisations.php" class="nav-link">Organisaties</a>
                </li>
                <li class="nav-item"><a href="/src/actions/logout.php" class="nav-link">Logout</a></li>
                <?php if ($userController->getUser()->getRole() === 'admin'): ?>
                    <li class="nav-item"><a href="/src/views/sections/admin.php" class="nav-link">Onderhoudsmodule</a></li>
                <?php endif; ?>
            <?php else: ?>
                <li class="nav-item"><a href="/src/views/sections/user/login.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="/src/views/sections/user/register.php" class="nav-link">Registreren</a>
                </li>
            <?php endif; ?>
            <li class="nav-item dropdown">
                <div id="Translator_language_selector"></div>
            </li>
        </ul>
    </div>
</nav>
