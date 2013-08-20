<!DOCTYPE html>


<html>


<head>



<title>Lab 2 - First Tags - Directions</title>



<meta charset="utf-8" />


   <link rel="icon" href="images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="images/favicon.png" type="image/png"/>

<link rel="stylesheet" href="styles/styles.css" />




</head>

<body>


<div id="wrapper">
  
  <?php include("includes/header.php"); ?>

<div class="clearfix">

<section id="main">


<h1 class="lab-header">Lab 2: First Tags</h1>
<p>So, here we go. Your first real Lab. Are you ready for the big time?</p>
<p>You are going to start by first making five starter&quot; HTML files that
  will act as shells for your content. I will let you know when to copy and paste.
  If I don't say anything,
  don't do it. When it comes to typing in the tags, DEFINITELY do not copy and
  paste!!</p>
<p>When you are done with this Lab, your 5 files will look like the HTML files
  listed below. But by &quot;look&quot;
  I am talking about the source code. Make sure to compare what you did with
  what I did. We are after good coding practices here, so we can do more interesting
   - and fun - stuff down the road.</p>
  
<img src="images/peek.jpg" alt="Sneak A Peek " class="peek" />
  

<ul>
  <li><a href="labs/2/index.html" target="_blank">index.html</a></li>
  <li><a href="labs/2/prep.html" target="_blank">prep.html</a></li>
  <li><a href="labs/2/plant.html" target="_blank">plant.html</a></li>
  <li><a href="labs/2/harvest.html" target="_blank">harvest.html</a></li>
  <li><a href="labs/2/blog.html" target="_blank">blog.html</a></li>
</ul>

<p id="note"><strong>NOTE:</strong>  You 
  may copy and paste the content for your files as explained below or, alternatively,
   , you may 
  <a href="dl/content.zip">down load all of the content</a> in this .zip file.
  This will save you a bunch of time.</p>

  
<h2>Step 1. Copy and paste this <a href="labs/2/base.txt">starter code</a> into a text editor.</h2>

<p>Save the file  5 different times, each time  with one of the following
  file names:</p>
<ul>
  <li>  index.html  </li>
  <li>prep.html    </li>
  <li>plant.html    </li>
  <li>harvest.html    </li>
  <li>blog.html </li>
</ul>
<p>Once that is done just make sure that these files which you have just made
are closed.</p>

<p>Just think of each of these files as a vessel into which you are about to
  pour some content that will be unique to each page.</p>
<h2>Step 2. Let's do the markup first for index.html since that will be the home page.</h2>

<p>The filename for all home pages is always index.html</p>

<p>Open <a href="labs/2/index.txt">index.txt</a>  and copy all of the content.
  Then open index.html in a text editor and paste the copied content  into
  index.html between these tags:</p>



<p><code>&lt;h2&gt;</code>Getting Addicted To Growing Good Things To Eat<code>&lt;/h2&gt;</code></p>

<p>and</p>

<p><code>&lt;address&gt;</code></p>



<p>You can see I've left a lot of white space for you to paste the content in.</p>

<p>Most of the content for the home page is paragraphs, but there is one heading
  tag to go in there. There is also a quote tag (<code>&lt;q&gt;</code>) for the quote from
  my Father.</p>

<p>Do NOT copy and paste the tags. Type them into your file. </p><hr />
<p><code>&lt;p&gt;</code>I have been growing vegetables at my home in Nutley,
  New Jersey, for over 25 years. A big reason why we bought our home was just
  so I could grow a few crops every summer. What I could not know then was how
  much I would love vegetable gardening. It's a passion that now borders on an
obsession.<code>&lt;/p&gt;</code></p>
<p><code>&lt;p&gt;</code>As a kid in Pepper Pike, Ohio, I watched my Father every
  year tend to his garden that measured 30 X 50. I could not understand why he'd
  spend so much time in the yard and in the garden growing staples such as corn,
  carrots, and tomatoes every year<code>.&lt;/p&gt;
</code></p>
<p>  <code>&lt;p&gt;</code>Here's what my Dad said about what he liked about
gardening...<code>&lt;/p&gt;</code></p>

<p><code>&lt;q&gt;</code>The place where I could get away from you, your Mother,
  and your sister was the garden. I had full control unless you factor in sunlight,
  rain, and the weeds that grew no matter what.<code>&lt;/q&gt;</code></p>

<p><code>&lt;p&gt;</code>Each year the rituals are the same. From early preparation
  to planting and harvesting, what I do is what I've learned over the years. I've
  especially gotten good at keeping out little animals that like to eat what's
  not for them.  I always wonder what my life would have been like had I lived
  on a farm.<code>&lt;/p&gt;</code></p>

<p><code>&lt;p&gt;</code>Whether you live in an apartment with a balcony or on
  30 acres or have a tiny patch of land to grow fresh vegetables as I do, gardening
  is fun, easy, cheap, and rewarding. Nothing like picking herbs and food from
  the garden for tonight's dinner. These pages are about what I've learned and
  what you can do to have fun and fresh food at the same time.<code>&lt;/p&gt;
