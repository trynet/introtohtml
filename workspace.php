<?php
require_once 'app/config/config.php';

// create workspace object and get user data
$workspaceObj = new Workspace();
$files = $workspaceObj->getWorkspaceData(USER_ID);

// if CLASSROOM user, disable this workspace
if (USERTYPE == USER_CLASSROOM) {
   echo '<p>You do not have permissions to view this page. Please return to the <a href="index.html">Home Room</a>.';
   exit();
}

// error message if file uploaded erroneous
$error = $_GET['error'];
if (!empty($error))
   $error_message = '<p style="color: red">There was an error uploading your file. Please try again</p>';

// debug data -- delete on production
echo '<pre><a href="logout.php">reset</a><br>';
print_r($DEBUG);
echo '</pre>';
?>

<!DOCTYPE html>
<html>
<head>
   <title>Work Space</title>

   <link rel="icon" href="images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="images/favicon.png" type="image/png"/>
   

   <link rel="stylesheet" href="styles/styles.css" />
   <script type="text/javascript" src="app/includes/jquery-1.10.2.min.js"></script>
</head>

<body>

   <div id="wrapper">
      <header>
         <img src="images/header.png" alt="" />
         <nav>
            <ul class="nav nav-pills">
               <li><a href="index.html"><i class="icon-home"></i>Home Room</a></li>
               <li><a href="frontoffice"><i class="icon-info-sign"></i>Front Office</a></li>
               <li><a href="code_tester.html"><i class="icon-pencil"></i>Code Testers</a></li>
               <li class="current"><a href="workspace.html"><i class="icon-cog"></i><strong>Work  Space</strong></a>
               </li>
               <li><a href="/logout.php"><i class="icon-off"></i>Sign Out</a></li>
            </ul>
         </nav>
      </header>

      <div class="clearfix">

         <section id="main">

            <h1> Work Space</h1>
            
         
            <p>Work Space is your dedicated place to post your Lab  files for
            me to review and make my comments by email. <a href="#notes">See detailed notes</a>
            on using Work Space.</p>
            

            <!-- upload form -->
           <form name="" enctype="multipart/form-data" method="post" action="app/controllers/workspace.php" class="form-horizontal">
            
               <input type="hidden" name="action" value="uploadfile" />
               
             <p><!--b>Step 1</b--> Locate the file from your computer that you want to upload
             to your Work Space.</p>
               
                  <div class="control-group">
    <label class="control-label" for="findFile">Find Your File</label>
    <div class="controls">
       <div class="input-prepend">
<span class="add-on"><i class="icon-eye-open"></i></span>
<!--    <input type="text" id="findFile" name="firstName" placeholder="First Name" class="input-medium">-->
      <input type="file" id="findFile" name="fileupload" />
    </div>
    </div>
    </div>
               
       <!--      <input type="file" name="fileupload" />-->

               <!--
               <p><b>Step 2</b> Type in the filename that you are going to upload. This
               should be the same filename as you've just chosen to upload. For example,
               index.html.</p>
               <input type="text" name="filename" />
               -->

               
                   <div class="control-group">
    <div class="controls">

    <button type="submit" name="submit" value="Upload File" class="btn btn-primary"><i class="icon-upload icon-white"></i> Upload To Work Space</button>
    </div>
    </div>
               
<!--               <input type="submit" name="submit" value="Upload File">-->
               
           </form>
            
            <!-- end upload form -->
            
            
            


            <!-- file admin -->
          <form name="" enctype="multipart/form-data" method="post" action="app/controllers/workspace.php">
               <input type="hidden" name="action" value="adminfile" />
               
               <div class="thumbnail MarBottom15 PadBottom15">
               
              <?php echo $error_message ?>

            <?php if ($workspaceObj->minFilesUploaded()) : ?>
            
            

            
            <p><strong><?php echo $firstname ?></strong>, now that you have finished this lab you need to make a command decision. Do you...</p>
            
                        <hr/>
            
         <p>Are you feeling pretty good about things and are ready to go on to the next Lesson?<br>
         <a href="../app/index.php?proceed=1"><i class="icon-check"></i>Yes, Bud, this is what I want to do</a>.</p>
         
         <p><strong>OR</strong></p>
         
                  <p>Do you prefer  to wait for me to review your page(s) within 48 hours<br>
         <a href="../app/index.php?proceed=0"><i class="icon-check"></i>Yes, I want this</a>.</p>
         

         
            <?php else : ?>
            <p>You need to upload <strong><?php echo $workspaceObj->filesNeededToProceed() ?></strong> more file(s) before you can go on to learn more cool stuff!!</p>
            <?php endif ?>
            
            </div>

         </form>
         
