<!DOCTYPE html>

<html>


<head>

<title>Work Space 1</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />


</head>

<body>

<div id="wrapper">

<header>

<img src="../images/header.png"  alt="Joy Of Code Intor To HTML" />

<nav>
<ul>


<li><a href="../index.html">Home Room</a></li>
<li><a href="../frontoffice">Front Office</a></li>
<li><a href="../code_tester.html">Code Tester</a></li>
<li><strong>Work </strong></li>

</ul>
</nav>

</header>

<div class="clearfix">

<section id="main">

<h1>Work Space</h1>


  
  <p>Work Space is your dedicated place to post your Labs and Project files for 
    me to review and make my comments. <a href="#notes">See detailed notes</a> 
    on using Work Space.</p>

<?php
//phpinfo();

/*
$perl = new Perl();
$perl->require("../../cgi-bin/ws1_incl_workspace.pl");
*/
?>

  <!--
    
  include virtual="../../cgi-bin/ws1_incl_workspace.pl" -->

 <ol>
          <li>Wherever you are in Joy Of Code when you select Work Space at the 
            top of the page, you'll be coming this way. Work Space is set up exactly 
            like computer files and folders are set up on most computers. You're 
            presently in the Root Folder (like the "C Drive" in Windows computers). 
            <br />
            <br />
            In this (Root) folder, you'll be uploading your Lab files for Labs 
            1 - 5. Labs 6 and beyond have you uploading files to the Root, as well 
            as the Images and Styles sub-folders. <br />
            <br />
            The Project folder is like another root folder, in that it contains 
            its own Images and Styles sub-folders. These sub-folders are to be 
            used only for your Project.<br />
            <br />
          </li>
          <li>In the Root and Project folders, you can only upload a file with a
            .html (or .htm) extension. If you're in an Images sub-folder you can 
            only upload files with a .gif, .jpg (or .jpeg) extension. If you're 
            in a Styles sub-folder, you can only upload files ending with .css.<br />
            <br />
          </li>
          <li>Uploading a file is simple and something you're familiar with. In 
            <strong>Step 1</strong>, select the Browse button and then navigate 
            to the location of your file. For example, suppose you have a folder 
            on your desktop called JOC (something you should do for your Lab files) 
            with a file in it called index.html. Locate the JOC folder and then 
            select index.html, choose Open, and away you go. Step 1 is done. <br />
            <br />
          </li>
          <li>For <strong>Step 2</strong>, you must type in the filename that 
            you chose in Step 1 (including the extension) which in our example 
            would be "index.html" (without the quotation marks). Select the Upload File
            button. Do you see the filename which is hyperlinked? You did it!!<br />
            <br />
            When you click on the filename link, a browser window will pop up 
            and you'll see your file. That's magic.<br />
            <br />
            As will be explained early and often, please save your creativity 
            when it comes to naming files. Use the filenames that I specify. <strong>Stick 
            with these rules:</strong> Filenames must be lowercase and without 
            any spacing between characters. Make sure to use file extensions, 
            e.g., .html, .gif, .css. You're not going very far without those principles, 
            trust me.<br />
            <br />
          </li>
          <li>If you mess something up, don't worry because we have all kinds 
            of  built-in prompts to assist you with uploading and managing your 
            files.<br />
            <br />
          </li>
          <li>To delete any file, just tap on the trash can icon <img src="../images/delete.gif" alt="Trash Can Icon" width="22" height="22" /> 
            preceding the filename, then follow the instructions.<br />
            <br />
          </li><li>Here are some other things to keep in mind:<br />
            <br />
          </li>
          <li style="display:inline;"> 
            <ul>
             
              <li>There is no way to delete folders, rename folders or make new 
                folders.</li>
              <li>There's no way to upload more than one file at a time.</li>

              <li>If you upload a file with the exact same filename as an 
existing file, you will be asked if you want to overwrite the existing file. 
  If so,  the old file
                will be deleted automatically and replaced with your new 
one.</li>




              <li>You cannot upload any one file greater than 150 KB. The 
                total size of Work Space is 5 megabytes. This is plenty of space for 
                your Joy Of Code needs.</li>
            </ul>
          </li>
        </ol>




</section>




</div>  <!-- ned clearfix -->

<?php require("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

