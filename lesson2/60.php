<!DOCTYPE html>

<html>


<head>

<title>Lesson 2: Fundamental Elements > Display: Block-level And Inline</title>

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

<h1>Display: Block-level And Inline</h1>

          <p>HTML  elements fall into two camps: block-level and inline. Block-level

            tags are characterized by horizontal white  space which separates

            chunks (blocks) of text. P is a perfect example of a block-level
            tag,

            as are the Heading tags and the Quote tag.</p>

          
<p>Inline is the opposite. No breaking space is created in the text. 

            Strong and em tags are two real good examples. You'll find inline
  tags inside block-level containers.</p>

          
<p><strong>Knowing the difference between these two types of tags will markedly 

            increase your ability to create well-formed documents.</strong> If you're going to learn CSS - and I hope you will - you'll have to understand the difference between the two.</p>

    <p class="exs">Example of a Block-level Element</p>

        <p class="views2">Code View</p>  

            <p><code>&lt;p&gt;</code>I never took a class in HTML or CSS.  <code>&lt;/p&gt;&lt;p&gt;</code>I
              learned 

              HTML by observing the patterns of the markup by looking at the
              source 

     code. Those patterns, as I was to learn, were containerized markup.<code>&lt;/p&gt;</code></p>





        <p class="views2">Browser View</p>  <p>I never took a class in HTML or
      CSS. </p>

          <p>I learned HTML by observing the patterns of the markup by looking 

            at the source code. Those patterns, as I was to learn, were containerized 

            markup.</p>

        <ul>
            <li><strong>Examples Of Block-level Tags </strong>
              <ul>
                  <li>p</li>
                  <li>heading tags</li>
                  <li>q and blockquote</li>
                  <li>ul</li>
                   <li>div</li>
               </ul>
            </li>
         </ul>



        <p class="exs">Example of an Inline Element</p>

        <p class="views2">Code View </p>



            <p><code>&lt;p&gt;</code>I learned HTML by <code>&lt;strong&gt;</code>observing 

              the patterns<code>&lt;/strong&gt;</code> of the markup by looking 

              at the source code. Those patterns, as I was to learn, were containerized 

              markup.<code>&lt;/p&gt;</code></p>

          





        <p class="views2">Browser View</p>

          <p>I learned HTML by <strong>observing the patterns</strong> of the 

            markup by looking at the source code. Those patterns, as I was to 

            learn, were containerized markup.</p>
            
            

                                          
                                          
       <ul>
            <li><strong>Examples Of Inline Tags</strong>
              <ul>
                    <li>strong</li>
                    <li>em</li>
                    <li>img</li>
                    <li>span</li>
              </ul>
            </li>
        </ul>

<ol>

                   <li>Make sure to notice in the block-level example that
                     it is the

                    P tag which is creating the space between the two paragraphs.

                    How the code is typed is not what is creating the division

                    of space between the blocks (paragraphs).
</li>
                   <li>In the inline example, I used the Strong tag. The words
                     in the container

                    are bold and they do not break the line. I think of inline

                    tags as tags &quot;in the line of&quot; text.
                    No sweat if you can't grab all this at once. When you do
                    the 

                    Lab, you'll get a better feel for it.
</li>
                
                </ol>

              

                <a id ="next"  href="70.html">Click Right This Way</a>

</section>

<?php include("../includes/sidebar.php");
print_sidebar(2,6);
?>


</div>  <!-- end clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

