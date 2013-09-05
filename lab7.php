<!DOCTYPE html>


<html>


<head>



<title>Lab 7 - First Forms - Directions</title>



<meta charset="utf-8" />


   <link rel="icon" href="images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="images/favicon.png" type="image/png"/>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
   <link rel="stylesheet" href="styles/styles.css" />




</head>

<body>

<div id="wrapper">

<?php include("includes/header.php"); ?>

<div class="clearfix">

<section id="main">


<h1 class="lab-header">Lab 7: First Forms</h1>
<p>Form elements allow us to collect data that is submitted willfully by a user.
  In this lab you'll add some of the most widely used from elements.</p>
  
    <div class="thumbnail">
  
<img src="images/peek.jpg" alt="Sneak A Peek " class="peek" />
  <p>In this lab we're only adding form elements to the index and blog pages.
    Look at this <a href="labs/7/index.html" target="_blank">home
    page</a>. Still just a work in progress. But progress, none-the-less!!</p>
    
    </div>
    
<h2>Step 1: Let's add some radio buttons and a submit button to the home page.</h2>
<p>We begin the html just after:</p>
<p><code>&lt;p&gt;</code>Do you like working in the yard?<code>&lt;/p&gt;</code></p>
<p>All forms always start with <code>&lt;form&gt;</code>. You can really put this tag anywhere so
  long as it is before any of the form elements (such as <code>&lt;input /&gt;</code>, <code>&lt;textarea&gt;</code> and <code>&lt;select
  /&gt;</code>). For our purpose just put it right after &quot;Do you like working
  in the yard?&quot;</p>
<p>Since this is a form that doesn't work, I left out the all important method
  and action attributes. You'd have to include those and their values if we
  were doing a real form, one in which the user could actually submit data to
  a server.</p>
<p>Right after <code>&lt;form&gt;</code>, lets add our first form element. It's
  a radio button for the &quot;Yes&quot; option.</p>
<p>This is about as easy a way as there is to add an input, such as a checkbox
  (radio button or text field) to your page but let's break it down. The basic
  pattern is the <code>&lt;input
  /&gt;</code> tag wrapped
  inside of a the <code>&lt;label&gt;&lt;/label&gt;</code> container like so:</p>
<p><code>&lt;label&gt;&lt;input /&gt;&lt;/label&gt;</code></p>
<p>After you do that you will need to add  these   attributes and their corresponding
  values for <code>&lt;input /&gt;</code>:</p>
<ul>
  <li><code>type=&quot;radio&quot;</code></li>
  <li><code>name=&quot;like_gardening&quot;</code></li>
  <li><code>value=&quot;yes&quot;</code></li>
</ul>
<p>The type attribute specifies what kind of input we have here. The name and
  the value will tell us that IF the user selects this option &quot;like_gardening&quot;
will be &quot;yes&quot; (as opposed to &quot;no&quot; which we will get to soon enough).</p>
<p>When you are done with the first input you'll have this, but also make sure
  to type in the word &quot;Yes&quot; right after &lt;label&gt; which is what
  the user will see on the page just before the actual radio button.</p>
<p><code>&lt;label&gt;</code>Yes<code>&lt;input <span class="second">type=&quot;radio&quot; name=&quot;like_gardening&quot; value=&quot;yes&quot;</span> /&gt;&lt;/label&gt;</code></p>
<p>As always, make sure that your values have quote marks around them, just like
you did in the other labs.</p>
<p>Now let's do the option for the &quot;No&quot; as a response. Start with</p>
<p><code>&lt;label&gt;&lt;input /&gt;&lt;/label&gt;</code></p>
<p>as you did for the &quot;Yes&quot; option.</p>
<p>The attribute value pairings will be the same for <code>&lt;input /&gt;</code> but
  this time it's <code>value=&quot;no&quot;</code> because
  this is the &quot;no&quot; for a response option. And where you had &quot;Yes&quot; before
  (just after <code>&lt;label&gt;</code>) this time it's &quot;No&quot; that
  goes after <code>&lt;label&gt;</code>.</p>
