<!DOCTYPE html>

<html>


<head>

<title>Lesson 9: Grouping Elements</title>

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
<li><a href="10.html">Lesson 9: Grouping Elements</a> </li>
</ul>

 <h1>General Grouping Tags</h1>

 
 <p>What I love about these elements is that they give designers and developers
   a way to provide rich semantical markup for their web pages. Elements such
   as header and footer are easy to use because they're easy to understand. Most
   people know what the header or footer is of a web page (something that most
   pages have - or should have).</p>

<p>The elements discussed below - and the ones on the pages which follow - help describe what the content of a web page is.</p>



<p>All of these elements can be used more than once on a page. Take <code>&lt;header&gt;</code>.
  A page can have a header to start the document but different parts (or sections)
  of a page can have a header as well. Same can be said about sidebars, navigation
  interfaces and articles as each of those can have a header and a footer as
  well.</p>

<p>Remember - and I promise not to say this again - you won't see a difference in your pages when using these elements but you already know that HTML is not about how a page looks!!</p>


<h2>The section Tag</h2>

<p>The section tag is a generic element which is used to group different parts
  of your page. You can use it as many times as needed on a page. You might even
  find the need to divide (nest) a section inside of another section.</p>


<p>
Sections frequently contain heading tags, navigation elements, contact information
  and quite possibly a sidebar.</p>
<p>I use the section tag as a super duper grouper in that in will certainly wrap
  around (contain or group) at least two or more html elements.
</p>

<p>Here's more really good information on <a href="http://html5doctor.com/the-section-element/">The Section Element</a>. </p>



<h2>The aside Tag</h2>
<p>The aside element is most often used to define a part (or parts) of your 
  page which is secondary to the importance of the main content of your page. It
  frequently - but not always - will contain sidebar areas, navigation, advertising
  and other content that is not the main focus of the page. </p>
<p>You may find the need to use the header and/or footer elements as well within
  the aside element. Heading tags - from h1 to h6 - may be used to define headings
  and sub-headings within the aside element.</p>
<p>Let me show you how I've used <code>&lt;section&gt;</code> and <code>&lt;aside&gt;</code> in
  something that is pretty familiar to me - and to you if you have looked at the
  source code of just about any page from this class, such as a page you've probably
  just seen, <a href="10.html">Lesson 9: Grouping Elements</a>.</p>
  
<p class="views2">Code View</p>
<p><code><span class="second">&lt;section&gt;</span></code></p>
<p><code>&lt;h1&gt;</code>Lesson 9: Grouping Elements<code>&lt;/h1&gt;</code></p>
<p><code>&lt;p&gt;</code>Truth be told you've been using HTML elements to group
  content all along. While this lesson will show you many new grouping elements
  the idea should be nothing new to you.<code>&lt;/p&gt;</code></p>
<p>...</p>

<p><code>&lt;p&gt;</code>Many of these elements in this lesson are new to HTML
  and are part of the HTML5 specs. If you are familiar with the div tag - which
  has done the heavy lifting of grouping HTML elements for years - you'll see
  the reduced role div will play in the future. And that's a good thing!!<code>&lt;/p&gt;</code></p>
<p><code>&lt;p&gt;</code>In this lesson we'll go over:<code>&lt;/p&gt;</code></p>
<p><code>&lt;ul&gt;<br>
  &lt;li&gt;</code>General Grouping Tags<code>&lt;/li&gt;<br>
  &lt;li&gt;</code>What About div And Span?<code>&lt;/li&gt;<br>
  &lt;li&gt;</code>Form Group Tags<code>&lt;/li&gt;<br>
  &lt;li&gt;</code>Data Table Grouping Tags<code>&lt;/li&gt;<br>
  &lt;/ul&gt;</code></p>
<p><code>&lt;p&gt;</code>Containing Containers!!<code>&lt;/p&gt;</code></p>
<p><code>&lt;a href=&quot;20.html&quot;&gt;</code>Time To Learn About Using Grouping
  Elements<code>&lt;/a&gt;</code></p>
