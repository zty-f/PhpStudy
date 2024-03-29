<?php
require_once("SiteRestHandler.php");

$view = "";
if(isset($_GET["view"]))
    $view = $_GET["view"];
/*
 * RESTful service 控制器
 * URL 映射
*/
// http://localhost:63343/PhpStudy/test2/RestController.php?view=all
// http://localhost:63343/PhpStudy/test2/RestController.php?view=single&id=4
switch($view){

    case "all":
        // 处理 REST Url /site/list/
        $siteRestHandler = new SiteRestHandler();
        $siteRestHandler->getAllSites();
        break;

    case "single":
        // 处理 REST Url /site/show/<id>/
        $siteRestHandler = new SiteRestHandler();
        $siteRestHandler->getSite($_GET["id"]);
        break;

    case "" :
        //404 - not found;
        break;
}
?>