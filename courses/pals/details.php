<?php
require_once '../../twig_loader.php';

$course_code = 'BLS';
$form_course_code = 'BLS';

$main_left = <<<'HTML'
<div id="details_provider">
  <h3><a name="provider"></a>Provider Course Details</h3>
  <ul>
    <li>For first time students and anyone with an expired PALS card.</li>
    <li>Student Manual is <span class="bold red">required</span>.</li>
    <li>Two day class, 9:00 AM to 5:00 PM.</li>
    <li>Continuing Education Units: 14.00</li>
    <li>Course price: <span class="price">$255.00</span></li>
  </ul>
</div>

<hr>

<div id="details_provider">
  <h3><a name="provider"></a>Renewal Course Details</h3>
  <ul>
    <li>For those with a current PALS card.</li>
    <li>Current card <span class="bold red">must</span> be presented to instructor.</li>
    <li>Student Manual is <span class="bold red">required</span>.</li>
    <li>One day class, 9:00 AM to 5:00 PM.</li>
    <li>Continuing Education Units: 7.00</li>
    <li>Course price: <span class="price">$190.00</span></li>
  </ul>
</div>
HTML;

$main_right = <<<'HTML'
<div id="details_books">
  <h3><a name="books"></a>Books</h3>
  <h4 class="underline">AHA PALS Provider Manual with <span class="nowrap">Pocket Reference Card</span></h4>
  <ul>
    <li><span class="bold red">Required for class</span></li>
	  <li><span class="isbn-label">AHA item #:</span> 901052</li>
	  <li><span class="isbn-label">ISBN:</span> 1616691123</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9781616691127</li>
    <li>Our price: <span class="price">$60.00</span>.
    <li class="red">This book must be used <span class="bold">during class</span>, per AHA requirements. Students without a book will not receive a certification card.</li>
  </ul>

  <h4 class="underline">Fast Response PALS Study Guide</h4>
  <ul>
    <li><span class="bold yellow">Recommended</span></li>
    <li>Provided <span class="price">free</span> by Fast Response.</li>
    <li><a href="/pdf/study_guides/PALS - Study Guide.pdf" target="_blank">Click here to download</a>.</li>
  </ul>
</div>

HTML;

$center = <<<"HTML"
<div class="column-container">
  <div class="column">$main_left</div>
  <div class="column">$main_right</div>
</div>
HTML;


$right = array(
  array('image', '/img/tmp.png', ),
  array('image', '/img/tmp.png', ),
  array('image', '/img/tmp.png', ),
);

$renderer = new TemplateRenderer();

print $renderer->render('ceu_details.twig', array(
  'title' => 'PALS at Fast Response', 
  'page_header' => 'PALS Class Details',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/pals/details.php',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'left' => $main_left,
  'right' => $main_right,
));
?>
