<!DOCTYPE html>

<html>


<head>

<title>Lesson 7: Forms</title>

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
<li><a href="10.html">Lesson 7: Forms</a> </li>
</ul>

 <h1> The input Tag</h1>
 
 
 <p>No doubt about it. The <code>&lt;input /&gt;</code> element does the heavy
 lifting when it comes to collecting form data.</p>
 <p><code>&lt;input&gt;</code> is used to create the text boxes, radio buttons,
   check boxes, and submit buttons.</p>
 <p>These attributes are used with <code>&lt;input&gt;</code>:.</p>
 
 
<table>
   <caption>
     Input Attributes
  </caption>
  
                <colgroup>
<col class="left" />
<col class="center" />
<col class="right" />
</colgroup>
  
  <thead>
  
   <tr class="grayhead">
     <th>ATTRIBUTE</th>
     <th>VALUE</th>
     <th> PURPOSE /
       EXAMPLE
     </th>
        </tr>
        
     </thead>
     
     <tbody>

<tr>
     <td><code>type</code></td>
     <td><code>text<br />
       radio<br />
       checkbox<br>
       email<br>
       url
       <br />
       submit<br />
     </code></td>
     <td><p>Sets the type of input object.</p>
       <p><code>type="text"</code></p></td>
   </tr>
   
   <tr  class="grayband">
     <td><code>name</code></td>
     <td>Expressed as short text description.</td>
     <td><p>Provides a name for the input object and is used for data handling.</p>
       <p><code>name="where_born"</code></p></td>
   </tr>
   
<tr>
     <td><code>value</code></td>
     <td>Normally left as null.</td>
     <td><p>Value is the data supplied by the user.</p>
       <p><code>value=""</code></p></td>
   </tr>
   
<tr>
     <td><code>placeholder</code></td>
     <td>Expressed as a short text description.</td>
     <td><p>Lets user see what kind of information is being requested. Text
         disappears when cursor is in the text box.</p>
     <p><code>placeholder=&quot;First Name&quot;</code></p></td>
   </tr>
   
<tr>
     <td><code>maxlength</code></td>
     <td>Expressed in numbers.</td>
     <td><p>Sets the maximum number of characters a user can enter into a text
         box. Text disappears</p>
       <p><code>maxlength="9"</code></p></td>
   </tr>
   
   <tr  class="grayband">
     <td><code>checked</code></td>
     <td>&nbsp;</td>
     <td><p>Changes default of a radio button or a check box to &quot;selected.&quot;</p>
       <p><code>checked=&quot;checked&quot;</code></p></td>
   </tr>
   </tbody>
   
 </table>
 
<h2 class="moreon">Text Box</h2>
 <p>The most frequently used input object is a text box. </p>
 <p class="exs">Example Of A Text Box</p>
 <p>Code View</p>

   <p><code>&lt;label&gt;</code> Where were you born? <code>&lt;input type="text" 
     
     name="where_born" value="" placeholder=&quot;Birth place&quot; /&gt;&lt;/label&gt;</code></p>

<p class="views2">Browser View</p>
 <label>Where were you born?
   <input type="text" name="where_born" value="" placeholder="Birth place" />
 </label>

<ol class="formclear">  
   <li>
     <p>Even though you don't see it here, or won't see it in the examples which
       follow, all form objects, such as <code>&lt;input&gt;</code>, must be
       within the <code>&lt;form&gt;</code> <code>&lt;/form&gt;</code> container.</p>
   </li>
   <li>
     <p><code>&lt;input /&gt;</code> like <code>&lt;br /&gt;</code>, <code>&lt;hr
         /&gt;</code> and <code>&lt;img /&gt;</code> is an example of an empty
         tag. There is no such thing as an end tag like &lt;/input&gt;.</p>
   </li>
   <li>
     <p>The value of the <code>value</code> attribute (this is not a mistake)
       is supplied by the user. Whatever the user types into the box becomes
       the value. </p>
       
       <p>And it's ok to leave out <code>value=""</code> as you'll see in the upcoming Lab.</p>
   </li>
   <li>
     <p>The name and value attributes of the form data (that's what this is all
       about) must be paired up to give meaning to a relationship between two
       variables. </p>
     <p> Translation: Suppose someone types &quot;Cleveland&quot; 
       into the text box in the above example. Cleveland becomes the value. When
         the submit button is hit, the name-value pairing is sent to the server
         as &quot;where_born=Cleveland.&quot; If the server were to get only
         the value &quot;Cleveland&quot; 
       without the associated name (where_born), it would be meaningless and
       the data could not be used.</p>
     <p> Hey, we're skirting on the edges of programming but worry not. I am
       NOT a programmer, but I know enough so that I can do front end development
        that programmers can work with.</p>
   </li>
   
  <li>
    <p>Oh yeah.  I forgot to tell you about the label element but it's used
      as a way to label the input. More is coming up about label in this Lesson
       and the Lab.</li>
 </ol>
