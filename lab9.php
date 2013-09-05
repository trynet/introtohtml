<!DOCTYPE html>


<html>


<head>



<title>Lab 9 - First Grouping - Directions</title>



<meta charset="utf-8" />


   <link rel="icon" href="images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="images/favicon.png" type="image/png"/>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
   <link rel="stylesheet" href="styles/styles.css" />



</head>

<body>

<div id="wrapper">

<?php include("includes/header.php"); ?>

<div class="clearfix">

<section id="main">


<h1 class="lab-header">Lab 9: First Grouping</h1>
<p>Grouping elements helps give meaning to content and is a primary method to
building structure to your web pages.</p>

<div class="thumbnail">
  
<img src="images/peek.jpg" alt="Sneak A Peek " class="peek" />
  <p>In this lab we are adding  elements that you won't see, but as you know
    by now HTML is not about  how a web page looks in a web browser. Here is
    the <a href="labs/9/index.html" target="_blank">home page</a> and the other
    pages to our


  In My Garden web site.
  <p>To give you a different perspective on the sequence of the elements take
    a look at these html outlines. See how the elements are nested and organized
    into groups. I make an html outline before I ever write any CSS.</p>


<ul>
  <li><a href="outlines/index.html">index.html</a></li>
  <li><a href="outlines/prep.html">prep.html</a></li>
  <li><a href="outlines/plant.html">plant.html</a></li>
  <li><a href="outlines/harvest.html">harest.html</a></li>
  <li><a href="outlines/blog.html">blog.html</a></li>
</ul>

<p>Now that should help you understand the idea about the structure of a document!!</p>

</div>


<h2>Step 1: Add the following five grouping elements to all five pages: div,
  header, footer and nav.</h2>
<p>Because you are working with all five files in this step I suggest you thoroughly
  read this step completely before you do anything. That way you won't get confused
  (let us hope) and you will save yourself a little time.</p>
<p>Start by adding a header element top of index.html like so:</p>
<p><code><span class="second">&lt;header&gt;</span></code></p>
<p><code>&lt;h1&gt;</code>In My Garden<code>&lt;/h1&gt;</code></p>
<p><code>&lt;h2&gt;</code>Getting Addicted To Growing Good Things To Eat<code>&lt;/h2&gt;</code></p>
<p> <code>&lt;img src=&quot;images/strip.jpg&quot; alt=&quot;Photo Strip Of Images
  From My Garden&quot;  /&gt; </code></p>
<p><code><span class="second">&lt;/header&gt;</span></code></p>
<p> You won't see any difference
  when you look at any page with your browser but you will be adding real good
  structure to your web docs.</p>
<p>Make sure to add the header element to the other four pages. </p>
<p>One last tag to add to the top of every page and it will go just after the <code>&lt;body&gt;</code>:</p>
<p><code>&lt;div id=&quot;wrapper&quot;&gt;</code></p>
<p>I have identified this as &quot;wrapper&quot; to differentiate this<code> &lt;div</code>&gt; from
  other
  <code>&lt;div&gt;</code>s and to make it easy for me to target the code to
  style my page with CSS. There is nothing magical about the term &quot;wrapper&quot; as
  I could have used &quot;Joyofcode&quot; but it has become a term of art and
  frequently used to mean &quot;wrap&quot; (contain) all elements inside the div identified
  as &quot;wrapper.&quot; Of
  course,<code> &lt;div&gt;</code>
  has to be closed in case you are wondering. That's coming.</p>
<hr>
<p>Now add the footer groupings to each page. </p>
<p>Here we go:</p>
<p><code><span class="second">&lt;footer&gt;</span></code></p>
<p><code>&lt;address&gt;<br>
<span class="second">  &lt;span&gt;</span></code>Bud Kraus<code><span class="second">&lt;/span&gt;<br>
  &lt;span&gt;</span></code>888 MY GARDEN<code><span class="second">&lt;/span&gt;<br>
  &lt;span&gt;&lt;a href=&quot;mailto:bud@inmygarden.com&quot;&gt;</span></code>bud@inmygarden.com<code><span class="second">&lt;/a&gt;&lt;/span&gt;<br>
  &lt;span&gt;&amp;copy;</span></code> IMG, Inc. All Rights Reserved.<code><span class="second">&lt;/span&gt;</span><br>
  &lt;/address&gt; </code></p>
