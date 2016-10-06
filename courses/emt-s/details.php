<?php
require_once '../../twig_loader.php';

$course_code = 'EMT-S';
$form_course_code = 'EMT-S';

$main_left = <<<'HTML'
<div id="details_course">
  <h3><a name="course"></a>Course Details</h3>
  <ul>
    <li>For currently licensed EMTs and those expired within the last 6 months.</li>
    <li>Class held by appointment only, from 9:00 AM to 12:00 PM.</li>
    <li>No Continuing Education Units for this course.</li>
    <li>Course price: <span class="price">$90.00</span></li>
  </ul>
</div>

HTML;

$main_right = <<<'HTML'
<div id="details_more_emt">
  <h3><a name="more_emt"></a>More EMT at Fast Response</h3>
  <h4 class="bold"><a href="/courses/emt/">EMT Program</a></h4>
  <div>Fast Response offers an accelerated EMT program, perfect for anyone looking for an entry-level medical responder course.</div>
  <h4 class="bold"><a href="/courses/emt-r/">EMT Refresher</a></h4>
  <div>A review course intended for EMTs who need continuing education units (CEUs) to renew their certifications. Provides 24 CEUs plus skills testing.</div>
  <h4 class="bold">Renewal Links</h4>
  <ul>
    <li><a href="http://www.emsa.ca.gov/emt_frequently_asked_questions">CA State Renewal Guidelines</a></li>
    <li><a href="https://www.nremt.org/nremt/about/reg_basic_history.asp#EMT_Recertification">NREMT Renewal Guidelines</a></li>
  </ul>
</div>
HTML;

$renderer = new TemplateRenderer();

print $renderer->render('ceu_details.twig', array(
  'title' => 'EMT Skills Verification at Fast Response', 
  'page_header' => 'EMT Skills Verification Class Details',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/emt-s/details.php',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'left' => $main_left,
  'right' => $main_right,
));
?>
