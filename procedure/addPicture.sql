DROP PROCEDURE IF EXISTS addPicture;

DELIMITER $$

CREATE PROCEDURE addPicture (
    IN input_url VARCHAR
(100),
    IN input_event_id INT
(11)

)
BEGIN

START TRANSACTION;
INSERT INTO picture
    (
    url,
    id_Event
    )
VALUES(
        input_url,
        input_event_id
    );
COMMIT;

END

$$