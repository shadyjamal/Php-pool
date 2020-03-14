<?php
function ft_split($str){
    $str = trim($str);
    while ((strpos($str, "  ") == TRUE))
        $str = str_replace("  ", " ", $str);
    $word = explode(" ", $str);
    $word = array_filter($word, "strlen");
    sort($word, SORT_STRING);
    return ($word);
}