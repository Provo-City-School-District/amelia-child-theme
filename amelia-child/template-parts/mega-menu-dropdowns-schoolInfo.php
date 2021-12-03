<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h3>
			<?php
		}	
	?>
		<ul>
			
			<li class="int"><a href="https://amelia.provo.edu/calendar/">Amelia Earhart Calendar</a></li>
			<li class="int"><a href="https://amelia.provo.edu/district-school-year-calendar/">District Events Calendar</a></li>
					
		</ul>
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/parents.svg" alt="" />Parent Resources</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/parents.svg" alt="" />Parent Resources</h3>
			<?php
		}	
	?>		
		<ul>
			<li class="int"><a href="https://amelia.provo.edu/study-at-home/">Study At Home</a></li>
			<li class="ext"><a href="https://grades.provo.edu/public/">PowerSchool (Grades & Attendance)</a></li>
			<li class="int"><a href="https://amelia.provo.edu/faculty-staff/teachers-directory/">Classrooms</a></li>
			<li class="ext"><a href="https://www.canyoncreeksoftware.com/scheduler/ut/provo/">SEP Conference Online Scheduler</a></li>
		</ul>
		<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Visitor Management System</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Visitor Management System</h3>
			<?php
		}	
	?>		
		<ul>
			<li class="int"><a href="https://amelia.provo.edu/wp-content/uploads/2021/04/Visitor-Management-System-English.mp4">Visitor Management System English</a></li>
			<li class="int"><a href="https://amelia.provo.edu/wp-content/uploads/2021/04/Visitor-Management-System-Spanish.mp4">Visitor Management System Spanish</a></li>
			<li class="int"><a href="https://amelia.provo.edu/wp-content/uploads/2021/04/Movie.mp4">Principal's Announcement</a></li>
		</ul>
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />About Amelia Earhart</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />About Amelia Earhart</h3>
			<?php
		}	
	?>
	
		<ul>
			<li class="int"><a href="https://amelia.provo.edu/school-information/contact-our-school/">Contact Our School</a></li>
			<li class="int"><a href="https://amelia.provo.edu/school-information/school-profile/">School Profile</a></li>
            <li class="int"><a href="https://amelia.provo.edu/school-information/school-hours/">Hours of Operation &amp; Daily Schedule</a></li>
        <!--    <li class="pdf"><a href="https://amelia.provo.edu/wp-content/uploads/2018/11/Amelia_Earhart-Achievement-Data.pdf">Achievement Data</a></li> -->
            <li class="int"><a href="https://amelia.provo.edu/school-information/community-council/">School Community Council (SCC)</a></li>
            <li class="int"><a href="https://provo.edu/transportation/find-your-bus-route/">Bus Routes</a></li>
            <li class="int"><a href="https://amelia.provo.edu/school-information/parent-teacher-association/">PTA</a></li>
			<li class="int"><a href="https://amelia.provo.edu/school-information/volunteer-opportunities/">Volunteer Opportunities</a></li>
			<li class="int"><a href="https://amelia.provo.edu/school-information/walking-to-school/">Walking to School</a></li>
			<li class="int"><a href="https://amelia.provo.edu/school-information/before-after-school-program/">Before &amp; After School Program</a></li>
			<li class="int"><a href="https://amelia.provo.edu/school-information/stem/">STEM Fair</a></li>
		</ul>
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-meals.svg" alt="" />School Meals</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-meals.svg" alt="" />School Meals</h3>
			<?php
		}	
	?>
		<ul>
			<?php
				$cnmenuhandle = curl_init();
				$cnmenuurl = "https://globalassets.provo.edu/globalpages/childNutritionMenu.php";
				// Set the url
				curl_setopt($cnmenuhandle, CURLOPT_URL, $cnmenuurl);
				// Set the result output to be a string.
				curl_setopt($cnmenuhandle, CURLOPT_RETURNTRANSFER, true);
				$cnmenuoutput = curl_exec($cnmenuhandle);
				// close the curl connection
				curl_close($cnmenuhandle); 
				echo $cnmenuoutput;
			?>
		</ul>
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Media Center</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Media Center</h3>
			<?php
		}	
	?>
	
		<ul>
			<li class="int"><a href="https://amelia.provo.edu/school-information/media-center/">Media Center</a></li>
			<li class="int"><a href="https://onlinelibrary.uen.org/">Utah's Online Library</a></li>
			<li class="int"><a href="https://utahsonlinelibrary.overdrive.com/library/kids">Overdrive</a></li>
		</ul>
</div>
