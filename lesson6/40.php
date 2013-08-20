<!DOCTYPE html>

<html>


<head>

<title>Lesson 6: Images And Videos</title>

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
<li><a href="10.html">Lesson 6: Images And Videos</a></li>
</ul>

<h1>The img Tag</h1>



        <p>Here's the magic to get images embedded into a web page.        </p>
        
        <p class="exs">Example Of An Embedded image</p>
<p class="views2">Code View</p>
<p><code>&lt;img src=&quot;images/cherries.jpg&quot; alt=&quot;Photo
Of Cherry Tomatoes&quot;  /&gt;</code></p>


        <p class="views2">Browser View</p>

    <img src="../images/cherries.jpg" alt="Photo Of Cherry Tomatoes"  />
 
        
<p>(In the interest of Full Disclosure, if you look at my source code, 
          you'll see that the path to my image file is really very different 
      and not as I stated. 
          Your chance to work with embedded image is coming in Lab 6 - First
          Embeds.)</p>
          
          

<ol>

                <li>It's a good organizing principle to keep your image files 

                  in a folder which is a sub-directory (sub-folder) to your .html 

                  files. Something like this, where "images" is the folder name, 

                  is common: 

                 <p> <code>&lt;img src="images/logo.gif"/&gt;</code></p>

                </li>

                <li>
You can use as many sub-folders as necessary, so this pattern 

                  works too where &quot;brands&quot; is a sub-folder of the &quot;images&quot; folder.

                  <p><code>&lt;img src="images/brands/logo.gif" /&gt;</code></p>

                </li>

                <li>
Alternatively, and not done as commonly, your images folder 

                  can be located above (outside) the folder containing your .html files 

                  like: 

                  <p><code>&lt;img src="../images/logo.gif" /&gt;</code></p>

                  
<p>Still not sure about what path statements are? What? You didn't 

                  read <a href="../appendix/D.html">Appendix D - Files
                  And Folders 

                  - What's In A Name</a>?</p>

                </li>

                <li>As it  is my practice in this class, I am refraining from
                  showing you

                  deprecated attributes for the image element, such as, hspace,
                  vspace, width, height and border, as all of these are deprecated
                  attributes having been replaced by CSS.

                  
                  <p>Now maybe it's time to see again <a href="../appendix/C.html">Appendix
                      

                  C - Deprecated Elements And Attributes</a> as your knowledge
                   

                  of XHTML - and its role in building page structure - expands</p>
                </li>
                <li><code>&lt;img /&gt;</code> has two <strong>required</strong> attributes.
                  And yes, like <code>&lt;br /&gt;</code>, it's an example of
                an empty tag (does not require an end tag - <code>&lt;/img&gt;</code>). </li>



</ol>
<h2>That All Important alt Attribute</h2>
<p>The <code>alt</code> attribute is one of those things about HTML that brings
  goodness to web pages. </p>
<p>In choosing an alternative text description, keep it brief. Merely stating
  that an image is a logo, a picture or other term, is useless information. If
  someone could not see the image, or if it were not downloaded, how would you
  describe its meaning? For example, if it's a button, with the word &quot;Home&quot; on
  it, then 

&quot;Home&quot; would be a satisfactory alternative text description.</p>
<p>There are four reasons why you need to use <code>alt</code> and do don't you
 forget them!!</p>
<ul>
  <li>Your web pages will not pass validation without the use of an alternative
    text description for each embedded image.</li>
  <li>The description aides in Search Engine Optimization.</li>
  <li>For displays which do not show images the text description will be  seen
    by the user.</li>
  <li>The text description is read aloud to people who use screen readers since
    they can't see the image.</li>
</ul>




<a id="next" href="50.html">Don't Be Lazy. Don't Ever Say "Click Here."</a>


</section>


<?php include("../includes/sidebar.php");
print_sidebar(6,4);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>





