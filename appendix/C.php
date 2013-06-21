<!DOCTYPE html>

<html>

<head>

<title>Appendix C - Deprecated Elements And Attributes</title>

<meta charset="utf-8" />


<link rel="stylesheet" href="../styles/styles.css" />


</head>

<body>

<div id="wrapper">

<?php require( "../includes/header.php" ); ?>

<div class="clearfix">

<section id="main">

<h1>Appendix C:<br>
Deprecated Elements And Attributes</h1>

  <p>Deprecated? You're probably squinching your eyes thinking that I'm going to make 
    you go insane!! Don't worry if you don't get all of this on your first 
    read, but do come back as needed.</p>
  <p>If you're new to creating web pages with HTML, XHTML and CSS, this might
    not be really relevant to you. But it might if you've seen a lot of bad or
    old code.</p>

  <p>If you're an old HTMLer like me, this page alone just might be worth the 
    price of admission.</p>
  <p>Since the advent of HTML and XHTML (even before), the World Wide Web Consortium
    has  been encouraging web authors, designers and developers to stop using
    certain  elements and attributes. Such elements and attributes are being
    phased out  and hence, deprecated.</p>
<p>The reason? They are trying to get people to separate structure from style
     by using HTML for the structure of a web document and CSS for its appearance.
    Most of the deprecated code is stuff that belongs out of the presentation
    HTML side of the ledger and into the CSS realm.</p>
  <p>Case in point? The infamous FONT tag which has been used to set text type,
    color and size. Styling text belongs with CSS.  </p>
  <h2>Deprecated Elements</h2>
  
  <p>Here's a pretty good list of Elements to stay away from:</p>
  
  
<table>
    <caption>
    Deprecated Elements and Their Suitable Replacements
    </caption>
    <tr class="grayhead"><th  class="cellbottom">Deprecated Element</th>
      <th  class="cellbottom">What It Was Used For</th>
      <th  class="cellbottom">Replaced By Using...</th>
    </tr>
    <tr><td>applet</td>
      <td>Allows the page to accept a JAVA application.</td>
      <td> the object element </td>
    </tr>
    <tr class="grayhead"><td>basefont</td>
      <td>Allows author to set a single font size, type and color.</td>
      <td> CSS</td>
    </tr>
    <tr><td>center</td>
      <td>Positions content to the center of a page.</td>
      <td> CSS </td>
    </tr>
    <tr class="grayhead"><td>dir</td>
      <td>Creates an unordered list.</td>
      <td> the ul element </td>
    </tr>
    <tr><td>font</td>
      <td>Allows author to set font sizes, types and colors as needed on a page 
        or pages.</td>
      <td> CSS</td>
    </tr>
    <tr class="grayhead"><td>isindex</td>
      <td>Inputs text box to allow users to enter keyword search terms.</td>
      <td> the input element</td>
    </tr>
    <tr><td>menu</td>
      <td>Creates an unordered list.</td>
      <td>the ul element</td>
    </tr>
    <tr class="grayhead"><td>s (or strike)</td>
      <td>Strikes through text.</td>
      <td>CSS</td>
    </tr>
    <tr><td>u</td>
      <td>Underlines text.</td>
      <td>CSS</td>
    </tr>
  </table>
<p>Some of these elements like <code>&lt;dir&gt;</code>,<code> &lt;isindex&gt;</code> 
    and <code>&lt;menu&gt;</code> are older than me!!</p>
    
  <h2>Deprecated Attributes </h2>
  
  <p>These attributes are shot so you better not catch me seeing you use them.  Otherwise I will have to report you to the HTML police.</p>
  
