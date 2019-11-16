DROP PROCEDURE IF EXISTS deletePicture;

DELIMITER $$

CREATE PROCEDURE deletePicture (
    IN input_id_event INT
(10)

)
BEGIN
START TRANSACTION;

DELETE _event
, picture  FROM _event  INNER JOIN picture 
WHERE _event.id__Event = picture.id__Event;

END$$