<h2>Radio Buttons</h2>
 <p>Use radio buttons when the response you wish to get from a user is mutually
   exclusive, that is, only one answer is allowed. </p>
<p class="exs">Example Of A Radio Button</p>
<p class="views2">Code View</p>

<p><code>&lt;label&gt;</code>Male<code>&lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;male&quot; /&gt;&lt;/label&gt;<br>
</code><code><br>
&lt;label&gt;</code>Female<code>&lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;female&quot; /&gt;&lt;/label&gt;</code></p>
<p class="views2">Browser View</p>

<label>Male<input type="radio" name="gender" value="male" /></label>
 <label>Female<input type="radio" name="gender" value="female" /></label>

<ul class="formclear">
   <li>
     <p>Use radio inputs when you wish to get one answer from multiple choices. </p>
   </li>
 </ul>
 <ul>
   <li>
     <p> In this case, if one chooses Female, the data which is sent to the server
       will be name-value paired as &quot;gender=female.&quot; 
       The name is something that you, as web author, supply. The value is supplied
       by the user. </p>
   </li>
 </ul>

 
<h2>Check Boxes</h2>
To allow users to select one or more choices, use check boxes.
<p class="exs">Example of a Check Box</p>
<p class="views2">Code View</p>

  <p><code>&lt;p&gt;</code> What's your favorite color? Chose as many colors
    as you'd like.<code>&lt;/p&gt;</code></p>
  <p> <code>&lt;label&gt;</code>Red<code>&lt;input type=&quot;checkbox&quot; name=&quot;fav_color&quot; value=&quot;red&quot; /&gt;&lt;/label&gt;<br>
  <br>
&lt;label&gt;</code>Green<code>&lt;input type=&quot;checkbox&quot; name=&quot;fav_color&quot; value=&quot;green&quot; /&gt;&lt;/label&gt;<br>
<br>
&lt;label&gt;</code>Blue<code> &lt;input type=&quot;checkbox&quot; name=&quot;fav_color&quot; value=&quot;blue&quot; /&gt;&lt;/label&gt;</code></p>

<p class="views2">Browser View</p>


<p>What's your favorite color? Choose as many colors as you'd like.</p>


  <label>Red<input type="checkbox" name="fav_color" value="red" /></label>
   <label>Green<input type="checkbox" name="fav_color" value="green" /></label>
<label>Blue <input type="checkbox" name="fav_color" value="blue" /></label>
 
  
  
  
<ol class="formclear">
  <li>
    <p>If the user were to choose Green and Blue, the data returned would look
      like &quot;fav_Color=green&quot; and &quot;fav_color=blue.&quot; 
      In this case, <strong>two</strong> name-value pairings are returned to the
      server.</p>
  </li>
  <li>
    <p>Suppose you wanted to suggest (force, if you will) a user to subscribe
      to a newsletter. You might like to have a check box (or radio button) pre-selected
      like this:
      <input type="checkbox" name="yes" value="" checked="checked" />
    </p>
    <p> The markup <code>&lt;input type=&quot;checkbox&quot; name=&quot;yes&quot; 
      value=&quot;ok&quot; checked=&quot;checked&quot; /&gt;</code> would do
      the trick. The name-value pair? &quot;yes=ok.&quot;</p>
  </li>
</ol>

<h2>Email And Web Boxes</h2>