<h2>Your Uploaded Files</h2>

<p>(You won't see any files here until you upload a file.  Makes sense, right?)
</p>


               <table class="table" cellspacing="0" cellpadding="5">
                  <tr>
                     <th class="cellbottom">Delete</th>
                  <th class="cellbottom">
                        File Name</th>
                   <!--  <th class="cellbottom">File Size</th>-->
                     <th class="cellbottom">Date Uploaded</th>
                 </tr>
                     
         <!--         </tr>
                  <tr valign="top">
                     <td align="right"></td>
                     <td align="" colspan="4">
                        <img width="22" border="0" height="22" src="images/dir.gif" />
                        <a href="">images</a>
                     </td>
                  </tr>-->
                  <?php foreach ($files as $file) : ?>
                  <tr valign="top">
                  <td>
                        <a href="app/controllers/workspace.php?a=delete&file=<?php echo $file['filename'] ?>"><img border="0" src="../images/delete.gif"></a>
                     </td>
                  
                     <td><a target="_blank" href="<?php echo $file['url'] ?>"><?php echo $file['filename'] ?></a></td>
           <!--       <td><?php echo $file['filesize'] ?></td>-->
            <td><?php echo $file['date'] ?></td>
                  </tr>
                  <?php endforeach ?>
               </table> 
 
            <!-- end file admin -->

<h2 id="notes">How To Use Your Work Space</h2>

<p>I think it's pretty intuitive but who am I say?  So here's some advice.</p>

            <ol>
               <li>
                  <p>Wherever you are in this class when you select Work Space at the
                  top or bottom of any page, you'll be coming this way. Work Space
                  is set up exactly like computer files and folders are set up on most
                  computers..</p>
                  <p>On this page you will be uploading your .html files for me to review.
                  You can only upload a file with a .html extension. Don't even try anything else because I rigged it that way.</p>
</li>
               <li>
                  <p>Uploading a file is simple and something you're familiar with.                  Just select the &quot;Browser (or &quot;Choose File&quot;) button above. Locate your file in the dialog box. Hit (but be nice) the Open (or similar) button. The name of  your file will probably show up on this page. Then tap on that &quot;Upload To Work Space&quot; button and your file will appear in your Work Space.</p>
               </li>
               <li>
<p>When you click on the filename link, a browser window will pop up
                 and you'll see your file. That's magic.</p>

                  <p>As will be explained early and often, please save your creativity
                  when it comes to naming files. Use the filenames that I specify. <strong>Stick
                  with these rules:</strong> Filenames must be lowercase and without
                  any spacing between characters. Make sure to give your file the .html extension so that a web browser will know that it is dealing with a web doc.</p>
               </li>
               <li>
                  <p>To delete any file, just tap on the trash can icon
                  <img src="../images/delete.gif" alt="Trash Can Icon" width="22" height="22" />
                  preceding the filename and poof -- all gone!!</p>
               </li>
               
               <li>
                 <p>What about images? We won't get into that until Lesson 6 but don't you worry. If you follow my instructions in  Lab 6 when you upload your .html files you'll see that your images will show up in your Work Space web pages automagicvally!!</p></li>
               
               
               <li>
                  <p>Here are some other things to keep in mind:</p>
                  <ul>
                     <li>There's no way to upload more than one file at a time.</li>
                     <li>
                        <strong>If you upload a file with the exact same filename as
                        an existing file the old file will be deleted
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
