<?php
function auth($login, $passwd)
{
    $hashedpwd = hash('whirlpool', $passwd);
    $file = file_get_contents("../private/passwd");
    $array = unserialize($file);
    if ($array != NULL)
    {
        foreach($array as $value)
        {
            if ($login == $value['login'] && $hashedpwd == $value['passwd'])
                return TRUE;
        }
    }
    return FALSE;
}
?>