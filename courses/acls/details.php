<?php
require_once '../../twig_loader.php';

$course_code = 'ACLS';
$form_course_code = 'ACLS';

$main_left = <<<'HTML'
<div id="details_precourse">
  <h3><a name="precourse"></a>Precourse Assessment</h3>
  <ul>
    <li>Online assessment course.</li>
    <li>Must be completed prior to class date.</li>
    <li><span class="bold">Requires advance purchase of ACLS Provider Manual for online code.</span></li>
    <li>Results page printout <span class="bold red">must</span> be presented to instructor.</li>
  </ul>
</div>

<hr>

<div id="details_books">
  <h3><a name="books"></a>Books</h3>
  <h4 class="underline">AHA ACLS Provider Manual with Pocket Reference Card Set</h4>
  <ul>
    <li><span class="bold red">Required <span class="underline">before</span> class - New 2015 AHA Guidelines</span></li>
	  <li><span class="isbn-label">AHA item #:</span> 15-1005</li>
	  <li><span class="isbn-label">ISBN:</span> 1-61669-017-8</li>
	  <li><span class="isbn-label">ISBN-13:</span> 978-1-61669-400-5</li>
    <li>Our price: <span class="price">$53.00</span>.
    <li>This book must be used <span class="bold">during class</span>, per AHA requirements. Students without a book will not receive a certification card.</li>
  </ul>
</div>

HTML;

$main_right = <<<'HTML'
<div id="details_provider">
  <h3><a name="elearning"></a>Provider Course Details</h3>
  <ul>
    <li>For first time students and anyone with an expired ACLS card.</li>
    <li>Student Manual is <span class="bold red">required</span>.</li>
    <li>Two day class, 9:00 AM to 5:00 PM.</li>
    <li>Continuing Education Units: 14.00</li>
    <li>Course price: <span class="price">$260.00</span></li>
  </ul>
</div>

<hr>

<div id="details_renewal">
  <h3><a name="renewal"></a>Renewal Course Details</h3>
  <ul>
    <li>For those with a current ACLS card.</li>
    <li>Current card <span class="bold red">must</span> be presented to instructor.</li>
    <li>Student Manual is <span class="bold red">required</span>.</li>
    <li>One day class, 9:00 AM to 5:00 PM.</li>
    <li>Continuing Education Units: 7.00</li>
    <li>Course price: <span class="price">$190.00</span></li>
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
  'title' => 'ACLS at Fast Response', 
  'page_header' => 'ACLS Class Details',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/bls/details.php',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'left' => $main_left,
  'right' => $main_right,
));
?>
