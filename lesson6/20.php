<!DOCTYPE html>

<html>


<head>

<title>Lesson 6: Images And Videos</title>

<meta charset="utf-8" />

   <link rel="icon" href="../images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="../images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="../images/favicon.png" type="image/png"/>

   <link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">


<ul id="breadcrumbs">
<li><a href="10.html">Lesson 6: Images And Videos</a></li>
</ul>

<h1>Web Image Formats</h1>


        <p>The two most widely used image formats for the web are the Graphic 

          Interchange Format (.gif) and the Joint Photographic Experts Group (.jpeg 

          or .jpg).</p>

<table>

          <caption>

          Comparisons Between .gif and .jpg Formats 

          </caption>
          
                          <colgroup>
<col id="left" />
<col id="center" />
<col id="right" />
</colgroup>
  

          <tr class="grayhead"> 

            <th>CHARACTERISTICS</th>

            <th>GIF</th>

            <th >JPG</th>

          </tr>

<tr>

            <th>Used For:</th>

            <td>Logos<br />

              Text<br />

              Line Art<br />

              Images with few colors<br />

              Images with large blocks of solid color</td>

            <td>Photographs<br />

              Images with "continuous tone" color</td>

          </tr>

          <tr class="grayband"> 

            <th>File Type:</th>

            <td>ASCII</td>

            <td>Binary</td>

          </tr>

   <tr>

            <th>No. Of Possible Colors:</th>

            <td>2 to 256 colors <br />

              (1-bit to 8-bit)</td>

            <td>16.7 million colors<br />

              (24-bit)</td>

          </tr>

          <tr class="grayband"> 

            <th>Variable Compression Level?</th>

            <td>NO - but images with fewer colors will result in a smaller file 

              size.</td>

            <td>YES - but image quality is relative to file size.</td>

          </tr>

<tr>

            <th>Type Of Compression:</th>

            <td>Lossless<br />

              (image does not lose quality)</td>

            <td>Lossy<br />

              (image detail is lost to make the file size smaller)</td>

          </tr>

          <tr  class="grayband"> 

            <th>Progressive Loading?</th>

            <td>Yes<br />

              (known as an Interlaced GIF)</td>

            <td>Yes<br />

              (known as Progressive JPEG)</td>

          </tr>

<tr>

            <th>Transparency Supported?</th>

            <td>Yes</td>

            <td>No</td>

          </tr>

          <tr  class="grayband"> 

            <th>Supports Animation?</th>

            <td>Yes</td>

            <td>No</td>

          </tr>

        </table>
        
        
        <p>When I got started with images, how did I remember some very basic ideas about file formats? </p>        

<ul>
                <li>
                 The "G" in GIF stands for Graphics. If the image was originally 

                  created on a computer, it will probably work better as a GIF.</li>

                  <li>"P" in JPEG stands for Photograph. If the image was originally 

                  a photo, it will probably work better as a JPEG.
          </li>
          
</ul>

   
          <p>Don't fret over not understanding all the above terms. I just wanted 
            to expose you to some of this. You might learn about lossy, color 
            depth, and compression some other time.</p>
            
            
            <h2>What About the .png Format?</h2>
            
            <p>Good question.  Even after all these years I've rarely used the
              Portable Network Graphic for any web page. For a long time browsers
              did not  universally support the .png format but they do now.
The W3C gives us a pretty good <a href="http://www.w3.org/QA/Tips/png-gif">explanation
of the GIF and the PNG</a></p>


<a id="next" href="30.html">Learn More Now</a>


</section>


<?php include("../includes/sidebar.php");
print_sidebar(6,2);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>