<p><code><span class="second">&lt;/footer&gt;</span></code></p>
<p>Notice that I am using the <code>&lt;span&gt;</code> tag here.  I probably
  should have done something else, but I felt it was convenient to use it with
  CSS so that the content of the address would lay out from left to right. <code>&lt;span&gt;</code> really doesn't do much for the structure of my page.</p>
<p>And while we are at the bottom of the page might as well take care of our
   nav element like this:</p>
<p><code><span class="second">&lt;nav&gt;</span><br>
  &lt;ul&gt;<br>
  &lt;li&gt;</code>Home<code>&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;prep.html&quot;&gt;</code>Preparation<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;plant.html&quot;&gt;</code>Planting<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;harvest.html&quot;&gt;</code>Harvest<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;blog.html&quot;&gt;</code>Blog<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;/ul&gt;<br>
<span class="second">&lt;/nav&gt;</span></code></p>
<p>That  belongs to the home page. Each page is a little different because
  of how I've set up the links. What is not different is how I used the <code>&lt;nav&gt;</code> to
  group the navigation interface markup.</p>
<p>Finally, add <code>&lt;/div&gt;</code> just after <code>&lt;/nav&gt;</code> (and
  above <code>&lt;/body&gt;</code>) to close
  <code>&lt;div id=&quot;wrapper&quot;&gt;</code>. See, I told you I'd close
  that tag!!</p>
<p>Validate all five files. Make sure they are good before you move on.</p>
<h2>Step 2: Group the main content section and add the aside to each file.</h2>
<p>I could have probably done this in Step 1 as you will be adding the same elements
  to all five files but I really thought you  had enough to do in Step
  1.</p>
<p>Again, we are using tags to group, in this case, big chunks of content using
  the section and aside elements.</p>
<p>For
  all five files the main content section goes like this just after<code> &lt;/header&gt;</code>.</p>
<p><code>&lt;section id=&quot;main_content&quot;&gt;</code></p>
<p>But where the section ends and the aside (sidebar) area starts is a little
  different for each file. Here's a a table to let you know where the closing
  <code>&lt;/section&gt;</code> tag for the main content goes.</p>
<p>As you are closing the main content section go ahead and add <code>&lt;aside&gt;</code> right
  after <code>&lt;/section&gt;</code>. The aside area ends just above <code>&lt;footer&gt;</code> . And don't forget to close with <code>&lt;/aside&gt;</code>.</p>
<table width="100%" border="0">
  <tr>
    <th scope="col">File Name</th>
    <th scope="col">Add <code>&lt;/section&gt;</code> right after:</th>
  </tr>
  <tr>
    <td>index.html</td>
    <td>... you can do to have fun and fresh food at the same time.<code>&lt;/p&gt;</code></td>
  </tr>
  <tr>
    <td>prep.html</td>
    <td>Time to visit the nursery.<code>&lt;/p&gt;</code></td>
  </tr>
  <tr>
    <td>platn.html</td>
    <td>...7 weeks away from harvest.<code>&lt;/p&gt;</code></td>
  </tr>
  <tr>
    <td>harvest.html</td>
    <td>Their work is done - until next Spring. <code>&lt;/p&gt;</code></td>
  </tr>
  <tr>
    <td>blog.html</td>
    <td><code>&lt;/form&gt;</code></td>
  </tr>
</table>
<p>There!! That was good. You have five very consistent and well formed documents.</p>
<p>But there is a little more to do!!</p>
<h2>Step 3: Add the div element to group the quotation and a header in the aside
  section for index.html.</h2>
<p>We  turn now to adding grouping tags that will be different from one file
  to the next.</p>
<p>For the home page I grouped the quote and the paragraph together. I used an
  id to identify that this <code>&lt;div&gt; </code>is different from the wrapper.</p>
<p><code><span class="second">&lt;div id=&quot;quote&quot;&gt;</span></code></p>
<p><code>&lt;p&gt;</code>Here's what my Dad said about what he liked about gardening...<code>&lt;/p&gt;</code></p>
<p><code>&lt;q&gt;</code>The place where I could get away from you, your Mother and your sister
  was the garden. I had full control unless you factor in sunlight, rain and
  the weeds that grew no matter what.<code>&lt;/q&gt;</code></p>
