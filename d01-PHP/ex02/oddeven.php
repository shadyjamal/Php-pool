#!/usr/bin/php
<?php
while (1)
{
    echo "Entrez un nombre: ";
    if (FALSE == ($nbr = fgets(STDIN)))
    {
        echo "\n";
        break ;
    }
    $nbr = rtrim($nbr, "\n");
    $nbr1 = trim($nbr);
    if (!is_numeric($nbr1))
         echo "'$nbr' n'est pas un chiffre\n";
    else
    {
        $nbr_sub = substr($nbr, -1, 1);
        if (($nbr_sub % 2) == 0)
            echo "Le chiffre $nbr1 est Pair\n";
        else 
            echo "Le chiffre $nbr1 est Impair\n";
    }
}
?>