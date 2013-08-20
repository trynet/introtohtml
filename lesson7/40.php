<!DOCTYPE html>

<html>


<head>

<title>Lesson 7: Forms</title>

<meta charset="utf-8" />

   <link rel="icon" href="../images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="../images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="../images/favicon.png" type="image/png"/>

   <link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<ul id="breadcrumbs">
<li><a href="10.html">Lesson 7: Forms</a> </li>
</ul>

 <h1 >The textarea Tag</h1>
 

<p>Use the <code>&lt;textarea&gt;</code> <code>&lt;/textarea&gt;</code> container
   to create a <em>scrollable</em> text box.</p>
 <p class="exs">Example of a Textarea</p>
 
    <p class="views2">Code View</p>
   

   <p><code>&lt;label&gt;</code>Go ahead, tell us what you think, but be nice!!<code><br>
   <br>
&lt;textarea name=&quot;Suggestions&quot;&gt;&lt;/textarea&gt;
   </code>
     <code>&lt;/label&gt;</code>
   <p class="views2">Browser View</p>
   
<label id="example">Go ahead, tell us what you think, but be nice!! 
<textarea name="Suggestions" ></textarea></label>

     
     <ol>
       <li>
         <p>Textarea is an oddball tag. It has an end tag - <code>&lt;/textarea&gt;</code>.
           If there were text between the <code>&lt;textarea&gt;</code> <code>&lt;/textarea&gt;</code> container,
           it would show up in the box on the page. </p>
       </li>
       <li>
         <p>If a user were to submit the response, "This is a great web site," that
           information would come back to the server as &quot;suggestions=This
           is a great web site.&quot; Again, the name-value pairing is in play,
           but note that there is no <code>value</code> attribute per se. It
           is assumed. </p>
       </li>
       
       <li>
         <p>The size of the textarea box can be set with CSS but most browsers
           today allow the user to pull down on the lower right corner of the
           box if more box space is required.</p></li>
       
       <li>
         <p>Look at how I used <code>&lt;label&gt;</code> this time. The form element - <code>&lt;textarea&gt;</code> is
           outside of <code>&lt;label&gt;&lt;/label&gt;</code> which is a totally
           legit way of using the label.  In the above examples I had the form
           element - <code>&lt;input
           /&gt;</code> - wrapped inside of the <code>&lt;label&gt;&lt;/label</code>&gt;.
        You will get a chance to use the label element both ways in the lab.</p></li>
</ol>


<a id="next" href="50.html">Next</a>


</section>


<?php include("../includes/sidebar.php");
print_sidebar(7,4);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>
