#!/usr/bin/php
<?php
if ($argc == 2)
{
    $str = trim($argv[1], " ");
    while ((strpos($str, "  ") == TRUE))
        $str = str_replace("  ", " ", $str);
    if (strlen($str) > 0)
        echo "$str\n";
}