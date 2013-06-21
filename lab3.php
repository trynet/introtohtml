<!DOCTYPE html>


<html>


<head>



<title>Lab 3 - First Lists - Directions</title>



<meta charset="utf-8" />


<link rel="stylesheet" href="styles/styles.css" />


</head>

<body>

<div id="wrapper">

<?php include("includes/header.php"); ?>

<div class="clearfix">

<section id="main">


<h1>Lab 3: First Lists</h1>
<p>In this lab you'll be making Unordered and Ordered Lists. </p>
<p>All of the pages
  have what will become our navigation interface (menu) at the bottom of the
  page which consists of an Unordered List. Some of the other pages will have
  Ordered and/or Unordered Lists.</p>
<p>Here is what your files will look like when you are done with this lab. Remember,
  you are looking at the source code of these files as much as anything. How
  the page looks in a browser is a matter that belongs to CSS.</p>
  
<img src="images/peek.jpg" alt="Sneak A Peek " class="peek" />
  

  
<ul>
  <li><a href="labs/3/index.html" target="_blank">index.html</a></li>
  <li><a href="labs/3/prep.html" target="_blank">prep.html</a></li>
  <li><a href="labs/3/plant.html" target="_blank">plant.html</a></li>
  <li><a href="labs/3/harvest.html" target="_blank">harvest.html</a></li>
  <li><a href="labs/3/blog.html" target="_blank">blog.html</a></li>
</ul>

<h2>Step 1: Start by adding the list which will become the navigation interface
  for the site.</h2>
<p>Currently, the end of each file has this faux list. I say &quot;faux&quot; because
  a p tag with a bunch of break tags is the  rank amateur way of making 
  a list. The way to do it is with list markup.</p>
<p>Here's what we have now:</p>
<p><code>&lt;p&gt;</code>Home<code>&lt;br /&gt;<br>
  </code>Preparation<code>&lt;br /&gt;<br>
  </code>Planting<code>&lt;br /&gt;<br>
  </code>Harvest<code>&lt;br /&gt;<br>
</code>Blog<code>&lt;/p&gt;</code></p>
<p>We want to replace that with the following to form an Unordered List with
  the <code>&lt;ul&gt;</code> tag:</p>
<p><code>&lt;ul&gt;<br>
  &lt;li&gt;</code>Home<code>&lt;/li&gt;<br>
  &lt;li&gt;</code>Preparation<code>&lt;/li&gt;<br>
  &lt;li&gt;</code>Planting<code>&lt;/li&gt;<br>
&lt;li&gt;</code>Harvest<code>&lt;/li&gt;<br>
&lt;li&gt;</code>Blog<code>&lt;/li&gt;<br>
&lt;/ul&gt;</code></p>
<p>Don't copy and paste this. Type everything. You need the practice. You
  need to see the syntax - the pattern - that is the hallmark of html. For every
  open tag, there is a closing tag.</p>
<p>You will do the same thing for the other four files. </p>
<p>Once you are done with index.html (and the other four files) close them up.</p>
<p>All your pages now have a list at the bottom of the page. <a href="labs/3/index.html">Take
    a look</a>.</p>


<h2>Step 2: Let's add the simple lists to plant.html.</h2>
<p>Things are about to get interesting as we add simple and nested lists to this
  page. Let's do the easier ones first.</p>
<p>Just after the paragraph ending with </p>
<p>...other than for my family and friends.<code>&lt;/p&gt;</code></p>
<p>add the list with just two list items - lettuce and corn like this:</p>
<p><code>&lt;ul&gt;<br>
  &lt;li&gt;</code>lettuce<code>&lt;/li&gt;<br>
  &lt;li&gt;</code>corn<code>&lt;/li&gt;<br>
&lt;/ul&gt;</code></p>
<p>Remember, type this in!!</p>
<p>Then, towards the end of the file just after:</p>
<p><code>&lt;h1&gt;</code>Where To Get Seeds
  And Supplies<code>&lt;/h1&gt;</code></p>
<p>let's do another two item list by turning the following into an Unordered
  List:</p>
<p>Burpee Vegetable<br>
Rabbit Scram</p>
<p>Here, I'll give you some help. The code is:</p>
<p><code>&lt;ul&gt;<br>
  &lt;li&gt;</code>Burpee Vegetable<code>&lt;/li&gt;<br>
  &lt;li&gt;</code>Rabbit Scram<code>&lt;/li&gt;<br>
&lt;/ul&gt;</code></p>
<p>Before we move on let's add the Trademark symbol. It's another example of
  a character entity.</p>
<p><code>&lt;ul&gt;<br>
&lt;li&gt;</code>Burpee Vegetable<code>&lt;/li&gt;<br>
&lt;li&gt;</code>Rabbit Scram<code><span class="second">&amp;trade;</span></code><code>&lt;/li&gt;<br>
&lt;/ul&gt;</code></p>
<p>Those are two simple lists. If you haven't already, save your file and take
  a look. Of course, saving your file and having a look is something you can
do at any time.</p>
<p>Next is a third simple, Unordered List but this time you are on your own
  as I am not showing you the html here. It goes just after</p>
<p> <code>&lt;p&gt;</code>Some herbs are perennials so we leave them in the ground (like chives) but most of these we just plant every year:<code>&lt;/p&gt;</code></p>
<p>You may copy and paste this or just type it into your file.</p>
<p>parsley<br>
  basil<br>
  rosemary<br>
  thyme<br>
