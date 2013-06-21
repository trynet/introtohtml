<!DOCTYPE html>

<html>


<head>

<title>Lesson 3: Lists > Definition Lists</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>

<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<ul id="breadcrumbs">
<li><a href="10.html">Lesson 3: Lists</a></li>
</ul>



<h1>Definition Lists</h1>


<p>Use Definition Lists when creating dictionaries, glossaries, wikis and

similar structures.</p>



          <p>Start with the <code>&lt;dl&gt;</code> <code>&lt;/dl&gt;</code> container.

            Inside that container, use <code>&lt;dt&gt;</code> <code>&lt;/dt&gt;</code> for the term you

            wish to define and <code>&lt;dd&gt;</code> <code>&lt;/dd&gt;</code>

            for the definition of the term.</p>



<p class="exs">Example of a Definition List</p>



<p class="views2">Code View</p>



<p><code>&lt;dl&gt;<br />

 &lt;dt&gt;</code>Apple<code>&lt;/dt&gt;<br />

 &lt;dd&gt;</code>a red, round type of fruit which is supposed to

keep doctors away<code>&lt;/dd&gt;<br />

 &lt;dt&gt;</code>New York City<code>&lt;/dt&gt;<br />

 &lt;dd&gt;</code>a really big city with lots of friendly

people<code>&lt;/dd&gt;<br />

 &lt;dt&gt;</code>Friendly Web Design Instructor<code>&lt;/dt&gt;<br />

 &lt;dd&gt;</code>a person who answers to the name

Bud<code>&lt;/dd&gt;<br />

</code> <code>&lt;/dl&gt;</code></p> 



<p class="views2">Browser View</p>



<dl>

<dt>Apple</dt>



<dd>a red, round type of fruit which is supposed to keep doctors

away</dd>



<dt>New York City</dt>



<dd>a really big city with lots of friendly people</dd>



<dt>Friendly Web Design Instructor</dt>



<dd>a person who answers to the name Bud</dd>

</dl>





          <p>Here's something to always remember, whether or not you ever use
            

            Definition List tags or anyother  tag for that matter.<strong>Do
            not 

            use tags for what you think are their 

            presentational effect</strong>. That is, don't say, "I can indent
            text using 

        ul. That's not the purpose of the ul element.</p>



    <p>Leave all the styling and presentation matters in the hands of CSS 

            where it belongs.</p>
<p>If you're working with a  list, <code>&lt;ul&gt;</code> and <code>&lt;ol&gt;</code> 

            are your choices. If dictionaries and glossaries are needed, go <code>&lt;dl&gt;</code>.
            

            Don't let those tags do anything more than what they are meant 

            to do, and that is to give meaning to content.</p>

<a id="next"  href="50.html">Keep Reading</a>



</section>

<?php include("../includes/sidebar.php");
print_sidebar(3,4);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>



