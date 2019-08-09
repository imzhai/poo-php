--
-- Créer deux vilains : joket et thanos
-- Associations :  Le joket est l'ennemi de batman
--                 Thanos est l'ennemi de Batman et Iron Man
-- Ecrire la requête qui permet de retrouver le où les ennemis de Batman et Iron Man

-- Ecrire la requête qui permet de retrouver le ou les ennemis de Batman
-- Ecrire la requête qui permet de retrouver le ou les ennemis de Thanos



SELECT t3.name 
FROM superheroe AS t1
INNER JOIN superheroe_has_supernaughty AS t2 ON t2.superheroe_id = t1.id
INNER JOIN supernaughty AS t3 ON t2.supernaughty_id = t3.id
WHERE
t1.name = 'Batman';


SELECT t1.name
FROM superheroe AS t1
INNER JOIN superheroe_has_supernaughty AS t2 ON t2.superheroe_id = t1.id
INNER JOIN supernaughty AS t3 ON t2.supernaughty_id = t3.id
WHERE
t3.name = 'Thanos';


SELECT t3.name 
FROM superheroe AS t1
left JOIN superheroe_has_supernaughty AS t2 ON t2.superheroe_id = t1.id
left JOIN supernaughty AS t3 ON t2.supernaughty_id = t3.id
WHERE
t1.name = 'Batman';
