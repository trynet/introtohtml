<aside id="sidebar">

   <header>
      <h1>Front Office</h1>
   </header>
   
   <nav>
   
      <ol>
   
		<?php

			// if the current page is 'index', then deisplay without link
         if ( basename($_SERVER['REQUEST_URI']) == 'index.html' || basename($_SERVER['REQUEST_URI']) == 'index.php' )
				echo '<li><strong>Announcements</strong></li>';
			else // not 'index', so display link
				echo '<li><a href="index.html">Announcements</a></li>';
			
			// if the current page is 'welcome', then deisplay without link
         if ( basename($_SERVER['REQUEST_URI']) == 'welcome.html' || basename($_SERVER['REQUEST_URI']) == 'welcome.php' )
				echo '<li><strong>Welcome</strong></li>';
			else // not 'say_hello', so display link
				echo '<li><a href="welcome.html">Welcome</a></li>';
				
			// add more nav items here
      
      ?>
   
   	</ol>
   
   </nav>

</aside>