<!DOCTYPE html>


<html>


<head>



<title>Lab 6 - First Embeds - Directions</title>



<meta charset="utf-8" />


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

<h1 class="lab-header">Lab 6: First Embeds</h1>
<p>At last we get to the matter of embedding images and videos into our pages.
  In the case of images, our code will reference an image file for a given page.
  For the two videos, it's going to be a copy and paste job. You'll see.</p>
  
    <div class="thumbnail">
  
<img src="images/peek.jpg" alt="Sneak A Peek " class="peek" />


  <p>Here's where you will wind up after you've got all the images and videos
     inserted into your web pages. Look at this <a href="labs/6/index.html" target="_blank">home
    page</a>. A work in progress but a thing of beauty!!</p>
  <p>Download these <a href="dl/images.zip">images.zip file</a>, then extract
    all the files into the images folder. Keep this folder as a subfolder where
    your 5 html files are located.</p>
    
    </div>
    
    
<h2>Step 1: Embed the image used as part of the header for each file.</h2>
  <p>Start with index.html. We will be referring to (embedding) the file named
    &quot;strip.jpg.&quot; This file, like all of our image files, is located
    in a subfolder &quot;images&quot; to where the 5 html files are located.
  Locating media assets in subfolders is a common web development practice. It keeps your site organized.</p>
  <p>Right after:</p>
  <p><code>&lt;h2&gt;</code>Getting Addicted To Growing Good Things To Eat<code>&lt;/h2&gt;</code></p>
<p>add this code which will embed the strip image.</p>
  <p><code>&lt;img src=&quot;images/strip.jpg&quot; alt=&quot;Photo Strip Of Images
  From My Garden&quot;  /&gt;</code></p>
  <p>The <code>src</code> attribute tells the browser where the image file is located. The
    <code>alt</code> attribute is a brief text description of the image.</p>
  <p>Save the file. Does the image show up in your browser? Pretty cool, huh?</p>
  <p>Now add this code to the other four files so that each file has the strip
    image near the top of the page in the proper order (after the Heading 1 and
    2 elements then the image).</p>
  <p>With index.html open in your text editor ,let's add that picture of me slaving
    over my garden.</p>
  <p>Add the code for the image of me just after:</p>
  <p><code>&lt;p&gt;</code>Do you like working in the yard?<code>&lt;/p&gt;</code></p>
  <p>The file name is &quot;<code>bud_hoeing.jpg</code>&quot; The text for the
    alt attribute is &quot;<code>Photo Of Bud Hoeing In Garden</code>.&quot; You
    should be able to do this using the pattern of embedding the image strip
    described above.</p>
<p>If you aren't sure about this, look at the source code of my page.</p>
<p>How did you do? If you got both of theses images into index.html, it's time
  to move on.</p>
<h2>Step 2: Add the tiller image to prep.html.</h2>
<p>This is a lot like adding the image of me in index.html.</p>
<p>This time, just after:</p>
<p><code>&lt;p&gt;</code>Once the soil is tilled and replenished the worst is
over and the fun can get started. Time to visit the nursery.<code>&lt;/p&gt;</code></p>
<p>embed the <code>&quot;tiller.jpg</code>&quot; image. The alt text description is &quot;<code>Photo
  Of A Tiller.</code>&quot;</p>
<p>That's it. Save your file and take a look.</p>
<h2>Step 3: Add the video and 7 images to plant.html.</h2>
<p>Since we haven't done a video yet, let's start with the dessert and work our
  way back to the main course when we add all the images.</p>
<p>Just after:</p>
<p><code>&lt;p&gt;</code>You'll love this video of Arlene, hard at work, sowing
the breakfast radish seeds.<code>&lt;/p&gt;</code></p>
<p>copy and paste the code that I got from YouTube. This is something you can
  do with virtually every Youtube video. This time make sure that you copy and
  paste this!!</p>
<p>But before you do here is a little video I did on how to get the embed code
  from YouTube. (Unless you were out getting popcorn you might have just seen
  this.)</p>

<object width="640" height="360"><param name="movie" value="http://www.youtube.com/v/uX7wgVWpUGw?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/uX7wgVWpUGw?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="640" height="360" allowscriptaccess="always" allowfullscreen="true"></embed></object>



<p><code>&lt;object width=&quot;480&quot; height=&quot;390&quot;&gt; 
&lt;param name=&quot;movie&quot; <br>
value=&quot;http://www.youtube.com/v/kAaAecXPLhY?version=3&amp;amp;hl=en_US&amp;amp;rel=0&quot;&gt;<br>
&lt;/param&gt;&lt;param
  name=&quot;allowFullScreen&quot; value=&quot;true&quot;&gt;&lt;/param&gt;<br>
  &lt;param
  name=&quot;allowscriptaccess&quot; value=&quot;always&quot;&gt;&lt;/param&gt;<br>
  &lt;embed
