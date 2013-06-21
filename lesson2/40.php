<!DOCTYPE html>

<html>


<head>

<title>Lesson 2: Fundamental Elements >  The Quote Tag</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>

<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<ul id="breadcrumbs">
<li><a href="10.html">Lesson 2: Fundamental Elements</a></li>
</ul>


<h1>The Quote Tag</h1>

        
<p>HTML has about 150 tags. When there is a specific tag that does a specific
  job, you are encouraged to use that tag rather than a general, all purpose
  tag, such as <code>&lt;p&gt;</code>.</p>
<p>The Quote tag - <code>&lt;q&gt;</code> - is but one example of a very specific
  tag. It's only to be used for a very short quotation.
</p>
<p>A similar tag - <code>&lt;blockquote&gt;</code> - is used for longer quotations
  which may include paragraphs.</p>
<p>That reminds me. <code>&lt;blockquote&gt;</code> is one of those old time
  tags that have been around since the birth of HTML in the late 1980s. Many
    old time tags (like
  Heading tags) are still good and widely used. As long as a tag is used to give
  meaning to your content, it's still a good tag and can be used in present-day
   markup.</p>
<h2>Old Time Tags</h2>

<p>All of the tags below require end tags and are used to markup text.
  While you might not use these tags everyday, they are just a few examples of
  specific tags for specific markup.</p>
  
<p>These tags filled the needs of the first users - indeed the creators
  of the web - the Physicists at the CERN Lab in Switzerland. They needed to
  send and receive research information over a slow, networked environment.</p>
<p>That's right. The first people who invented and used HTML were
  research physicists.</p>
  
<table>
<caption>Some Early Tags</caption>

              <colgroup>
<col id="left" />
<col id="center" />
<col id="right" />
</colgroup>

<thead>

  <tr  class="grayhead">  
     <th class="cellbottom">Tag</th>
       <th class="cellbottom">Name</th>
   <th class="cellbottom">What It Does</th>
 </tr>
 </thead>
 
 <tbody>
 
<tr>
    <td><code>&lt;cite&gt;</code></td>
    <td>Citation Tag</td>
    <td>Used for text citation of a proper title, such as a book title.</td>
  </tr>
  <tr class="grayband"> 
    <td><code>&lt;code&gt;</code></td>
    <td>Code Tag</td>
    <td>Used to display code.</td>
  </tr>
<tr>
    <td><code>&lt;sub&gt;</code></td>
    <td>Subscript Tag</td>
 <td>Used to create a subscript notation.</td>
  </tr>
  <tr  class="grayband"> 
    <td><code>&lt;sup&gt;</code></td>
 <td>Superscript Tag</td>
 <td>Used to create a superscript notation.</td>
  </tr>
  <tr class="grayband"> 
    <td><code>&lt;address&gt;</code></td>
<td>Address Tag</td>
 <td>Used to indicate a street address.</td>
  </tr>
  <tr class="grayband"> 
    <td><code>&lt;pre&gt;</code></td>
   <td>Preformatted Tag</td>
    <td>Renders text without collapsing white space.</td>
  </tr>
  
  </tbody>
</table>


<p>We'll use <code>&lt;address&gt;</code> in the Labs which follow.</p>
<p>Here is a <a href="http://www.w3.org/TR/html4/index/elements.html">partial
    list of HTML elements</a>. Stay away from anything that is indicated
  as a deprecated element. That means it is being - or has been - phased out.</p>
<p>You can see more about what tags and attributes to avoid in <a href="../appendix/C.html">Appendix
  C - Deprecated Elements And Attributes</a>. Of course, if you are totally
  new to HTML, what not to use isn't really important to you. However, if you
  are re-learning HTML, you better have a look.</p>
  
<a id="next"  href="50.html">Next</a>

</section>

<?php include("../includes/sidebar.php");
print_sidebar(2,4);
?>



</div>  <!-- end clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

