<?php
require_once '../../twig_loader.php';

$course_code = 'EMT-R';
$form_course_code = 'EMT-R';

$main_left = <<<'HTML'
<div id="details_course">
  <h3><a name="course"></a>Course Details</h3>
  <ul>
    <li>For currently licensed EMTs and those expired within the last 6 months.</li>
    <li>Skills check-off included.</li>
    <li>Three day class, 9:00 AM to 6:00 PM.</li>
    <li>Continuing Education Units: 24.00</li>
    <li>Course price: <span class="price">$395.00</span></li>
  </ul>
</div>

<hr>

<div id="details_books">
  <h3><a name="books"></a>Books</h3>
  <h4 class="underline">Emergency Medical Technician Transition Manual</h4>
  <ul>
    <li><span class="bold red">Required</span></li>
	  <li><span class="isbn-label">ISBN:</span> 1449609155</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9781449609153</li>
    <li>Our price: <span class="price">$53.00</span>.
    <li><a href="http://www.jblearning.com/cart/Default.aspx?bc=0915-3&coupon=EMS15">Purchase from JB Learning at a discounted price!</a></li>
  </ul>
</div>
HTML;

$main_right = <<<'HTML'
<div id="details_more_emt">
  <h3><a name="more_emt"></a>More EMT at Fast Response</h3>
  <h4 class="bold"><a href="/courses/emt/">EMT Program</a></h4>
  <div>Fast Response offers an accelerated EMT program, perfect for anyone looking for an entry-level medical responder course.</div>
  <h4 class="bold"><a href="/courses/emt-s/">EMT Skills Verification</a></h4>
  <div>A scenario-based skills test intended for EMTs who need to renew their certifications, and have already completed enough continuing education units.</div>
  <h4 class="bold">Renewal Links</h4>
  <ul>
    <li><a href="http://www.emsa.ca.gov/emt_frequently_asked_questions">CA State Renewal Guidelines</a></li>
    <li><a href="https://www.nremt.org/nremt/about/reg_basic_history.asp#EMT_Recertification">NREMT Renewal Guidelines</a></li>
  </ul>
</div>
HTML;

$renderer = new TemplateRenderer();

print $renderer->render('ceu_details.twig', array(
  'title' => 'EMT Refresher at Fast Response', 
  'page_header' => 'EMT Refresher Class Details',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/ecg-b/details.php',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'left' => $main_left,
  'right' => $main_right,
));
?>