</code></p>
<p><code>&lt;h1&gt;</code>Poll Of The Day<code>&lt;/h1&gt;</code></p>

<p><code>&lt;p&gt;</code>Do you like working in the yard?<code>&lt;/p&gt;</code></p><hr />
<p>For every open tag - like <code>&lt;p&gt;</code> there must be a matching close tag which in
this case is <code>&lt;/p&gt;</code>.</p>
<p>Notice how the browser adds the start and end quotation marks just by using
  the q tag. You certainly can change the appearance of these marks with CSS.</p>
<p> Remember to save your file often as you work. Let's continue adding tags.
  </p>
<p>Now add the content for the title of your document. Titles are very important for a lot of reasons, especially the role they play in Search Engine Optimization (SEO).</p>

<p>Each page must have its own unique title. The <code>&lt;title&gt;</code> tag
  can go any where between the <code>&lt;head&gt;&lt;/head&gt;</code> container.</p>

<p>For the home page it's:</p>

<p><code>&lt;title&gt;</code>Growing A Vegetable Garden - In My Garden<code>&lt;/title&gt;</code></p>

<p>We have one last thing to do and that is to add the character entity for the
  copyright symbol. A character entity will always start with an ampersand
  and end with a semi-colon. Currently we have this content in the address section:</p>

<p><code>&lt;address&gt;<br>
  </code>Bud Kraus<br>
  888 MY GARDEN<br>
  bud@inmygarden.com<code><br>
  &lt;/address&gt; </code></p>

<p>Now I need you to add:</p>
<p><code>&amp;copy;</code> IMG, Inc. All Rights reserved.</p>
<p>below bud@inmygarden.com and just above <code>&lt;/address&gt;</code>.</p>


<p>As we do the other 4 files, you can add this copyright information to
  those files too, but I'll leave that  up to you.</p>

<p>Save your index.html file. </p>
<p>If you haven't already, check the source code of your file with the source
code of my <a href="labs/2/index.html">index.html</a> file.</p>
<p>Close your index.html file. Take a deep cleansing, breath</p>

<h2>Step 3.  Now let's work on the prep.html file. </h2>

<p>The process will be just like that in Step 2.</p>


<p>Open <a href="labs/2/prep.txt">prep.txt</a> and copy the text. Open prep.html
  in a text editor and paste the copied content into it between:</p>

<p><code>&lt;h2&gt;</code>Getting Addicted To Growing Good Things To Eat<code>&lt;/h2&gt;</code></p>
<p>and</p>
<p><code>&lt;address&gt;</code></p>
<p>Save prep.html.</p>
<p>With the exception of the first word (Preparation), all of this content forms paragraphs. You already know how to do that.</p>

<p>For "Preparation" use the Heading 1 tag as follows:</p>

<p><code>&lt;h1&gt;</code>Preparation<code>&lt;/h1&gt;</code></p>


<p>Add your content for the title:</p>
<p><code>&lt;title&gt;</code>Early Spring Preparation For A Vegetable Garden - In My Garden<code>&lt;/title&gt;</code></p>
<p>As a reminder you can add:</p>
<p><code>&amp;copy;</code> IMG, Inc. All Rights reserved.</p>
<p>to the address section just as you did for index.html.  Save prep.html.</p>

<p>If you haven't already, check the source code of your file with the source
code of my <a href="labs/2/prep.html">prep.html</a> file.</p>

<p>Once you are done, save and close your prep.html file. </p>

<p>Feel free to look at the first two pages you have made in your browser.</p>

<p>So far, so good, right? That wasn't so bad!</p>

<h2>Step 4. Now let's do the plant.html file.</h2>

<p>Open the <a href="labs/2/plant.txt">plant.txt</a> file. Copy and paste the
  contents into your plant.html file and save it.</p>
<p>Let's get out the  <code>&lt;p&gt;</code> again as it remains in heavy use. Except for
  the following heading tags, all the content is paragraphs.</p>
  
<p>Now here  is the <code>&lt;h1&gt; </code>and<code> &lt;h2&gt;</code> content:</p>


<ul>
<li><code>&lt;h1&gt;</code>Planting The Garden<code>&lt;/h1&gt;
</code>
  <ul>
  <li><code>&lt;h2</code>&gt;What We Plant&lt;<code>/h2&gt;</code></li>
  <li><code>&lt;h2&gt;</code>Getting Started<code>&lt;/h2&gt;</code></li>
  <li><code>&lt;h2&gt;</code>Sowing Seeds<code>&lt;/h2&gt;</code></li>
  <li><code>&lt;h2&gt;</code>In A Few Weeks<code>&lt;/h2&gt;</code></li>
