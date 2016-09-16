<?php
require_once 'twig_loader.php';

$announcements = array(
  'MA Evening Class Now Enrolling',
  'Some other stuff is happening',
);
$links = array(
  '/courses/cma/',
  null,
);

require_once('php/drug_screen_dates.php');
$drugscreen_text = null;
$drugscreen = get_next_drug_screen_date($handle);
if (is_array($drugscreen) && isset($drugscreen['full_display'])) {
  $drugscreen_text = 'Next student Drug Screening: ' . $drugscreen['full_display'];
}

if ($drugscreen_text) {
  array_unshift($announcements, $drugscreen_text);
  array_unshift($links, null);
}


$renderer = new TemplateRenderer();

print $renderer->render('index.twig', array(
  'title' => 'Fast Response School of Health Care Education', 
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, sterile processing, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('index.css'),
  'announcements' => $announcements,
  'announcement_links' => $links,
));
?>
