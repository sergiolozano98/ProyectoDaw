SELECT u.usuario,u.email,u.edad,u.nombre
FROM total t1, total t2,total t3,total t4,total t5,total t6, usuarios u
WHERE t1.idUsuario=u.id AND t2.idUsuario=u.id AND t3.idUsuario=u.id AND t4.idUsuario=u.id AND t5.idUsuario=u.id AND t6.idUsuario=u.id 
AND (t1.idPregunta=1 AND t1.Respuesta="Entre 18 y 25") 
AND (t2.idPregunta=2 AND t2.Respuesta="Otros")AND 
(t3.idPregunta=3 AND t3.Respuesta="Homosexual") AND 
(t4.idPregunta=4 AND t4.Respuesta="Rubio") AND 
(t5.idPregunta=5 AND t5.Respuesta="Vegetariano") AND 
(t6.idPregunta=6 AND t6.Respuesta="si");
