<?php
require_once '../../twig_loader.php';

$course_code = 'ECG-B';
$form_course_code = 'ECG-B';

$center = <<<'HTML'
<h2>ECG Basic Rhythm Recognition</h2>

<p>Our course of basic 3-lead electrocardiogram (ECG) interpretation starts with a review of the anatomy and electrophysiology of the heart, then moves into waveform recognition and what each waveform represents. We cover proper lead placement, troubleshooting and artifacts, and a detailed review of the ECG paper and how the paper is used to help measure waveforms, intervals and segments.</p>

<p>We then move into rhythm analysis, starting with sinus rhythms. With this basic knowledge in place, we begin an in-depth study of arrhythmias. Covered rhythms are: sinus rhythms, atrial rhythms, junctional rhythms, heart blocks, ventricular rhythms, PVCs, PACs, and PJCs.</p>

<p>After covering all of the rhythms, the class will use static (still) and dynamic (moving) images of ECG rhythms and apply the 5 rules of ECG interpretation to analyze each rhythm.</p>

<p>This extensive practice session is not found in many classes and helps solidify the basics of ECG interpretation, and helps the student gain an in-depth understanding of arrhythmias.</p>
HTML;

$left = array(
  array('image', '/img/tmp.png', 'View Calendar', 'http://www.ssreg.com/fastresponse/calendar.asp?page=Calendar'),
  array('image', '/img/tmp.png', 'Course Details', 'details.php#course'),
  array('image', '/img/tmp.png'),
);
$right = array(
  array('image', '/img/tmp.png', 'Register for<br>ECG Basic Course', 'http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4116'),
  array('image', '/img/tmp.png', 'Books<br>Click for Details', 'details.php#books'),
  array('image', '/img/tmp.png'),
);


$renderer = new TemplateRenderer();

print $renderer->render('ceu.twig', array(
  'title' => 'ECG Basic at Fast Response', 
  'page_header' => 'ECG Basic Rhythm Recognition',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/ecg-b/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'center' => $center,
  'left' => $left,
  'right' => $right,
));
?>
