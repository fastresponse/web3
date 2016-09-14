<?php
require_once '../../twig_loader.php';

$course_code = 'ACLS';
$form_course_code = 'ACLS';

$center = <<<'HTML'
<h2>Advanced Cardiovascular Life Support</h2>

<div class="ceu-notice" id="new-acls-notice">
  <p>The American Heart Association (AHA) has released the 2015 Guidelines Update for CPR and Emergency Cardiovascular Care.</p>
  <p>It is now required that students review, understand, and <span class="bold">COMPLETE</span> the Precourse Self-Assessment located on the <a href="http://www.heart.org/eccstudent">Student Website</a>. The code to access the student website is available at the beginning of the ACLS Provider Manual.</p>
  <p>Please be advised that <span class="bold">ALL</span> students are required to bring to class: <span class="bold">1)</span> the new 2015 ACLS Provider Manual and <span class="bold">2)</span> a printed certificate with a score of 70% or better from the Precourse Self-Assessment.</p>
  <p class="underline">Precourse Assessment is <span class="bold">MANDATORY</span> and those without it will not be admitted into class. <span class="bold">NO EXCEPTIONS!</span></p>
  <p>On-site book sales are still available; however, this will require that students come to our campus on a separate day prior to their class date. Students will not be able to purchase books onsite on the day of their class.</p>
</div>

<p>Our Advanced Cardiac Life Support (ACLS) course offers challenging and useful skills that make a difference in saving lives. A lively, low-stress class environment, focusing on a team approach to medical emergencies has proven to be an essential and rewarding experience for all participants.</p>

<p>The ACLS Course is designed for healthcare providers who either direct or participate in the management of cardiopulmonary arrest or other cardiovascular emergencies. Through didactic instruction and active participation in simulated cases, students will enhance their skills in the recognition and intervention of cardiopulmonary arrest, immediate post-cardiac arrest, acute arrhythmia, stroke, and acute coronary syndromes (ACS).</p>

<p>The goal of the ACLS Course is to improve outcomes for adult patients of cardiac arrest and other cardiopulmonary emergencies through early recognition and interventions of high performance teams.</p>

<p class="bold italic">"Life is Why"</p>

<div>American Heart Association Approved - <span class="nowrap">Training Center #CA03190</span></div>
HTML;

$left = array(
  array('image', '/img/tmp.png', 'View Calendar', 'http://www.ssreg.com/fastresponse/calendar.asp?page=Calendar'),
  array('image', '/img/tmp.png', 'Provider Course Details', 'details.php#provider'),
  array('image', '/img/tmp.png', 'Renewal Course Details', 'details.php#renewal'),
  //array('text', $course_details),
  //array('text', $elearning),
);
$right = array(
  array('image', '/img/tmp.png', 'Register for<br>ACLS Provider Course', 'http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4106&pcatID=4105'),
  array('image', '/img/tmp.png', 'Register for<br>ACLS Renewal Course', 'http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4107&pcatID=4105'),
  //array('text', $books),
  array('image', '/img/tmp.png', 'Books<br><span class="red">Required <span class="bold">before</span> class</span><br>Click for Details', 'details.php#books'),
);


$renderer = new TemplateRenderer();

print $renderer->render('ceu.twig', array(
  'title' => 'ACLS at Fast Response', 
  'page_header' => 'Advanced Cardiovascular Life Support',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/acls/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'center' => $center,
  'left' => $left,
  'right' => $right,
));
?>
