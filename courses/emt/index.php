<?php
require_once '../../twig_loader.php';


$course_code = 'EMT';
$form_course_code = 'EMT';
$course_color = '#144995';

$content = <<<'HTML'
<h2>Five Reasons Why Students Are Enrolling In The EMT Program At Fast Response</h2>
<ol>
  <li>NREMT pass rate is higher than the national pass rate</li>
  <li>Externships with 7 major ambulance companies</li>
  <li>Our students are well-known by our externship sites, which provides a direct pipeline to jobs</li>
  <li>90% of our students find jobs!</li>
  <li>Real world experience - most of our instructors are active EMTs</li>
</ol>

<p id="testimonial-link"><a href="/testimonials/">Read what our students have to say</a></p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi ante, vulputate eu rutrum non, euismod sed lectus. Ut ac mi augue, semper molestie lectus. Nam a nulla vitae justo porta lobortis. Etiam cursus dictum auctor. Nam eu lacus ante. Ut at nibh et leo volutpat adipiscing at at diam. Sed sit amet congue enim. Fusce purus mi, accumsan ac ultrices eu, mollis in risus. Fusce ac lectus luctus lorem tincidunt tristique. Duis interdum fermentum vehicula. Phasellus dui tortor, tristique rutrum consectetur vel, molestie ut quam. Suspendisse non enim sit amet lorem eleifend facilisis.</p>
HTML;

$left_images = array(
  '/img/emt/slide02.jpg',
  '/img/emt/EMT Skills 03-2013 (136).png',
  '/img/emt/slide03.jpg',
);
$right_images = array(
  '/img/emt/emt skills lab 005.jpg',
  '/img/emt/slide04.jpg',
  '/img/emt/slide05.jpg',
);


$renderer = new TemplateRenderer();

print $renderer->render('postsec.twig', array(
  'title' => 'EMT at Fast Response', 
  'page_header' => 'Accelerated EMT Program',
  'description' => 'The Emergency Medical Technician course at Fast Response is designed to teach students the skills needed to become exceptional certified EMTs.',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emergency medical technician, emt, emt school, emt course, emt class',
  'canonical' => 'http://www.fastresponse.org/courses/emt/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'course_color' => $course_color,
  'content' => $content,
  'left_images' => $left_images,
  'right_images' => $right_images,
));
?>
