<!DOCTYPE html>

<html>

<head>

<title>Appendix D  - Files And Folders - What's In A Name?</title>

<meta charset="utf-8" />


<link rel="stylesheet" href="../styles/styles.css" />


</head>

<body>

<div id="wrapper">

<?php require( "../includes/header.php" ); ?>

<div class="clearfix">

<section id="main">


<h1>Appendix D:<br />Files And Folders - What's In A Name?</h1>



<p>If you're not familiar with folders and files, that is, how information is organized on a computer, now's the time to learn. Files and folders are the basic building blocks - the information architecture - not just of your computer, but of web sites too.</p>

    <p>Files, as you must know, are the most basic elements in the information hierarchy. 
    One of the primary characteristics of files is that, not only does the data 
    vary from file to file, but so too the file format. There are different types 
    of file formats - Word Docs (.doc), Excel Spreadsheets (.xls), Rich Text Files 
    (.rtf), Plain Text (.txt) and, of course, Web Pages (.htm or .html).</p>

  <p>Files are stored in folders, a/k/a directories. Folders may contain one
    file, many files, and/or other folders (commonly referred to as sub-folders).
    If things are organized as the computer gods prefer), your folders and files
  will form a nice hierarchy that moves from the general to the specific.</p>
  
  <h2>From The General To The Specific</h2>

  <p>Pay attention. <em>Moves from the general to the specific</em>. That is a 
    core concept in information architecture. That concept is found everywhere.</p>

<p>For example, I've used Adobe's Dreamweaver as my web authoring
tool back in my Windows days. On my hard drive the executable file (like the
  key to launch the program) was found in a path that is:</p>

<p>C:\Program Files\Authoring Tools\Adobe\Dreamweaver MX 2004\dreamweaver.exe</p>
  <p>C is the Hard Drive letter and Program Files is a very general folder. From
     there, we get a bit more specific - the Authoring Tools sub-folder. Then
    we  move to yet something more specific - the name of one company which makes
     such tools - Adobe. That company makes many tools, Dreamweaver MX 2004 
    being one of them, and in that folder is a file, among many others, called
     dreamweaver.exe. That last folder - Dreamweaver MX 2004 also contains sub-folders,
     each of which belong to the Dreamweaver program.</p>

<p>Why am I telling you this? "Who cares?," you ask. You do...and
so do I.</p>

  <p>This Dreamweaver example illustrates the movement from the general to the 
    specific. Notice the direction is left to right. These are constants on your 
    computer and many other operating systems. It is how information is stored 
    throughout the Internet.</p>

  <p>I realize that some have trouble with this idea of an information architecture
     hierarchy but, whether you like it or not, such is the way information is
     organized on your computer (or should be) and on the servers which serve
    up web pages.</p>
  <p>The general to specific hierarchy forms the basis of how good web sites are 
    organized. Understanding that concept, and how to write and use path statements 
    (as in the Dreamweaver example), is absolutely essential in order to create 
    web sites. Take note that there are two kinds of path statements - absolute 
    path statements and relative path statements.</p>
  <h2>Absolute Path Statements</h2>
  <p>So when you see a web address, a/k/a a URL (Uniform Resource Locator), what 
    are you looking at? The path statement to a particular file (web page).</p>
  <p>Take the path statement of the fictitious http://www.thingamabobs.com/. You're 
    looking at the Home Page of a site called thingamabobs.com. The Home Page 
    file is most likely index.html, so what you're really seeing is http://www.thingamabobs.com/index.html. 
    You don't see the filename index.html because most web browsers are configured 
    to not display the filename of the Home Page. Why? Don't worry about that. 
    But trust me.</p>
  <p>So you click on through the thingamabobs.com site. You come to another page 
    with a URL that looks like this:</p>

  <p>http://www.thingamabobs.com/products/widgets.html.</p>
  <p> What's this? Where are you now?</p>
  <p>You're still in thingamabobs.com land, but you've drilled down to a file
    below  the Home Page. In fact, you're now in a sub-folder called products,
    where  presumably are kept all the .html files that pertain to products
    that the  thingamabob.com company offers. Each product has a page, and the
    page you're  now looking at deals with widgets. If you were looking for gadgets,
    you might  be looking at http://www.thingamabobs.com/products/gadgets.html.</p>
  <p>What you are seeing is how a particular file (it doesn't have to be an .html 
    file) resides within a particular site. I normally look at the filename first 
    (the rightmost part of the URL), and then work my way backwards, right to 
    left, until I see the domain name - like www.thingamabobs.com. When I do it 
    that way, I am moving from the specific (the single file) to the top, the 
    most general (the entire domain).</p>
    
  <p>Absolute path statements provide all of the information about the location 
    of a file on the web and are used when linking to sites other than your own.</p>
    
  <h2>Relative Path Statements</h2>
  <p>When I make links to pages within a site (domain)I am working on, I use <em>relative</em> 
    path statements. These are partial path statements, in that they refer to
       a file RELATIVE to the root of the location of another file - the file
      in  which I am currently working on.</p>
  <p> Suppose I'm the webmaster of the thingamabobs.com site. From the home page 
    (index.html) I want to create a link to the widgets.html page. To do so, I 
    use a relative path statement. In my index.html file, I make my link to the 
    widgets page like this:</p>
  <p><code>&lt;a href=&quot;products/widgets.html&quot;&gt;</code>See Our Fabulous 
    Widgets<code>&lt;/a&gt;</code></p>
  <p>The location to widgets.html is RELATIVE to the file I am working on (index.html). 
    Widgets.html is in a sub-folder called products, hence the path statement 
    &quot;products/widgets.html.&quot; The products sub-folder and the index.html 
    file are in the same general (root) folder for my thingamabobs.com site.</p>
  <p>However, if someone wished to link to this page from another domain they
    would have needed to use an absolute path statement. Here is what they'd
    need to spell out in their code:  </p>
  <p><code>&lt;a href=&quot;http://www.thingamabob.com/products/widgets.html&quot;&gt;</code>See 
    Great Widgets<code>&lt;/a&gt;</code>  </p>
  <h2>Path Statements Are Important</h2>
  <p>Got the idea? Absolute path statements are full URLs and are used when we 
    need to link to a site other than our own. Relative path statements are partial URLs 
    and are used for files within the site we are working on.</p>
  <p>Why is all this so important? Because as you learn how to create links in
     Chapter 5, or how to embed images in Chapter 6, or how to refer to any file,
    you need to understand the location of files, so that you can make web sites.
    It is that fundamental. Understand this concept, and you've just turned a
    big corner.</p>

  <p>You'll get the hang of it the more you learn and work with HTML.</p>
  <p>Oh, before I forget, you are not looking at an error. Referring to files 
    on my computer, I use a back slash, as in \. Referring to files on a network 
    (like the Internet), we use a forward slash, as in /.</p>

  <p>In case you were wondering, HTTP stands for Hyper Text Transfer Protocol.
     The Internet uses lots of different Protocols. The protocol, in this case,
     is a set of rules governing the transfer of  documents across a network.</p>

</section>

</div>  <!-- end clearix -->

<?php require( "../includes/footer.php" ); ?>

</div><!-- end wrapper -->


</body>
</html>


