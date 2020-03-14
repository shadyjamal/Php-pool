<?php
session_start();
if ($_POST['login'] == NULL || $_POST['oldpw'] == NULL || $_POST['newpw'] == NULL || $_POST['submit'] != "OK")
    echo "ERROR\n";
else
{
    $login = $_POST['login'];
    $oldpasswd = hash('whirlpool', $_POST['oldpw']);
    $newpasswd = hash('whirlpool', $_POST['newpw']);
    $file = file_get_contents("../private/passwd");
    $array = unserialize($file);
    if ($array != NULL)
    {
        $flag = 0;
        foreach($array as &$value)
        {
            if ($login == $value['login'])
            {
                if ($oldpasswd == $value['passwd'])
                {
                    $value['passwd'] = $newpasswd;
                    echo "OK\n";
                    $flag = 1;
                }
                else
                {
                    echo "ERROR\n";
                    return;
                }
            }
        }
    }
    else
        echo "ERROR\n";
    if ($flag == 0)
    {
        echo "ERROR\n";
        return;
    }
    $data = serialize($array);
    file_put_contents("../private/passwd", $data);
}