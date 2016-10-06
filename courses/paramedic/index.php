<?php
require_once '../../twig_loader.php';

$course_code = 'Paramedic';
$form_course_code = 'Paramedic';
$course_color = '#652837';

$center = <<<'HTML'
<!--
<h2>Five Reasons to Enroll</h2>
<ol>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ol>

<p id="testimonial-link"><a href="/testimonials/paramedic/">Read what our students have to say</a></p>
-->
<h2>Advanced Skills for EMTs</h2>

<p>It is the mission of the FRSHCE/BAS EMS Consortium Paramedic Academy to produce extraordinary critical thinking paramedics who provide compassionate and exceptional patient care. We do this by creating a supportive learning environment that includes the student in the learning process. We provide several opportunities for outside activities that enrich the didactic experience. The opportunities include ride alongs with local 911 EMS providers.</p>

<p>We provide our students with a tablet computer for accessing EMS software to include Title 22, local and regional EMS Regulations, as well as online learning tools. These tools will enhance the overall learning experience, while utilizing up to date technology students can expect to use in the field. This equipment will be incorporated into all aspects of clinical and field training. We have an excellent skills lab that includes a scenario based Simulation Lab, a High Fidelity ALS manikin, and an ambulance simulator.</p>

<p>The FRSHCE/BAS EMS Consortium has developed strong relationships with many clinical and field sites including Paramedics Plus, Kaiser Permanente Regional Medical Centers, and Eden Medical Center. Through contractual agreements with these facilities, the consortium is able to guarantee immediate access to both clinical and field internships.</p>

<p class="red">You must be a certified EMT with six months of experience before you can begin training as a paramedic. Please click <a href="/courses/emt/" class="underline">here</a> to get information about our EMT program.</p>

<h3>Anatomy and Physiology</h3>
<p>Applicants who have not completed a college level Anatomy and Physiology course within the last 2 years must also attend the Paramedic Anatomy and Physiology course to be prepared for the Paramedic Academy.</p>

<p>The purpose of the Anatomy and Physiology (A&P) prerequisite course is to deliver a comprehensive theoretical foundation and medical terminology of the human body systems to the paramedic program candidate comparable to what they will encounter during their didactic portion of the Paramedic Academy. Successful completion of this prerequisite will raise the candidate's cognitive level to that of a better prepared beginning paramedic student, and will verify the candidate's ability to cope with the pace of the School's Paramedic Academy. All Paramedic Academy candidates who have not completed a Collegiate Level A&P course must complete this course.</p>

<p>Sections of this course may be held in an online format. All students must have online access and the ability to complete assignments autonomously. Intermittent quizzes will be given as formative assessments to ensure that each student is advancing sufficiently in the course.</p>

<h4 class="underline">Class Hours</h4>
<ul>
  <li>Mondays and Wednesdays: 12:00 PM - 6:00 PM</li>
  <li>Cost: $450.00 - Books included.</li>
  <li>Online signup for A&P is available.</li>
</ul>

<h3>Advanced Placement</h3>
<p>Advanced placement is any process where a program formally recognizes prior learning of a student and applies that recognition toward meeting the program requirements.</p>

<p>Fast Response does not currently offer advanced placement.</p>
HTML;

$left = array(
  array('image', '/img/paramedic/PAR Intubation 001-01.jpg'),
  array('image', '/img/paramedic/PAR C-Spine 001-01.jpg'),
  array('image', '/img/paramedic/PAR Variety 001-01.jpg'),
);
$right = array(
  array('image', '/img/paramedic/PAR Injection 001-01.jpg'),
  array('image', '/img/paramedic/PAR Intubate and Intubate 001-01.jpg'),
  array('image', '/img/paramedic/PAR Injection 002-01.jpg'),
);


$renderer = new TemplateRenderer();

print $renderer->render('postsec.twig', array(
  'title' => 'Paramedic Academy at Fast Response', 
  'page_header' => 'Paramedic Academy',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/paramedic/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'course_color' => $course_color,
  'center' => $center,
  'left' => $left,
  'right' => $right,
));
?>
