DROP PROCEDURE IF EXISTS ResetProgress;
CREATE PROCEDURE ResetProgress()
   BEGIN
      UPDATE progress SET `current_lesson` = 1, `current_lab` = 1,
                          `current_appendix` = 1, `proceed` = 1;
   END
