SELECT `name`
FROM `distrib`
WHERE 
(`id_distrib` = '42') 
OR (`id_distrib` > '61' AND `id_distrib` < '70') 
OR (`id_distrib` = '71') 
OR (`id_distrib` > '87' AND `id_distrib` < '91') 
OR LENGTH(LOWER(name)) - LENGTH(REPLACE(LOWER(name), 'y', '')) = 2
LIMIT 5 OFFSET 2 ;
