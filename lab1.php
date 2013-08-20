<!DOCTYPE html>


<html>


<head>



<title>Lab 1 - Hello World - Directions</title>


   <link rel="icon" href="images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="images/favicon.png" type="image/png"/>

<link rel="stylesheet" href="styles/styles.css" />




</head>

<body>

<div id="wrapper">

<?php include("includes/header.php"); ?>

<div class="clearfix">

<section id="main">


<h1 class="lab-header">Lab 1:  Hello World</h1>

 <p>This being Lab 1, we'll take things nice and easy just to get rolling.</p>

  <p>We're going to follow a time honored tradition of creating a &quot;Hello
    

    World&quot; page. (We get to the meat and potatoes of Joy
    

    Of Code:Intro To HTML in the next Lesson.) If what you're about to do seems pretty easy,
    that's fine. 

    We're just going to make a very simple page and then load it to your Work
    

    Space. This will be like kicking  in the tires of a new car.</p>

  <p>If you don't know much about multi-tasking, please read <a href="appendix/B.html">Appendix
      

    B - Multi-tasking a/k/a Doing The Application Shuffle</a>. In this lab
    - and for most of the other Labs - you will be moving between 

    two applications that share the same file.</p>

  <p>To keep things simple, 

    close other browser windows and text editors that you don't need. You may
    print

    these directions to make it easier, or just leave this window open as
    you

work on your first page in another browser window.</p>

<img src="images/peek.jpg" alt="Sneak A Peek " class="peek" />


  <p>Go ahead and look at the source code of my <a href="labs/1/hello.html" target="_blank">Hello
      World  page </a>because that will help you do this Lab. To see how to
      look at the source code, read 
    
<a href="#more"><strong>more about my sneak a peek pages</strong></a> below.</p>

  <p>Here's <a href="lesson1/10.html">Lesson  1 - The Basics</a> if you need to
go back to it.

<h2><a name="vid"></a>Some Getting Started Videos</h2>
<p>Even though these are fairly old videos that were made for the earlier XHTML
  version of this class, they still get the job done.</p>


<p>Here's a video on how to work with Notepad to make web pages. You'll see how
to use Notepad to edit a page and then look at that page in any web browser.</p>



<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="400" height="318">
    <param name="movie" value="http://content.screencast.com/bootstrap.swf" />

    <param name="quality" value="high" />
    <param name="bgcolor" value="#FFFFFF" />
    <param name="flashVars" value="thumb=http://content.screencast.com/media/ced4f000-9e2b-45e8-80f6-d1a563b71ea7_52f1ff7e-5eed-4231-b28d-5743162ade15_static_0_0_Thumbnail.gif&content=http://content.screencast.com/media/653d5a6a-bc9e-4752-bb42-06a6039230fb_52f1ff7e-5eed-4231-b28d-5743162ade15_static_0_0_Using%20Notepad%20To%20Make%20A%20Simple%20Web%20Page.swf&width=400&height=318" />
    <param name="allowFullScreen" value="true" />
    <param name="scale" value="showall" />

    <param name="allowScriptAccess" value="always" />
    <embed src="http://content.screencast.com/bootstrap.swf" quality="high" bgcolor="#FFFFFF" width="400" height="318" type="application/x-shockwave-flash" allowscriptaccess="always" flashvars="thumb=http://content.screencast.com/media/ced4f000-9e2b-45e8-80f6-d1a563b71ea7_52f1ff7e-5eed-4231-b28d-5743162ade15_static_0_0_Thumbnail.gif&content=http://content.screencast.com/media/653d5a6a-bc9e-4752-bb42-06a6039230fb_52f1ff7e-5eed-4231-b28d-5743162ade15_static_0_0_Using%20Notepad%20To%20Make%20A%20Simple%20Web%20Page.swf&width=400&height=318" allowfullscreen="true" scale="showall"></embed>
</object>

<hr />

<p><strong>Must See Video For Mac People</strong></p>

<p>Here's a video for Mac users that shows you how to modify TextEdit to use
  it to make web pages.</p>