<p>Both email and web address boxes are just specialized text boxes in that they
  are used when you want the user to supply either and email or web address. </p>
<p>The great thing about these input types is for those who use virtual (screen)
  keyboards. When using the email input the users keyboard will include an &quot;@&quot;
  key. When using the web address input the a key will show up as &quot;http&quot;
  which is a great usability feature.</p>
<p class="exs">Example of an Email Address Box</p>
<p class="views2">Code View</p>
<p><code>&lt;label&gt;</code>Please give us your email address <code>&lt;input
    type=&quot;email&quot;
  name=&quot;email_address&quot; placeholder=&quot;Email  Address&quot; /&gt;&lt;/label&gt;</code></p>
<p class="views2">Browser View</p>

<label>Please give us your email address 
<input type="email"  name="email_address" placeholder="Email Address" />  </label>

<p class="exs formclear">Example of a Web Address Box</p>
<p class="views2">Code View</p>
<p><code>&lt;label&gt;</code>What is your web address?<code>&lt;input
    type=&quot;url&quot;
name=&quot;web_address&quot; placeholder=&quot;Web  Address&quot; /&gt;&lt;/label&gt;</code></p>
<p class="views2">Browser View</p>

<label>What is your web address? 
  <input type="url" name="web_address" placeholder="Web Address" /></label>

<ol class="formclear">

<li>
  <p>Yes, I could have used the generic text box for the email and web addresses
    but as is always the case, when there is a more specific way to do something
    - like using an email or web address box - do it that way. That's a better
    practice.  </p></li>

<li>
  <p>You can use any appropriate text for the placeholder.  For example I could
    have used  <code>placeholder="http://"</code> for the web address box.  </p></li>


</ol>




<h2>Submit Button</h2>
<p>Your data is going nowhere without a Submit button.</p>
<p class="exs">Example of a Submit Button</p>


<p class="views2">Code View</p>

  <p><code>&lt;input type="submit" value="Order Now" /&gt;</code></p>

<p class="views2">Browser View</p>
<p>
  <input type="submit" value="Order Now" style="float:none;" />
  

    <p>This is an HTML button which can be replaced with a graphic image but
      that's rarely done anymore as we have CSS to beautify all form elements..
      The words "Order
      Now" are
      the value of the value attribute.</p>


<h3>What happens when user data is submitted to the server?</h3>

<p>That all depends upon the pro ramming instructions that reside on the server
  and is invoked with the <code>&lt;form&gt;</code> action attribute when the
  data is submitted. (Forgot about that already? Go back to see <a href="20.html">The
  form Element</a>).</p>

<p>Most often the data is written to a comma delimited flat file. Here's an example of four different user records which  have been written to a fictitious file, <a href="../docs/datafile.dat">datafile.dat</a>, which is nothing more than a plain text file.</p>


<h2>Other Input Types</h2>
<p>Here are 3 other input types you might need to use.</p>

<table>

                <colgroup>
<col id="left" />
<col id="center" />
<col id="right" />
</colgroup>

<thead>

  <tr  class="grayhead">
    <th>Attribute=Value</th>
    <th>What It Does</th>
    <th> Examples</th>
  </tr>
  
  </thead>
  
  <tbody>
  
<tr>
    <td><code>type="password"</code></td>
    <td>Same as a Text Box except the user sees ***** instead of what is typed.</td>
    <td><code>&lt;input type="password" value=&quot;&quot; name=&quot;private&quot; 
      /&gt;</code></td>
  </tr>
  
  <tr class="grayband">
    <td><code>type="hidden"</code></td>
    <td>Used to pass information to the server without user detection.</td>
    <td><code>&lt;input type=&quot;hidden" name="Form Data" /&gt;</code></td>
  </tr>
  
<tr>
    <td><code>type="image"</code></td>
    <td>Used to replace Form Submit button with a graphic image.</td>
    <td><code>&lt;input type="image" src="images/submitbut.gif" <br> alt=&quot;Order
        Now&quot; /&gt;</code></td>
  </tr>
  </tbody>
</table>


<a id="next" href="40.html">Find Out How To Make A Big Text Box</a>


</section>



<?php include("../includes/sidebar.php");
print_sidebar(7,3);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>


