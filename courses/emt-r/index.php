<?php
require_once '../../twig_loader.php';

$course_code = 'EMT-R';
$form_course_code = 'EMT-R';

$center = <<<'HTML'
<h2>EMT Refresher</h2>

<p>This course is designed for currently certified EMTs who need continuing education units and skills testing for recertification.</p>

<p>Our 24-hour course combines lecture and skills components with the latest equipment available in the EMT field. Whether you are an ER Tech, in Paramedic school, or an EMT, this course will refresh your skills and provide some new information. Our instructors are all experienced EMTs and Paramedics.</p>

<p>After successful completion of this course, the student will receive 24 CEUs and be awarded a completed California EMT Skills Competency Verification Form (EMSA-SCV 08/10) and the appropriate skills verification for the NREMT.</p>

<p>This course meets California recertification and transition course requirements. Additional CEUs are required for NREMT recertification.</p>

<div>Alameda County EMS Approved - <span class="nowrap">CA EMS #01-0031</span></div>
HTML;

$left = array(
  array('image', '/img/tmp.png', 'View Calendar', 'http://www.ssreg.com/fastresponse/calendar.asp?page=Calendar'),
  array('image', '/img/tmp.png', 'Course Details', 'details.php#course'),
  array('image', '/img/tmp.png'),
);
$right = array(
  array('image', '/img/tmp.png', 'Register for<br>EMT Refresher', 'http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4120'),
  array('image', '/img/tmp.png', 'Books<br><span class="red">Required for class</span><br>Click for Details', 'details.php#books'),
  array('image', '/img/tmp.png'),
);


$renderer = new TemplateRenderer();

print $renderer->render('ceu.twig', array(
  'title' => 'EMT Refresher at Fast Response', 
  'page_header' => 'EMT Refresher',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/emt-r/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'center' => $center,
  'left' => $left,
  'right' => $right,
));
?>
