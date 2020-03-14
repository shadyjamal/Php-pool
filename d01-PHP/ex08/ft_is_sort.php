<?php
    function ft_is_sort($tab)
    {
        $len = count($tab);
        $i = 0;
        $cmp = 0;
        $old_cmp = 0;
        $flag = 0;
        while ($i < $len && $i + 1 < $len)
        {
            if (($cmp = strcmp($tab[$i], $tab[$i + 1])) != 0 && !$flag)
            {
                $old_cmp = $cmp;
                $flag = 1;
            }
            if ($cmp * $old_cmp < 0)
                return (0);
            $i++;
        }
        return (1);
    }