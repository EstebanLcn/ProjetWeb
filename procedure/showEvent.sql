DROP PROCEDURE IF EXISTS showEvent

DELIMITER $$

CREATE PROCEDURE showEvent (

)

BEGIN

START TRANSACTION;

SELECT *
FROM _event
    INNER JOIN picture ON _event.id = picture.id_event;

COMMIT;
END$$