                     <!DOCTYPE html>

<html>

<head>

<title>Lesson 1: The Basics > Required Tags</title>

<meta charset="utf-8" />


<link rel="stylesheet" href="../styles/styles.css" />


</head>

<body>

<div id="wrapper">

<?php include( "../includes/header.php" ); ?>

<div class="clearfix">

<section id="main">


<ul id="breadcrumbs">
<li><a href="10.html">Lesson 1: The Basics</a></li>
</ul>

     <h1>Required Tags</h1>
     


        <p>Next we look at  the other tags that must, at minimum, be in all
          

       HTML files.</p>

          <p><code>&lt;html&gt;</code></p>

          <p><code>&lt;head&gt;
<br />
            &lt;title&gt;</code>The Title Of Your Page Will Go Here<code>&lt;/title&gt;</code>
<br />
<code>&lt;meta charset=&quot;utf-8&quot; /&gt;</code>
<br />
<code>&lt;/head&gt;</code></p>

<p><code>&lt;body&gt;
<br />
  
&lt;/body&gt;</code></p>

<p><code>&lt;/html&gt;</code></p>

        <p>See a pattern? For every open tag, such as<code> &lt;title&gt;</code>, there
          must be a closing tag, as in <code>&lt;/title</code>&gt;. The consistency
          of a symmetrical, containerized markup system is the hallmark of HTML.</p>
        <p>Oh yeah, there's the matter of <code>&lt;meta charset=&quot;utf-8&quot; /&gt;</code>.
           Some tags don't have open and closing tags. These tags are called &quot;empty
          tags.&quot; You'll learn more about them as we move forward.</p>

        
     <h2>The html Tag</h2>

        <p>Everything in an HTML file fits within the html container (except

          the DOCTYPE statement). As you will see repeatedly, we have an open
          

          tag - <code>&lt;html&gt;</code> - and a close tag - <code>&lt;/html&gt;</code>

          - and that's a container.       </p>
       <p>Quit worrying. There are not so many tags that you won't be able to
remember what you need to know!!</p>

        
     <h2>The head Tag</h2>

        <p>So tags always come in sets (almost always) and the head tag is

no exception. </p>

        <p>After the <code>&lt;head&gt;</code> <code>&lt;/head&gt;</code> container
          opens,

          you're sure to see the <code>&lt;title&gt;</code>My First Page<code>&lt;/title&gt;</code>

         container that comes within the head container. That's another thing
         you will

          see again and again - containers fitting between other containers (or

          tags between other tags, if you prefer).</p>

<p>The words &quot;My First Page&quot; will appear at the very top of

        the browser window, right next to the name of the browser. </p>

        <p>The head container is used to hold information about the file which
          is

not seen by the user. It can include information such as the name of

the  page author, keywords, a page description, and other information

about   the page. Head stores information that is important to us page

creators,   but is not visible or terribly important to our users.</p>

        <p>For example, the head section can store information about our document.
          In this case it already does with <code>&lt;meta charset=&quot;utf-8&quot; /&gt;</code> which
          refers to a technical standard about the type of  encoding used
          for an  HTML file.</p>

        
     <h2>The body Tag</h2>

        <p>The body container is where the action takes place because what it
          contains is what web visitors will see, experience, and manipulate.

          It's the space we are going to be working in for most of the next nine
           

          Lessons.</p>
        <h3>Putting It All Together</h3>

        <p>To recap, when we start an HTML file, we begin with things that you

          must have in every file. Start with this:</p>

<p><code>&lt;!DOCTYPE html&gt;</code></p>

        <p><code>&lt;html&gt;</code></p>

        <p><code>&lt;head&gt;<br />

          &lt;title&gt;</code>The Title Of Your Page Will Go

Here<code>&lt;/title&gt;<br />
&lt;meta charset=&quot;utf-8&quot; /&gt;<br />

          &lt;/head&gt;</code></p>

        <p><code>&lt;body&gt;<br />

&lt;/body&gt;</code></p>

        <p><code>&lt;/html&gt;</code></p>

       
       

   <a id="next" href="60.html">Go On</a>
       

</section>

<?php 
include("../includes/sidebar.php"); 
print_sidebar(1,5);
?>

</div>  <!-- ned clearfix -->

<?php
include("../includes/footer.php");
?>


</div> <!-- end wrapper -->

</body>

</html>
