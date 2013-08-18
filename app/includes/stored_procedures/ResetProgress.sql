DROP PROCEDURE IF EXISTS ResetProgress;
CREATE PROCEDURE ResetProgress()
   BEGIN
      UPDATE progress SET `progression` = 1;
   END
