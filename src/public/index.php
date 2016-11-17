<?php

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(dirname(__FILE__)));

$url = isset($_SERVER["PATH_INFO"]) ? explode("/", ltrim($_SERVER["PATH_INFO"],"/")) : "/";


if ($url == "/") {

    // This is the home page
    // Initiate the home controller
    // and render the home view

    require_once(ROOT . DS . "application" . DS . "models"      . DS . "home.php");
    require_once(ROOT . DS . "application" . DS . "controllers" . DS . "home.php");
    require_once(ROOT . DS . "application" . DS . "views"       . DS . "home.php");

    $indexModel         = new IndexModel();
    $indexController    = new IndexController($indexModel);
    $indexView          = new IndexView($indexController, $indexModel);

    echo($indexView->index());

}