<p>Check my source code to see if you got it right. Can't give this away. You'll
  just have to check it yourself.</p>
<hr />


<p>Finally, we have to add the Submit button. All forms must have a Submit button
  as that's the only way the users can send in their data to the server.</p>
<p>The Submit button is another type of input so just start it with this right
after the &quot;No&quot; radio button:</p>
<p><code>&lt;input /&gt;</code></p>
<p>Simple enough. Then Add these values and their attributes:</p>
<ul>
  <li><code>type=&quot;submit&quot;</code></li>
  <li><code>value=&quot;submit&quot;</code></li>
</ul>
<p>You can change the value of the value to anything you'd like. As I have it
the word &quot;submit&quot; is used for the button. </p>
<p>When you are done you'll have:</p>
<p><code>&lt;input type=&quot;submit&quot; value=&quot;submit&quot; /&gt;</code></p>
<p>All done. but don't leave out the closing &lt;/form&gt; tag right after the submit</p>
<p>If you haven't already then make sure to validate your page. Of
  course, all the changes you've made to this point must be saved in your file
  before you do the validation.</p>
<h2>Step 2: Add the two forms to blog.html.</h2>
<p>On this page we have two separate forms. Let's start with the first form which
  is about leaving a comment, a typical thing one might do for a blog. This 
  is a tad more tricky than what you did in index.html. But
  don't let me scare you. It's just another way to use the <code>&lt;label&gt;</code> element.</p>
<p>Just after the words:</p>
<p><code>&lt;p&gt;</code>Let me hear from you. What do you think about what I've just said?<code>&lt;/p&gt;</code></p>
<p>Add the open and close form element. All the inputs and the select menu we
  will add for the comment section will go between:</p>
<p><code>&lt;form&gt;</code></p>
<p><code>&lt;/form&gt;</code></p>
<p>For the  first question, &quot;What's your name", let's enter the required
  markup just after <code>&lt;form&gt;</code> like this:</p>
<p> <code>&lt;label for=&quot;name&quot;&gt;</code>What's your name?<code>&lt;/label&gt;<br>
  &lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name&quot; placeholder=&quot;First
and Last Name&quot; /&gt;</code></p>
<p>Note that we are still using <code>&lt;label&gt;</code> and <code>&lt;input /&gt;</code>, but <code>&lt;input
  /&gt;</code> is outside of the label container and not inside of it as we did
  in index.html. In that file the relationship between <code>&lt;label&gt;</code> and <code>&lt;input
  /&gt;</code> was explicit (we call that an &quot;explicit control&quot;) but in
  the above example the relationship between <code>&lt;label&gt;</code> and <code>&lt;input
  /&gt;</code> must be
  defined.</p>
<p>The relationship is made  by using the <code>for</code> attribute
  in <code>&lt;label&gt;</code> and
  the <code>id</code> attribute
  in <code>&lt;input /&gt;</code>. The value for both of these is <code>&quot;name&quot;</code> and
  this is how the two elements are tied (related) to each other.</p>
<p>I amusing these three other attributes for input:</p>
<ul>
<li><code>type=&quot;text&quot;
  </code>
<li><code>name=&quot;name&quot;</code></li>
  <li><code>placeholder=&quot;First and Last Name&quot;</code></li>
</ul>
<p>The type of any input must be defined. In this case it's <code>&quot;text&quot;</code> as
  in in a text box.</p>
<p>Then, since all inputs have to have a name attribute, I named this one <code> &quot;name&quot;</code> for
  its value because I'm asking for the name of the user who is filling out this
  form. </p>
<p>The placeholder value of <code>&quot;First And Last Name&quot;</code> will
  fill in in the text box until the user enters data into the text box. All of
  this is done to improve the user experience.</p>
<p>You can type in the attribute=&quot;value&quot; pairings in any order. There's
  no special way to do it but I like to have the type attribute first so I know
  what kind of input I'm dealing with when I look at the markup.</p>
