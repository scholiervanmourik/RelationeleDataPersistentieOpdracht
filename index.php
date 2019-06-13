<?php
require_once './src/views/template/head.php';

use smd\controllers\AdminController;

$controller = new AdminController();
$csv = $controller->readCSVContent('home');

?>
<!-- <nav class="follow-nav navbar navbar-expand-md fixed-bottom">
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav bg-dark">
            <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#theApp" class="nav-link">De app</a></li>
            <li class="nav-item"><a href="#Company" class="nav-link">Bedrijven</a></li>
            <li class="nav-item"><a href="#aboutUs" class="nav-link">Over ons</a></li>
        </ul>
    </div>
</nav> -->

<section id="home" class="home">
    <article class="container-fluid">
        <h2><?= $csv['top'] ?></h2>
        <hr>
        <p><?= $csv['topDescription'] ?></p>

        <a href="itms-apps://..." class="btn" target="_self">
            <div class="btn-text"><?= $csv['homeDownloadPage'] ?></div>
            <div class="button"></div>
        </a>
    </article>
</section>

<section id="theApp" class="app">
    <div class="row">
        <article class="col">
            <h2><?= $csv['indexAppTitleFindFriends'] ?></h2>
            <hr>
            <p><?= $csv['homeDescriptionFindFriends']?></p>
            <div class="row">
                <i class="icon fas fa-map-marked-alt fa-3x col"></i>
                <i class="icon fas fa-map-marker-alt fa-3x col"></i>
            </div>
        </article>
        <article class="col">
            <h2><?= $csv['homeDrink'] ?></h2>
            <hr>
            <p><?= $csv['homeDrinkDescription'] ?></p>
            <div class="row">
                <i class="icon far fa-clock fa-3x col"></i>
                <i class="icon fas fa-stopwatch fa-3x col"></i>
            </div>
        </article>
        <article class="col">
            <h2><?= $csv['homePlanTitle'] ?></h2>
            <hr>
            <p><?= $csv['homePlanDescription'] ?></p>
            <div class="row">
                <i class="icon far fa-calendar-alt fa-3x col"></i>
            </div>
        </article>
    </div>
    <a href="src/views/sections/app-info.php" class="btn" target="_self">
        <div class="btn-text"><?= $csv['homePlanMore'] ?></div>
        <div class="button"></div>
    </a>
</section>

<section class="company" id="Company">
    <article>
        <h2><?= $csv['companyTitle'] ?></h2>
        <hr>
        <p><?= $csv['companyDescription'] ?></p>

        <aside>
            <h3><?= $csv['companySellTitle'] ?></h3>
            <p><?= $csv['companySellDescription'] ?></p>
        </aside>

        <aside>
            <h3><?= $csv['companyMusicTitle'] ?></h3>
            <p><?= $csv['companyMusicDescription'] ?></p>
        </aside>

        <aside>
            <h3><?= $csv['companyPeopleTitle'] ?></h3>
            <p><?= $csv['companyPeopleDescription'] ?></p>
        </aside>

        <aside class="">
            <h3><?= $csv['companyGroupTitle'] ?></h3>
            <p><?= $csv['companyGroupDescription'] ?></p>
        </aside>
    </article>
</section>

<section class="about" id="aboutUs">
    <article>
        <h2><?= $csv['aboutTitle'] ?></h2>
        <hr>
        <div class="row">
            <div class="col">
                <p><?= $csv['aboutDescription1'] ?></p>
            </div>
            <div class="col">
                <p><?= $csv['aboutDescription2'] ?></p>
            </div>
        </div>
    </article>
</section>
<?php require_once './src/views/template/bottom.php'; ?>
