<?php
require_once '../twig_loader.php';

$left_col = <<<'HTML'
  <div>
    <div class="label">What do you want to do?</div><br>
    <div class="drop-down">Get Information // Enroll&dtrif;</div>
  </div>
  <div>
    <div class="label">Program</div><br>
    <div class="drop-down">EMT // Phleb // Etc&dtrif;</div>
  </div>
  <div>
    <div class="label">Course Dates</div><br>
    <div class="drop-down">Aug 19 2016 // Etc&dtrif;</div>
  </div>
  <div>
    <div class="label">Common Questions</div><br>
    <div class="checkbox">&FilledSmallSquare;</div>
    <div class="label">How much is tuition?</div><br>
    <div class="checkbox">&FilledSmallSquare;</div>
    <div class="label">What payment plans are available?</div><br>
    <div class="checkbox">&FilledSmallSquare;</div>
    <div class="label">What are my career prospects?</div><br>
    <div class="checkbox">&FilledSmallSquare;</div>
    <div class="label">When does it start?</div>
  </div>
  <div>
    <div class="label">Where did you hear about us?</div><br>
    <div class="drop-down">Google // Facebook // Etc&dtrif;</div>
  </div>
HTML;

$center_col = <<<'HTML'
  <div>
    <div class="label">Name</div><br>
    <div class="textbox"></div>
  </div>
  <div>
    <div class="label">Email</div><br>
    <div class="textbox"></div>
  </div>
  <div>
    <div class="label">Phone</div><br>
    <div class="textbox"></div><br>
    <div class="checkbox">&FilledSmallSquare;</div>
    <div class="label">Contact me via SMS</div>
  </div>
  <div>
    <div class="label">Zip</div><br>
    <div class="textbox"></div>
  </div>

  <div>
    <div class="label">Other Questions and Comments</div><br>
    <div class="textbox" style="height: 5em;"></div>
  </div>
  <div class="button">Submit</div>
  <div style="font-size: 0.7em;">
    <a href="">Privacy Policy</a> | <a href="">Terms and Conditions</a>
  </div>
HTML;

$renderer = new TemplateRenderer();

print $renderer->render('contact.twig', array(
  'title' => 'Fast Response School of Health Care Education', 
  'page_header' => 'Contact Us',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, sterile processing, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('contact.css'),
  'left' => $left_col,
  'center' => $center_col,
  'right_images' => array('/img/interview.jpg', '/img/front.jpg', '/img/ASHP-Accredited-Logo.jpg'),
  'right_captions' => array('Fast Response', null, null),
));
?>
