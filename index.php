<?php
require_once "config/config.php";

$PageTitle = SITE_NAME;
include("includes/header.php");
include("includes/menu.php");
$modules = json_decode(file_get_contents("config/home.json"), true);

foreach ($modules as $module) {
    extract($module);
    include "partials/" . $module['type'];
}
include("includes/footer.php");
?>