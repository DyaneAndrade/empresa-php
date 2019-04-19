<?php

function load($namespace){
    $namespace = str_replace("\\","/",$namespace);
    $camnhoAbsoluto = __DIR__ . "/" . $namespace . ".php";
    return include_once  $camnhoAbsoluto;
}

spl_autoload_register(__NAMESPACE__ . "\load");
?>