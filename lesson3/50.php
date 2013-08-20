<!DOCTYPE html>

<html>


<head>

<title>Lesson 3: Lists > Nesting Lists</title>

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
<li><a href="10.html">Lesson 3: Lists</a></li>
</ul>



<h1>Nesting Lists</h1>


          <p>Understanding nesting will help you in organizing content and open
            up very powerful layout design options 

            for you. Nesting allows us to place elements within the same type
            

            of element, similar to the way in which a small box fits inside a
            

            bigger box.        </p>
          <p>Nesting is all about creating information hierarchies in a web page
            document. That's what HTML is all about!! Organizing information so
            that it means something.</p>
            
                    <p class="exs">Example of a Nested List</p>
                    
          <p class="views2">Code View</p>
          
          <p><code>&lt;ul&gt;<br />
&lt;li&gt;</code>Asia<code>&lt;/li&gt;<br />
&lt;li&gt;</code>Africa


<code><br />

<span class="nested">&lt;ul&gt;<br />
&lt;li&gt;</span></code><span class="nested">Botswana<code><span class="nested">&lt;/li&gt;<br />
&lt;li&gt;</span></code>Burkina Faso<code><span class="nested">&lt;/li&gt;<br />
&lt;li&gt;</span></code>Zimbabwe<code><span class="nested">&lt;/li&gt;<br />
&lt;li&gt;</span></code>Djibouti<code><span class="nested">&lt;/li&gt;<br />
&lt;/ul&gt;</span></code></span><code><br />
&lt;/li&gt;<br />
&lt;li&gt;</code>Europe<code>&lt;/li&gt;</code><br />
<code>&lt;/ul&gt;</code></p>
          <p>Here I use     <span class="nested">blue</span> to show you how
            the inside list is nested to the list item, Africa.</p>
            
         <p class="views2">Browser View          </p>
         
          <ul>
            <li>Asia</li>
            <li>Africa
              <ul>
                <li>Botswana</li>
                <li>Burkina Faso</li>
                <li>Zimbabwe</li>
                <li>Djibouti</li>
              </ul>
            </li>
            <li>Europe</li>
</ul>
<p>Here's another example of nesting lists. This one I have used for
            years.</p>
        <p class="views2">Code Vi dew</p>

<p><code>
  &lt;ul&gt;<br>
  &lt;li&gt;</code>Empire State Building<code>&lt;/li&gt;<br>
  &lt;li&gt;</code>Rockefeller Center<code>&lt;/li&gt;<br>
  &lt;li&gt;</code>(The Much Missed) World Trade Center<br><span class="nested"><code><span class="nested">&lt;ul&gt;<br>
  &lt;li&gt;</span></code>2 WTC<code><span class="nested">&lt;/li&gt;<br>
  &lt;li&gt;</span></code>3 WTC<code><span class="nested">&lt;/li&gt;<br>
  &lt;li&gt;</span></code>5 WTC</span><br>
  

<code>    <span class="second_nested">&lt;ul&gt;<br>
  &lt;li&gt;</span></code><span class="second_nested">The Winter Garden</span><code><span class="second_nested">&lt;/li&gt;<br>
  &lt;/ul&gt;</span></code></span><code><br>
  <span class="nested">&lt;/li&gt;</span><br>
  <span class="nested">&lt;/ul&gt;</span><br>
  &lt;/li&gt;</code><br>
  <code>&lt;li&gt;</code>Citicorp Center<code>&lt;/li&gt;<br>
  &lt;/ul&gt;</code></span></p>
<p>Here I use <span class="nested">blue</span> to show you how the inside list
is nested to the list item, World Trade Center. Then I took out my <span class="second_nested"> black</span> pen
to show how an inside inside list is nested to 5 WTC.</p>
        <p class="views2">Browser View</p>
          <ul>
            <li>Empire State Building</li>
            <li>Rockefeller Center</li>
            <li>(The Much Missed) World Trade Center
              <ul>
                <li>2 WTC</li>
                <li>3 WTC</li>
                <li>5 WTC
                  <ul>
                    <li>The Winter Garden</li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>Citicorp Center</li>
          </ul>


  

  <ol>
    
    
  <li>
    I'm only nesting one list and that's some of the countries
    
    of Africa. I did this by placing an entire <code>&lt;ul&gt;</code>
    
    <code>&lt;/ul&gt;</code> structure within the Africa <code>&lt;li&gt;</code>
    
    <code>&lt;/li&gt;</code> container. That's the Nested -- or
    
    interior -- List. Notice how that list is nested directly to the Africa
    list item.  Yes, I chose those countries because I like
    
    the way they roll off my tongue.
  </li>
  <li>
    There is no limit to the number of Nested Lists you can 
    
    make or where they can occur. Just make sure that you have 
    
    a matching number of start and end ul and li tags. Above, I 
    
    have two sets of ul tags. Notice that the idea here is to 
    
    move information from the general to the specific in a hierarchy. 
    
    Moving information from the general to the specific is just 
    
    a good organizational principle that you should keep in mind. 
    
    You'll find XHTML very accommodating to that notion.
  </li>
    
    
    
</ol>









<p><strong>Lists + the Code Tester = Perfect Together!!</strong></p>


<p><a href="../code_tester.html" id="code_tester_icon">Code Tester</a> </p>

            





<a id="next"  href="../lab3.html">You Are Now Ready For Your Next Lab - First Lists</a>


</section>

<?php include("../includes/sidebar.php");
print_sidebar(3,5);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>


