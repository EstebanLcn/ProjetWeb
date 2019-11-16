DROP PROCEDURE IF EXISTS addComment;

DELIMITER $$

CREATE PROCEDURE addComment (
    IN input_content VARCHAR
(1000),
    IN input_id_event INT
(11),
    IN input_id_user INT
(11)
)
BEGIN

START TRANSACTION;
INSERT INTO _comment
    (texte,id__Event,id__User)
VALUES(
        input_content,
        input_id_event,
        input_id_user  
         
    );
COMMIT;

END

$$