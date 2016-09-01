<?php
require_once '../twig_loader.php';

$renderer = new TemplateRenderer();

$emt = <<<'HTML'
<h2>EMT Stuff</h2>
HTML;

$cpt = <<<'HTML'
<h2>Phleb Stuff</h2>
HTML;

$phm = <<<'HTML'
<h2>Pharm Stuff</h2>
HTML;

$cma = <<<'HTML'
<h2>MA Stuff</h2>
HTML;

$para = <<<'HTML'
<h2>Paramedic Stuff</h2>
HTML;

print $renderer->render('entry_list.twig', array(
  'title' => 'Fast Response Student Resources', 
  'page_header' => 'Student Resources',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/students/program_resources.php',
  'css' => array('students.css'),
  'active' => 'students',
  'entries' => array($emt, $cpt, $phm, $cma, $para),
  'right_images' => array('/img/tmp.png', '/img/tmp.png', '/img/tmp.png'),
));
?>
