<?php
require_once '../twig_loader.php';
require_once '../php/class.course_dates.php';
require_once '../php/referring_source.php';
require_once '../php/frlib.php';

$form_course_name = filter_input(
  INPUT_GET, 'p',
  FILTER_SANITIZE_STRING,
  FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK
);

$programs = array(
  'EMT' => array(
    'code' => 'EMT',
    'dates' => array(),
  ),
  'Phlebotomy' => array(
    'code' => 'CPT',
    'dates' => array(),
  ),
  'Pharmacy Technician' => array(
    'code' => 'PHM',
    'dates' => array(),
  ),
  'Medical Assistant' => array(
    'code' => 'CMA',
    'dates' => array(),
  ),
  'Paramedic' => array(
    'code' => 'Paramedic',
    'dates' => array(),
  ),
  'Other' => array(
    'code' => null,
  ),
);

$courseDateOb = new CourseDateList();
$courseDateOb->set_limits(0, 10);
foreach ($programs as $key => &$value) {
  $code = $value['code'];
  $dates = &$value['dates'];
  if ($code === null) continue;

  $courseDateOb->set_course($code);
  $ret = $courseDateOb->get_course_dates();
  $dates = array_column($ret, 'showdate');
}


$select_options_programs =
  array_to_option_html(array_keys($programs), $form_course_name)
;
/*
$select_options_programs = <<<'HTML'
<option value="EMT">EMT</option>
<option value="Phlebotomy">Phlebotomy</option>
<option value="Pharmacy Technician">Pharmacy Technician</option>
<option value="Medical Assistant">Medical Assistant</option>
<option value="Paramedic">Paramedic</option>
<option value="Other">Other</option>
HTML;
*/

$select_options_sources = array_to_option_html($sources, get_referring_source());
/*
$select_options_sources = <<<'HTML'
<option value="Google">Google</option>
<option value="Facebook">Facebook</option>
<option value="Yahoo / Bing">Yahoo / Bing</option>
<option value="Yelp">Yelp</option>
<option value="East Bay Express">East Bay Express</option>
<option value="Friend / Relative">Friend / Relative</option>
<option value="Coworker / Employer">Coworker / Employer</option>
<option value="Flyer / Brochure">Flyer / Brochure</option>
<option value="Career Fair">Career Fair</option>
<option value="Other">Other</option>
HTML;
*/

$left_col = <<<"HTML"
  <div>
    <label class="label">What do you want to do?</label><br>
    <select class="drop-down">
      <option value="Get Information">Get Information</option>
      <option value="Enroll">Enroll</option>
    </select>
  </div>
  <div>
    <label class="label">Program</label><br>
    <select class="drop-down">
      <option value="none">&ndash; Select a program &ndash;</option>
      $select_options_programs
    </select>
  </div>
  <div>
    <label class="label">Course Dates</label><br>
    <select class="drop-down dates" id="dates-none">
      <option value="none">&ndash; N/A &ndash;</option>
    </select>
  </div>
  <div>
    <label class="label">Common Questions</label><br>
    <span class="checksquare">
      <input type="checkbox" class="checkbox" id="question1" name="questions[]" value="How much is tuition?">
      <label for="question1"></label>
    </span>
    <label class="label" for="question1">How much is tuition?</label><br>

    <span class="checksquare">
      <input type="checkbox" class="checkbox" id="question2" name="questions[]" value="What payment plans are available?">
      <label for="question2"></label>
    </span>
    <label class="label" for="question2">What payment plans are available?</label><br>

    <span class="checksquare">
      <input type="checkbox" class="checkbox" id="question3" name="questions[]" value="What are my career prospects?">
      <label for="question3"></label>
    </span>
    <label class="label" for="question3">What are my career prospects?</label><br>

    <span class="checksquare">
      <input type="checkbox" class="checkbox" id="question4" name="questions[]" value="When does it start?">
      <label for="question4"></label>
    </span>
    <label class="label" for="question4">When does it start?</label>
  </div>
  <div>
    <label class="label">Where did you hear about us?</label><br>
    <select class="drop-down">
      <option value="none">&ndash; Select one &ndash;</option>
      $select_options_sources
    </select>
  </div>
HTML;

$center_col = <<<'HTML'
  <div>
    <label class="label">Name</label><br>
    <input type="text" class="textbox">
  </div>
  <div>
    <label class="label">Email</label><br>
    <input type="text" class="textbox">
  </div>
  <div>
    <label class="label">Phone</label><br>
    <input type="text" class="textbox"><br>
    <span class="checksquare">
      <input type="checkbox" class="checkbox" id="sms-ok" name="sms-ok">
      <label for="sms-ok"></label>
    </span>
    <label class="label" for="sms-ok">Contact me via SMS (text message)</label>
  </div>
  <div>
    <label class="label">Zip</label><br>
    <input type="text" class="textbox">
  </div>

  <div>
    <label class="label">Other Questions and Comments</label><br>
    <textarea class="textbox" style="height: 5em;" cols="20" rows="5"></textarea>
  </div>
  <input type="submit" class="button" value="Submit">
  <div class="policy-links">
    <a href="/about/policies.php#privacy_policy">Privacy Policy</a> &nbsp;|&nbsp; <a href="/about/policies.php#website_terms">Terms and Conditions</a>
  </div>
HTML;

$renderer = new TemplateRenderer();

print $renderer->render('contact.twig', array(
  'title' => 'Fast Response School of Health Care Education', 
  'page_header' => 'Contact Us',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant,  phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'active' => 'contact',
  'left' => $left_col,
  'center' => $center_col,
  'right' => array(
    array('image', '/img/tmp.png', 'Fast Response'),
    array('image', '/img/tmp.png', ),
    array('image', '/img/tmp.png', ),
  ),
));
?>
