<?php
require_once '../twig_loader.php';

$renderer = new TemplateRenderer();

$content = <<<'HTML'
<section>
<h2>Frequently Asked Questions</h2>
<dl>
  <dt>Can I take ACLS and BLS on the same day?</dt>
  <dd>Per the American Heart Association, it is not acceptable to take both ACLS and a full BLS class on the same day. However, it is ok to use the BLS eLearning option and perform Parts 2 and 3 (skills practice / testing) on the same day as your ACLS class.</dd>

  <dt>I am injured; can Fast Response accommodate my injury during skills?</dt>
  <dd>We can accommodate injuries as long as you are still able to perform the necessary skills for the class. For example, you must be able to perform chest compressions for BLS. Most skills are performed on tables rather than the floor. Please inform the instructor so that necessary accommodations can be made.</dd>

  <dt>What CEU classes does Fast Response offer for Phlebotomy recertification?</dt>
  <dd>Fast Response does not offer any contact hours for Phlebotomy recertification. For assistance please contact: CA Lab Field Services (510) 620-3800.</dd>

  <dt>Where can I park? What buses go by your building?</dt>
  <dd>Please see the <a href="/contact/parking.php">Parking</a> or <a href="/contact/transit.php">Transit</a> sections.</dd>

  <dt>Do you validate parking?</dt>
  <dd>No, we do not.</dd>

  <dt>Do you have a safe place for bicycles?</dt>
  <dd>We can store bicycles in our warehouse, but you must lock them and understand that we are not responsible for them.</dd>

  <dt>Can I pay cash when I get there?</dt>
  <dd>Yes, and if a space is available you may take the class. It is best to call in advance to register and pay for a class or register online. Classes often fill up several days or even weeks prior to the start date. We cannot reserve a space without payment. Please see our <a href="/policies/#ceu">payment policies.</a></dd>

  <dt>Can I pay with my Visa gift card?</dt>
  <dd>Unfortunately our system cannot process Visa gift cards.</dd>

  <dt>Can I pay half cash and half credit?</dt>
  <dd>Yes you can. Please allow for extra time to process your payment.</dd>

  <dt>Can you please put me on the waiting list?</dt>
  <dd>Yes, we can wait list you for a course that is full. You will be emailed if a seat becomes available, but it is the students responsibility to call our office and pay the registration in order to be put on the roster.</dd>

  <dt>Can I interpret for someone who does not speak English?</dt>
  <dd>All students need to read, write and speak English.</dd>

  <dt>I am hearing impaired, can I bring my interpreter?</dt>
  <dd>Yes you can.</dd>

  <dt>Will you honor my card from the Red Cross, ASHI Pro, Canada, and/or the US Military?</dt>
  <dd>We will honor ASHI Pro, Military and Canadian CPR, but not Red Cross.</dd>

  <dt>My card went through the wash and the dates are illegible will you accept it?</dt>
  <dd>We can accept it only if we have records that you took your class here. Otherwise, check with the agency where you took your class. If you work in a hospital your employer should have a copy on file.</dd>

  <dt>I laminated my card, will you accept it?</dt>
  <dd>We do not accept laminated cards. It is a legal document.</dd>

  <dt>Where can I get something to eat?</dt>
  <dd>We are fortunate to be located in an area surrounded by restaurants of every flavor and price. <a href="http://www.yelp.com/search?find_desc=restaurants&find_loc=2075+allston+way,+Berkeley,+CA&l=p:CA:Berkeley::Downtown_Berkeley">Click here</a> to search Yelp for local restaurants.</dd>
</dl>
</section>
HTML;

print $renderer->render('base.twig', array(
  'title' => 'Fast Response Student Resources', 
  'page_header' => 'Continuing Education',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('students.css'),
  'active' => 'students',
  'content' => $content,
));
?>