<p>Once you understand how we used <code>&lt;label&gt;</code> and <code>&lt;input /&gt;</code> you will
  be abel to go on and complete the rest of this section as the markup largely
  follows this format.
<hr />
<p>Now let's do the next two inputs, one for the email address followed by the
one requesting a web address.</p>
<p>For the request for the user to provide an email address it's:</p>
<p><code>&lt;label for=&quot;email&quot;&gt;What's your email address?&lt;/label&gt;<br>
  &lt;input id=&quot;email&quot;  /&gt;</code></p>
<p>That associative connection between <code>for=&quot;email&quot; </code>and <code>id=&quot;email&quot;</code> is
  very important. It's
  what connects the label to the input for many devices.</p>
<p>But wait!! We are not finished. We need to add these attribute=&quot;value&quot; pairings
  to the input element:</p>
<ul>
  <li><code>type=&quot;email&quot;</code></li>
  <li><code>name=&quot;email&quot;</code></li>
  <li><code>placeholder=&quot;Email Address&quot;</code></li>
</ul>
<p>Your  mobile device users will love you for using <code>type=&quot;email&quot;</code> rather
  than <code>type=&quot;text&quot;</code> because  one of their keys on their
  screen keyboard will conveniently show the &quot;@&quot; symbol.</p>
<p><code>&lt;label for=&quot;email&quot;&gt;What's your email address?&lt;/label&gt;<br>
&lt;input <span class="second">type=&quot;email&quot; name=&quot;email&quot;</span> id=&quot;email&quot; <span class="second">placeholder=&quot;Email
Address&quot; </span>/&gt;</code></p>
<p>That's it for the request for an email address.</p>
<p>Now, let's do the request for the web address, but I'm not going to give it
  away as you already know the pattern from the first two inputs.</p>
<p>Start with</p>
<p><code>&lt;label&gt;</code>What's your web site address?<code>&lt;/label&gt;<br>
&lt;input /&gt;</code></p>
<p>Here are the attributes and their values for input so add them. No copying
  and pasting!!</p>
<ul>
  <li><code>type=&quot;url&quot;</code></li>
  <li><code>name=&quot;web_address&quot;</code></li>
  <li><code>id=&quot;web_site&quot;</code></li>
  <li><code>placeholder=&quot;Web Address&quot;</code></li>
</ul>
<p>Again, your mobile device users will love you when you use <code>url</code> for
  your type because this time their screen keyboard will display &quot;http&quot; making
  it easier to type in the web address.</p>
<p>But wait. You have to add the <code>for</code> attribute to the label element.
  The value is the same as the <code>id</code> in the input.</p>
<p>Now you are finished with the first three inputs. Take a look at my source
  code to see if you got it right. You should also be using the validator to
  help you along.</p>
<hr>
<p>Time to put in the drop down box which is know as the select element. I like
  to start with the <code>&lt;label&gt;</code> so I did this:</p>
<p><code>&lt;label&gt;</code>How did you hear about my blog?<code>&lt;/label&gt;</code></p>
<p>I supposed I could have used a p tag instead and many people probably would
  have. But as in all things HTML when there is a specific tag to do the job
  use that rather than a generic element such as <code>&lt;p&gt;</code>.</p>
<p>Next I add the open and close select tag.</p>
<p><code>&lt;select name=&quot;learn_blog&quot;&gt;</code></p>
<p><code>&lt;/select&gt;</code></p>
<p>As with all form elements, a name is assigned and in this case it's &quot;learn_blog.&quot;
  This way when an answer is submitted to the server the words &quot;learn_blog&quot;
  will be associated with the reply. That's most important.</p>
<p>All of the options the user can chose from will go between the start and close
  select
  tags.
  Here's the first one. It's for the choice of Google.</p>
<p><code>&lt;select name=&quot;learn_blog&quot;&gt;<br>
  <span class="second">&lt;option value=&quot;google&quot;&gt;Google&lt;/option&gt;</span><br>
&lt;/select&gt;</code></p>
<p>The value of &quot;google&quot; is what will be returned to the server if
  this is the user's choice. the word &quot;Google&quot; is what the user will see in
  the drop down menu.</p>
