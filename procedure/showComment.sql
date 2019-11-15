DROP PROCEDURE IF EXISTS showComment

DELIMITER $$

CREATE PROCEDURE showComment (
    IN input_id_event INT
(10)
)

BEGIN

START TRANSACTION;

SELECT *
FROM Comment
WHERE id__Event = input_id_event;

COMMIT;
END$$