src=&quot;http://www.youtube.com/v/kAaAecXPLhY?version=3&amp;amp;hl=en_US&amp;amp;rel=0&quot; <br>
type=&quot;application/x-shockwave-flash&quot; width=&quot;480&quot; height=&quot;390&quot; <br>allowscriptaccess=&quot;always&quot; allowfullscreen=&quot;true&quot;&gt;&lt;/embed&gt;&lt;/object&gt;</code></p>
<br>
<p>NOTE: With this code your page will not validate! See the comment I made in
  the source code of my file as to the reason why this is so. But you still need
  to validate the page so just add <code>&lt;!-- </code>and<code> --&gt;</code> around
  the video code when
  you check your file. After everything checks out you can remove<code>&lt;!-- </code>and<code> --&gt;</code> so
  you can see the video.</p>
<hr />


 <p>For the 7 images in this page I will give you the:</p>
 <ul>
   <li>filename</li>
   <li>alternative text description</li>
   <li>and where the code for the image goes</li>
 </ul>
 <p>and that's it. You don't need me to tell you how to embed an image because
   at this point you should already know how to do that.</p>
 <p>Starting from the top and working your way down the page here we go.</p>
 <table width="100%" border="0">
   <tr>
     <th scope="col">Filename</th>
     <th scope="col">Alt Text Description</th>
     <th scope="col">Insert Image Markup After</th>
   </tr>
   <tr>
     <td>nursery.jpg</td>
     <td>Arlene Picking Tomato Plants At The Nursery</td>
     <td><code>&lt;h1&gt;</code>Planting The Garden<code>&lt;/h1&gt;</code></td>
   </tr>
   <tr>
     <td>herbs.jpg</td>
     <td>Photo Of Herbs In Garden</td>
     <td><code>&lt;p&gt;</code>Some herbs are perennials so we leave them in the ground (like chives) but most of these we just plant every year:<code>&lt;/p&gt;</code></td>
   </tr>
   <tr>
     <td>cherries.jpg</td>
     <td>Photo Of Ripe Cherry Tomatoes</td>
     <td><code>&lt;p&gt;</code>We always plant these vegetables because most
     of them are not as good as they used to be when you buy them at the store.<code>&lt;/p&gt;</code></td>
   </tr>
   <tr>
     <td>no_plant.jpg</td>
     <td>Lettuce And Carrots With No Symbol</td>
     <td><code>&lt;p&gt;</code>But here is what we never get because they're
       either easy and cheap to buy at the store and they taste (sort of) like
       vegetables, take up too much space in the garden or the little critters
       eat them and I'm not much for growing the food other than for my family
     and friends.<code>&lt;/p&gt;</code></td>
   </tr>
   <tr>
     <td>overview_top.gif</td>
     <td>Illustration Of Where Tomatoes, Peppers And Seeds Go</td>
     <td><code>&lt;p&gt;</code>When I talk about "laying out the garden" before everything is planted it's just my way to organize what will go where. After all these years I know what plants, like tomatoes, need the most sunlight and which ones, like zucchinis, can stand the shade.<code>&lt;/p&gt;</code></td>
   </tr>
   <tr>
     <td>overview_bot.gif</td>
     <td>Illustration Of Where Zucchini, Herbs And Strawberries Go</td>
     <td><code>&lt;p&gt;</code>This gives you a rough idea where the plants go.
       Give your plants as much space as you can. Overcrowding will give you
       a very poor yield. Roots need space to grow and so do the leafy parts
     of your plants.<code>&lt;/p&gt;</code></td>
   </tr>
   <tr>
     <td>cages.jpg</td>
     <td>Photo Of Tomato Cages</td>
     <td><code>&lt;h2&gt;</code>In A Few Weeks<code>&lt;/h2&gt;</code></td>
   </tr>
 </table>
 <h2>Step 4: Add the video to harvest.html.</h2>
 
 <p>This should be very familiar because you just did this in plant.html.</p>
 <p>Just below:</p>
 <p><code>&lt;p&gt;</code>When you pick and eat a fresh tomato you realize why it's called a fruit. Nothing like eating a sun drenched cherry tomato right from the vine. But here I'm picking an Early Girl.<code>&lt;/p&gt;</code></p>
 <p>copy and paste this video code.</p>
 <p><code>&lt;object width=&quot;640&quot; height=&quot;390&quot;&gt;&lt;param name=&quot;movie&quot; <br>value=&quot;http://www.youtube.com/v/iDWwzfJeYQk?version=3&amp;amp;hl=en_US&amp;amp;rel=0&quot;&gt;&lt;/param&gt;<br>&lt;param
   name=&quot;allowFullScreen&quot; value=&quot;true&quot;&gt;&lt;/param&gt;<br>&lt;param
   name=&quot;allowscriptaccess&quot; value=&quot;always&quot;&gt;&lt;/param&gt;&lt;embed
 width=&quot;640&quot; height=&quot;390&quot; <br>src=&quot;http://www.youtube.com/v/iDWwzfJeYQk?version=3&amp;amp;hl=en_US&amp;amp;rel=0&quot; <br>type=&quot;application/x-shockwave-flash&quot;  <br>allowscriptaccess=&quot;always&quot; allowfullscreen=&quot;true&quot;&gt;&lt;/embed&gt;&lt;/object&gt;</code></p>
 <p>And just like the other page, this page won't validate with that code so comment
   out this stuff like you did with the other video before you validate this
    page.</p>


</section>

</div>  <!-- ned clearfix -->

<?php include("includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

