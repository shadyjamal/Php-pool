<?php
$action = $_GET['action'];
$name = $_GET['name'];
$value = $_GET['value'];
if ($name != NULL && $value != NULL && $action == "set")
    setcookie($name, $value, time() + (86400 * 30));
else if ($action == "get" && $_COOKIE[$name] != NULL)
    echo "$_COOKIE[$name]\n";
else if ($action == "del")
    setcookie($name,"", time() - 3600);
?>