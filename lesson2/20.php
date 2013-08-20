<!DOCTYPE html>

<html>


<head>

<title>Lesson 2: Fundamental Elements > First Tags</title>

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


<h1>First Tags</h1>

        <p>These first tags provide a simple and most frequently used method of 

          organizing web content.</p>

<table>

          <caption>

          First Tags 

        </caption>
        
                <colgroup>
<col id="left" />
<col id="center" />
<col id="right" />
</colgroup>

        
        <thead>
        


          <tr  class="grayhead"> 

<th> Tag</th>

<th> Name</th>

            <th> What It Does</th>

          </tr>
          
          </thead>
          
          <tbody>

    <tr>

            <td><code>&lt;p&gt;</code></td>

            <td>Paragraph</td>

            <td>Separates content into paragraphs.</td>

          </tr>

          <tr class="grayband"> 

            <td><code>&lt;br /&gt;</code></td>

            <td>Break</td>

            <td>Starts a new line wherever used without creating a new paragraph.</td>

          </tr>

<tr>

            <td><code>&lt;hr /&gt;</code></td>

            <td>Horizontal Rule</td>

            <td>Makes a dividing line like this: 

              <hr  /> </td>

          </tr>
          
          </tbody>

        </table>  

        <p class="exs">Two Examples:</p>

        <p class="views2">Code View</p>


        
        <p><code>&lt;p&gt;</code>Using the paragraph tag lets us form paragraphs.
          It's a very basic tag and is frequently used when other, more appropriate
           tags should be used.<code>&lt;/p&gt;</code></p>
           
<p class="views2">Browser View</p>

<p>Using the paragraph tag lets us form paragraphs. It's a very
  basic tag and is frequently used when other, more appropriate tags should be
used.</p>

        <p>Now if  I want to break a line of text, rather than
          have it wrap as it does  by default in the above example, I do this: </p>
<p class="views2">Code View </p>


        <p><code>&lt;p&gt;</code>The rain<code>&lt;br /&gt;</code>in 

          Spain<code>&lt;br /&gt;</code>stays mainly on the plain!<code>&lt;/p&gt;</code> 

</p>



        <p class="views2">Browser View </p>

        <p>The rain<br />

          in Spain<br />

          stays mainly on the plain!</p>

        <p> <code>&lt;br /&gt; </code> is an example of an empty tag, in that
          there is no real container (open and close tags) to speak of. Wherever
          I placed the <code>&lt;br /&gt;</code>, the line broke at that spot.
        It's like hitting the return key on a keyboard.</p>
        <p>When you're dealing with an empty tag, you'll notice the pattern will
          be &lt;tag /&gt; or &lt;tag/&gt;. If you are good with patterns,
          you are going to be good with HTML since that's all there is to it!!</p>
        
        
<a href="30.html" id="next">Keep Rollin'</a>


</section>

<?php include("../includes/sidebar.php");
print_sidebar(2,2);
?>


</div>  <!-- end clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>
