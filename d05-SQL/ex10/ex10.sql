SELECT `title` AS `Title`, `summary` AS `Summary`, `prod_year`
FROM `film`, `genre`
WHERE genre.id_genre = film.id_genre AND genre.name = 'erotic'
ORDER BY `prod_year` DESC;