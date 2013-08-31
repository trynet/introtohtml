<?php
require_once 'app/config/config.php';
require_once 'controllers/schedule.php';
echo '<pre>';
print_r($DEBUG);
echo '</pre>';
?>

<!DOCTYPE html>
<html>
<head>
   <title>Joy Of Code: Intro To HTML -  Home Room</title>
   <link rel="stylesheet" href="styles/styles.css" />
   
   <link rel="icon" href="images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="images/favicon.png" type="image/png"/>
   


   <style type="text/css">

      section#main
      {width:800px;
      float:none;
	  margin:20px;
      padding:0 50px 0 25px ;}


      hr
      {visibility:hidden;}


   </style>
</head>

<body>
   <div id="wrapper">

<header>

<img src="/images/header.png"  alt="Joy Of Code Intro To HTML" />


<nav>
<ul class="nav nav-pills">

<li class="current"><a href="/"><i class="icon-home"></i><strong>Home Room</strong></span></a></li>
<li><a href="/frontoffice"><i class="icon-info-sign"></i>Front Office</a></li>
<li><a href="/code_tester.html"><i class="icon-pencil"></i>Code Tester</a></li>
<li><a href="/workspace.html"><i class="icon-cog"></i>Work Space</a></li>
<li><a href="/logout.html"><i class="icon-off"></i>Sign Out</a></li>

</ul>
</nav> 

</header>



      <div class="clearfix">
         <section id="main">
            <h1 id="home">Home Room</h1>

            <div id="lessons">
               <h2>Lessons</h2>
               <p>Reading Material For Each Lab</p>
               <ol>
                  <?php for ($i = 1; $i <= count($lessons); $i++) : ?>
                     <?php if ($progress['progression'] > ($i - 1)) : ?>
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
                     <?php if ($progress['progression'] > ($i - 1)) : ?>
                     <a href="<?php echo $labs[$i - 1]['url'] ?>"><li><?php echo $labs[$i - 1]['lab'] ?></li></a>
                     <?php else : ?>
                     <li><?php echo $labs[$i - 1]['lab'] ?></li>
                     <?php endif ?>
                  <?php endfor ?>
               </ol>
            </div>

<div id="messages" class="thumbnail">
<h2>Messages</h2>

<?php include $authNamespace->homepage_message ?>

<!--<p><?php echo $firstname ?>, right now, you don't have any. But stay alert and check here for updates. </p>

<p>For once, I don't have a lot to say. :-)</p>

<p><?php echo $firstname ?>,  thanks for going on with the class. Your payment has been received, appreciated and not yet spent!!</p>

<p>I will be here to make sure that this will be an enJoyable learning experience for you.</p>

<p>I think you know the drill. After you do Lab 3 you can wait for me to review your pages or just go on to Lesson 4.</p>

<hr/>

<p>Just let me know if you have questions or comments. You know where to reach me and I'll be happy to hear form you.</p>

-->



</div>  

            <hr style="clear:both;" />

            <div id="appendices">
               <h2>Appendices</h2>
               <p>All the stuff that I could not fit into the Lessons</p>
               <ol type="A">
                  <?php for ($i = 1; $i <= count($appendices); $i++) : ?>
                     <?php if ($progress['progression'] > ($i - 1)) : ?>
                     <a href="<?php echo $appendices[$i - 1]['url'] ?>"><li><?php echo $appendices[$i - 1]['appendix'] ?></li></a>
                     <?php else : ?>
                     <li><?php echo $appendices[$i - 1]['appendix'] ?></li>
                     <?php endif ?>
                  <?php endfor ?>
               </ol>
            </div>

            <h2>And In The End</h2>

            <p>This is what you are making, one lab at a time but these pages include CSS.</p>

          <p><a href="project/">In My Garden</a></p>
         
         </section>
      </div>  <!--  end clearfix -->

      <?php include("includes/footer.php"); ?>
   </div> <!-- end wrapper -->
</body>

</html>
