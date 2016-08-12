<?php
require_once '../twig_loader.php';

$renderer = new TemplateRenderer();

print $renderer->render('images_3cols.twig', array(
  'title' => 'Fast Response School of Health Care Education', 
  'page_header' => 'School Leadership',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, sterile processing, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('about.css'),
  'content_blocks' => array(
    array(
      'image' => '/img/testimonials/anjani_a.jpg',
      'caption' => 'The quick brown fox jumped over the lazy dogs. The quick brown fox jumped over the lazy dogs. The quick brown fox jumped over the lazy dogs.'
    ),
    array(
      'image' => '/img/testimonials/anthea_m.jpg',
      'caption' => ''
    ),
    array(
      'image' => '/img/testimonials/breanna_h.jpg',
      'caption' => ''
    ),
    array(
      'image' => '/img/testimonials/evan_k.jpg',
      'caption' => ''
    ),
    array(
      'image' => '/img/testimonials/jeffrey_s.jpg',
      'caption' => 'The quick brown fox jumped over the lazy dogs. The quick brown fox jumped over the lazy dogs. The quick brown fox jumped over the lazy dogs.'
    ),
    array(
      'image' => '/img/testimonials/jordan_p.jpg',
      'caption' => ''
    ),
    array(
      'image' => '/img/testimonials/joseph_b.jpg',
      'caption' => ''
    ),
    array(
      'image' => '/img/testimonials/karla_a.jpg',
      'caption' => ''
    ),
    array(
      'image' => '/img/testimonials/mirna_cr.jpg',
      'caption' => 'The quick brown fox jumped over the lazy dogs. The quick brown fox jumped over the lazy dogs. The quick brown fox jumped over the lazy dogs.'
    ),
  ),
));
?>
