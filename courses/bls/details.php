<?php
require_once '../../twig_loader.php';

$course_code = 'BLS';
$form_course_code = 'BLS';

$main_left = <<<'HTML'
<div id="details_provider">
  <h3><a name="provider"></a>Provider Course Details</h3>
  <ul>
    <li>Student Manual is <span class="bold red">required</span>.</li>
    <li>One day class, 5 hours in length.</li>
    <li>Course price: <span class="price">$65.00</span></li>
  </ul>
</div>

<hr>

<div id="details_books">
  <h3><a name="books"></a>Books</h3>
  <h4 class="underline">AHA BLS for Healthcare Providers Student Manual with <span class="nowrap">Pocket Reference Card</span></h4>
  <ul>
    <li><span class="bold red">Required for class - New 2015 AHA Guidelines</span></li>
	  <li><span class="isbn-label">AHA item #:</span> 15-1010</li>
	  <li><span class="isbn-label">ISBN:</span> 1616694076</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9781616694074</li>
    <li>Our price: <span class="price">$20.00</span>.
    <li class="red">This book must be used <span class="bold">during class</span>, per AHA requirements. Students without a book will not receive a certification card.</li>
  </ul>
</div>

HTML;

$main_right = <<<'HTML'
<div id="details_elearning">
  <h3><a name="elearning"></a>eLearning Course Details</h3>
  <ul>
    <li>Official AHA BLS Online Course.</li>
    <li>For first time certification or recertification.</li>
    <li>More convenient for busy schedules.</li>
    <li>eBook version of <span class="underline">Student Manual</span> is <span class="underline">included</span> in price.</li>
  </ul>

  <h4>Part 1: Web-based classroom including case-based scenarios, interactive activities, and videos.</h4>
  <ul>
    <li>System requirements <a href="http://onlineaha.org/technical_requirements" target="_blank" class="underline">listed here</a>.</li>
    <li>Approximately 1-2 hours in length.</li>
    <li>Price: <span class="price">$27.50</span>.</li>
  </ul>

  <h4>Parts 2 and 3: Skills practice and testing session.</h4>
  <ul>
    <li>Performed at our campus with a certified AHA BLS instructor.</li>
    <li>Certificate from part 1 must be presented to instructor.</li>
    <li>BLS Certification card issued after successful completion.</li>
    <li>Session is 1.5 hours in length.</li>
    <li>Price: <span class="price">$35.00</span>.</li>
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
  'title' => 'CPR at Fast Response', 
  'page_header' => 'Basic Life Support CPR Class Details',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/bls/details.php',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'left' => $main_left,
  'right' => $main_right,
));
?>