</ul></li>
<li><code>&lt;h1&gt;</code>To Do List<code>&lt;/h1&gt;</code></li>
<li><code>&lt;h1&gt;</code>Where To Get Seeds And Supplies<code>&lt;/h1&gt;</code></li>
</ul>
<p>Notice how I am using the tags to form a hierarchy with my content. That is
exactly the purpose of HTML which uses hierarchies to give mean to content.</p>
<p>Lastly, add this title to your document:</p>
<p><code>&lt;title&gt;</code>Planting A Vegetable Garden - In My Garden<code>&lt;/title&gt;</code></p>

<p> By now you know to add the copyright info.  Check the source code of your
  file with the source code of my <a href="labs/2/plant.html">plant.html</a> file.</p>

<p>Save and close this file.</p>

<h2>Step 5. Next, let's set up the harvest.html file</h2>

<p>Open <a href="labs/2/harvest.txt">harvest.txt</a>.  Copy and paste the content
  into harvest.html  and save it.</p>


<p>Same old thing. All the content is paragraphs except for:</p>

<ul>
<li><code>&lt;h1</code>&gt;The Harvest<code>&lt;/h1&gt;
</code>
  <ul>
  <li><code>&lt;h2&gt;</code>The Fruits Of Labor<code>&lt;/h2&gt;</code></li>
</ul></li>
<li><code>&lt;h1&gt;</code>Recipes<code>&lt;/h1</code>&gt;</li>
</ul>



<p>Then, add the content for your title:</p>

<p><code>&lt;title&gt;</code>&gt;Harvesting A Vegetable Garden - In My Garden<code>&lt;/title&gt;</code></p>

<p>If you haven't already, check the source code of your file with the source
code of my <a href="labs/2/harvest.html">harvest.html</a> file. They need to
be the same. </p>
<p>Once you are done, save and close your plant.html file.</p>


<h2>Step 6. Let's add some content to blog.html</h2>
<p>Open <a href="labs/2/blog.txt">blog.txt</a>. I think by now you know what to do.</p>

<p>Like the other pages, most of the content requires paragraph markup.

Also like the other pages, I use <code>&lt;h1&gt;</code>  and <code>&lt;h2&gt;</code> tags for headings
and subheads like this:</p>

<ul>
<li><code>&lt;h1&gt;</code>Garden Blog<code>&lt;/h1&gt;</code></li>
 <li> <code>&lt;h1&gt;</code>How Much?<code>&lt;/h1&gt; </code>
   <ul>
      <li><code>&lt;h2&gt;</code>Leave A Comment<code>&lt;/h2&gt;</code></li>
   </ul>
</li><li><code>&lt;h1&gt;</code>Something I'll Pay Attention To Next Year<code>&lt;/h1&gt;</code></li>
<li><code>&lt;h1&gt;</code>Keeping Out The Pests<code>&lt;/h1&gt;</code>
  <ul>
     <li><code>&lt;h2&gt;</code> Subscribe<code>&lt;/h2&gt;</code></li>
  </ul>
</li>
<li><code>&lt;h1&gt;</code>About My Blog<code>&lt;/h1&gt;</code>
  <ul>
     <li><code>&lt;h2&gt;</code>Categories<code>&lt;/h2&gt;</code></li>
     <li><code>&lt;h2&gt;</code>Previous Articles<code>&lt;/h2&gt;</code></li>
  </ul>
</li>
</ul>



<p>Time now to add <code>&lt;strong&gt;</code> and <code>&lt;em&gt;</code>   tags. Here is where they
  go.  Remember. DO NOT copy and paste this!! Type  in the code yourself. </p>
  
  
<p><code>&lt;strong&gt;</code>&quot;How much should I water? How much should I fertilize?&quot;<code>&lt;/strong&gt;</code></p>

<p><code>&lt;em&gt;</code>A pinch of this, a handful of that<code>&lt;/em&gt;</code></p>

<p><code>&lt;strong&gt;&lt;em&gt;</code>never paid any attention to is the pH
factor<code>&lt;/em&gt;&lt;/strong&gt; </code></p>
  
  
  <p>Notice how these inline elements (<code>&lt;strong&gt;</code> and <code>&lt;em&gt;</code>) go inside
of a block level element (in this case <code>&lt;p&gt;</code>).


<p>That pattern is important to writing good HTML.
  
  With inline elements the order of the tags is not important but you always
  want to close the tags in the reverse order from which they are opened.</p>
  
  
  
  <p>Add the content for the title of the document:</p>
  
  <p> <code>&lt;title&gt;</code>A Vegetable Garden Blog - In My Garden<code>&lt;/title&gt;</code></p>


<p>Finally, because I have 3 articles on this page, I used the Horizontal Rule
  (<code>&lt;hr /&gt;</code>) to separate the articles. Look at my source code to see where to
  place the two <code>&lt;hr /&gt;</code> tags.</p>
<p>If you haven't already, check the source code of your file with the source
code of my <a href="labs/2/blog.html">blog.htm</a>l file.</p>

<p>Save and close your blog.html file.
<p>Time for an adult beverage!!
</section>

</div>  <!-- end clearfix -->

<?php include("includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

