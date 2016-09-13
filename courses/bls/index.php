<?php
require_once '../../twig_loader.php';

$course_code = 'BLS';
$form_course_code = 'BLS';

$center = <<<'HTML'
<h2>AHA Approved - <span class="nowrap">for Healthcare Providers</span></h2>

<div class="ceu-notice" id="new-bls-notice">
  <p>The American Heart Association (AHA) has released their new 2015 Sciences and Guidelines update for Basic Life Support.</p>
  <p>In order to provide classes that conform to these new guidelines, we have made the following changes.</p>
  <p>There will no longer be separate 'Provider' and 'Renewal' courses.</p>
  <p>The <span class="bold">BLS Provider</span> class now satisfies the requirements for both the initial certification and recertification. This course will be <span class="bold">4.5 - 5 hours</span> in length based on the student's experience level.</p>
  <p>Please be advised that <span class="underline">all</span> students are required to bring the new <span class="bold">2015 Student Manual</span> to class in order to participate. The new Manual will be available for purchase at the Reception Desk.</p>
</div>

<p>Our Basic Life Support classes adhere to the American Heart Association curriculum. This class is intended for current healthcare professionals and anyone entering a medical or healthcare related field. Current BLS Certification is considered a basic employment qualification for many of these professions. Certification cards are provided at the end of class and are valid for 2 years.</p>

<p>We strive to provide a fun, upbeat learning environment with enthusiastic instructors. Every class covers adult, child, and infant CPR and choking rescue, as well as usage of equipment such as AEDs (defibrilators), barrier devices, and bag-valve masks. We ensure that every student gets sufficient hands-on skills practice to be confident in using these skills in real emergency situations.</p>

<div>American Heart Association Approved</div>
<div>Training Center #CA03190</div>
HTML;

$course_details = <<<'HTML'
<h3>Provider Course Details</h3>
<ul>
  <li>Student Manual is <span class="bold red">required</span>.</li>
  <li>One day class, 5 hours in length.</li>
  <li>Course price: <span class="price">$65.00</span></li>
</ul>
HTML;

$elearning = <<<'HTML'
<h3>eLearning Course Details</h3>
<ul>
  <li>Official AHA BLS Online Course.</li>
  <li>Can be used for first time certification or recertification.</li>
  <li>More convenient for busy or dynamic schedules.</li>
  <li>eBook version of <span class="underline">Student Manual</span> is <span class="underline">included</span> in price.</li>
</ul>
<hr>
<p class="underline">Part 1: Web-based classroom including case-based scenarios, interactive activities, and videos.</p>
<ul>
  <li>System requirements <a href="http://onlineaha.org/technical_requirements" target="_blank">listed here</a> by the AHA.</li>
  <li>Approximately 1-2 hours in length.</li>
  <li>Price: <span class="price">$27.50</span>.</li>
</ul>
<hr>
<p class="underline">Parts 2 and 3: Skills practice and testing session.</p>
<ul>
  <li>Performed at our campus with an AHA BLS instructor.</li>
  <li>Certificate from part 1 must be presented to instructor.</li>
  <li>BLS Certification card issued after successful completion.</li>
  <li>Session is 1.5 hours in length.</li>
  <li>Price: <span class="price">$35.00</span>.</li>
</ul>
HTML;

$books = <<<'HTML'
<h3>Books</h3>
<p class="underline">AHA BLS for Healthcare Providers Student Manual with Pocket Reference Card</p>
<ul>
  <li><span class="bold red">New 2015 AHA Guidelines</span></li>
  <li><span class="bold red">Required for class</span></li>
	<li><span class="isbn-label">AHA item #:</span> 15-1010</li>
	<li><span class="isbn-label">ISBN:</span> 1616694076</li>
	<li><span class="isbn-label">ISBN-13:</span> 9781616694074</li>
  <li>Our price: <span class="price">$20.00</span>.
  <li class="red">This book must be used <span class="bold">during class</span>, per AHA requirements. Students without a book will not receive a certification card.</li>
</ul>
HTML;

$left = array(
  array('image', '/img/tmp.png', 'View Calendar', 'http://www.ssreg.com/fastresponse/calendar.asp?page=Calendar'),
  array('text', $course_details),
  array('text', $elearning),
);
$right = array(
  array('image', '/img/tmp.png', 'Register for<br>BLS Provider Course', 'http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4103&pcatID=4102'),
  array('image', '/img/tmp.png', 'Register for<br>BLS eLearning Course', 'http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4243&pcatID=4242'),
  /*array('text', $books),*/
  array('image', '/img/tmp.png', 'Book<br>Our Price: $20.00<br>Click for Details'),
);


$renderer = new TemplateRenderer();

print $renderer->render('ceu.twig', array(
  'title' => 'CPR at Fast Response', 
  'page_header' => 'Basic Life Support CPR',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/bls/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'center' => $center,
  'left' => $left,
  'right' => $right,
));
?>
