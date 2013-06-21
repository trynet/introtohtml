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


			// if the current page is 'this_class', then deisplay without link
         if ( basename($_SERVER['REQUEST_URI']) == 'this_class.html' || basename($_SERVER['REQUEST_URI']) == 'this_class.php' )
				echo '<li><strong>About This Class</strong></li>';
			else // not 'say_hello', so display link
				echo '<li><a href="this_class.html">About This Class</a></li>';


			// if the current page is 'learning_css', then deisplay without link
         if ( basename($_SERVER['REQUEST_URI']) == 'learning_css.html' || basename($_SERVER['REQUEST_URI']) == 'learning_css.php' )
				echo '<li><strong>Learning CSS</strong></li>';
			else // not 'say_hello', so display link
				echo '<li><a href="learning_css.html">Learning CSS</a></li>';

		// if the current page is 'say_hello', then deisplay without link
         if ( basename($_SERVER['REQUEST_URI']) == 'say_hello.html' || basename($_SERVER['REQUEST_URI']) == 'say_hello.php' )
				echo '<li><strong>Say Hello</strong></li>';
			else // not 'say_hello', so display link
				echo '<li><a href="say_hello.html">Say Hello</a></li>';

		// if the current page is 'schedule', then deisplay without link
         if ( basename($_SERVER['REQUEST_URI']) == 'schedule.html' || basename($_SERVER['REQUEST_URI']) == 'schedule.php' )
				echo '<li><strong>Schedule</strong></li>';
			else // not 'schedule', so display link
				echo '<li><a href="schedule.html">Schedule</a></li>';

		// if the current page is 'change_schedule', then deisplay without link
         if ( basename($_SERVER['REQUEST_URI']) == 'change_schedule.html' || basename($_SERVER['REQUEST_URI']) == 'change_schedule.php' )
				echo '<li><strong>Change Your Schedule</strong></li>';
			else // not 'schedule', so display link
				echo '<li><a href="change_schedule.html">Change Your Schedule</a></li>';


		// if the current page is 'overtime', then deisplay without link
         if ( basename($_SERVER['REQUEST_URI']) == 'overtime.html' || basename($_SERVER['REQUEST_URI']) == 'overtime.php' )
				echo '<li><strong>Overtime</strong></li>';
			else // not 'schedule', so display link
				echo '<li><a href="overtime.html">Overtime</a></li>';


		// if the current page is 'faq', then deisplay without link
         if ( basename($_SERVER['REQUEST_URI']) == 'faq.html' || basename($_SERVER['REQUEST_URI']) == 'faq.php' )
				echo '<li><strong>FAQ</strong></li>';
			else // not 'schedule', so display link
				echo '<li><a href="faq.html">FAQ</a></li>';

		// if the current page is 'tos', then deisplay without link
         if ( basename($_SERVER['REQUEST_URI']) == 'tos.html' || basename($_SERVER['REQUEST_URI']) == 'tos.php' )
				echo '<li><strong>Terms Of Service</strong></li>';
			else // not 'schedule', so display link
				echo '<li><a href="tos.html">Terms Of Service</a></li>';

		// if the current page is 'bookstore', then deisplay without link
         if ( basename($_SERVER['REQUEST_URI']) == 'bookstore.html' || basename($_SERVER['REQUEST_URI']) == 'bookstore.php' )
				echo '<li><strong>Bookstore</strong></li>';
			else // not 'schedule', so display link
				echo '<li><a href="bookstore.html">Bookstore</a></li>';


		// if the current page is 'social_contacts', then deisplay without link
         if ( basename($_SERVER['REQUEST_URI']) == 'social_contacts.html' || basename($_SERVER['REQUEST_URI']) == 'social_contacts.php' )
				echo '<li><strong>I\'m Social, How \'Bout You?</strong></li>';
			else // not 'schedule', so display link
				echo '<li><a href="social_contacts.html">I\'m Social, How \'Bout You?</a></li>';


				
			// add more nav items here
      
      ?>
   
   	</ol>
   
   </nav>

</aside>