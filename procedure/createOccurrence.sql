DROP PROCEDURE IF EXISTS createOccurrence;

DELIMITER $$

CREATE PROCEDURE createOccurrence (
    IN start_date DATE,
    IN end_date DATE,
    IN recurrence INT
(100),
    IN input_id_event INT
(11)

)

BEGIN
    DECLARE add_day INT DEFAULT 0;
START TRANSACTION;
WHILE ( start_date + INTERVAL add_day DAY ) < end_date
DO

INSERT INTO Occurence
    (date, id_Event)
VALUES
    (
        CAST((start_date + INTERVAL
add_day DAY) AS DATE),
        input_id_event
    );
SET add_day
= add_day + recurrence;
END
WHILE;


COMMIT;
END$$