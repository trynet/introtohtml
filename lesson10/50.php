<!DOCTYPE html>

<html>


<head>

<title>Lesson 10: A Look At CSS</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<ul id="breadcrumbs">
<li><a href="10.html">Lesson 10: A Look At CSS</a> </li>
</ul>

 <h1>In My Garden: All Dressed Up With CSS And Ready To Go</h1>


<p>Here is how I applied CSS to the In My Garden site. I would definitely start
  out with Phase One as the first step but after that I’d take a different approach
  then what you will see with Phases 2 - 4. Normally I do all the layout work
first and the add typographical rules.</p>
<h2>Phase 1: Start With The Browser Re-set Rules</h2>
<p>Many designers and developers begin with browser re-set rules owning to the
  fact that browsers do not universally and uniformly support CSS as drawn
  up by the W3C. They may also have preferences they want on every site they
  work on so the re-set serve as a boilerplate.</p>
<p>These <a href="http://html5doctor.com/html-5-reset-stylesheet/">HTML5 e-set
    rules</a> were developed by HTML5 Doctor. I've made some modifications to
    it to serve my needs.</p>
<p><code>html, body, div, span, object, iframe,<br>
  h1, h2, h3, h4, h5, h6, p, blockquote, pre,<br>
  abbr, address, cite, code,<br>
  del, dfn, em, img, ins, kbd, q, samp,<br>
  small, strong, sub, sup, var,<br>
  b, i,<br>
  dl, dt, dd, ol, ul, li,<br>
  fieldset, form, label, legend,<br>
  table, caption, tbody, tfoot, thead, tr, th, td,<br>
  article, aside, canvas, details, figcaption, figure, <br>
  footer, header, hgroup, menu, nav, section, summary,<br>
  time, mark, audio, video <br>
  {margin:0;<br>
  padding:0;<br>
  border:0;<br>
  outline:0;<br>
  font-size:100%;<br>
  vertical-align:baseline;<br>
background:transparent;}</code></p>
<p><code>article,aside,details,figcaption,figure,<br>
  footer,header,hgroup,menu,nav,section<br>
  {display:block;}</code></p>
<p><code>nav ul <br>
  {list-style:none;}</code></p>
<p><code>blockquote, q <br>
  {quotes:none;}</code></p>
<p><code>blockquote:before, blockquote:after,<br>
  q:before, q:after <br>
  {content:'';<br>
  content:none;}</code></p>
<p><code>a <br>
  {margin:0;<br>
  padding:0;<br>
  font-size:100%;<br>
  vertical-align:baseline;<br>
  background:transparent;}</code></p>
<p><code>table <br>
  {border-collapse:collapse;<br>
  border-spacing:0;}</code></p>
<p><code>input, select <br>
  {vertical-align:middle;}</code></p>
<p><code>h1,h2,h3,h4,h5,h6<br>
  {font-weight:normal;}</code></p>
<p>Let's see what  <a href="project/phase1/">In My Garden </a> looks like
  now with the browser re-sets in place. it still might not look like much to
  you but I've actually got this just where I want it to apply my styles.</p>
<h2>Phase 2: Add font size rules.</h2>
<p>Since font sizing is a tricky subject I got that out of the way
  next by adding the following rules to the browser re-set rules.</p>
<p><code>p, ul, label, ol, table<br>
{font-size:12px;}</code></p>
<p><code>q, caption<br>
  {font-size:14px;}</code></p>
<p><code>hgroup h1<br>
  {font-size:48px;}</code></p>
<p><code>hgroup h2<br>
  {font-size:18px;}</code></p>
<p><code>nav li, nav a, address<br>
  {font-size:10px;}</code></p>
<p>Here is <a href="project/phase2/">where we are now</a> that we have set up the font sizes for our elements.</p>
<h2>Phase 3 : Establish the rules for the major elements and for rules that
  will appear on more than one page.</h2>
<p>To the above I added these rules to my elements. I've also added  rules
  that apply to more than one page. For pages that have unique rules I show that
  in the next Phase.</p>
<p><code>body<br>
  {background:#7e6654;<br>
  color:#000;
  <br>
font-family:'trebuchetms', verdana, sans-serif;}</code></p>
<p><code>div#wrapper<br>
  {width:850px;<br>
  margin:0px auto;<br>
  background:#fff;<br>
  -moz-box-shadow: 10px 10px 12px #000;<br>
  -webkit-box-shadow: 10px 10px 12px #000;<br>
  -o-box-shadow: 10px 10px 12px #000;<br>
  box-shadow: 10px 10px 12px #000; <br>
  position:relative;}</code></p>
<p><code>header<br>
  {margin-bottom:35px;}</code></p>
