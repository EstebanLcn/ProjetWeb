DROP PROCEDURE IF EXISTS addOccurrenceEvent;

DELIMITER $$

CREATE PROCEDURE addOccurrenceEvent (
    IN input_title VARCHAR
(100),
    IN input_content VARCHAR
(1000),
    IN input_price INT
(100),
    IN input_url VARCHAR
(1000)
)
BEGIN
    DECLARE last_id INT DEFAULT 0;
START TRANSACTION;
INSERT INTO _event
    (name,description,price)
VALUES(
        input_title,
        input_content,
        input_price
    );
SET last_id
= LAST_INSERT_ID
();
CALL addPicture
(input_url,last_id);


COMMIT;

END

$$