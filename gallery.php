<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <link rel="icon" type="image/png" href="images/logo.gif"/>
  <title>Team Rose Allstars</title>
  <meta name="description" content="An allstars team in Chicago area." />
  <meta name="keywords" content="Rose,Allstars, Basketball" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />

<body>
  <div id="main">

	<div id="menubar">
	  <div id="welcome">
	        <h1><img src="images/logo.gif" width="50" align="middle"/>  <a href="http://mytestweb.bugs3.com/TeamRoseAllstars/">Team Rose Allstars </a></h1>
	  </div><!--close welcome-->
      <div id="menu_items">
	    <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="news.php">Current News</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li class="current"><a href="gallery.php">Gallery</a></li>
        </ul>
      </div><!--close menu-->
    </div><!--close menubar-->	
    
	<div id="site_content">		
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>

 <script type="text/javascript">
 $(function() {
$(".thumb").click(function() {
var image = $(this).attr("rel");
$(".thumbs-strip").find('a').attr("id","not-current-thumb");
$(this).attr("id","current-thumb");
$('#image').hide();
$('#image').fadeIn('slow');
$('#image').attr("src", image);
return false;
	});
});

$(window).keyup (function (event) {
//standard keyup function so far, let's add the event
if (event.keyCode == 37) { // left arrow key
//must go to the previous element, this is going to be slightly complex
$('#current-thumb').parent().prev().find('a').click();

} else if (event.keyCode == 39){ // right arrow key
$('#current-thumb').parent().next().find('a').click();
}
});

</script>

<div class="gallery">
<h1>Our Team</h1>
<div class="main-image" >

<img id="image" src="images/1.jpeg"/>
</div>
<div class="thumbs-strip">

<li>

<a class="thumb" href="#" rel="images/1.jpeg">
<img src="images/1.jpeg" class="thumbnail" />
</a></li>
<li>
<a class="thumb" href="#" rel="images/2.jpeg">
<img src="images/2.jpeg" class="thumbnail" />
</a>
</li>
<li>
<a class="thumb" href="#" rel="images/3.jpeg">
<img src="images/3.jpeg" class="thumbnail" />
</a>
</li>
<li>
<a id="current-thumb" class="thumb" href="#" rel="images/4.jpeg">
<img src="images/4.jpeg" class="thumbnail" />
</a>
</li>
    
    <li>
<a id="current-thumb" class="thumb" href="#" rel="images/5.jpeg">
<img src="images/5.jpeg" class="thumbnail" />
</a>
</li>
    
    <li>

<a id="current-thumb" class="thumb" href="#" rel="images/6.JPG">
<img src="images/6.JPG" class="thumbnail" />
</a>
    </li>
    
    <li>

<a id="current-thumb" class="thumb" href="#" rel="images/7.JPG">
<img src="images/7.JPG" class="thumbnail" />
</a></li>
    
    <li>

<a id="current-thumb" class="thumb" href="#" rel="images/8.JPG">
<img src="images/8.JPG" class="thumbnail" />
</a></li>

  <li>

<a id="current-thumb" class="thumb" href="#" rel="images/10.JPG">
<img src="images/9.JPG" class="thumbnail" />
</a></li>

  <li>

<a id="current-thumb" class="thumb" href="#" rel="images/10.JPG">
<img src="images/10.JPG" class="thumbnail" />
</a></li>

  <li>

<a id="current-thumb" class="thumb" href="#" rel="images/11.JPG">
<img src="images/11.JPG" class="thumbnail" />
</a></li>
  
    <li>

<a id="current-thumb" class="thumb" href="#" rel="images/12.JPG">
<img src="images/12.JPG" class="thumbnail" />
</a></li>

  <li>

<a id="current-thumb" class="thumb" href="#" rel="images/13.JPG">
<img src="images/13.JPG" class="thumbnail" />
</a></li>

  <li>

<a id="current-thumb" class="thumb" href="#" rel="images/14.JPG">
<img src="images/14.JPG" class="thumbnail" />
</a></li>

  <li>

<a id="current-thumb" class="thumb" href="#" rel="images/15.JPG">
<img src="images/15.JPG" class="thumbnail" />
</a></li>

</div>
</div>

	

	   <div class="content_container">
		  
		  	<div class="button_small">
		      <a href="index.php">Home Page</a>
		    </div><!--close button_small-->
		  </div><!--close content_container-->
         
	    <br style="clear:both"/>
      </div><!--close content_blue--> 	
	</div><!--close site_content--> 
  
  </div><!--close main-->
  
  <div id="footer">
	<p class="copyright">
       Copyright &copy; <?php echo date("Y");?> Team Rose Allstars.All rights seserved.
   </p>
   <p class="copyright">If you have any questions, please feel free to email <a href="mailto:chicagotabletennisclub@gmail.com">webmaster</a>.</p>
  </div><!--close footer-->  
  
</body>
</html>
