<!DOCTYPE html>

<html>


<head>

<title>Lesson 7: Forms</title>

<meta charset="utf-8" />

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


 <h1> The form Tag</h1>
 <p>Form objects are used to collect user-supplied information. All of the form
   objects you're about to learn - text boxes, radio buttons, check boxes, submit
 buttons, textarea, and select menus - have to be placed inside the <code>&lt;form&gt;</code> <code>&lt;/form&gt;</code> container. </p>
 <p>Form has several attributes. Two of the most important are <code>method</code> and <code>action</code>. </p>
 
 
<table>

   <caption>
     TForm Attributes
   </caption>
   
                   <colgroup>
<col id="left" />
<col id="center" />
<col id="right" />
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
     <td><code>method</code></td>
     <td><code>post<br />
       </code>or<code><br />
         get</code></td>
     <td><p>Starts a data transfer process.</p>
       <p><code>method="post"</code></p></td>
   </tr>
   
   <tr  class="grayband">
     <td><code>action</code></td>
     <td>Location of a script which performs an action on the data submitted
       by the user.</td>
     <td><p>Path statement to a script (mini program) which parses the data received
         by the server, and performs an action (or series of actions).</p>
       <p><code>action="cgi-bin/formdata.cgi"</code></p></td>
   </tr>
   
</tbody>
 </table>

<ol>
       <li>
         <p>A typical way you might see these attributes used would be something
           like<br />
           <code>&lt;form method=&quot;post&quot; 	   	    action=&quot;cgi-bin/formdata.cgi&quot;&gt;</code>.</p>
       </li>
       <li>
         <p>Without <code>method</code> and <code>action</code>, nothing will
           happen when the user hits the Submit button on the page. That is,
           the data the user has supplied by completing the form will go nowhere.</p>
       </li>
       <li>
       <p>The <code>action</code> attribute is what makes a form work. In our
         example, once the data is received by the server, formdata.cgi (a fictitious
           file) will handle (parse) the data and perform actions it was programmed
           to do.</p>
         <p>The .cgi file stands for Common Gateway Interface. It will have some
           program or scripting language in it so that processes, like some or
           all of the following, can be performed:</p>
       </li>
       <li>
         <ul>
           <li>organize the user's submitted data and store it in a file</li>
           <li>begin the process of creating a web page on the fly with the submitted
             data</li>
           <li>start the authorization and settlement for online payment</li>
           <li> trigger an email to be sent to the user</li>
         </ul>
    </li>
     </ol>
     

<a id="next" href="30.html">On  To More Good Stuff</a>

</section>


<?php include("../includes/sidebar.php");
print_sidebar(7,2);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>


