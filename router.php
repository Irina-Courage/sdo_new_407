<?php
$url = explode("/", $_SERVER['REQUEST_URI']);
echo $url[1];
// // require_once("php/db.php");
// // require_once("php/classes/User.php");

if ($url[1] == lk) {
    require_once("template.php");
} 
else if ($url[1] == support) {
     $content = file_get_contents("pages/support.php");
} 
else if ($url[1] == index) {
    require_once("pages/index.html");
}
if (!empty($content)) require_once("template.php")
else 
require_once("pages/index.html");
