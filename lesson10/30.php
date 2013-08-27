<!DOCTYPE html>

<html>


<head>

<title>Lesson 10: A Look At CSS</title>

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
<li><a href="10.html">Lesson 10: A Look At CSS</a> </li>
</ul>

 <h1>How CSS Attaches To HTML</h1>
 

<p>How do designers set their preferences for a web page's appearance?</p>

<p>Just how is style applied to your markup?  How does CSS work along side HTML? </p>

<p>You've probably heard me say (and not just here) that CSS "attaches" to the
  HTML much like how the style of wallpaper, carpeting and vinyl attach to the
  structure of a real building.</p>

<p>It's actually quite simple.
</p>

<p>A style rule is made up of a selector and a declaration. Here's an example:</p>

<pb>
<code>body <br>
{color:#000;
<br>
background:#fff;
<br>
font-family:arial, Helvetica, sans-serif;}
</p>
</code>
<p>In this case "body" is NOT a tag it is a selector and it selects (targets,
  attaches, chooses, picks, flags, attaches, adheres - you get the point) the <code>&lt;body&gt;</code>  tag
  in the html. Then it applies the declaration which are the style rules between
  the open and close curly braces - {}.</p>

<p>Here we have 3 rules.  The first sets the color of our font to black as in
  color:#000;. Color is referred to as a style property and each style property
  must have a value. In this case it is #000 which is the hexadecimal code for
  white.
</p>

<p>A style property is always followed by a colon (:) and it's corresponding
  value always ends with a semi-colon (;).</p>

<p>I'll bet you can figure out the rest in this example.  I use the background
  property to set up the background page color to white and I use the font-family
  property to set up the font choice. Designers always specify a fall-back font.
  If Arial is not present in the user's system, Helvetica will be chosen automatically
  by the browser. If neither of these fonts are around then a generic sans-serif
  font will be used.
</p>

<p>No matter how complex a design can get, the CSS syntax you have just seen is
  all there is to it. A selector with a declaration that includes the style properties
  and their values is the magic maker!!</p>

<p>Here it is:</p>

<p><strong>selector<br>
{style property:value;}</strong></p>
<p>A declaration can have more than one style property and value as you have
  seen.</p>

<p>Let's look at another example.</p>

<p><code>section#main_content<br>
{padding:20px;
  <br>
  width:600px;
  <br>
  float:left;} </code></p>


<p>This says that for the section tag identified as "main_content" (the html
  is <code>&lt;section id="main_content"&gt;</code>) then adding 20 pixels of
  padding space on all four sides of the <code>&lt;section&gt;</code> element.
  Make the element 600 pixels wide and float it to the left (float is a way in
  which pages are laid out). </p>

<p>So what's this id and # business about?
</p>

<h2>Selectors Are A Real Big Deal</h2>

<p>Even good web designers and developers are not fully cognizant of just how
  important selectors are. Learning how to write good selectors is so important
  in CSS as you will want to target code in general and specific ways to suit
   your styling needs.</p>

<p>In my Practical CSS class I stress the following Core Four Selectors.  Learn
  them, then you can move on to learn more specialized selectors.</p>

<h3>The Type Selector</h3>

<p>In the first example  I used body as my selector, which is a great example
  of a Type Selector. Any HTML element - and I do mean any HTML element - can
  be used as a selector. That's why it's such a good idea to use all the tags
  you can in the way they were meant to be used.</p>
<p>Don't ask me why it's called a &quot;Type Selector&quot; when it would have been better
  called &quot;Element Selector.&quot; It's one of life's great mysteries.</p>


<h3>The ID Sector</h3>
<p>You've seen the ID Selector in the second example. An ID is used in your HTML
  to uniquely identify a part of your code as being different (unique) compared
  to other code. You  may have three other <code>&lt;section&gt;</code> tags
  in a page. To identify one <code>&lt;section&gt;</code> tag as different than
   the other three, use an ID Selector. Once
  you ID
  something you can't use that ID again on the page. (It wouldn't be unique.)</p>
