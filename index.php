<?php
require_once 'app/config/config.php';
require_once 'scripts/schedule.php';
session_destroy();
echo '<pre>'; print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
   <title>Joy Of Code: Intro To HTML -  Home Room</title>
   <link rel="stylesheet" href="styles/styles.css" />
   <style type="text/css">
      ection#main
      {width:800px;
      float:none;
      margin:20px auto;}

      hr
      {visibility:hidden;}

      div#montreal
      {width:80%;
      margin: 0 auto;}

      div#montreal img
      {float:left;
      padding:10px;
      margin:0 15px ;
      border:1px black solid;}
   </style>
</head>

<body>
   <div id="wrapper">
      <?php include("includes/header.php"); ?>

      <div class="clearfix">
         <section id="main">
            <h1 id="home">Home Room</h1>

            <div id="lessons">
               <h2>Lessons</h2>
               <p>Reading Material For Each Lab</p>
               <ol>
                  <?php for ($i = 1; $i <= count($lessons); $i++) : ?>
                     <?php if ($progress['current_lab'] > ($i - 1)) : ?>
                     <a href="<?php echo $lessons[$i - 1]['url'] ?>"><li><?php echo $lessons[$i - 1]['lesson'] ?></li></a>
                     <?php else : ?>
                     <li><?php echo $lessons[$i - 1]['lesson'] ?></li>
                     <?php endif ?>
                  <?php endfor ?>
               </ol>
            </div>

            <div id="labs">
               <h2>Labs</h2>
               <p>Hands-On Assignements</p>
               <ol>
                  <?php for ($i = 1; $i <= count($labs); $i++) : ?>
                     <?php if ($progress['current_lab'] > ($i - 1)) : ?>
                     <a href="<?php echo $labs[$i - 1]['url'] ?>"><li><?php echo $labs[$i - 1]['lab'] ?></li></a>
                     <?php else : ?>
                     <li><?php echo $labs[$i - 1]['lab'] ?></li>
                     <?php endif ?>
                  <?php endfor ?>
               </ol>
            </div>

            <hr style="clear:both;" />

            <div id="appendices">
               <h2>Appendices</h2>
               <p>All the stuff that I could not fit into the Lessons</p>
               <ol>
                  <?php for ($i = 1; $i <= count($appendices); $i++) : ?>
                     <?php if ($progress['current_lab'] > ($i - 1)) : ?>
                     <a href="<?php echo $appendices[$i - 1]['url'] ?>"><li><?php echo $appendices[$i - 1]['appendix'] ?></li></a>
                     <?php else : ?>
                     <li><?php echo $appendices[$i - 1]['appendix'] ?></li>
                     <?php endif ?>
                  <?php endfor ?>
               </ol>
            </div>

            <h2>And In The End</h2>

            <p>This is what you are making, one lab at a time but these files include CSS.</p>

            <ul>
              <li><a href="project/">In My Garden</a>
              </li>
            </ul>
         </section>
      </div>  <!--  end clearfix -->

      <?php include("includes/footer.php"); ?>
   </div> <!-- end wrapper -->
</body>

</html>
