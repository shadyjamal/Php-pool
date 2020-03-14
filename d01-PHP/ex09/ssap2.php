#!/usr/bin/php
<?php
    function ft_compare($s1, $s2)
    {
        $map = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
        $s1 = strtolower($s1);
        $s2 = strtolower($s2);
        $len1 = strlen($s1);
        $len2 = strlen($s2);
        $i = 0;
        while ($i < $len1)
        {
            if ($i >= $len2)
                return 1;
            $pos1 = strpos($map, $s1[$i]);
            $pos2 = strpos($map, $s2[$i]);
            if ($pos1 < $pos2)
                return -1;
            else if ($pos1 > $pos2)
                return 1;
            $i++;
        }
        return 0;
    }
    function ft_split($str)
    {
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
    usort($array, "ft_compare");
    $len = count($array);
    $i = 0;
    while ($i < $len)
    {
        echo "$array[$i]\n";
        $i++;
    }