<p>The term &quot;main_content&quot; is something that I came up with. I could
  have just as easily called this ID &quot;boston&quot; and the rule would
  have still applied. (But &quot;boston&quot; would not have made much sense.)</p>

<h3>The Class Selector</h3>
<p>A Class Selector is a style rule that can be applied to either the same element
  more than one time on a page or to different elements altogether. </p>
<p>Say you want to have a rule that makes text bold and blue and
  you wish to apply it to a paragraph and a list. </p>
<p>This is the CSS:</p>
<p><code>.stress<br>
  {font-weight:bold;<br>
  color:#00f;
  } </code></p>
<p> In HTML this is how the rule would be attached:</p>
<p><code>&lt;p class=&quot;stress&quot;&gt;</code>This text is bold and blue<code>&lt;/p&gt;</code></p>
<p>and </p>
<p><code>&lt;ul class=&quot;stress&quot;&gt;<br>
  &lt;li&gt;</code>This text is bold and blue.<code>&lt;/li&gt; <br>
    &lt;li&gt;</code>This text is bold and blue.<code>&lt;/li&gt; <br>
    &lt;/ul&gt;
    </code></p>
<p>The term &quot;stress&quot; is something that I came up with. I could have
  just as easily called this class &quot;newyork&quot; and the rule would have
  still applied. (But &quot;newyork&quot; would not have made much sense.)<br>
</p>
<h3>The Universal Selector</h3>
<p>Here is your Universal Selector:</p>
<p><code>*<br>
  {padding:0;<br>
  margin:0;
  <br>
  list-style-type:none;
  }| </code></p>
<p>The asterisk indicates that all elements on a page are the target of this
  rule which applies no padding, no margin and no list item markers to every
  element in an .html file.</p>
<h2>Where Are The Style Rules Written?</h2>
<p>Ah, that is the Designer's Style Sheet. It too works in a cascade much like
  how the Browser, User and Designer Style Sheets cascade as previously shown.</p>
<p>(Confused?: Don't be. There are two different cascades. One is the cascade
  between the Browser, User and Designer Style Sheets. A second cascade is within
  the Designer Style Sheet itself. )</p>
<p>There are three places where a designer or web author can write a style rule
  (which is the cascade inside the Designer Style Sheet).</p>
<p>In An External File</p>
<p>Look at the source code of this page and you will see this inside<code>&lt;head&gt;&lt;/head&gt;</code>:</p>
<p><code>      &lt;link rel=&quot;stylesheet&quot; href=&quot;../styles/styles.css&quot; /&gt;</code></p>
<p>This is a &quot;link&quot; to a .css file for this site. All the style rules
  for this web site are in one file. See, that's the separation of structure
  from style principle in operation. It's not just talk - it's real!!</p>
<p>An Embedded Rule</p>
<p>Style rules for any web page can be written into any HTML file. Again, inside
  of <code>&lt;head&gt;&lt;/head&gt;</code> you might find:</p>
<p><code>&lt;style type=&quot;text/css&quot;&gt;</code></p>
<p><code>p<br>
  {color:#00f;}
</code></p>
<p><code>&lt;/style&gt;</code></p>
<p>All the paragraphs of this page would be blue. If this file also were linked
  to an external CSS file (as in the above example) and that file had all the
  paragraphs being black then for this page the paragraph would be blue with
  the rest of the site being black.</p>
<p>An Embedded Style rule takes precedence over an External
  Rule.</p>
<p>An Inline Style Rule</p>
<p>The third place you can write a style rule is directly into the markup as
  in:</p>
<p><code>&lt;p style=&quot;color:#F00&quot;&gt;</code>This text is red<code>&lt;/p&gt;</code></p>
<p>This paragraph alone would be red. The other paragraphs would be blue (assuming
   the use of the above Embedded Rule) and the rest of the web site's paragraphs
  would be black (assuming the use of the above External Rule).</p>
<p>And that is the entire cascade in three parts of the Designer's Style Sheet. It's
  pretty cool the way it all works for every browser.</p>

<p><a id="next" href="40.html"> Take A
  Nap But Then Go On</a></p>
</section>



<?php include("../includes/sidebar.php");
print_sidebar(10,3);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>







