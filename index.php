<?php
require_once 'twig_loader.php';

$renderer = new TemplateRenderer();

print $renderer->render('index.twig', array(
  'title' => 'Fast Response School of Health Care Education', 
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, sterile processing, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('index.css'),
  'announcements' => array(
    'MA Evening Class Now Enrolling',
    'Next Drug Screen Date: Sep 8th',
    'Some other stuff is happening',
  ),
  'announcement_links' => array(
    '/courses/cma/',
    null,
    null,
  ),
));
?>
