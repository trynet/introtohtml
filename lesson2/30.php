<!DOCTYPE html>

<html>


<head>

<title>Lesson 2: Fundamental Elements >  Heading Tags</title>

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
<li><a href="10.html">Lesson 2: Fundamental Elements</a></li>
</ul>

<h1>Heading Tags</h1>


<p>The use of Heading tags in HTML is so important. It's the way to set up
  the headings of your page or parts of your page. Think of them as headlines
  or sub-heads of a web document.</p>
<p>There are six Heading tags used to separate text from  paragraphs or other
  markup (such as lists which I will get to in  Lesson 3) 

          Headings are used to set apart - or subtitle - a section of text.</p>

        <p>Whenever you use any Heading tag, make sure you use an end tag, For
          example, use 

        <code>&lt;/h4&gt; </code>if your start tag is <code>&lt;h4&gt;</code>.</p>

<table>

          <caption>

          Heading Tags

      </caption>
      
              <colgroup>
<col id="left" />
<col id="center" />
<col id="right" />
</colgroup>

<thead>

            <tr class="grayhead">



            <th  class="cellbottom">Tag</th>

            <th class="cellbottom">Name</th>

            <th class="cellbottom">What It Does</th>

          </tr>
          
        </thead>
          
          <tbody>

<tr>
            <td><code>&lt;h1&gt;</code></td>

            <td>H1</td>

            <td>Used at the top of a page - or a part of the page - to designate
              most important

              copy.</td>

          </tr>

  <tr class="grayband">

            <td><code>&lt;h2&gt;</code></td>

            <td>H2</td>

            <td>Used after h1 to designate second most important copy in a page
               or a part of a page.
</td>

          </tr>

<tr>

            <td><code>&lt;h3&gt;</code></td>

            <td>H3</td>

            <td>Used after h2 to designate third most important copy in a page
            or a part of a page.</td>

          </tr>

 <tr class="grayband">

            <td><code>&lt;h4&gt;</code></td>

            <td>H4</td>

            <td>Used after h3 to designate fourth most important copy in a page
              or a part of a page.
</td>

          </tr>

<tr>

            <td><code>&lt;h5&gt;</code></td>

            <td>H5</td>

            <td>Used after h4 to designate fifth most important copy in a page
            or a part of a page.</td>

          </tr>

         <tr class="grayband">

            <td><code>&lt;h6&gt;</code></td>

            <td>H6</td>

            <td>Used after h5 to designate sixth most important copy in a page
            or a part of a page.</td>

          </tr>
          
          </tbody>

      </table>


<p><strong>Like all HTML tags, Heading tags are not used for their apparent
    size differences. They are only used to provide meaning to your content with
   the h1 tag being the most important heading on any page.</strong></p>
<ol>
  <li>
    The Heading tags are used to organize content by its order of importance. If you use Heading tags (and you're encouraged to do so), the h1 tag will be above all others. </li>
  <li>
    When using Heading tags,  do them in order. That is, don't skip from an h2
      tag to an h4 tag. 
  </li>
  <li>
    Never use the Heading tags for  presentational properties. True, h1 will
      render a larger font then h4, but that is not the purpose of its use. Controlling
      font sizes is handled by CSS. With CSS, you can actually make an h1 tag
      smaller than an h6 tag.</li>
</ol>




<h2>Two Ways To Use Heading Tags</h2>
<p>There's the old way and the new way. Both ways are  perfectly fine.</p>
<h3>The Old Way</h3>
<p>The hallmark of this method is that the h1 element is used only once and it's
  at the top of the page. It signifies the most important content for the entire
  page. </p>
<p>The other Heading tags can be used more than once to build a hierarchal
  relationship of your copy. For example, take this page that you are reading
   now. The Heading tags are used to define an order to the content like this:</p>
<ul>
  <li>h1 - Heading Tags
    <ul>
      <li>h2 - Two Ways To Use Heading Tags
        <ul>
          <li>h3 - The Old Way</li>
          <li>h3 - The New Way</li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<p>Had there been a third way to use headings, I would have used another h3 to
  set up my sub-head. But, had the content not been about another way to use
  heading tags,  I would have started the next section with an h2.</p>
<p>As you can see, Heading tags do a lot to add good semantical structure to
  your pages, which is exactly the sole purpose of HTML. Heading tags will help
  you make well-formed documents.</p>
<h3>The New Way</h3>
<p>In this method, the h1 tag can be used, not only at the start of the page,
  but at the beginning of any section inside of the page. For example, an h1
  tag can be the heading of the page, of a sidebar, and/or of an article
  inside of the page.</p>
<p>You'll
  get a better idea of this when you start to do your
  Lab assignment, so I won't elaborate here. </p>
<p>But, like the old way, h2 tags follow h1 tags, and h3 tags follow h2 tag,
   and so on.</p>

<a id="next"  href="40.html">Next Page Please</a>

</section>

<?php include("../includes/sidebar.php");
print_sidebar(2,3);
?>



</div>  <!-- end clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

