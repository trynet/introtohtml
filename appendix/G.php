
<!DOCTYPE html>

<html>

<head>

<title>Appendix G  - Takeaways</title>

<meta charset="utf-8" />


<link rel="stylesheet" href="../styles/styles.css" />


</head>

<body>

<div id="wrapper">

<?php require( "../includes/header.php" ); ?>

<div class="clearfix">

<section id="main">


     <h1>Appendix G:<br />
       Takeaways
     </h1>
  <p>At last I get to say a few things that have been on my mind and should serve
  to put a big bow on this class. These takeaways will reinforce and remind
    you to always use the best practices that you have learned in this class.</p>
    
    
  <h2>Separate Structure From Style</h2>
<p>If you aren't aware of the idea that you have to separate structure from style,
  then I don't know where you've been. The division is like the separation of
  church and state.</p>
<p>If a web page were a house, HTML would be the roof, floors, walls and basement
  without decoration. CSS would be the color of the walls, the wallpaper, window
  treatments, floor tiling and other decorative elements. You can easily strip
  out and change the style, but to change the structure of a house, like adding
  new rooms - that's another matter. And so it is with web design.</p>
<p>The idea that these two things are separate is not just found in web design.
  It is really everywhere - in architecture, in product design, in the world
  of art.</p>

<h2> Use HTML (And CSS) Correctly </h2>
<p>Of course, the way to separate structure from style is to use HTML and CSS
  for what they were made to do in this world. Never use HTML for what you mistakenly
  think are its presentational properties. The truth is, HTML really has no
  presentational properties.  The size and type of fonts, the fact that heading
  tags are bold and that list items have markers to name just a few things are
  all set with CSS.</p>
<p>If you're stumped over separation, then ask yourself if you are using HTML
   for a style or presentational purpose. For example, you might say, &quot;Hey,
  I can indent something from the edge of the browser by using the blockquote
  container.&quot; If you're about to do that, stop and ask yourself just what
  is blockquote for? It's to offset text when used as a quotation, not just to
  move content to the right of an edge. That's a style matter and for that use
  text-indent:10px, for example.</p>

<h2> Validate Early And Often</h2>
<p>I cannot tell you how important it is to validate your HTML (and CSS once
  you work with it) as you go through your workflow process. You will learn how
  frequently you need to do this.</p>
<p>Certainly you'll want to test your files after making major changes, but you
  might not wait that long to test things out. As you get better at markup, you'll
  find you won't have to validate as often as you did when you were just starting
  out. Validation is a great teacher (better than me) and, with time, you'll
  know that something is good or bad code before you test.</p>
<p>There are many other types of validation services, available at no charge,
  that will check your pages for accessibility, links, browser compatibility,
  download speed, and even whether your colors could cause confusion for color
  blind users. Pretty amazing tools that we can use to assure quality control.</p>
<h2> Use The alt Attribute</h2>
<p>About 80% of all web sites would be made accessible to the largest possible
  audience if web creators would just remember to use the alt attribute for every
  embedded image. And, it just so happens that forgetting alt will guarantee
  that you will fail every type of validation service that's out there. Providing
  text equivalents for every non-text element is the prime directive of accessible
  design.</p>
<p>Remember to use a brief description of the image, something you might say
  if you were talking to someone on the phone about what the image is. Something
  like, alt=&quot;Photo of Grandma when she was 45.&quot; If the graphic contains
  text elements, then use that word (or words) as the value to alt.</p>
<p>This is not just to serve the needs of those who use assistive technologies,
  such as screen readers, to read aloud the alt descriptions of images - worthy though that purpose might be. Providing alternative text descriptions
  is a part of the search engine optimization process, something many people
  are keen on doing. For those devices that don't support images, or have the
  image download feature turned off, the user will at least be able to read the
  description.</p>


<h2> Less Is More</h2>
<p>The beauty in creating superior design lies, not in how much code you can
  use, but in how little is required. The less you use, the smaller your files
  will be, and the faster they will download to users' computers. Not to mention
  that your web pages will be easier to edit because you'll be able to find what
  you're looking for a lot easier. There won't be a clutter of unnecessary markup
  to wade through.</p>
<p>That's from the code side of the coin. I also believe that less is more when
  it comes to what the user sees on the page. People don't read general sites
  (yes, this is an exception), so use lists and blurbs everywhere to accommodate
  the fact that people scan text when screen reading.</p>
<p>The more I've learned about web design, the more I've come to appreciate that
  what's important is the control and placement of white space, and not what
  you fill up a page with. White space allows designs to breathe naturally and
  gives the eye a chance to rest. Sort of like in music when you hear silence
  between the notes.</p>
<p>A  Joy Of Code is that Less Is More. </p>


  
  <hr />
