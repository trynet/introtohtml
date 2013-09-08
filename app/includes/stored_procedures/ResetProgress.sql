DROP PROCEDURE IF EXISTS ResetProgress;
CREATE PROCEDURE ResetProgress()
   BEGIN
      DELETE FROM `user` WHERE user_id > 30;
      DELETE FROM `progress` WHERE user_id > 30;
   END