<p><code>hgroup<br>
  {height:100px;<br>
  background:#194e0f;}</code></p>
<p><code>hgroup h1<br>
  {margin-left: 20px;}</code></p>
<p><code>hgroup h2<br>
  {margin-left:30px;}</code></p>
<p><code>hgroup h1, hgroup h2<br>
  {color:#fff;<br>
  font-family:'comic sans ms', monospace;}</code></p>
<p><code>section#main_content<br>
  {padding:20px;<br>
  width:600px;<br>
  float:left;} </code></p>
<p><code>p, ul, ol<br>
  {margin:10px 0px;}</code></p>
<p><code>ul, ul ul<br>
  {margin:0px 10px;}</code></p>
<p><code>ol li<br>
  {margin:10px 0px;}</code></p>
<p><code>aside<br>
  {float:left;<br>
  width:190px;<br>
  margin-top:30px !important;} </code></p>
<p><code>aside header h1<br>
  {font-family:'comic sans ms', monospace;<br>
  text-align:center;}</code></p>
<p><code>aside form label<br>
  {margin-top:10px;<br>
  display:block;}</code></p>
<p><code>input[value^=&quot;submit&quot;]<br>
  {background:#666;<br>
  color:#fff;<br>
  margin:10px 0px;}</code></p>
<p><code> input[placeholder]<br>
  {color:#444;<br>
  font-family:courier, serif;}</code></p>
<p><code>caption<br>
  {font-family:'times new roman', serif;<br>
  font-weight:bold;<br>
  text-transform:uppercase;}</code></p>
<p><code>th<br>
  {font-weight:normal;<br>
  text-align:left;<br>
  font-weight:bold;}</code></p>
<p><code>.clearfix:after<br>
  {content: &quot;.&quot;;<br>
  display: block;<br>
  height: 0;<br>
  clear: both;<br>
  visibility: hidden;}</code></p>
<p><code>section#vid_seeding object, section#vid_seeding embed<br>
  {display:block;<br>
  margin:30px auto;}</code></p>
<p><code>footer<br>
  {clear:both;<br>
  border:1px solid #194e0f;<br>
  background: #194e0f !important;<br>
  width:100%;}</code></p>
<p><code>address, address a<br>
  {color:#fff !important;<br>
  font-style:normal;;<br>
  font-family:tahoma,arial,sans-serif;}</code></p>
<p><code>address span<br>
  {padding-left:20px;}</code></p>
<p>Here's <a href="project/phase3/">how things look</a> with these styles added
  to phases one and two.</p>
<h2>Phase 4: Here are the rules that apply only to a given page.</h2>
<p><br>
/* -------- rules for index.html -------------- */</p>
<p><code>div#quote p<br>
  {float:left;<br>
  width:150px;}</code></p>
<p><code> div#quote q<br>
  {float:right;<br>
  width:300px;<br>
  margin:15px 100px 15px 0px;}</code></p>
<p><code>img#bud<br>
  {margin-bottom:20px;}</code><br>
</p>
<p>/* -------- main for plant.html -------------- */</p>
<p><code>section#main_content section<br>
  {width:85%;<br>
  margin:0px auto;}</code></p>
<p><code>section img#nursery<br>
  {float:right;<br>
  padding:0px 30px;}</code></p>
<p><code>section#herbs img<br>
  {float:left;}</code></p>
<p><code>section#herbs ul<br>
  {float:right;}</code></p>
<p><code>section#plant img, section#no_plant img<br>
  {float:right;}</code></p>
<p><code>section#plant ul.plant<br>
  {float:left;}</code></p>
<p><code> section#weeks img<br>
  {float:left;} </code></p>
<p><code>section#weeks p<br>
  {float:right;<br>
  width:150px;<br>
  margin-left:5px;}</code><br>
</p>
<p>/* -------- rules for harvest.html -------------- */</p>
<p><code>table#planting_schedule<br>
  {margin:15px auto;}</code></p>
<p><code>table#planting_schedule tr:hover<br>
  {background-color:#3d80df;<br>
  color: #fff;}</code></p>
<p><code>table#planting_schedule th, table#planting_schedule td<br>
  {padding:5px;}</code><br>
</p>
<p>/* -------- rules for blog.html -------------- */</p>
<p><code>article header<br>
  {margin-bottom:0px;}</code></p>
<p><code>section#comment<br>
  {width:80%;<br>
  margin:0 autho;}</code></p>
<p><code>section#comment label<br>
  {float:left;<br>
  display:block;}</code></p>
<p><code>section#comment input, section#comment select, section#comment textarea<br>
  {float:right;<br>
  display:block;<br>
  margin:5px 0px;}</code></p>
<p><code>section#comment input[value^=&quot;submit&quot;]<br>
  {float:none;}</code></p>
<p><a href="project/phase4/">We're getting there</a>. </p>
<h2>Phase 5: I add the styles for the links and the navigation interface.</h2>
<p><br>
/* -------- rules anchors and navigation -------------- */</p>
<p><code>a<br>
  {color:#194d0f;<br>
  text-decoration:none;<br>
  border-bottom:1px dotted #194d0f}</code></p>
<p><code>a:hover<br>
  {border-bottom:0px;}</code></p>
<p><code>nav<br>
  {position:absolute;<br>
  height:35px;<br>
  width:100%;<br>
  background:#194e0f;<br>
  top:250px;}</code></p>
<p><code>nav ul<br>
  {margin-top:5px;}</code></p>
<p><code>nav li<br>
  {display:inline;<br>
  margin-left:20px;<br>
  color:#999;}</code></p>
<p><code>nav a<br>
  {color:#fff;<br>
  text-decoration:none;<br>
  border:1px solid #666;<br>
  -moz-border-radius:5px;<br>
  -o-border-radius:5px;<br>
  -webkit-border-radius:5px;<br>
  border-radius:5px;<br>
  text-indent:5px;<br>
  padding:5px 0px;<br>
  width:100px;<br>
  display:inline-block;<br>
  font-family:tahoma,arial,sans-serif;}</code></p>
<p><code>nav a:hover<br>
  {background:#999;<br>
  color:#000;}</code></p>
<p>Before we take a look at the final result here is  all  my <a href="project/phase5/styles/base.css">CSS
    in one external file</a>.</p>
  
<p>Now go ahead and see what <a href="project/phase5/">In My Garden</a> looks like now that it is all dressed
  up with CSS.  I can easily edit the styles of the site because all of my style rules
  are in one file.</p>
<p><strong>Are you ready for the Big Time? Sure you are. Here's how you can <a href="../frontoffice/learning_css.php">Learn CSS</a>
  with me.</strong></p>


 




 
 <p><a id="next" href="../frontoffice/learning_css.html"> Here's How You Can Learn CSS With Me</a></p>
</section>



<?php include("../includes/sidebar.php");
print_sidebar(10,5);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>