steveia <code>&lt;br /&gt;</code> (It's a sweet herb we like to put in our ice
tea)</p>
<p>Follow the pattern of open and close <code>&lt;ul&gt;</code> and <code>&lt;li&gt;</code> tags
  as we did for the first 2 lists. Note
  that I'm adding a break tag inside the last list item.</p>
<p>Let's do one last simple list but this time it's an Ordered List. The markup
  is the same as an Unordered List but  now we'll use <code>&lt;ol&gt;</code> in
  place of <code>&lt;ul&gt;</code>.</p>
<p>Just after:</p>
<p><code>&lt;p&gt;</code>On planting day, here are the things I always do.<code>&lt;/p&gt;</code></p>
<p>copy and paste these five list items:</p>
<p>
  Layout the seedlings where they will be planted. This way you will
  know how the spacing will go between the plants. <br>
  Prepare the rows where the seeds (radishes, carrots and peas) will
  go.<br>
  Plant the seedlings and sow the seeds.<br>
  Add some fertilizer and water.<br>
  Have an adult beverage. The hard work of the Spring Preparation and
Planting is over.  </p>
<p>Again, I'm not showing you how to do it but remember that this list will
  start with <code>&lt;ol&gt;</code> and end with <code>&lt;/ol&gt;</code>. Look
  at my source code in my
  <a href="labs/3/plant.html">plant.html</a> file if you need some help.<br>
</p>
<p>That does it for the 4 simple lists. Save your file and have a look at your
  file in the browser.</p>
<p>Ready for a something a little more challenging? </p>
<h2>Step 3: Do the nested list.</h2>
<p>We have a Nested List to add to plant.html. A Nested List is a list with
  at least one other list inside of it.</p>
<p>Our first Nested List is going to go just after</p>
<p><code>&lt;p&gt;</code>We always plant these vegetables because most of them are not as good
as they used to be when you buy them at the store.<code>&lt;/p&gt;</code></p>
<p>Here are the list items:</p>

<!-- Note to students who are looking at this code to see how I did this.  This is not the way to do a Nested List.  I am using a series of No Break Space characters for expediency.  -->

<p> tomatoes<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;early girl<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sweet 100 cherry<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;big boy<br>
zucchini or yellow squash<br>
peppers<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;green<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;red</p>
<p>Early girl, sweet 100 cherry and big boy is a sub group (examples of) tomatoes
  so they are set apart as their own separate, Nested List. The same is true
  with green and red being a sub group of peppers. </p>
<p>I will get you started.</p>
<p><code>&lt;ul&gt;</code><br>
  <code>&lt;li&gt;</code>tomatoes<br>
  <code>
  <span class="nested">&lt;ul&gt;</span></code><br>
  
  <code>
  <span class="nested">&lt;li&gt;</span></code>early girl<code><span class="nested">&lt;/li&gt;</span></code><br>
  
  <code>  <span class="nested">&lt;li&gt;</span></code>sweet 100 cherry<code><span class="nested">&lt;/li&gt;</span></code><br>
  
  
 
  <code>  <span class="nested">&lt;li&gt;</span></code>big boy<code><span class="nested">&lt;/li&gt;</span></code><br>
  
  
  
  <code>  <span class="nested">&lt;/ul&gt;</span>&lt;/li&gt;</code> &lt;!-- this <code>&lt;/li&gt;</code> tag closes the list item
  &quot;tomatoes&quot; --&gt;<br>
  zucchini or yellow squash<br>
  peppers<br>
  green<br>
  red<br>
<strong><code>&lt;/ul&gt;</code></strong></p>
<p>You have all of the patterns you need to complete this assignment. If you
  get stuck look at my source code. Remember, for every open tag there must
  be a closing tag. For example, in this list I have 3 <code>&lt;ul&gt;</code>s
  so I must
  have 3 <code>&lt;/ul&gt;</code>s. And I do!!</p>
<p>What I've highlighted in blue is the inside of the 2 inside (nested) lists.</p>
<p>WOW!! That was a ton. How did you do?</p>


<p>Save and close the file. <a href="labs/3/plant.html">It should look like
    this</a>, Again, since our focus
  is  html, our interest is the source code and NOT how the page looks in
  the browser.</p>



<h2>Step 4: Add a simple list to harvest.html.</h2>
<p>This should be a total slam dunk if you've gotten to this point.</p>
<p>Right after the paragraph:</p>
<p><code>&lt;p&gt;</code>Here are some recipes I found to help you do something with all the
good food. There is only so much you can give away.<code>&lt;/p&gt;</code></p>
<p>make an Unordered List with these list items:</p>
<p>Zucchini Bread<br>
  Pesto Pasta<br>
Eggplant Parmesan</p>
<p>Save and close your file. Compare your source code with my <a href="labs/3/harvest.html">harvest.html</a> file.</p>
<h2>Step 5: Add a simple list to blog.html.</h2>
<p>One more list to add before we can move on to the next lesson and learn how
  to error check our files.</p>
<p>Just after the words</p>
<p><code>&lt;h2&gt;</code>Categories<code>&lt;/h2&gt;</code></p>
<p>make an Unordered List for the following:</p>
<p>Plants<br>
  Soil Prep<br>
  Recipes<br>
Pest Control</p>
<p>Does the source code of your blog.html file <a href="labs/3/blog.html">match my file</a>?</p>

</section>

</div>  <!-- ned clearfix -->

<?php include("includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

