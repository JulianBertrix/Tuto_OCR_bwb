
<?php
    /**
    if (preg_match("#(((https?|ftp)://(w{3}\.)?)(?<!www)(\w+-?)*\.([a-z]{2,4}))#", "Ce dans quoi vous faites la recherche"))
    {
        echo 'Le mot que vous cherchez se trouve dans la chaîne';
    }

    else
    {
        echo 'Le mot que vous cherchez ne se trouve pas dans la chaîne';
    }
     */
    if (preg_match("#guitare#", "J'aime jouer de la guitare."))
    {
        echo 'VRAI';
    }
    else
    {
        echo 'FAUX';
    }
?>