<table>
    <caption>
    Deprecated Attributes 
    </caption>
    <tbody>
      <tr class="grayhead"><th  class="cellbottom">Deprecated Attribute</th>
        <th  class="cellbottom">When Used With These Elements</th>
        <th  class="cellbottom">Commonly Seen?</th>
      </tr>
      <tr><td>align</td>
        <td>caption, applet, iframe, img, input, object, legend, table, tr, th, td, 
          col, colgroup, tbody, thead, tfoot, hr, div, p, h1, h2, h3, h4, h5, h6</td>
        <td>yes</td>
      </tr>
      <tr class="grayhead"><td>alink</td>
        <td>body</td>
        <td>sometimes</td>
      </tr>
      <tr><td>alt</td>
        <td>applet</td>
        <td>no</td>
      </tr>
      <tr class="grayhead"><td>archive</td>
        <td>applet</td>
        <td>no</td>
      </tr>
      <tr><td>background</td>
        <td>body</td>
        <td>yes</td>
      </tr>
      <tr class="grayhead"><td>bgcolor</td>
        <td>body, table, tr, th, td</td>
        <td>yes</td>
      </tr>
      <tr><td>border</td>
        <td>img, object</td>
        <td>yes</td>
      </tr>
      <tr class="grayhead"><td>clear</td>
        <td>br</td>
        <td>no</td>
      </tr>
      <tr><td>code</td>
        <td>applet</td>
        <td>yes</td>
      </tr>
      <tr class="grayhead"><td>codebase</td>
        <td>applet</td>
        <td>yes</td>
      </tr>
      <tr><td>color</td>
        <td>basefont, font</td>
        <td>yes</td>
      </tr>
      <tr class="grayhead"><td>compact</td>
        <td>dir, dl, menu, ol, ul</td>
        <td>no</td>
      </tr>
      <tr><td>face</td>
        <td>basefont, font</td>
        <td>yes</td>
      </tr>
      <tr class="grayhead"><td>height</td>
        <td>tr, td, applet</td>
        <td>yes</td>
      </tr>
      <tr><td>hspace</td>
        <td>img, applet, object</td>
        <td>sometimes</td>
      </tr>
      <tr class="grayhead"><td>language</td>
        <td>script</td>
        <td>yes</td>
      </tr>
      <tr><td>link</td>
        <td>body</td>
        <td>yes</td>
      </tr>
      <tr class="grayhead"><td>name</td>
        <td>applet</td>
        <td>yes</td>
      </tr>
      <tr><td>noshade</td>
        <td>hr </td>
        <td>sometimes</td>
      </tr>
      <tr class="grayhead"><td>nowrap</td>
        <td>th, td</td>
        <td>no</td>
      </tr>
      <tr><td>object</td>
        <td>applet</td>
        <td>don't know</td>
      </tr>
      <tr class="grayhead"><td>prompt</td>
        <td>isindex</td>
        <td>no</td>
      </tr>
      <tr><td>size</td>
        <td>hr, font, basefont</td>
        <td>yes</td>
      </tr>
      <tr class="grayhead"><td>start</td>
        <td>ol</td>
        <td>no</td>
      </tr>
      <tr><td>text</td>
        <td>body</td>
        <td>yes</td>
      </tr>
      <tr class="grayhead"><td>type</td>
        <td>li, ul, ol</td>
        <td>yes</td>
      </tr>
      <tr><td>value</td>
        <td>li</td>
        <td>no</td>
      </tr>
      <tr class="grayhead"><td>version</td>
        <td>html</td>
        <td>no</td>
      </tr>
      <tr><td>vlink</td>
        <td>body</td>
        <td>sometimes</td>
      </tr>
      <tr class="grayhead"><td>vspace</td>
        <td>img, applet, object</td>
        <td>sometimes</td>
      </tr>
      <tr><td>width</td>
        <td>hr, pre, applet, td, th</td>
        <td>yes</td>
      </tr>
    </tbody>

  </table>
  
      <ol>
          <li>What do these attributes have in common? They deal with position, 
            layout and the like - all better left ultimately to CSS. <br/><br /></li>
          <li>While I am in a precise frame of mind, background is not technically
            deprecated. It is browser-specific when used in the body element
            to produce an image which is the background to the entire page.</li>
</ol>
<p>Some of my research for this Appendix came from across the pond at <a href="http://www.codehelp.co.uk/html/deprecated.html">http://www.codehelp.co.uk/html/deprecated.html</a> 
    and via the W3C.</p>

	</section>

</div>  <!-- end clearix -->

<?php require( "../includes/footer.php" ); ?>

</div> <!-- end wrapper -->


</body>
</html>

