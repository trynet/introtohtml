<!DOCTYPE html>


<html>


<head>



<title>Lab 5 - First Site - Directions</title>



<meta charset="utf-8" />


<link rel="stylesheet" href="styles/styles.css" />


</head>

<body>

<div id="wrapper">

<?php include("includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<h1 class="lab-header">Lab 5: First Site</h1>
<p>In this lab we will link to pages inside and outside of your site. We'll also
  do a named target link and an email link.</p>
<img src="images/peek.jpg" alt="Sneak A Peek " class="peek" />
  <p>Now that all of our pages link together you can see what we will have accomplished
    when you are done with this lab by starting with the <a href="labs/5/index.html" target="_blank">home
    page</a>.</p>
    
<h2>Step 1: Link our five pages to each other.</h2>
<p>Let's take another step forward towards building our navigation interface.
  That's the menu which is currently a list with five items in it.</p>
<p>Open index.html in your text editor.</p>
<p>Edit the current list so that each word, such as &quot;Preparation&quot; will
  link (refer to) the corresponding file. For example, the link to the Preparation
  page will be <code>&lt;a href=&quot;prep.html&quot;&gt;</code>Preparation<code>&lt;/a&gt;</code>.</p>
<p>Similarly, the link for the Planting page will be <code>&lt;a href=&quot;plant.html&quot;&gt;</code>Planting<code>&lt;/a&gt;</code>.</p>
<p>Add the links to the Harvest and Blog pages.</p>
<p>Make sure that each anchor fits inside the <code>&lt;li&gt;&lt;/li&gt;</code> container.</p>
<p>When it comes to the home page DO NOT create a link. We don't want to refer
  to the page we are already on.</p>
<p>When you are done with setting up your links the code will look like this:</p>
<p><code>&lt;ul&gt;<br>
  &lt;li&gt;</code>Home<code>&lt;/li&gt;<br>
  &lt;li&gt;</code><code><span class="second">&lt;a href=&quot;prep.html&quot;&gt;</span></code>Preparation<code><span class="second">&lt;/a&gt;</span>&lt;/li&gt;<br>
  &lt;li&gt;<span class="second">&lt;a href=&quot;plant.html&quot;&gt;</span></code>Planting<code><span class="second">&lt;/a&gt;</span>&lt;/li&gt;<br>
  &lt;li&gt;<span class="second">&lt;a href=&quot;harvest.html&quot;&gt;</span></code>Harvest<code><span class="second">&lt;/a&gt;</span>&lt;/li&gt;<br>
  &lt;li&gt;<span class="second">&lt;a href=&quot;blog.html&quot;&gt;</span></code>Blog<code><span class="second">&lt;/a&gt;</span>&lt;/li&gt;<br>
&lt;/ul&gt;</code></p>
<p>Close the file and open prep.html.</p>
<p>Do the same thing but this time you won't be making a link to prep.html. Rather,
  you will be making a link to index.html. </p>
<p>When you are done, close prep.html. Following the same pattern, make your
  links in the other 3 files. </p>
<p>When you have finished check your links on all 5 pages. Make sure all of them
  work. There is a total of 20 links that you need to click on to test all of
  them. If one doesn't work fix it.</p>
<h2>Step 2: Add 3 external links to your plant.html file.</h2>
<p>In the first step you added links that were between pages in your site. </p>
<p>In this step you'll add three links that will be to domains outside of your site.</p>
<p>Let's transform the words:</p>
<p>&quot;Burpee Vegetables&quot; and &quot;Rabbit Scram™&quot;</p>
<p>to  provide a hyperlink to each site.</p>
<p>For Burpee Vegetables the link is <code>http://www.burpee.com/vegetables/</code></p>
<p>You should be able to do this if you've already finished Step 1. Just copy
  and paste the URL after you've typed <code>&lt;a href=&quot;&quot;&gt;</code> right
  between the quote marks. Don't forget to add <code>&lt;/a&gt;</code> after
  the word &quot;Vegetables.&quot;</p>
<p>Since I am a nice guy here is what you'll have:</p>
<p><code>&lt;a href=&quot;http://www.burpee.com/vegetables/&quot;&gt;</code>Burpee
  Vegetables<code>&lt;/a&gt;</code>.
  Of course this will go inside of the the <code>&lt;li&gt;&lt;/li&gt;</code> container.</p>
<p>Save your file and check to see that the link works. Now you can learn all
  about Burpee and html at the same time. Two for the price of one!!</p>
<p>Do the same thing for Rabbit Scram with this link:</p>
<p><code>http://www.rabbitscram.com/index.asp</code></p>
<p>I will leave it to you to put the Trademark symbol  - <code>&amp;trade;</code> -
  in your page correctly. (Don't hyper link &trade;).</p>
<p>For the third and final link on this page, locate the text</p>
<p>Center Ridge Nursery</p>
<p>and create your anchor with this URL:</p>
<p><code>http://www.facebook.com/pages/Centre-Ridge-Garden-Center/124525594281837?sk=wall</code></p>
<p>(Maybe I should have used a link shortening service to cut this URL down to
  a reasonable size. Some good services are bit.ly and tinyurl. They are very
  useful especially if you use Twitter, and many of them will track your URLs,
  not just shorten them.)</p>
<p>Save your file and test all three links. If they work then you're doing fine.
  Otherwise you might want to look at my source code and compare it with yours.</p>
<p>You might also want to validate your page now.</p>
<p>As you move forward with the labs - and once you start developing pages beyond
  this class - you will need to validate your markup. You can do this as you
  do each file or when you finish with the entire lab, that's part of your workflow
  process.</p>
<h2>Step 3: Add 3 external links to the harvest.html file.</h2>
<p>Just to make sure you got it down we are going to do three more links to external
  pages. This
  is very similar to what you've just done with plant.html</p>
<p>This  time we will be converting our list with 3 items right after:</p>
<p><code>&lt;p&gt;</code>Here are some recipes I found to help you do something
with all the good food. There is only so much you can give away.<code>&lt;/p&gt;</code></p>
<p>Start with the link for Zucchini Bread. The URL is:</p>
<p><code>http://simplyrecipes.com/recipes/zucchini_bread/</code></p>
<p>Once you do that, then do the links for:</p>
<p>Pesto Pasta whose URL is <r/ >
<code><br>
http://busycooks.about.com/od/pastawithsaucerecipes/r/pestopasta.htm</code></p>
<p>and Eggplant Parmesan whose URL is<br>
<code>http://allrecipes.com/Recipe/eggplant-parmesan-ii/detail.aspx</code></p>
<p>After you are finished your link markup will look like this (but don't you
  dare copy and paste this because you are better than that!!):</p>
<p><code>&lt;ul&gt;<br>
  &lt;li&gt;
  <span class="second">&lt;a href=&quot;http://simplyrecipes.com/recipes/zucchini_bread/&quot;&gt;</span></code>Zucchini
  Bread<code><span class="second">&lt;/a&gt;</span>&lt;/li&gt;<br>
  &lt;li&gt;<span class="second">&lt;a href=&quot;http://busycooks.about.com/od/pastawithsaucerecipes/r/pestopasta.htm&quot;&gt;</span></code>Pesto
  Pasta<code><span class="second">&lt;/a&gt;</span>&lt;/li&gt;<br>
  &lt;li&gt;<span class="second">&lt;a href=&quot;http://allrecipes.com/Recipe/eggplant-parmesan-ii/detail.aspx&quot;&gt;</span></code>Eggplant
  Parmesan<code><span class="second">&lt;/a&gt;</span>&lt;/li&gt;<br>
&lt;/ul&gt;</code></p>
<p>If you haven't already, save your file and check to make sure the links work.</p>
<p>You can also validate your code before  moving on to the last file.</p>
<h2>Step 4: Add 5 internal links to content in your site.</h2>
<p>Four of these links are going to be make believe as they won't actually work. The
  final link you'll make is to a named target and it will work.</p>
<p>Let's do the four fake links first.</p>
<p>Blogs frequently organize all previous posts under various Categories. In
  my faux blog I have four fake Categories of pretend topics of pretend prior
   posts.</p>
<p>Just after </p>
<p><code>&lt;h2&gt;</code>Categories<code>&lt;/h2&gt;</code></p>
<p>we'll add our four links. The pattern for all four will go like this:</p>
<p><code>&lt;a href=&quot;#&quot;&gt;</code>link text<code>&lt;/a&gt;.</code></p>
<p>So, for example, the first link is </p>
<p><code>&lt;a href=&quot;#&quot;&gt;</code>Plants<code>&lt;/a&gt;</code></p>
<p>and the same pattern holds for the other 3 links.</p>
<p>Remember, the anchor tag will go between the list markup.</p>
<p>Why the #? It's just a placeholder for a page that does not exist. One 
  day, if I add more content to this site I can go back and add these files. But
  please don't ever
  launch a page that has a link to another page which does not exist!! That's
  a bad practice your users will not take kindly to. </p>
<p>When you are done your list of bogus links will look like this:</p>
<p><code>&lt;ul&gt;<br>
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;</code>Plants<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;</code>Soil Prep<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;</code>Recipes<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;</code>Pest Control<code>&lt;/a&gt;&lt;/li&gt;<br>
&lt;/ul&gt;</code></p>

<hr />

<p>The last link is to a target in the prep.html file. With blog.html still open
   in your text editor create a link around the words &quot;my preparation&quot; It
  will go like:</p>
<p><code>&lt;a href=&quot;prep.html#start&quot;&gt;</code>my preparation<code>&lt;/a&gt;</code></p>
<p>Save the file and now open prep.html in your text editor</p>
<p>See  <code>&lt;h1&gt;</code>Preparation<code>&lt;/h1&gt;</code> ?</p>
<p>Let's add the id attribute inside of the h1 element like this:</p>

<p><code>&lt;h1 <span class="second">id=&quot;start&quot;</span>&gt;</code>Preparation<code>&lt;/h1&gt;</code></p>
<p>Again, this is hidden code that users will not see.  The value &quot;start&quot; is arbitrary
  . For me in this case, it means the start of the main content of the page.</p>
<p>Try it out. When you select the &quot;my preparation&quot; link in blog.html
  what happens?</p>
<h2>Step 5: Add the mail to link in the address section of each page.</h2>
<p>For the email address we use the mailto command. Just replace bud@inmygarden.com
  with this:</p>
<p><code>&lt;a href=&quot;mailto:bud@inmygarden.com&quot;&gt;</code>bud@inmygarden.com<code>&lt;/a</code>&gt;</p>
<p>Make sure to do this with all five files.</p>
<h2>Step 6: Validate all five files.</h2>
<p>As you go through all of the remaining labs make sure to keep error checking.
  It will help you learn html. We need good code for lots of reasons, one of them
being to get CSS to behave the way it was meant to.</p>
<p>Remember, the validator does a quantitative check on your code. It does not
   do everything. For example, if a link is to a page that no longer exists,
  an html validator won't tell you if that link is broken. For that you need
  a link checking service.</p>
<hr />

<p>So, how do you get your files   from your computer for all the world
  to see? That's a lot  of what <a href="appendix/E.html"> Appendix E - 
  FTP Or How To Get Your Files From Here To There</a> is about. I also give you
  a good recommendation on what web hosting service to use.</p>
<p>&nbsp;</p>

</section>

</div>  <!-- ned clearfix -->

<?php include("includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