<p>Now you can add the final three options.</p>
<table width="100%" border="0">
  <tr>
    <th scope="col">Value</th>
    <th scope="col">What The User Will see</th>
  </tr>
  <tr>
    <td><code>friend</code></td>
    <td>From A Friend</td>
  </tr>
  <tr>
    <td><code>link</code></td>
    <td>From A Link</td>
  </tr>
  <tr>
    <td><code>not_sure</code></td>
    <td>Not Sure</td>
  </tr>
</table>
<p>Speaking of not being sure, take a look at my source code to see what I did
  here. It's the same pattern as I used for the Google option.</p>
<hr />
<p>We turn now to a rather strange animal - the text box - or more properly known
  as the textarea element. Because it's rather simple let me give it to you in
  one bite:</p>
<p><code>&lt;label&gt;</code>Your Comment, please.<code>&lt;/label&gt;<br>
&lt;textarea name=&quot;comment&quot;&gt;&lt;/textarea&gt;</code></p>
<p>Again, the form elements themselves need a name and in this case I cane up
  with &quot;comment.&quot; What happens if you put any text between <code>&lt;textarea&gt;</code> and <code>&lt;/textarea&gt;</code>?
  Try it.</p>
<hr>
<p>Now we really are almost done with this series of forms. Just add your submit
  button. You can keep in nice and simple like we did for the submit button in
  index.html.</p>
<p>All done!! WOW, that was a lot for me too!! Make sure to validate all of this
  before you go on.</p>
<hr>
<p> We've got one more form to do for this page so just after:</p>
<p><code>&lt;p&gt;</code>If you like what you are reading then give me your email
  address. Every time I add an new article to my blog I will let you know as
  soon as it is published.<code>&lt;/p&gt;</code></p>
<p>Add </p>
<p><code>&lt;form&gt;</code></p>
<p><code>&lt;/form&gt;</code></p>
<p>We want users to subscribe to our blog. All we need is their name and email
  address.</p>
<p>For this form I went back to putting the input element inside of the <code>&lt;label&gt;&lt;/label&gt;</code> container
  like I did in the index.html file.</p>
<p>So just after &lt;form&gt; it's:</p>
<p><code>&lt;label&gt;</code>Your Name<code>&lt;br /&gt;<br>
  &lt;input type=&quot;text&quot; name=&quot;name&quot; placeholder=&quot;Type
your name here.&quot; /&gt;&lt;/label&gt;</code></p>
<p><code>&lt;br /&gt;</code></p>
<p>I'm not crazy about how I used both <code>&lt;br /&gt;</code> tags. You could
  say I'm using html to position everything, and position (layout) is what Cascading
  Style Sheets is for. But I found it so convenient and easy that I went with
  using the breaks. I could have - maybe should have - not used them, but I've
  seen the pros use them here so as as long as you don't tell anybody that I cheated
  a bit, I won't say anything either.</p>
<p>Using this exact pattern, let's to the request for the email address. For
  the label use Email Address (then add the <code>&lt;br /&gt;</code> tag). The
  attributes and their values for <code>&lt;input /&gt;</code> are:</p>
<table width="100%" border="0">
  <tr>
    <th scope="col">Attribute</th>
    <th scope="col">Value</th>
  </tr>
  <tr>
    <td><code>type</code></td>
    <td><code>email</code></td>
  </tr>
  <tr>
    <td><code>name</code></td>
    <td><code>email</code></td>
  </tr>
  <tr>
    <td><code>placeholder</code></td>
    <td><code>Email Address</code></td>
  </tr>
</table>
<p>Don't forget to add the closing <code>&lt;/label&gt;</code> tag followed by one more <code>&lt;br /&gt;</code>.</p>
<p>Add the submit button and you are all done.</p>
<p>Amazing!!</p>
<p>if you haven't already, validate this page before going on to the next lesson.</p>

</section>

</div>  <!-- ned clearfix -->

<?php include("includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