<p><code><span class="second">&lt;/section&gt;</span></code></p>
<p><code><span class="second">&lt;aside&gt;</span></code></p>
<p><code>&lt;h1&gt;</code>Pages<code>&lt;/h1&gt;</code></p>
<p><code>&lt;ol&gt;<br>
  &lt;li&gt;&lt;strong&gt;</code>Lesson 9: Grouping Elements<code>&lt;/strong&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;20.html&quot;&gt;</code>General Grouping Tags<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;30.html&quot;&gt;</code>What About div And Span?<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;40.html&quot;&gt;</code>Form Grouping Tags<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;50.html&quot;&gt;</code>Data Table Grouping Tags<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;/ol&gt;</code></p>
<p><code>&lt;p&gt;&lt;a href=&quot;../lab9.html&quot;&gt;</code>Lab 9: First
  Grouping<code>&lt;/a&gt;&lt;/p&gt;</code></p>
<p><code><span class="second">&lt;/aside&gt;</span></code></p>
<p class=views"2">No reason to give you a Browser View here as there isn't anything
   to see. Focus on how I grouped my content into, in this case, two
  main areas, section and aside </p>

<p>Like most of these grouping elements, the context in which they are used is
  all important. Here is  more really good information on <a href="http://html5doctor.com/aside-revisited/">The
  Aside Element</a>.</p>


<h2>The nav Tag</h2>
<p>The nav tag is an excellent way to define the group of elements which make
  up your navigation interface (or list of links). You can use <code>&lt;nav&gt;</code> more
  than once on a page but don't get trapped into thinking that every link needs
  to be wrapped inside the <code>&lt;nav&gt;</code> container. For example, if
  you've got a single link in a paragraph you do not need to use the nav element.</p>
<p>Going back to my example, here's how I used &lt;nav&gt; in <code>&lt;aside&gt;</code> which serves
  as my sidebar.</p>
<p class="views2">Code View</p>
<p><code>&lt;aside&gt;</code></p>
<p><code>&lt;h1&gt;</code>Pages<code>&lt;/h1&gt;</code></p>
<p><code><span class="second">&lt;nav&gt;</span></code></p>
<p><code>&lt;ol&gt;<br>
  &lt;li&gt;&lt;strong&gt;</code>Lesson 9: Grouping Elements<code>&lt;/strong&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;20.html&quot;&gt;</code>General Grouping Tags<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;30.html&quot;&gt;</code>What About div And Span?<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;40.html&quot;&gt;</code>Form Grouping Tags<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;li&gt;&lt;a href=&quot;50.html&quot;&gt;</code>Data Table Grouping Tags<code>&lt;/a&gt;&lt;/li&gt;<br>
  &lt;/ol&gt;</code></p>
<p><code><span class="second">&lt;/nav&gt;</span></code></p>
<p><code>&lt;p&gt;&lt;a href=&quot;../lab9.html&quot;&gt;</code>Lab 9: First
  Grouping<code>&lt;/a&gt;&lt;/p&gt;</code></p>
<p><code>&lt;/aside&gt;</code></p>


<h2>The header And footer Tags</h2>

<p>It's easy to understand that   the top and bottom areas of a web page
   can be thought of as a header and footer, respectively. Both 


  <code>&lt;header&gt;</code> and <code>&lt;footer&gt;</code> do a great job
  grouping such content.
