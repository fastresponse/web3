<?php
require_once '../../twig_loader.php';

$course_code = 'ECG-B';
$form_course_code = 'ECG-B';

$main_left = <<<'HTML'
<div id="details_course">
  <h3><a name="course"></a>Course Details</h3>
  <ul>
    <li>No prerequisite courses necessary.</li>
    <li>Serves as a great introductory or refresher course.</li>
    <li>Recommended as preparation for ACLS certification.</li>
    <li>Two day class, 9:00 AM to 5:00 PM.</li>
    <li>Continuing Education Units: 14.00</li>
    <li>Course price: <span class="price">$215.00</span></li>
  </ul>
</div>
HTML;

$main_right = <<<'HTML'
<div id="details_books">
  <h3><a name="books"></a>Books</h3>
  <h4 class="underline">ECGs Made Easy Book and Pocket Reference, 5th Edition</h4>
  <ul>
    <li><span class="bold yellow">Recommended</span></li>
	  <li><span class="isbn-label">ISBN:</span> 0323101062</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9780323101066</li>
    <li>Not available for purchase at Fast Response.</li>
  </ul>

  <h4 class="underline">Fast Response ECG Study Guide</h4>
  <ul>
    <li><span class="bold yellow">Recommended</span></li>
    <li>Provided <span class="price">free</span> by Fast Response.</li>
    <li><a href="/pdf/study_guides/ECG Basic - Study Guide.pdf" target="_blank">Click here to download</a>.</li>
  </ul>
</div>
HTML;

$renderer = new TemplateRenderer();

print $renderer->render('ceu_details.twig', array(
  'title' => 'ECG Basic at Fast Response', 
  'page_header' => 'ECG Basic Class Details',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/ecg-b/details.php',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'left' => $main_left,
  'right' => $main_right,
));
?>
