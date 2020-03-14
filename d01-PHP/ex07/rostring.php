#!/usr/bin/php
<?php
function ft_split($str){
    $str = trim($str);
    while ((strpos($str, "  ") == TRUE))
        $str = str_replace("  ", " ", $str);
    $word = explode(" ", $str);
    $word = array_filter($word, "strlen");
    return ($word);
}
if ($argc > 1)
{
    $array = ft_split($argv[1]);
    $len = count($array);
    if ($len > 0)
    {
        $i = 1;
        while ($i < $len)
        {
            echo "$array[$i]";
            echo " ";
            $i++;
        }
        echo "$array[0]";
        echo "\n";
    }
}