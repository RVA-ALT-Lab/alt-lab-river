<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<div class="logo-abbr">FOTJ</div>

	</header><!-- .entry-header -->

	<div class="allofit">
		<div class="fotj-container">
			<?php echo river_header_images(); ?>
			
				<div class="foot-title">
					<?php 
					$broken_title = str_replace(" ","</br>",get_bloginfo('name'));
					echo $broken_title;
					 ;?>
				</div>
		</div>
		<div class="sub-title">The Natural and Human History of the James River Watershed</div>
		<div class="scroll-to-content-arrow">
		<a href="#homepage-content"><img src="<?php echo get_stylesheet_directory_uri();?>/imgs/arrow-down-white.svg"></a>
		</div>
		<div class="vert-path">
			<div class="fotj-sidebar">
				<div class="side-join-us">
					Come join us on our next VCU adventure down the James River
				</div>
				<div class="apply-button">
					<a href="https://docs.google.com/forms/d/1mhXoQ_UIpjR-OgzuI3P_LXHTaoHJ2E08RAH8uFrj4L8/"><button class=apply-now>Apply now</button></a>
				</div>
				<div class="deadline-date">
					Application deadline is March 29th, 2019
					(The trip is from May 20th to June 7th)
				</div>
			</div>
			<div class="fotj-content">
				<div class="join-us-mobile">
					Come join us on our next VCU adventure down the James River
				</div>
				<div class="apply-button-mobile">
					<a href="https://docs.google.com/forms/d/1mhXoQ_UIpjR-OgzuI3P_LXHTaoHJ2E08RAH8uFrj4L8/"><button class=apply-now-mobile>Apply now</button></a>
				</div>
				<div class="deadline-date-mobile">
					Application deadline is March 15th, 2019
				</div>
				<h2 class="lead-title" id="homepage-content">The Story of this Course</h2>
				<p>
					<span class="drop-cap">T</span>his expedition class explores the intersection of human and natural history in the James River and its watershed. By immersing themselves in this environment, students will experience this intersection firsthand, learning the landscape that shaped the development of many cultures, including our city, state and nation.
				</p>
				<p>
					The James River is a feature of profound natural and historic interest in the history of our nation. In many ways the history of human settlement in the James River watershed mirrors the history of the United States. &#x1F463;
				</p>
				<div class="vid-container">
					<iframe src="https://www.youtube.com/embed/fdK8LjzPNLc?&modestbranding=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="fotj-sidebar">
				<div class="fotj-quote">
					“To hear the birds and see them fly; to walk up to a tree, take a leaf and sketch it in our notebooks - it's the physical and mental connections that I get. It really helps me with learning.”
					<span class="fotj-quote-author">
					– Alissa, FOTJ '16
					</span>
				</div>
			</div>
			<div class="fotj-content">
				<p>	
					First offered in 2014, this expedition offers an immersive field study experience to place students in a landscape that has been shaped by its inhabitants over the last 10,000 years and is central to the development of the nation in the 400 years since European settlement. Faculty from the Virginia Commonwealth University <a href="https://biology.vcu.edu/">Department of Biology</a>, the <a href="https://ces.vcu.edu/">Center for Environmental Studies</a>, the <a href="https://ricerivers.vcu.edu/">Rice Rivers Center</a>, the <a href="https://history.vcu.edu/">History Department</a>, and the <a href="https://recsports.vcu.edu/programs/outdoor-adventure-program/">Outdoor Adventure Program</a> came together to offer VCU students a new way to learn about the importance of the James River to the inhabitants of Virginia and the nation.
				</p>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/14245723867_87e09d7b80_sized.jpg" width="100%">
				</div>
				<div class="photo-caption">
					<h5>James River at Scottsville looking at Horseshoe Bend</h5>
				</div>
				<p>
					The 2019 Footprints on the James Expedition will travel for 19 days (May 20th to June 7th), covering 185 river miles. The journey begins at the Falls of the James in downtown Richmond and proceeds by kayak downriver through the Tidewater to the colonial capital at Jamestown Island. The class then travels to the foothills of the Blue Ridge mountains &#x1F304; and returns to the river at Lynchburg. From Percival’s Island in downtown Lynchburg, the class travels through the Piedmont by canoe and batteau<sup>1</sup>, retracing the historic trade routes of the late eighteenth century for the remainder of the class, finishing our journey near the dams above Richmond.
				</p>
			</div>
			<div class="fotj-sidebar">
				<sup>1</sup>The James River batteau were handmade wooden boats usually 50-70 feet in length, 7-9 feet wide and carried upwards of 10,000 pounds of tobacco and trade goods up and down the James River between 1775 - 1880.
				<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/batteau2.jpg">
			</div>
			<div class="mini-map">
				<section id="mini-grid">
					<div class=ric>
						<h2>Richmond</h2>
					</div>
					<div class=waves>
						<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/two_waves.svg">
					</div>
					<div class=wave>
						<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/one_wave.svg">
					</div>
					<div class=amount>19 days |<br>185 river mi.
					</div>
					<div class=jam>
						<h2>Jamestown</h2>
					</div>
					<div class=lyn>
						<h2>Lynchburg</h2>
					</div>
					<div class=dash>
						<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/dashed_line.svg">
					</div>
				</section>
			</div>
			<div class="fotj-superscript-mobile">
				<sup>1</sup>The James River batteau were handmade wooden boats usually 50-70 feet in length, 7-9 feet wide and carried upwards of 10,000 pounds of tobacco and trade goods up and down the James River between 1775 - 1880.
				<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/batteau2.jpg">
			</div>
			<div>
				<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/P5250411a.jpg" class="wide-image" width="100%" height="auto">
			</div>
				<div class="photo-caption">
						<h5>The class on the Lower James, paddling from Presquile National Wildlife Refuge toward Shirley Plantation</h5>
				</div>
			<div class="fotj-sidebar">
					<p></p>
			</div>
			<div class="fotj-content">	
				<p>
					This year’s expedition will offer students two classes, BIOL391 The Natural History of the James River Watershed and ENVS491 Expedition Management, for a total of 6 credits. These courses will be taught in tandem and have been specifically developed to reflect the immersive nature of the experience.
				</p>
				<p>	
					Learning natural history in an expedition format offers several unique and important opportunities to our participants. BIOL391 emphasizes observation and application of quantitative and qualitative field skills to observe and evaluate the natural features of the James River. ENVS491 encourages students to work as team members and provides introduction to expedition management, group dynamics, and leadership skills &#x1F4E3;. Students will learn best practices for frontcountry and backcountry camping, outdoor living skills, multi-day canoeing and kayaking methods and practical application of <a href="https://lnt.org/learn/7-principles">Leave No Trace principles</a> &#x1F3D5;. These will be assessed periodically by the review of reflection and observation journal entries and cumulatively by a final practical exam.
				</p>
			</div>
			<div class="fotj-sidebar">
			FACTOID: 2018 was the wettest year for the James River in the last 124 years
			</div>
			<div class="fotj-content">
				<div>
						<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/P5270719.jpg" width="100%">
				</div>
					<div class="photo-caption">
						<h5>Students learn sampling techniques and examine estuarine fish populations at the VCU Rice Rivers Center</h5>
					</div>
			</div>
			<div class="fotj-sidebar">
				<div class="fotj-quote">
					“In rivers, the water that you touch is the last of what has passed and the first of that which comes; so with present time.”
					<span class="fotj-quote-author">
					– Leonardo da Vinci
					</span>
				</div>
			</div>
			<div class="fotj-content">
				<h2>Field lessons on the James River</h2>
				<p>
					<span class="drop-cap">T</span>he class course work will be presented in several formats. First, there will be ample opportunity for primary experiential education. This will include elements of community ecology, stream ecology, vascular plant identification and hydrology. Students will be tasked with periodic goals relating to these topics over the course of the journey. Second, will be presentations from faculty and topical experts&#x1F984; throughout the course. Third will be peer to peer presentations based on topical subjects during the course. 
				</p>
				<p>
					All work will be recorded in a bound journal. This journal will contain daily entries, natural history observations, lesson notes and data and personal reflections on the journey. Students should count on writing and sketching for approximately one hour per day. These journals will be provided to you as part of the course fee. Student progress will be assessed by student participation, periodic journal reviews and a final written and practical test.
				</p>
				<p>
					Each student should undertake this experience with an open mind and a clear sense of purpose. This includes developing an expedition mindset to maximize the opportunities for personal growth. It will be up to each of us to do our part to generate and maintain an environment conducive to safety and learning. We must each do our part to treat our classmates as we wish to be treated.
				</p> 
			</div>
			<div class="grid-container-3">
				<div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/14711563705_a7827a5323_sized.jpg">
				</div>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/14452301543_1337ad98b5_sized.jpg">
				</div>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/14245515998_9954e288c3_sizedN1.jpg">
				</div>
			</div>
			<div class="grid-container-2-fix">
				<div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/P5291174.jpg">
				</div>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/P6040229.jpg">
				</div>
			</div>
			<div class="fotj-sidebar">
					<br><br><br><br>
					FACTOID: By January of 1608, only 38 of the 104 colonists left by Captain Newport the previous June remained alive.
			</div>
			<div class="fotj-content">
				<h2>Trip Life</h2>
				<p>
					<span class="drop-cap">A</span>ll participants will be living, travelling, and learning in variety of camping locations in close proximity to the James River and its watershed. From the first night out &#x1F30C;, everyone will be living out of a backpacking tent and eating meals prepared by our classmates. Most of the nights will be spent in a different place from the evening before. While there will be a night back in Richmond, we will spend nearly three weeks in the field. No experience is expected or necessary to apply for this experience. All we ask for is an open mind and willingness to challenge yourself to live and learn in new ways.
				</p>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/P5311511.jpg" width="100%" style="">
				</div>
				<div class="photo-caption">
					<h5>The class at Jamestown Beach, excited to finish the first leg of their journey!</h5>
				</div>
				<p>
					Showers, grid electricity and refrigeration will be infrequent if not absent. The class will take place during the early summer in Virginia; students will have ample opportunity to consider mosquitos, heat, sunburn, ticks, chafing, and body odor &#x1F9DF;. To accommodate this, the day to day operations of this trip will be largely the responsibility of the student participants. This will require both self discipline and cooperation among our members.
				</p>	
			</div>
			<div class="grid-container-2">
				<div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/14708390731_cbb499d913_sized.jpg">
				</div>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/14525069234_0d948bbdb8_sized.jpg">
				</div>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/P6050407.jpg">
				</div>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/35271614405_eee63bda8d_o1200.jpg">
				</div>
			</div>
			<div class="fotj-sidebar">
			</div>
			<div class="fotj-content">
				<p>
					Living arrangements are established enough to maintain a smooth flow of work and life without being burdensome. Our goal is have everyone cooperate to ensure a healthy environment in which is conducive to learning. To this end, students share group responsibilities by rotation. These responsibilities include traditional expedition management practices,participating in educational opportunities, writing daily journal entries &#x270F;, and managing the unexpected. Student Trip Leaders from the Outdoor Adventure Program will demonstrate skills, delegate authority, define duties, and make all final decisions when necessary.
				</p>
			</div>
			<div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/35231110296_b3c84d1549_o1200.jpg" class="wide-image" width="100%" height="auto">
			</div>
			<div class="photo-caption">
					<h5>Running the rapids in Higginbothams Falls aboard the batteau 'Slate River' near Appomattox County, VA</h5>
			</div>
			<div class="fotj-sidebar">
				<div class="fotj-quote">
					“The advantages to accrue to the United States, from opening this channel of intercourse between the eastern and western States, are those which necessarily result to the whole body from whatever benefits its members, and those which must result to the United States, particularly, from savory measure which tends to cement more closely the union of the eastern with the western States”
					<span class="fotj-quote-author">
					– Chief Justice John Marshall
					</span>
				</div>
			</div>
			<div class="fotj-content">	
				<div class="wave-break">
				</div>
				<h2 id="homepage-goals">Course Goals</h2>
				<p>
					Students should be able to:
					<ul>
						<li>identify the major features of a river system and its related watershed</li>
						<li>discuss the distinguishing features of the James River and its watershed</li>
						<li>identify, compare, and discuss features of a biological system of interest in each of the regions of the river</li>
						<li>recognize and understand many of the ways in which human habitation and development have impacted the James River, and vice versa</li>
						<li>understand & explain connections between the river and the land which surrounds it</li>
						<li>understand expedition goal setting</li>
						<li>understand logistical, gear, food and field support considerations for expeditions of this nature</li>
						<li>identify risk management concerns and how to address them</li>
						<li>understand the elements of group management in the back country and proper expedition behavior and leadership</li>
					</ul>
				</p>
				<div class="wave-break">
				</div>
				<p>
					If you have any questions, please contact Daniel Carr at <a href="mailto:carrdf@vcu.edu">carrdf@vcu.edu</a> or Katie Schmidt at <a href="mailto:schmidtkv@vcu.edu">schmidtkv@vcu.edu</a>. To apply, please complete the online survey no later than March 29, 2019.
				</p>
				<div class="apply-button">
					<a href="https://docs.google.com/forms/d/1mhXoQ_UIpjR-OgzuI3P_LXHTaoHJ2E08RAH8uFrj4L8/"><button class=apply-now>Apply now</button></a>
				</div>
				<!-- <h2>Expectations</h2>
				<p>
					<h3>Expedition Mindset:</h3> Each student should undertake this experience with an open mind and a clear sense of purpose. This includes developing an expedition mindset to maximize the opportunity. It will be up to each of us to do our part to generate and maintain an environment conducive to safety and learning. We must each do our part to treat our classmates as we wish to be treated.
				</p>
				<p>
					<h3>Writing:</h3> We will be writing and sketching much of our course material by hand in bound journals. These journals will be provided to you as part of the course fee. Students should count on writing and sketching for approximately one hour per day.
				</p> -->
				<!-- <p>
					<h3>Honor Code:</h3> Giving or receiving unauthorized assistance on tests or any other graded activities, as well as plagiarism, are violations of the University's Honor Code and will result in failure and a referral to the Student Honor Court. Also, students who observe cheating or any violation of the Honor Code have a responsibility to follow the procedures detailed in the Virginia Commonwealth University Student Handbook.
				</p> -->
				<!-- <p>
					Participants will be held to the <a href="https://conduct.students.vcu.edu/student-code-of-conduct/">VCU Student Code of Conduct</a> at all times. This document and other relevant information can be found at the following link. Please pay particular attention to the section regarding conduct off-campus.
				</p> -->
				<!-- <p>
					<h3>Required Readings:</h3> TBD. Students will be given a course pack with required readings, articles, etc.
				</p> -->
				<!-- <div class="wave-break">
				</div> -->
				<!-- <h2>Assessment</h2> -->
				<!-- <p> -->
					<!-- <h3>Grades for all assignments will be on this scale:
						<h4>
							90-100%=A, 80-89%=B, 70-79%=C, 60-69%=D, 0-59%=F
						</h4>
					</h3> -->
				<!-- </p> -->
				<!-- <p>
					This class will be assessed by a variety of traditional assessment techniques, including grading writing assignments, a written examination, and topical presentations. In addition, we plan to have students to undertake individualized and specialized research, and then teach some content of their own. Each student will be expected to keep journals of their observations and experiences during these exercises. Students will also be expected to keep a detailed and analytical personal journal of the class, to serve as an assessment tool as well as an outlet of student creative expression and self reflection.
				</p> -->
				<!-- <p>
					<h3>Field and personal reflection journal: -->
						<!-- <h4>
							20% field, 20% reflection
						</h4> -->
					<!-- </h3>
					<ul>
						<li>1st entry before departure – discuss any expectations and fears you have about this trip/course, etc.</li>
						<li>Daily reflection – open ended and/or specific questions</li>
						<li>Field notes – species seen, behavior, ecology, habitats, drawings, etc.</li>
						<li>Pencil and Pen, Rite in the Rain notebook or paper recommended</li>
					</ul>
				<p>
					<h4>Field Journal:</h4> There will be two types of journal entries for this course. The first will be a natural history observation journal. We will expect daily entries, based on the methods and suggestions outlined in the Farnsworth et al. 2014 paper from the Journal of Natural History Education and Experience.
				</p>
				<p>
					<h4>Reflection Journal:</h4> Students are required to complete a minimum of 12 personal journal entries during the trip. Entries should be 1-2 full pages (front and back) in length. Students should write an entry every 2 days, and entries should analytically connect students’ experiences at the sites, their interactions with speakers/activists, course readings, and the experience of traveling. Your journal entries should be written every day or at least every couple of days.
				</p>
				<p>
					In other words, we don’t want you to go a week without writing anything and then write daily during the last week of the course. It is important for your reflection and analysis to spread out the journal entries across the four weeks. Other than these guidelines, there are no assigned topics for these journal entries. Journals will be collected and checked periodically on the trip. You will turn in your journal at the end of the trip.
				</p>
				<p>
					<h3>Participation and Professionalism: -->
						<!-- <h4>
							30%
						</h4> -->
					<!-- </h3>
				</p>
				<p>
					Are you engaged in discussions, have you prepared for lectures and discussions by reading the assigned papers, are you excited to learn new skills, are you willing to help out the rest of the field team by stepping in and lending a hand when needed?
				</p>
				<p>
					Is your general conduct with faculty, student leaders and invited speakers professional? This includes both field and “off-hours” for the duration of the course (See the Professionalism Grading Rubric below).
				</p>
				<p>
					<h3>Practical Exam: -->
						<!-- <h4>
							15%
						</h4> -->
					<!-- </h3>
				</p>
				<p>
					This exam will be an assessment of your comprehension and retention of the material and techniques present up to the end the week at the Rice Center.
				</p> -->
				<!-- <p>
					<h3>End of Course Project/Presentation:
						<h4>
							15%?
						</h4>
					</h3>
				</p>
				<p>
					This will consist of a final presentation on the final day of class, 6/18. These presentations will be synthetic evaluations of observations made in the field. The topics should relate to course subject material. Topics will be evaluated and approved before we leave the Rice Rivers Center. These will be done in groups of 2.
				</p> -->
				<!-- <div class="wave-break">
				</div> -->
			</div>	
			</div>
		</div>
	</div>

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
