<?php
require_once '../../twig_loader.php';


$course_code = 'Paramedic';
$form_course_code = 'Paramedic';
$course_color = '#652837';

$content = <<<'HTML'
<h2>Five Reasons to Enroll</h2>
<ol>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ol>

<p id="testimonial-link"><a href="/testimonials/paramedic/">Read what our students have to say</a></p>

<h2>Subheader goes here</h2>

<p>Content goes here.</p>
HTML;

$left_images = array(
  '/img/tmp.png',
  '/img/tmp.png',
  '/img/tmp.png',
);
$right_images = array(
  '/img/tmp.png',
  '/img/tmp.png',
  '/img/tmp.png',
);


$renderer = new TemplateRenderer();

print $renderer->render('postsec.twig', array(
  'title' => 'Paramedic Academy at Fast Response', 
  'page_header' => 'Paramedic Academy',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, ',
  'canonical' => 'http://www.fastresponse.org/courses/paramedic/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'course_color' => $course_color,
  'content' => $content,
  'left_images' => $left_images,
  'right_images' => $right_images,
));
?>