<p><code><span class="second">&lt;/div&gt;</span></code></p>
<p>Because <code>&lt;header&gt;</code> can be used to head up different parts
  of a page (and  not just the top of the page) I used it in the aside section
  to &quot;group&quot; the &quot;Poll
  Of The Day&quot;
  like this:</p>
<p><code><span class="second">&lt;header&gt;</span></code></p>
<p><code>&lt;h1</code>&gt;Poll Of The Day<code>&lt;/h1&gt;</code></p>
<p><code><span class="second">&lt;/header&gt;</span></code></p>
<h2>Step 4: Add seven section  elements in the <code>&lt;section id=&quot;main_content&quot;&gt;</code> section
  and two <code>&lt;header&gt;</code> elements to the sidebar section for plant.html.</h2>
<p>You can use <code>&lt;section&gt;</code> more than once in a page. A good
  example is how I sub-divided the main content section as you are about to do.
  The way I used it was to group an image or two with some text content. That
  will come in very handy when I style the page with CSS.</p>
<table width="100%" border="0">
  <tr>
    <th scope="col">Add<code> &lt;section&gt; </code>just after...</th>
    <th scope="col">And add <strong><code>&lt;/section&gt;</code> j</strong>ust after... </th>
  </tr>
  <tr>
    <td><code>&lt;h1</code>&gt;Planting The Garden<code>&lt;/h1&gt;</code></td>
    <td>...ike fresh herbs to spice up your life.<code>&lt;/p&gt;</code></td>
  </tr>
  <tr>
    <td><code>&lt;h2&gt;</code>What We Plant<code>&lt;/h2&gt;</code></td>
    <td>(It's a sweet herb we <code>&lt;br /&gt;</code> like to put in our ice tea)<code>&lt;/li&gt;<br>
    &lt;/ul&gt;</code></td>
  </tr>
  <tr>
    <td><code>&lt;/section&gt;</code></td>
    <td>...<code><br>      &lt;li&gt;</code>red<code>&lt;/li&gt;<br>
      &lt;/ul&gt;&lt;/li&gt;<br>
    &lt;/ul&gt;</code></td>
  </tr>
  <tr>
    <td><code>&lt;/section&gt;</code></td>
    <td><code>&lt;li&gt;</code>corn<code>&lt;/li&gt;<br>
    &lt;/ul&gt;</code></td>
  </tr>
  <tr>
    <td><code>&lt;h2&gt;</code>Getting Started<code>&lt;/h2&gt;</code></td>
    <td><code>&lt;img src=&quot;images/overview_bot.gif&quot;  alt=&quot;Illustration
    Of Where Zucchini, Herbs And Strawberries Go&quot; /&gt; </code></td>
  </tr>
  <tr>
    <td><code>&lt;h2&gt;</code>Sowing Seeds<code>&lt;/h2&gt;</code></td>
    <td>Code for the seeding video.</td>
  </tr>
  <tr>
    <td><code>&lt;h2&gt;</code>In A Few Week<code>s&lt;/h2&gt;</code></td>
    <td> ...7 weeks away from harvest.<code>&lt;/p&gt;</code></td>
  </tr>
</table>
<p>Lastly, we add two header elements in the aside sidebar were there are two
  h1 elements. The first <code>&lt;header&gt;</code> is used like this:</p>
<p><code><span class="second">&lt;header&gt;</span></code></p>
<p><code>&lt;h1&gt;</code>To Do List<code>&lt;/h1&gt;</code></p>
<p><code><span class="second">&lt;/header&gt;</span></code></p>
<p>and the second one is used for the &quot;Where To Get Seeds And Supplies&quot;
<code>&lt;h1&gt;</code>.</p>
<h2>Step 5: Add the article element and more section, header and div elements
  to blog.html.</h2>
<p>Because this is a blog page the article element is ideal to group the content
for each of the three articles.</p>
<table width="100%" border="0">
  <tr>
    <th scope="col">Add &lt;article just before...</th>
    <th scope="col">Add &lt;/article&gt; just after...</th>
  </tr>
  <tr>
    <td><code>&lt;h1&gt;</code>How Much?<code>&lt;/h1&gt;</code></td>
    <td><code>&lt;/form&gt;</code> (the first form)</td>
  </tr>
  <tr>
    <td><code>&lt;h1&gt;</code>Something I'll Pay A attention To Next Year<code>&lt;/h1&gt;</code></td>
    <td><code>&lt;p&gt;</code>For best results, use a pH factor in the 6 - 7
    range<code>&lt;/p&gt;</code></td>
  </tr>
  <tr>
    <td><code>&lt;h1&gt;</code>Keeping Out The Pests<code>&lt;/h1&gt;</code></td>
    <td><code>&lt;/form&gt;</code> (the second from)</td>
  </tr>
</table>
<hr>
<p>And just like we have done with other pages let's add some more headers to
  beef up the structure of our page. Each of the articles has one <code>&lt;header&gt;</code> and
  the aside sidebar has one  as well.</p>
<p>For the first article, &quot;How Much?&quot; use the header element to group
  like this:</p>
<p><code><span class="second">&lt;header&gt;</span></code></p>
<p><code>&lt;h1&gt;</code>How Much?<code>&lt;/h1&gt;</code></p>
<p><code>&lt;p&gt;b</code>y Bud Kraus | Published <code><span class="second">&lt;span&gt;</span></code>August
13<code><span class="second">&lt;/span&gt;</span>&lt;/p&gt;</code></p>
<p><code><span class="second">&lt;/header&gt;</span></code></p>
<p>Note that I also  used the <code>&lt;span&gt;</code> tag here to group the date. </p>
<p>For the second article, it's:</p>
<p><code><span class="second">&lt;header&gt;</span></code></p>
<p><code>&lt;h1&gt;</code>Something I'll Pay Attention To Next Year<code>&lt;/h1&gt;</code></p>
<p><code>&lt;p&gt;b</code>y Bud Kraus | Published <code><span class="second">&lt;span&gt;</span></code>July
  12<code><span class="second">&lt;/span&gt;</span>&lt;/p&gt;</code></p>
<p><code><span class="second">&lt;/header&gt;</span></code></p>
<p>And for the last article --- oh heck, you can figure it out. The pattern is
  the same. Don't
  forget that <code>&lt;span&gt;</code> tag.</p>
<p>One more header and it goes inside of <code>&lt;article&gt;</code> and
wraps around <code>&lt;h1&gt;</code> About My Blog<code>&lt;/h1&gt;</code>.</p>
<hr>
<p>This leaves us with two section tags to add. The first  groups the content where users can leave a comment in the first article.</p>
<p>So, just above</p>
<p><code>&lt;h2&gt;</code>Leave A Comment<code>&lt;/h2&gt;</code></p>
<p>I added</p>
<p><code>&lt;section id=&quot;comment&quot;&gt;</code></p>
<p>Notice that I uniquely identified this section as &quot;comment&quot; and
  I will use that later when I go to style the page. It makes this section different
  than the other sections.</p>
<p>The end of this section is after the <code>&lt;/form&gt;</code> and just before the start of
  the second article.</p>
<p>The other section is for the subscribe section and I did be adding</p>
<p><code>&lt;section id=&quot;subscribe&quot;&gt;</code></p>
<p>just above</p>
<p><code>&lt;h2&gt;</code>Subscribe<code>&lt;/h2&gt;</code>.</p>
<p>This section  is closed just after the <code>&lt;/form&gt;</code> that applies
  to the subscribe inputs.</p>
<hr>
<p>We are coming down the home stretch. I wish to group the form elements inside
  the <code>&lt;section id=&quot;comment&quot;&gt;</code> section. I add the <code>&lt;div&gt;&lt;/div&gt;</code> container
  to group the each label and input pair. There are are four of these. Then I
  add wrap the div element around the label and select elements and I am done!!</p>
<p>There you have it. Five real good web docs using great markup if I can say
  so myself. It puts you in a perfect position to apply style to your structure!!</p>


</section>
</div>  <!-- ned clearfix -->

<?php include("includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>