<p>But headers and footers can also be used within other parts of your web doc.
  A section, aside or article element (as you'll see in the final example) can
  have it's own header and/or footer too.<h3>The hgroup Tag</h3>
<p>I think of <code>&lt;hgroup&gt;</code> as a sub section to a header element. I don't always use i,t but when it makes sense to define a sub group, I do.</p>
<p>Here is how I coded the header for all five pages of our lab project for
  this class:</p>
<p class="views2">Code View</p>

<p
><code>&lt;header&gt;
</code>
<p><code>&lt;hgroup&gt;</code></p>
<p><code>&lt;h1&gt;</code>In My Garden<code>&lt;/h1&gt;</code></p>
<p><code>&lt;h2&gt;</code>Getting Addicted To Growing Good Things To Eat<code>&lt;/h2&gt;</code></p>
<p><code>&lt;/hgroup&gt;</code></p>
<p> <code>&lt;img src=&quot;images/strip.jpg&quot; alt=&quot;Photo Strip Of Images
  From My Garden&quot;  /&gt; </code></p>
<p><code>&lt;/header&gt;</code></p>
<h2>The article Tag</h2>
<p>The article element is used in recognition of the fact that many of today's
  web pages are not made by hand so much as they are assembled using content
  from another site.</p>
<p>Assembled? Content made be pulled using an RSS feed from one page to another.
  That process of  syndicating content is  wide spread and if you are not
  sure you've seen this you certainly have if you've ever used Facebook, Twitter
  or LinkedIn. It's
  also used on many blogs that share content from another site.</p>
<p>Speaking of blogs, many blog pages have one or more articles such as the blog
  page we are making in the lab. If you think of content that one can pull
  from your site and be &quot;pasted&quot; into a page on another site, then
  article is a good way to create content that will stand on its own.</p>
<p>Here's the example you'll be doing in the upcoming lab:</p>
<p class="views2">Code View</p>
<p><code><span class="second">&lt;article&gt;</span></code></p>
<p><code>&lt;header&gt;</code></p>
<p><code>&lt;h1&gt;</code>Keeping Out The Pests<code>&lt;/h1&gt;</code></p>
<p><code>&lt;p&gt;</code>by Bud Kraus | Published July 1<code>&lt;/p&gt;</code></p>
<p><code>&lt;/header&gt;</code></p>
<p><code>&lt;p&gt;</code>No doubt, one of the biggest hassles I've had over the
  years is keeping out the animals that I don't want in my garden. Bunny rabbits,
  gophers and squirrels have not always understood that I don't labor for their
  benefit.  <code>&lt;a
  href=&quot;#&quot;&gt;</code>See More<code>&lt;/a&gt;&lt;/p&gt;</code></p>
<p><code>&lt;section&gt;</code></p>
<p><code>&lt;h2&gt;Subscribe&lt;/h2&gt;</code></p>
<p><code>&lt;p&gt;</code>If you like what you are reading then give me your email
  address. Every time I add an new article to my blog I will let you know as
  soon as it is published.<code>&lt;/p&gt;</code></p>
<p><code>&lt;form&gt;</code></p>
<p><code>&lt;label&gt;</code>Your Name<code>&lt;br /&gt;<br>
  &lt;input type=&quot;text&quot; name=&quot;name&quot; placeholder=&quot;Type
  your name here.&quot; /&gt;&lt;/label&gt;</code></p>
<p><code>&lt;label&gt;</code>Email Address<code>&lt;br /&gt;<br>
  &lt;input type=&quot;email&quot; name=&quot;email&quot; placeholder=&quot;Email
  Address&quot; /&gt;&lt;/label&gt;</code></p>
<p><code>&lt;input type=&quot;submit&quot; value=&quot;submit&quot; /&gt;</code></p>
<p><code>&lt;/form&gt;</code></p>
<p><code>&lt;/section&gt;</code></p>
<p><code><span class="second">&lt;/article&gt;</span></code></p>
<p>Even though this is just one of three articles in the <a href="../labs/9/blog.html">blog.html</a> page
  the markup will allow it to stand on its own if it were found on someone else's
  blog.  Think of <code>&lt;article&gt;</code> as <code>&lt;body&gt;</code> and if the markup is good
  - if you have made a well formed article - you've done a good job for yourself,
  a client and the web.</p>
<p>Don't miss the fact I used <code>&lt;header&gt;</code> within this article. As
  I mentioned
  <code>&lt;header&gt;</code> and <code>&lt;footer&gt;</code> can be used within grouping
  elements - not just once on a page.</p>
<p>PHEW!! That was a ton but here's some really good info on <a href="http://html5doctor.com/the-article-element/">the
    article element</a>.

<a id="next" href="30.html"> Take A
    Nap But Then Go On</a></p>
</section>



<?php include("../includes/sidebar.php");
print_sidebar(9,2);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>





