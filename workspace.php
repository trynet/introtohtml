<?php
require_once 'app/config/config.php';
echo '<pre><a href="logout.php">reset</a>';
print_r($_SESSION['Zend_Auth']['progress']);
echo '</pre>';
?>

<!DOCTYPE html>
<html>
<head>
   <title>Intro To HTML :: Workspace</title>
   <link rel="stylesheet" href="styles/styles.css" />
   <link rel="stylesheet" href="app/includes/style.css" type="text/css" />
   <script type="text/javascript" src="app/includes/jquery-1.10.2.min.js"></script>
</head>

<body>

   <div id="wrapper">
      <header>
         <img src="images/header.png" alt="" />
         <nav>
            <ul>
               <li><a href="index.html">Home Room</a></li>
               <li><a href="frontoffice">Front Office</a></li>
               <li><a href="code_tester.html">Code Testers</a></li>
               <li><strong>Work </strong></li>
            </ul>
         </nav>
      </header>

      <div class="clearfix">

         <section id="main">

            <h1> Work Space</h1>

            <a href="../app/controllers/progress.php?proceed=0">Proceed to next lesson (wait for Bud)</a><br />
            <a href="../app/controllers/progress.php?proceed=1">Proceed to next lesson (at my own pace)</a>

            <p>Work Space is your dedicated place to post your Lab  files for
            me to review and make my comments. <a href="#notes">See detailed notes</a>
            on using Work Space.</p>

            <!-- upload form -->
            <form name="" enctype="multipart/form-data" method="post" action="app/controllers/workspace.php">
               <input type="hidden" name="action" value="uploadfile" />
               <p><b>Step 1</b> Locate the file from your computer that you want to upload
               to your workspace.</p>
               <input type="file" name="fileupload" />

               <p><b>Step 2</b> Type in the filename that you are going to upload. This
               should be the same filename as you've just chosen to upload. For example,
               index.html.</p>
               <input type="text" name="filename" />

               <input type="submit" name="submit" value="Upload File">
            </form>
            <!-- end upload form -->


            <!-- file admin -->
            <form name="" enctype="multipart/form-data" method="post" action="app/controllers/workspace.php">
               <input type="hidden" name="action" value="adminfile" />
               <table width="80%" cellspacing="0" cellpadding="5" align="center">
                  <tr>
                     <th class="cellbottom">Delete</th>
                     <th class="cellbottom" colspan="2">
                        Location of Files and Folders:<br>
                        You are in the Root folder
                     </th>
                     <th class="cellbottom">File Size</th>
                     <th class="cellbottom">Date Uploaded</th>
                  </tr>
                  <tr valign="top">
                     <td align="right"></td>
                     <td align="" colspan="4">
                        <img width="22" border="0" height="22" src="images/dir.gif" />
                        <a href="">images</a>
                     </td>
                  </tr>
                  <?php ?>
               </table> 
            </form>
            <!-- end file admin -->

            <ol>
               <li>
                  <p>Wherever you are in this class when you select Work Space at the
                  top or bottom of any page, you'll be coming this way. Work Space
                  is set up exactly like computer files and folders are set up on most
                  computers..</p>
                  <p>On this page you will be uploading your .html files for me to review.
                  You can only upload a file with a .html extension.</p>
                  <p>The images folder contains all the files you need for this class so there
                  is nothing for you to upload there.</p>
               </li>
               <li>
                  <p>Uploading a file is simple and something you're familiar with.
                  In <strong>Step 1</strong>, select the Browse button and then navigate
                  to the location of your file. For example, suppose you have a folder
                  on your desktop called Labs (something you should do for your Lab
                  files) with a file in it called index.html. Locate the Labs folder
                  and then select index.html, choose Open, and away you go. Step 1
                  is done.</p>
               </li>
               <li>
                  <p>For <strong>Step 2</strong>, you must type in the filename that
                  you chose in Step 1 (including the extension) which in our example
                  would be "index.html" (without the quotation marks). Select the
                  Upload File button. Do you see the filename which is hyper linked?
                  You did it!!</p>

                  <p>When you click on the filename link, a browser window will pop up
                  and you'll see your file. That's magic.</p>

                  <p>As will be explained early and often, please save your creativity
                  when it comes to naming files. Use the filenames that I specify. <strong>Stick
                  with these rules:</strong> Filenames must be lowercase and without
                  any spacing between characters. Make sure to use file extensions,
                  e.g., .html, .gif, .css. You're not going very far without those principles,
                  trust me.</p>
               </li>
               <li>
                  <p>If you mess something up, don't worry because we have all kinds
                  of  built-in prompts to assist you with uploading and managing your
                  files.</p>
               </li>
               <li>
                  <p>To delete any file, just tap on the trash can icon
                  <img src="../images/delete.gif" alt="Trash Can Icon" width="22" height="22" />
                  preceding the filename, then follow the instructions.</p>
               </li>
               <li>
                  <p>Here are some other things to keep in mind:</p>
                  <ul>
                     <li>There is no way to delete folders, rename folders or make new folders.</li>
                     <li>There's no way to upload more than one file at a time.</li>
                     <li>
                        <strong>If you upload a file with the exact same filename as
                        an existing file, you will be asked if you want to overwrite
                        the existing file. If so, the old file will be deleted
                        automatically and replaced with your new one. This is exactly
                        what you want to do as you move forward with each Lab!!</strong>
                     </li>
                  </ul>
               </li>
            </ol>               
         </section>

      </div> <!-- end class clearfix -->

      <footer>
         <nav>
            <ul>
               <li><a href="index.html">Home Room</a> </li> |
               <li><a href="frontoffice/">Front Office</a> </li> |
               <li><a href="code_tester.html">Code Tester</a></li> |
               <li><a href="workspace.php">Work Space</a> </li>
            </ul>
         </nav>

         <div id="end">&copy; <?php echo date('Y') ?> TryNet, Inc. All Rights Reserved.</div>
      </footer>

</body>

</html>
