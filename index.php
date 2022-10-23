<?php
$short = $_GET["short"] ?? $null;
$short = str_replace("/", "", $short);
$targetFile = "shorts/$short";
$fileExists = file_exists($targetFile);
if($fileExists){
    $target = file_get_contents($targetFile);
    header('Location: ' . $target, true, 302);
}
else{
    header("HTTP/1.0 404 Not Found");
}
die();
?>