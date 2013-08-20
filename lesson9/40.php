<!DOCTYPE html>

<html>


<head>

<title>Lesson 9: Grouping Elements</title>

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
<li><a href="10.html">Lesson 9: Grouping Elements</a> </li>
</ul>

 <h1>Form Grouping Tags</h1>
 
 <p>Proper form markup is so important.  It makes forms easier to use (that's
   usability) and allows the largest number of users (that's accessibility) the
   chance to successfully enter and submit their data. Getting a form right can
   easily be the difference between a form that is completed and one that is
   abandoned. That could mean the difference between a new sale, new member or
   new subscriber or not.</p>
 
 
 <h2>The fieldset and legend elements</h2>
 
 <p>Use <code>&lt;fieldset&gt;</code> to group labels and form inputs that belong
   together.
    <code>&lt;legend&gt;</code> acts much like the caption element used with
    data tables and is used for each fieldset element.</p>
 <p class="views2">Code View</p>
 <p><code><span class="second">&lt;fieldset&gt;</span><br>
 </code></p>
 <p>   <code><span class="second">&lt;legend&gt;</span></dpsn></code>Create Your User ID<code><span class="second">&lt;/legend&gt;</span></code></p>
 <p><code>&lt;label for=&quot;email_address&quot;&gt;</code>Email Address<code>&lt;/label&gt;<br>
   &lt;input type=&quot;text&quot; name=&quot;email1&quot; id=&quot;email_address&quot;  /&gt;</code></p>
 <p><code>&lt;label for=&quot;email_address_again&quot;&gt;</code>Email Address
   (re-type)<code>&lt;/label&gt;<br>
   &lt;input type=&quot;text&quot; name=&quot;email2&quot;  id=&quot;email_address_again&quot;/&gt;</code></p>
 <p><code><span class="second">&lt;/fieldset&gt;</span><br>
   <br>
  <span class="second">&lt;fieldset&gt;</span></code></p>
 <p>   <code><span class="second">&lt;legend&gt;</span></code>Create Your Password<code><span class="second">&lt;/legend&gt;</span></code></p>
 <p><code>&lt;label for=&quot;password&quot;&gt;</code>Password<code>&lt;/label&gt;<br>
   &lt;input type=&quot;password&quot; name=&quot;password1&quot;  id=&quot;password&quot;  /&gt;<br>
   <br>
   &lt;label for=&quot;password_again&quot;&gt;</code>Password (re-type)<code>&lt;/label&gt;<br>
   &lt;input type=&quot;password&quot; name=&quot;password2&quot;  id=&quot;password_again&quot;   /&gt;</code></p>
 <p><code><span class="second">&lt;/fieldset&gt;</span></code><br>
 </p>
 <p class="views2">Browser View</p>
 
 <div id="form_example">
 
<fieldset>
  
<legend>Create Your User  ID</legend>

<label for="email_address">Email Address</label>
<input type="text" name="email1" id="email_address" />

          
<label for="email_address_again">Email Address (re-type)</label>
<input type="text" name="email2"  id="email_address_again" />

</fieldset>
  
  
 <fieldset>
                   
 <legend>Create Your Password</legend>

<label for="password">Password</label>
<input type="password" name="password1"  id="password" />

          
<label for="password_again">Password (re-type)</label>
<input type="password" name="password2"  id="password_again"  />

</fieldset>

</div><!-- end form example -->

<p>Don't concern yourself with how all of this looks because all of that - you
  guessed it - is fixed with CSS. But do notice that the two fieldset groups
  do have a border around them. The Browser Style Sheet is what's doing that.
  Browser Style Sheet? You'll want to read the last lesson!!</p>
				  
 <h2>The optgroup element</h2>
 
 <p><code>&lt;optgroup&gt;</code> is an ideal way to group content used in a select menu. True,
   there is <a href="../lesson7/50.html">another older and simpler way</a>  to create select menus (in case you
   forgot).</p>
 <p>But when the items in a list need to be nested (the options of a select menu)
   will not do. Enter <code>&lt;optgroup&gt;</code> which allows for the nesting
   of the choices in a select menu. As you may recall, nesting is an ideal
   way to help organize and define content.</p>
 <p>Here's a good example of how optgroup is used:</p>
 <p class="views2">Code View</p>
 <p><code>&lt;label for=&quot;cities&quot;&gt;</code>U. S. Coastal Cities<code>&lt;/label&gt;</code></p>
 <p><code>&lt;select name=&quot;cities&quot; id=&quot;cities&quot;&gt;</code></p>
 <p><code><span class="second">&lt;optgroup label=&quot;East Coast&quot;&gt;</span><br>
     <span class="nested">&lt;option value=&quot;bos&quot;&gt;</span></code><span class="nested">Boston<code><span class="nested">&lt;/option&gt;<br>
   &lt;option value=&quot;nyc&quot;&gt;</span></code>New York City<code><span class="nested">&lt;/option&gt;<br>
   &lt;option value=&quot;dc&quot;&gt;</span></code>Washington, DC<code><span class="nested">&lt;/option&gt;</span></code></span><code><br>
   <span class="second">&lt;/optgroup&gt;</span></code></p>
   
   
 <p><code><span class="second">&lt;optgroup label=&quot;West Coast&quot;&gt;</span></code><br>
     <span class="nested">&lt;option value=&quot;sea&quot;&gt;</span></code><span class="nested">Seattle<code><span class="nested">&lt;/option&gt;<br>
   &lt;option value=&quot;sf&quot;&gt;</span></code>San Francisco<code><span class="nested">&lt;/option&gt;<br>
   &lt;option value=&quot;la&quot;&gt;</span></code>Los Angeles<code><span class="nested">&lt;/option&gt;</span></code></span><code><br>
   <span class="second">&lt;/optgroup&gt;</span></code></p>
 <p><code>&lt;/select&gt;</code></p>
 <p class="views2">Browser View</p>

<label for="cities">U. S. Coastal Cities</label>

<select name="cities" id="cities">

<optgroup label="East Coast">
<option value="bos">Boston</option>
<option value="nyc">New York City</option>
<option value="dc">Washington, DC</option>
</optgroup>

<optgroup label="West Coast">
<option value="sea">Seattle</option>
<option value="sf">San Francisco</option>
<option value="la">Los Angeles</option>
</optgroup>

</select>

<p>Highlighted in <span class="nested">blue</span> is the inside optgroup
 elements.</p>
 
 <p>Note that "East Coast Cities" and "West Coast Cities" are not choices. There
   purpose is to group the choices of east and west coast cities.

<a id="next" href="50.html">Next</a>


</section>



<?php include("../includes/sidebar.php");
print_sidebar(9,4);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>




