DROP PROCEDURE IF EXISTS showEvent

DELIMITER $$

CREATE PROCEDURE showEvent (

)

BEGIN

START TRANSACTION;

<<<<<<< HEAD
SELECT *
FROM _event
    INNER JOIN picture ON _event.id = picture.id_event;
=======
SELECT * FROM _event INNER JOIN picture ON _event.id = picture.id__Event 
>>>>>>> 8ec71c458273226d1f2659752810489f62436281

COMMIT;
END$$