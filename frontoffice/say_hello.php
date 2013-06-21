<!DOCTYPE html>

<html>


<head>

<title>Front Office</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

  <script type="text/javascript" language="javascript" src="validForm_SayHello.js"></script>


</head>

<body>


<div id="wrapper">

<?php
include("../includes/header.php");
?>

<div class="clearfix">

<section id="main">


<h1>Say Hello</h1>

<p>Like the song says, &quot;We'd like to learn a little bit about you for our
  files,&quot; But in this case I'd like to know some things about you so I can
  do a better job in helping you. </p>
  
<!--  <div style="width:75%;padding:10px;margin:0 auto;border:2px dotted #000080;">
  <p><strong>NOTE:</strong> You can still fill out this form but please DO NOT
    try to submit it as it will not work. After you fill everything out you can
    copy and paste the information from this page to an email. I will soon get
    the submit button to work. Sorry for the inconvenience.</p>
  </div>-->
  
  
<p>It's best for you to complete this early in the class. Make sure to tell
  me your first and last name. All the other questions are optional.</p>
  


<form method="post" action="../cgi-bin/say_hello.cgi" onSubmit="return validateForm(this)">


 <div class="clearfix" style="margin-bottom:15px;">
  <label for="first_name">First Name</label>
    <input type="text" name="first_name" id="first_name" placeholder="First Name"  />
</div>


 <div class="clearfix" style="margin-bottom:15px;">
  <label for="last_name">Last Name</label>
    <input type="text" name="last_name" id="last_name" placeholder="Last Name"  />
</div>

 <div class="clearfix">
   <label for="occupation">What is your occupation?</label>
   
    <select name="occ" id="occupation" style="float:right;">
      <option value="">Choose One</option>
      <option value="Artist/Graphic Artist">Artist/Graphic Artist </option>
      <option value="Career Changer">Career Changer </option>
      <option value="Librarian/Information Science">Librarian/Information Science</option>
      <option value="Programmer">Programmer </option>
      <option value="Small Business Owner">Small Business Owner</option>
      <option value="Student">Student </option>
      <option value="Writer/Editor">Writer/Editor </option>
      <option value="Other">Other </option>
    </select>
</div>





<div id="say_hello">


 <fieldset class="clearfix">

<p><strong>What do you know about HTML or XHTML?</strong></p>

<div>
<input type="radio" name="know_html" value="nothing" id="no_html"   />
<label for="no_html" >None</label> 
</div>

<div>
<input type="radio" name="know_html" value="little"  id="some_html"  />
 <label for="some_html" >A little </label>
</div>

<div>
<input type="radio" name="know_html" value="alot" id="alot_html"  />
<label for="alot_html" >Quite a bit but I don't know it as well as I should.</label>
</div>

</fieldset>



 <fieldset class="clearfix">

<p><strong>What do you know about Cascading Style Sheets?</strong></p>


<div>
<input type="radio" name="know_css" value="nothing" id="no_css" />
<label for="no_css" >Nothing </label>
</div>

<div>
<input type="radio" name="know_css" value="little" id="some_css"/ >
   <label for="some_css" >A little</label>
</div>

<div>
<input type="radio" name="know_css" value="alot" id="alot_css"  />
   <label for="alot_css" >Quite a bit but I don't know it as well as I should.</label>
</div>

</fieldset>


 <fieldset class="clearfix spacing">

 <p><strong>Do you have any experience with any of these 
    applications?</strong></p>

<div>
<input type="checkbox" name="ed" value="DW" id="know_DW" />
    <label for="know_DW">Dreamweaver</label>
</div>
  

<div>
<input type="checkbox" name="ed" value="WP" id="know_WP" />
<label for="know_WP">WordPress</label>
</div>

 <div>
<input type="checkbox" name="ed" value="BBE" id="know_BBEdit" />
   <label for="know_BBEdit">BBEdit</label>
</div>

<div>
<input type="checkbox" name="ed" value="Other" id="know_other" />
    <label for="know_other">Other</label>
</div>

</fieldset>



 <div class="clearfix">
  <label for="location"><strong>Where do you live?     (City And State)</strong></label>
<input type="text" name="live" id="location" placeholder="City and State" />
</div>





 <fieldset class="clearfix">

<p><strong>Are you likely to be using what you learn here...</strong></p>

<div>
<input type="radio" name="where" value="work" id="at_work" />
<label for="at_work">at work</label>
</div>

<div>
<input type="radio" name="where" value="home" id="at_home"/>
 <label for="at_home">at home</label>
</div>

<div>
<input type="radio" name="where" value="both" id="at_both" />
 <label for="at_both">both?</label>
</div>

</fieldset>





 <fieldset class="clearfix">

  <p><strong>Which of the following Operating Systems are you most
    likely to be using while taking this class?</strong></p>

<div>
<input type="checkbox" name="os" value="mac" id="mac" />
<label for="mac">Mac</label>
</div>

<div>
<input type="checkbox" name="os" value="win" id="win" />
<label for="win">Windows</label>
</div>

<div>
<input type="checkbox" name="os" value="lnx" id="linux" />
<label for="linux">Linux</label>
</div>

<div>
<input type="checkbox" name="os" value="other" id="other_os" />
<label for="other_os">Otjer</label>
</div>

</fieldset>



 <fieldset class="clearfix">


 <p><strong>Will the skills you're about to learn be used primarily...</strong></p>

<div>
<input type="radio" name="skills_used" value="work" id="at_work_skills" />
    <label for="at_work_skills">at work</label>
</div>

<div>
<input type="radio" name="skills_used" value="home" id="at_home_skills" />
<label for="at_home_skills">at home</label>
</div>

<div>
<input type="radio" name="skills_used" value="both" id="at_both_skills" />
<label for="at_both_skills">both</label>
</div>

</fieldset>


 <fieldset class="clearfix spacing">

<p><strong>Have you ever taken an online class?</strong></p>

<div>
<input type="radio" name="taken_before" value="yes" id="before_yes" />
    <label for="before_yes">Yes</label>
</div>

<div>
<input type="radio" name="taken_before" value="no" id="before_no" />
 <label for="before_no">No</label><br/>
</div>

</fieldset>



 <div class="clearfix">

<label for="taking_class"><strong>Why are you taking this class?</strong></label><br />
<textarea name="why_taking" cols="30" rows="4" id="taking_class"></textarea>

</div>



 <fieldset class="clearfix">

 <p><strong>May I subscribe you to my Joy Of Code Blog? That way you will know when I have posted something new to my blog which is about the web and web design.</strong></p>


<div>
<input type="radio" name="joy_gems" value="yes" checked="checked" id="subscribe_yes" />
  <label for="subscribe_yes">Yes</label>
</div>

<div>
<input type="radio" name="joy_gems" value="no" id="subscribe_no" />
<label for="subscribe_no">No</label>
</div>

</fieldset>



  <input type="submit" name="Submit" value="Submit" id="submit"  style="margin-top:15px;" />

<p>(If you hit the submit button and you're not taken to the next page then please
  copy and paste my questions and your answers and send them to me via email.)</p>
  
  
  </div><!-- end say hello -->

</form>






</section>

<?php
include("side_bar.php");
?>

</div>  <!-- ned clearfix -->

   

<?php
include("../includes/footer.php");
?>


</div> <!-- end wrapper -->

</body>

</html>



