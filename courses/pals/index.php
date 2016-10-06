<?php
require_once '../../twig_loader.php';

$course_code = 'PALS';
$form_course_code = 'PALS';

$center = <<<'HTML'
<h2>Pediatric Advanced Life Support</h2>

<p>The Pediatric Advanced Life Support (PALS) course has been designed by the American Heart Association (AHA) to provide healthcare providers with the information and strategies needed to recognize and prevent cardiopulmonary arrest in infants and children, as well as identify and treat patients in a prearrest condition, such as respiratory failure or hypotensive shock. This course includes airway management, CPR review, and core case practice and testing. Our instructors are friendly, professional and experienced. This class offers hands-on practice using a supportive team approach.</p>

<div>American Heart Association Approved - <span class="nowrap">Training Center #CA03190</span></div>
HTML;


$left = array(
  array('image', '/img/tmp.png', 'View Calendar', 'http://www.ssreg.com/fastresponse/calendar.asp?page=Calendar'),
  array('image', '/img/tmp.png', 'Provider Course Details', 'details.php#provider'),
  array('image', '/img/tmp.png', 'Renewal Course Details', 'details.php#renewal'),
);
$right = array(
  array('image', '/img/tmp.png', 'Register for<br>PALS Provider Course', 'http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4109&pcatID=4108'),
  array('image', '/img/tmp.png', 'Register for<br>PALS Renewal Course', 'http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4110&pcatID=4108'),
  array('image', '/img/tmp.png', 'Books<br><span class="red">Required for class</span><br>Click for Details', 'details.php#books'),
);


$renderer = new TemplateRenderer();

print $renderer->render('ceu.twig', array(
  'title' => 'PALS at Fast Response', 
  'page_header' => 'Pediatric Advanced Life Support',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/pals/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'center' => $center,
  'left' => $left,
  'right' => $right,
));
?>