<h2>Now, A Special Look Behind The Scenes To See How JOC Was Made</h2>
<p>Having made it all the way to the end, and with a good understanding of what
   HTML   is, I just had to give you a behind the scenes look at how I
   created this class.</p>
  <p>The most important factor is that, in this class I practiced what I preached.
     There was no way I was going to tell you to do it one way, while I was going
     to do something else. What it really came down to was adhering to web standards
     and using the specifications set forth by the World Wide Web Consortium.</p>
  <p>Still, there are some things I want to share that would not be obvious merely
     by looking at my source code or validating my pages. Knowing code is hardly
    the only skill required in making sites. It's also very much about development
     techniques and technology.</p>
  <h3>Headers And Footers</h3>
  <p>You may have observed a similarity in the header and footer elements used
    on every page. </p>
  <p>Rather than have the code for these elements typed into each .html file,
     I used <strong>Server Side Includes</strong>. That's the ability to use
     a  separate .html file whose content is pulled into each page.</p>
  <p>Each header (and footer) has its own .html file. Take a <a href="../incl_header_example.php">look
       at this header file</a>. Now look at the source code. You'll notice that
    it's just the the markup for the banner image and the navigation interface
       at the top of each page. There is no html, head, or body tags in the file.
       It's as if I had cut this out of this page and had pasted it into a separate
       .html file which I named &quot;incl_header.html.&quot;</p>
  <p>Which is exactly what I did. Then I used the file - incl_header.html - for
    every page in the class.</p>
  <p>To use the included file, each page needed a special code - a link - so that 
    the header file would be included into the page. That code is :</p>
  <p><code>&lt;!--#include file=&quot;incl_header.html&quot;--&gt;</code></p>
  <p>This code is placed in my .html file just at the point where I want the
    header  content to go. Yes, file=&quot;&quot; is the attribute for a path
    statement. </p>
  <p>When I look at the code of a chapter or lab page on my computer, the contents 
    of incl_header.html will not be visible. Only the include statement will be 
    in the code. The only time the content of incl_header.html is visible is when 
    I request the page to be downloaded from my server   and open it in my browser. 
    When that happens, all the elements of the page - the images, the external 
    .css file, plus the &quot;included&quot; file, are downloaded as well.</p>
  <p>What other benefit is there to using includes? When the time comes to change
     the header for the class, all I will do is edit incl_header.html. Instead
     of going into many .html files, it will only take my handiwork on one file,
     and the pages for the entire workshop will be updated.</p>
  <p>How cool!!</p>
  <p>Another nice thing about included files? They are cached in your computer 
    just like images and style sheets. When you request a new page, those files 
    don't have to be downloaded again   since   you already have them.</p>
  <p>Does every web server support the ability to use Server Side Includes? No. 
    You have to check with your web hosting service to see if they do, but it's 
    a pretty common practice.</p>

<h3>The Publishing System</h3>
  <p>Each week you saw that links were &quot;exposed&quot; (made active) based
     upon what week you were working on. When you were in week 5, you were doing
     Lesson 5 and Lab 5. You had access to that content and all previous content,
     but not future content. The same principle was applied to the Appendices.
     Links were made active only to present (and past) material. The links to
    the  future content for weeks 6 and beyond were inactive.</p>
  <p>How was that done?</p>
  <p>This class uses Perl, one of the web's most widely used programming languages.
     It was my programmer who wrote the code (script) that did what I designed.
     The publishing system was based on the first day that you logged in. That
     day kicked off the weekiversary system. The first time you logged in, a
    file  was created on the server that contained your information and generated
    the  dates that would start each new week for you.</p>
  <p>Again we used server side includes. The Lesson and Lab links in the Home
     Room are one include. Another include is the Appendix links. Also, the first
    page of each Lesson had an include which was the list of links to each Lesson
    on the right side.</p>
  <p>These includes were the Perl scripts. These Perl files contain the programming
    instructions and the html markup. When I need to make changes, it's fairly
    easy.   Since   I know html and, if I follow some of the special conventions that
    Perl requires, I usually won't mess things up. It's when I start playing around
    with Perl that things can get a little dicey!!</p>
  <h3>Work Space Folders</h3>
  <p>The area where your files were uploaded, the Work Space, was the most complex 
    part of the site. My programmer did all the hard work. I just had to tell 
    her what I wanted.</p>
  <p>There's more to it than I could possibly explain, but when you logged in
    for the first time, your email address was used to create your own folder.
    If your name was bud@joyofcode.com, she programmatically changed it so that
    the folder would be named &quot;bud_joyofcode_com.&quot; The image subfolder
    which included the images for this class were also created at the same time.</p>
  <h3>Front Office Tricks</h3>
  <p>I asked you to read the announcements in the Front Office to get things
    started.  Each announcement was its own server side include. I didn't write
    or upload  anything. The 10 announcement files have been in the server all
    along and  when the new week started, it was a Perl script that allowed the
    content to  be revealed. </p>
  <p>Also, take a look at the navigation within the Front Office. Any page you're 
    on in the Front Office does not have its link exposed, so that you can't select 
    it. That list of links is also a server side include generated by Perl. 
    I did that one myself, but it took me a while - proving, once again, that 
    I'm no programmer.</p>
  <h3>Hands Off</h3>
  <p>The class was designed so that it runs with the least amount of intervention
    on my part. That frees me up     to administer the course, and   lets me
     spend maximum time with you!!</p>
  <p>It's all based on modularity, so that repetitive content can be easily replaced
    and updated in the most efficient way.</p>
  <p>That's the way you want to build your sites as you move beyond Joy Of Code.
    And with some time, you will!!</p>



</section>

</div>  
<!-- end clearix -->


<?php require( "../includes/footer.php" ); ?>


</div> 
<!-- end wrapper -->


</body>
</html>