<iframe width="420" height="315" src="http://www.youtube.com/embed/PBmKyy-BaqY" frameborder="0" allowfullscreen></iframe>

  
<p><strong>Don't Forget - If You Are Using Text Edit...</strong></p>

  
  <p>You <strong>must</strong> change your Rich Text editing processing choices
  (find them under TextEdit's Preferences) so that the checkbox next to the words &quot;Ignore
  rich text commands in HTML files&quot; 
  is checked. The checkbox next to the words &quot;Ignore rich text commands
  in RTF files&quot; should be <strong>unchecked</strong>. If you don't do this,
  you're going to get mad at me because you won't be able to do this Lab - or
  any other Lab. I don't want you to be mad at me!!</p>
  <p>With the changes made to the default Preference settings you are good to
    go.</p>
<p><strong>NOTE:</strong> If you don't like TextEdit, you can try <a href="http://www.barebones.com/products/textwrangler/">TextWrangler</a>,
  a free, general purpose text editor for Mac.</p>


<h2>Step 1: Add these  basic elements  for  all web pages  to a new document
  in your text editor.</h2>

<p>Use a basic Text Editor, such as Notepad 
  for Windows or TextEdit for the Mac, to create a .html file.</p>

        <p>With Notepad or TextEdit open,  add these basic tags that must
  go into every web page!!</p>

        <p><code>&lt;!DOCTYPE html&gt;</code></p>

<p><code>&lt;html&gt;</code></p>

        <p><code>&lt;head&gt;<br>
          &lt;meta charset=&quot;utf-8&quot; /&gt;        <br />

          &lt;title&gt;</code><code>&lt;/title&gt;<br />

&lt;/head&gt;</code></p>

        <p><code>&lt;body&gt;<br />

&lt;/body&gt;</code></p>

        <p><code>&lt;/html&gt;</code></p>

        <p>This  should look familiar because I went over it in <a href="../lesson1/10.html">Lesson
             

          1 - The Basics</a>. You're looking at a containerized markup system.
          

          Except for the DOCTYPE statement and the Meta tag, every &lt;start&gt; tag
                    has an &lt;/end&gt; tag. </p>

        <p>Go ahead and save your file and remember where it's located. You might
          want to start a folder on your Desktop and name it &quot;JOC Labs&quot; for
    this file and other files you'll make for all our Lab assignments.</p>

        <p>Name this file hello.html, and please, no creativity in naming your
          file. Do as I say and as I do, otherwise there will be problems - I
      can promise!!</p>

        <p>Save the file as ASCII type (or Text Document), which is the fancy
          way of saying plain old vanilla, no formatting please. MS-DOS text
          and similar non-formatting designations are okay too.</p>

        <p>For the encoding choices, make sure you choose ANSI. Other options,
          such as unicode, are not acceptable.</p>
        <p>Just to make sure, here's how the settings should look as you save
        the file for the first time in Notepad.</p>

        <p><img src="images/notepad_settings.gif" alt="Screen Shot Of Notepad Settings" width="460" height="87" style="border:1px #660000 solid;" /></p>
        <p>(This is  a pretty ancient image but it still serves its
        purpose).</p>
        <p>Save the file and away you go!!</p>
        <p>Now go and find the file in the new folder you created. Make sure
          you can see the .html file extension when you see the filename. If
          file extensions are hidden, unhide them. (For Windows users, navigate
          to Control Panel -&gt; Folder Options -&gt; View Tab -&gt; and see
        to it that &quot;Hide file extensions for known file types&quot; is          <strong>not
        checked</strong>).</p>
        <p>Go ahead and open your hello.html file. It should <a href="labs/1/blank.html">look
            like this one</a>.</p>
        <p>Yes, it's blank, sort of like a clean piece of paper that's waiting
          for you to work on it.</p>


<h2>Step 2: Add the <code>&lt;title&gt;</code> to your page.</h2>
            <p>With your file open in your browser, 

          go to View -&gt; Source and whadya know? Your file is in the browser

          and in Notepad at the same time!! (If you're not using Windows or Internet Explorer, that's not a problem. In one way or another, a text editor and a browser will  make this work.)
</p>

            <p>All you have to do now is to make your edits in your text editor and 
              
              you're on your way!!</p>
            <p>For the first edit, type in a title between the title container.</p>
            <p><code>&lt;title&gt;</code>Getting Started<code>&lt;/title&gt;</code></p>
<p>Save your file. Refresh (or Reload) your browser. Notice, at the very 
              
              top of the browser window, the title of your hello.html web page
  appears. The title also appears in a tab.</p>
              
              <h2>Step 3: Add some content to the <code>&lt;body&gt;</code> section
                of your page.
</h2>
              <p>Now let's get our two words - Hello 

          World - into our page. Using the <code>&lt;p&gt;</code> <code>&lt;/p&gt;</code> container,  place the two words in your file like this:</p>
              <p><code>&lt;body&gt;<br />
  &lt;p&gt;</code>Hello World<code>&lt;/p&gt;<br />
  &lt;/body&gt;</code></p>
<p>You may already have a good idea of how this works if you've tried the 
                
                Code Tester.</p>
                
                
                <h2>Step 4: See what you have done!!</h2>
                <p>If you haven't already, save your 

          text file.  Go back to your browser, then Reload (Refresh) the page.</p>
                <p>There it is. &quot;Hello World&quot;. </p>
                <p>You're on your way!!</p>
                
<h2>Step 5: Extra Credit</h2>
                
                
                
<p>Each lab is what I consider the 

          minimum you should be doing. Experimentation is not just a good idea

- it's the way you're going to learn how all the pieces fit together.</p>
<p>Try adding a second paragraph. You come up with
  the words. Say something
about Joy Of Code or yourself - I don't care what you say. Just wing it.
   Want to be brash, bold, and crazy? Give me a third paragraph. </p>
<p>Just remember the Golden Rule of HTML. Every open tag must be closed!!</p>

<hr/>

<p> When you're finished with &quot;Hello World,&quot; post your file - hello.html 
  
  - to your <a href="workspace/index.html">Work Space</a> so I can review it and 
  
  make comments. Make sure that your filename is in lowercase, has no spaces, 
  
  and has a .html extension.</p>
<p>If you think all the Labs are going to be layups like this one, forget it. This
  Lab is just here to help you get down the mechanics of the class.</p>

<hr>
<a name="more"></a>


<h2>Don't Miss This!!</h2>
<p>At the start of every Lab in this course is a Sneak A Peek banner that looks
  like this:</p>

<img src="images/peek.jpg" alt="Sneak A Peek " class="peek" />



<p>When you see this you'll seek a link that will give you access to how the
  page (or pages) should be after you are done with the Lab.</p>
<p>Of course, I want you to see the way the page is supposed to look, but more
  important is that I want you to look at (but not copy) my HTML source code.
  That way you'll see exactly how I made the page.</p>
<p>So how do you see the source code of my Sneak A Peek pages (or any page on the web for that matter)?</p>

<p>The answer depends upon the browser you are using. However, no matter what the browser, accessing the source code is done pretty much the same way.</p>
<p>So, if you're using Windows there are a few ways to do it.</p>
<ul>
  <li><strong>For Firefox:</strong>
    <ul>
      <li>In the menu bar go to View &gt; Page Source or </li>
      <li>just use CTRL + U if you like short cut keys or</li>
      <li> right click your mouse and go to View Page Source.</li>
    </ul>
  </li>
  <li><strong>For Internet Explorer: </strong>
    <ul>
      <li>In the menu bar go to View &gt;  Source and a window will open
        with the source code in it or</li>
      <li>right click your mouse and then go to  Source.</li>
    </ul>
  </li>
</ul>
<p>Here's a video showing you how to view the source code of any web page. It's
  pretty much the same no matter what browser or operating system you are using.</p>

<object width="480" height="360"><param name="movie" value="http://www.youtube.com/v/vTgQjo8UW3o?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/vTgQjo8UW3o?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="480" height="360" allowscriptaccess="always" allowfullscreen="true"></embed></object>

</section>

</div>  <!-- ned clearfix -->

<?php include("includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

