<?php
require_once '../twig_loader.php';

$content = <<<'HTML'
HTML;

$renderer = new TemplateRenderer();

print $renderer->render('images_right.twig', array(
  'title' => 'Fast Response School of Health Care Education', 
  'page_header' => 'School Fact Sheets',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, sterile processing, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('about.css'),
  'content' => $content,
));
?>
