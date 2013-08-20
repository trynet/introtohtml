<!DOCTYPE html>

<html>


<head>

<title>Lesson 6: Images And Videos</title>

<meta charset="utf-8" />

   <link rel="icon" href="../images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="../images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="../images/favicon.png" type="image/png"/>

   <link rel="stylesheet" href="../styles/styles.css" />

<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->


</script>
</head>

<body onLoad="MM_preloadImages('../images/homeroom_button_over.gif')">




<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">


<ul id="breadcrumbs">
<li><a href="10.html">Lesson 6: Images And Videos</a></li>
</ul>

<h1>Whatever Happened To...?</h1>
<p class="moreon">I'm not going to spend much time with these outdated practices
  of how embedded images have been used in the past. Here are two methods of
  using images that have gone the way of AOL.</p>
<p class="moreon">I'm speaking in past tense here for good reason.</p>
<h2 class="moreon">Image Maps</h2>
<p class="moreon">Before the widespread use of CSS to create navigation interfaces,
  image maps were all the rage.</p>
<p>An image map allowed users to reach various web pages when a defined area
  within the image - a Hot Spot - was selected. It was a very well known navigation
  interface.</p>
<p>While there were (and still are) many tools and techniques which create image
  maps, the result is about the same - different areas of the image were mapped
  with X and Y coordinates.</p>
<p>Once your image is ready, you  need a tool - an application such as Dreamweaver,
  Fireworks or Mapedit - to make the designated areas of the image associate
  with a URL.</p>
<p>As you designate Hot Spots, each tool generates the code which specifies
  the areas as the X and Y coordinates.</p>
<p class="exs">Here I am using image map in the predecessor of this class.</p>

        <p class="exs">Example Of An Image Map</p>
        
        
<p class="views2">Code View</p>
<p><code>&lt;img src=&quot;images/image_map_ex_1.gif&quot;&quot;  usemap=&quot;#hotspotsdemo1&quot; 
  
  alt=&quot;&quot; /&gt;</code></p>
<p><code>&lt;!--</code> This following information is completely unseen in Browser
  View, but is necessary to make the Image Map work <code>--&gt;</code><br />
  <br />
  <code>&lt;map name=&quot;hotspotsdemo1&quot;&gt;<br />
  &lt;area shape=&quot;rect&quot; coords=&quot;25,6,117,27&quot; href=&quot;#&quot; 
    
    alt=&quot;Home Room&quot; /&gt;<br />
  &lt;area shape=&quot;rect&quot; coords=&quot;158,6,250,27&quot; href=&quot;#&quot; 
    
    alt=&quot;Front Office&quot; /&gt;<br />
  &lt;area shape=&quot;rect&quot; coords=&quot;298,6,390,27&quot; href=&quot;#&quot; 
    
    alt=&quot;Work Space&quot; /&gt;<br />
  &lt;/map&gt;</code></p>
<p class="views2">Browser View</p>

<p><img src="../images/image_map_ex_2.gif" alt="Example Of Image Map Showing Mapped Areas" width="400" height="35" /></p>



<p><img src="../images/image_map_ex_1.gif"  width="400" height="34"  usemap="#hotspotsdemo1" alt="" />
  <map name="hotspotsdemo1" id="hotspotsdemo1">
    <area shape="rect" coords="25,6,117,27" href="#" alt="Home Room" />
    <area shape="rect" coords="158,6,250,27" href="#" alt="Front Office" />
    <area shape="rect" coords="298,6,390,27" href="#" alt="Work Space" />
  </map>
</p>






<p class="exs">The first image shows you where the hot spots are. The second
image is what students saw.</p>
<h2 class="moreon">Rollovers</h2>
<p class="moreon">Remember when you hovered over a clickable image and it's appearance
  would change?</p>
<p class="moreon">Here is what I mean.</p>

        <p class="exs">Example Of An  Image Rollover</p>
        
        
<p class="views2">Code View</p>
<p class="moreon">Forget about it. It's such a pile of Javascript you don't want
  to see it it, believe me!!</p>
<p class="views2">Browser View</p>


<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Demo','','../images/homeroom_button_over.gif',1)"><img src="../images/homeroom_button.gif" alt="Home Room" name="Demo"></a>






<p class="moreon">The link doesn't work but the rollover does when you hover
  over the image.</p>
<h2 class="moreon">Can I Still Use Image Maps And Rollovers?</h2>
<p class="moreon">Yes, you can but don't. These, like the <code>&lt;frame&gt;</code>, <code>&lt;font&gt;</code> and
   <code>&lt;center&gt;</code> tags, are deprecated practices. There is no need to use Image
  Maps or Rollovers anymore as the effect they have achieved has been more than
  adequately replaced by using CSS.</p>
<p class="moreon">And that's a good thing!!</p>

        




<a id="next" href="70.html">Next</a>



</section>


<?php include("../includes/sidebar.php");
print_sidebar(6,6);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>






