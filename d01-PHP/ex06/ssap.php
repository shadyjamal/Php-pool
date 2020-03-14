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
    $i = 1;
    $array = array();
    while ($i < $argc)
    {
        $split = ft_split($argv[$i]);
        $len = count($split);
        $j = 0;
        while ($j < $len)
        {
            array_push($array, $split[$j]);
            $j++;
        }
        $i++;
    }
    sort($array, SORT_STRING);
    $len = count($array);
    $i = 0;
    while ($i < $len)
    {
        echo "$array[$i]\n";
        $i++;
    }