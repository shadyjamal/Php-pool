<?php
session_start();

if ($_POST['login'] == NULL || $_POST['passwd'] == NULL || $_POST['submit'] != "OK")
    echo "ERROR\n";
else
{
    $login = $_POST['login'];
    $passwd = hash('whirlpool', $_POST['passwd']);
    if (file_exists("../private/passwd"))
        $file = file_get_contents("../private/passwd");
    else if (!file_exists("../private"))
        mkdir("../private", 0755);
    $array = unserialize($file);
    if ($array != NULL)
    {
        foreach($array as $value)
        {
            if ($login == $value['login'])
            {
                echo "ERROR\n";
                return;
            }
        }
    }
    echo "OK\n";
    $tmp['login'] = $login;
    $tmp['passwd'] = $passwd;
    $array[] = $tmp; 
    $data = serialize($array);
    file_put_contents("../private/passwd", $data);
}