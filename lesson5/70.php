<!DOCTYPE html>

<html>


<head>

<title>Lesson 5: Links</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<ul id="breadcrumbs">
<li><a href="10.html">Lesson 5: Links</a></li>
</ul>

<h1>Anchor Tag Attributes</h1>

        
<p>Let's recap the attributes to the Anchor tag. I've added a new one below 

          just to remind you that, while this class explores many tags and their
  attributes, 

          it's impossible to go over all of them. Also, many attributes are used
  

          in association with more than one tag.</p>



<table>

          <caption>

          Common Attributes of The Anchor Tag 

  </caption>
  
                <colgroup>
<col id="left" />
<col id="center" />
<col id="right" />
</colgroup>
  
  <thead>

          <tr class="grayhead"> 

            <th>ANCHOR ATTRIBUTE</th>

            <th>VALUE</th>

            <th>PURPOSE / EXAMPLE

   </th>

          </tr>
          
          </thead>
          
          <tbody>

<tr>

            <td><code>href</code></td>

            <td><p>The value is a file name.</p>
              <p>Hyper reference (location) of a file is expressed as a relative 

              or absolute path statement.</p></td>

            <td> <p>Links or points (refers) to another document.

              </p>
              <p><code>&lt;a href=&quot;faq.html&quot;&gt;</code>See 

            Chocolate Chip Cookies<code>&lt;/a&gt;</code></p></td>

          </tr>

          <tr class="grayband"> 

            <td><code>id</code></td>

            <td>Expressed as a word or number.</td>

            <td> <p>Used to name a target.</p>

              <p><code>&lt;ul id=&quot;list&quot;&gt;</code></p></td>

          </tr>
          
                  <tr>
          <td><code>target</code></td>
          <td>Used to specify how you want a page to open. (Has nothing to do
            with a target on a another or same page).</td>
          <td><p>Opens the page in another window or tab.<code> _blank</code> is
              but one value of <code>target</code>.</p>
            <p><code>&lt;a href=&quot;page&quot; target=&quot;_blank&quot;&gt;</code>Go To
            Page<code>&lt;/a&gt;</code></p></td>
        </tr>
      
      <tr>

            <td><code>title</code></td>

            <td>A phrase that describes the link.</td>

            <td> <p>Provides text description in a text balloon when mouse rollovers
                a link and 

                is used by search engines and assistive technologies.</p>

              <p><code>&lt;a href=&quot;filename.html&quot; title=&quot;Move on 

                to page 3&quot;&gt;</code>Page 3<code>&lt;/a&gt;</code></p></td>

          </tr>
          
          </tbody>

        </table>
        <ol>

          <li>
Href can point (refer) to many document types, not just html

                  files and it's a key tool in putting our puzzle together. Remember

                  what I said at the start of this lesson?

          </li>

                <li>
                  If you're not quite oriented to what path statements are all
                    

                  about, make sure you read <a href="../appendix/D.html">Appendix
                  

                  D - Files And Folders - What's In  A Name</a>? Understanding
                  

                  what that's about is critical, and it will help you understand
                    

                  the nature of path statements - both relative and absolute.

          (Yeah, it's the second time I showed you this link in this lesson.
          Hmm, must be kinda important.).</li>

                <li>Don't forget to close all Anchor tags - that means always 

                  using <code>&lt;/a&gt;</code>.</li>

</ol>







<a id="next" href="../lab5.html">You Are Now Ready For Your Next Lab - First Site</a>



</section>




<?php include("../includes/sidebar.php");
print_sidebar(5,7);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>




