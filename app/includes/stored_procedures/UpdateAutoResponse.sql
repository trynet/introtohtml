DROP PROCEDURE IF EXISTS AutoResponse;
CREATE PROCEDURE AutoResponse()
   BEGIN
      DECLARE sentinel INT DEFAULT 0;
      DECLARE name VARCHAR(255) DEFAULT '';

      DECLARE cur_start CURSOR FOR (SELECT `filename` FROM auto_response);
      DECLAR CONTINUE HANDLER FOR NOT FOUND SET sentinel = 1;

      OPEN cur_start;

      WHILE NOT sentinel DO
         FETCH cur_start INTO name;

         UPDATE `autoresponse` SET `filename` = CONCAT(name, '.php');
      END WHILE;
   END;

--   BEGIN
--      DECLARE x INT DEFAULT 0;
--      SET x = 3;
--      WHILE x <= 9 DO
--         INSERT INTO autoresponse (filename) VALUES (CONCAT('UPLOAD_LAB', x, '_REVIEW_INSTRUCTOR'));
--         INSERT INTO autoresponse (filename) VALUES (CONCAT('UPLOAD_LAB', x, '_NO_REVIEW_INSTRUCTOR'));
--         SET x = x + 1;
--      END WHILE;
--   END;
