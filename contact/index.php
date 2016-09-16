<?php
require_once '../twig_loader.php';

$programs = array(
  'EMT',
  'Phlebotomy',
  'Pharmacy Technician',
  'Medical Assistant',
  'Paramedic',
  'Other',
);

$sources = array(
  'Google',
  'Facebook',
  'Yahoo / Bing',
  'Yelp',
  'East Bay Express',
  'Friend / Relative',
  'Coworker / Employer',
  'Flyer / Brochure',
  'Career Fair',
  'Other',
);

$source_hosts = array(
  'www.google.com' => 'Google',
  'www.facebook.com' => 'Facebook',
  'm.facebook.com' => 'Facebook',
  'www.bing.com' => 'Yahoo / Bing',
  'search.yahoo.com' => 'Yahoo / Bing',
  'www.yelp.com' => 'Yelp',
  'm.yelp.com' => 'Yelp',
);

//$select_options_programs = array_to_select_options($programs, $form_course_name);
$select_options_programs = <<<'HTML'
<option value="EMT">EMT</option>
<option value="Phlebotomy">Phlebotomy</option>
<option value="Pharmacy Technician">Pharmacy Technician</option>
<option value="Medical Assistant">Medical Assistant</option>
<option value="Paramedic">Paramedic</option>
<option value="Other">Other</option>
HTML;

//$select_options_sources = array_to_option_html($sources, get_referring_source());
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
      $select_options_programs
    </select>
  </div>
  <div>
    <label class="label">Course Dates</label><br>
    <select class="drop-down">
      <option value="Oct 31st 2016">Oct 31st 2016</option>
      <option value="Nov 24th 2016">Nov 24th 2016</option>
      <option value="Dec 25th 2016">Dec 25th 2016</option>
      <option value="Dec 31st 2016">Dec 31st 2016</option>
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
