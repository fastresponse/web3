<?php
require_once '../../twig_loader.php';

$course_code = 'CPT';
$form_course_code = 'CPT';
$course_color = '#ec2023';

$center = <<<'HTML'
<h2>Five Reasons to Enroll</h2>
<ol>
  <li>Accelerated program - only 4-6 weeks!</li>
  <li>Hands-on training administered by experts with years of experience.</li>
  <li>NCCT Exam administered on campus.</li>
  <li>89% pass rate!</li>
  <li>Most students find jobs after the program!</li>
</ol>

<p id="testimonial-link"><a href="/testimonials/cpt/">Read what our students have to say</a></p>

<h2>High-quality, Hands-on Training</h2>

<p>An important member of the clinical laboratory team, the phlebotomist works directly with patients to collect and process blood specimens for laboratory testing. Topics covered in the course include anatomy and physiology, laboratory safety, infection control precautions, bloodborne pathogens, specimen collection, and proper needle disposal.</p>

<p>Our program focuses on hands-on training to prepare you for a real career. After proper instruction, students practice drawing blood first from dummy training arms, and then from each other. We impose a maximum student to instructor ratio of 8:1 in the lab to ensure safety and quality learning.</p>

<p>Every student receives a free CPR training class before being placed on a guaranteed clinical externship in a professional medical lab environment. This real-world experience also provides opportunities to make valuable contacts in the industry.</p>
HTML;

$left = array(
  array('image', '/img/tmp.png'),
  array('image', '/img/tmp.png'),
  array('image', '/img/tmp.png'),
);
$right = array(
  array('image', '/img/tmp.png'),
  array('image', '/img/tmp.png'),
  array('image', '/img/tmp.png'),
);


$renderer = new TemplateRenderer();

print $renderer->render('postsec.twig', array(
  'title' => 'Phlebotomy at Fast Response', 
  'page_header' => 'Certified Phlebotomy Technician Program',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/cpt/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'course_color' => $course_color,
  'center' => $center,
  'left' => $left,
  'right' => $right,
));
?>
