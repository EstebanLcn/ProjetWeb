DROP PROCEDURE IF EXISTS participateList
;

DELIMITER $$

CREATE PROCEDURE participateList (
    IN input_id_event INT
(10)
)
BEGIN 

START TRANSACTION;

SELECT _user.name, _user.first_name
FROM participate
    INNER JOIN
    _user ON participate.id__User = _user.id
WHERE participate.id = input_id_event;

COMMIT;

END $$