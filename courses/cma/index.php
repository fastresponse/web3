<?php
require_once '../../twig_loader.php';

$course_code = 'CMA';
$form_course_code = 'CMA';
$course_color = '#5dafe1';

$center = <<<'HTML'
<h2>Five Reasons to Enroll</h2>
<ol>
  <li>Accelerated program to jumpstart your career!</li>
  <li>Our program is highly affordable.</li>
  <li>We are a testing site for both NCCT and NHA.</li>
  <li>Our campus is easily accessibly via BART.</li>
  <li>Phlebotomy certification included!</li>
</ol>

<p id="testimonial-link"><a href="/testimonials/cma/">Read what our students have to say</a></p>

<h2>Exciting and Multi-faceted Careers</h2>

<p>The Medical Assistant is a liaison between the doctor and the patient and is vital to the success of the medical practice. Medical Assistant duties vary greatly and can include taking and recording vital signs and medical histories, rooming patients and preparing them for exams, administering injections, drawing blood and performing commonly ordered lab tests.</p>

<p>Other schools only include venipuncture with their Medical Assistant Course, which is not sufficient training to draw blood in a hospital environment or work independently in a lab. However, <span class="bold">Fast Response includes a complete PHLEBOTOMY CERTIFICATION with our program!</span></p>

<p>Our 3.5-month course (usually only 3 hours per day!) will prepare you to perform clinical procedures such as sterile techniques, assisting with minor procedures, injections, and phlebotomy. A full month (160 hours) of field experience gives you confidence, polished skills and contacts you need to get your career started right.</p>

<p>Our externship satisfies the work experience requirements of many of the major hospitals in the area.</p>

<p>According to the US Department of Labor, Medical Assisting is one of the fastest-growing and most in-demand professions in the country!</p>
HTML;

$left = array(
  array('image', '/img/cma/MAC Inject and ECG 001-01.jpg'),
  array('image', '/img/cma/MAC ECG 001-01.jpg'),
  array('image', '/img/cma/MAC Inject and Measure 001-01.jpg'),
);
$right = array(
  array('image', '/img/cma/MAC Student 001-01.jpg'),
  array('image', '/img/cma/MAC Bloodpressure 003-01.jpg'),
  array('image', '/img/cma/MAC Baby Vape 001-01.jpg'),
);


$renderer = new TemplateRenderer();

print $renderer->render('postsec.twig', array(
  'title' => 'Medical Assistant Program at Fast Response', 
  'page_header' => 'Clinical Medical Assistant Program',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/cma/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'course_color' => $course_color,
  'center' => $center,
  'left' => $left,
  'right' => $right,
));
?>
