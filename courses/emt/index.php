<?php
require_once '../../twig_loader.php';


$course_code = 'EMT';
$form_course_code = 'EMT';

$content = <<<'HTML'
HTML;

$left_images = array();
$right_images = array();


$renderer = new TemplateRenderer();

print $renderer->render('postsec.twig', array(
  'title' => 'EMT at Fast Response', 
  'page_header' => 'Accelerated EMT Program',
  'description' => 'The Emergency Medical Technician course at Fast Response is designed to teach students the skills needed to become exceptional certified EMTs.',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emergency medical technician, emt, emt school, emt course, emt class',
  'canonical' => 'http://www.fastresponse.org/courses/emt/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'content' => $content,
  'left_images' => $left_images,
  'right_images' => $right_images,
));
?>
