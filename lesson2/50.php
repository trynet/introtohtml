<!DOCTYPE html>

<html>


<head>

<title>Lesson 2: Fundamental Elements > Strong And Emphasis Tags</title>

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



<h1>Strong And Emphasis Tags</h1>

        <p>A simple and effective way to indicate the importance (draw attention
          to) of some of your copy is through the use of the 
<code>&lt;strong&gt;</code> and/or <code>&lt;em&gt;</code> elements.</p>





<table>

            <caption>

          Examples Using Strong and Em

          </caption>
                        <colgroup>
<col  />
<col  />
</colgroup>


<thead>


<tr>
              <th>Code View</th>

              <th>Browser View</th>

          </tr>
          
        </thead>
          
          <tbody>

     <tr>

              <td>       <code>&lt;strong&gt;</code>Bold Text<code>&lt;/strong&gt;</code>



              </td>

              <td><strong>Strong Text</strong></td>

          </tr>

<tr>

              <td>       <code>&lt;em&gt;</code>Italicized Text<code>&lt;/em&gt;</code>

         


              </td>

              <td><em>Emphasized Text</em></td>

          </tr>

<tr>

              <td><code>&lt;em&gt;&lt;strong&gt;</code>Italicized<br />

              and Bold Text<code>&lt;/strong&gt;&lt;/em&gt;</code> </td>

              <td><em><strong>Emphasized and Strong Text</strong></em></td>

          </tr>
          
          </tbody>

      </table>


<p>I chose my opening words carefully here.  I did not say that these tags changed
  the appearance of the copy even though I know they did. That's because HTML
  is not about how your text looks on a page.</p>
<ol>

                    <li>You can use combinations of tags, as in the last example, 

                    in any order. Notice that the first start tag <code>&lt;em&gt;</code> 

                    was the last end tag (<code>&lt;/em&gt;</code>). Had <code>&lt;strong&gt;</code> 

                    been the first tag, then it would have been the last end tag 

                    (<code>&lt;/strong&gt;</code>).

      </li>

                    <li>You may see people using <code>&lt;b&gt; &lt;/b&gt;</code> 

                    in place of<code> &lt;strong&gt; &lt;/strong&gt;</code>, and 

                    <code>&lt;i&gt; &lt;/i&gt;</code> instead of <code>&lt;em&gt; 

                    &lt;/em&gt;</code>, but stick to the way I have it here.

      </li>

                    <li>There's a way to create underlined text by using the <code>&lt;u&gt;</code> 

                    <code>&lt;/u&gt;</code> tag, but I'm not showing it to you, 

                    since it's a deprecated tag (being phased out by the W3C). 

                    It's also very confusing for users as it's frequently mistaken 

                    for a hyperlink.
                    </li>
                    
</ol>

        

                

                

          <p>Can CSS be used to make text bold and/or italicized? Certainly.</p>
          
          <p> In the meantime, want to 

            try making your text bold, italicized or both? Students find this
            irresistible!!</p>

          
          <p><a href="../code_tester.html" id="code_tester_icon">Code Tester</a></p>


<a id="next"  href="60.html">By Now You Know The Drill</a>


</section>

<?php include("../includes/sidebar.php");
print_sidebar(2,5);
?>



</div>  <!-- end clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

