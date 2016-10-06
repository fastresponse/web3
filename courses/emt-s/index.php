<?php
require_once '../../twig_loader.php';

$course_code = 'EMT-S';
$form_course_code = 'EMT-S';

$center = <<<'HTML'
<h2>EMT Skills Verification</h2>

<p>This course is designed for currently certified EMTs who have already met the CEU requirements for recertification and only need to obtain skills verification.</p>

<p>Our three-hour scenario-based skills verification course will assess student competency in the ten required areas through successful completion of three scenarios. Each candidate will be presented with a medical patient scenario, trauma patient scenario, and childbirth scenario. Each scenario will require the candidate to perform several skills within the EMT scope of practice to an acceptable level of competency.</p>

<p>If a candidate fails to perform an individual skill to an appropriate level of competency, then he or she will be given one remedial attempt. Remediation is limited to one attempt per skill, and no more than 30% of the required skills. If the lead instructor is not satisfied with the candidate's competency over all ten required areas delineated by the state of California, then the candidate will not be awarded a skills competency form until he/she has successfully passed a 24-hour EMT refresher course. No refunds will be offered for partial or unsuccessful completion of skills competency verification.</p>

<p>After successful completion of this course, the candidate will be awarded a completed California EMT Skills Competency Verification Form (<a href="http://www.acphd.org/media/338131/skillsverificationform0810.pdf">EMSA-SCV 08/10</a>) and the appropriate skills verification for the NREMT.</p>

<p>NREMT skills sheets can be found <a href="https://www.nremt.org/nremt/about/psychomotor_exam_emt.asp">here</a> for reference.</p>

<div>Alameda County EMS Approved - <span class="nowrap">CA EMS #01-0031</span></div>
HTML;

$left = array(
  array('image', '/img/tmp.png'),
  array('image', '/img/tmp.png'),
  array('image', '/img/tmp.png'),
);
$right = array(
  array('image', '/img/tmp.png', 'Registration<br>By appointment only<br>Please call or email', '/contact/'),
  array('image', '/img/tmp.png', 'Course Details', 'details.php#course'),
  array('image', '/img/tmp.png'),
);


$renderer = new TemplateRenderer();

print $renderer->render('ceu.twig', array(
  'title' => 'EMT Skills Verification at Fast Response', 
  'page_header' => 'EMT Skills Verification',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/emt-s/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'center' => $center,
  'left' => $left,
  'right' => $right,
));
?>
