<?php
require_once '../twig_loader.php';

$content = <<<'HTML'
<ul class="parking">
  <li><strong>Parking Validation:</strong> Sorry, we do not validate parking.</li>
  <li><strong>Metered Parking Lot:</strong> A metered parking lot is available on Berkeley Way between Shattuck Avenue and Milvia. <em><span class="nowrap">Hours: Mon-Fri 5:15am-12am,</span> <span class="nowrap">Sat 8am-12am,</span> <span class="nowrap">Sun 12pm-12am.</span></em></li>
  <li><strong>Residential/Street Parking:</strong> West of Martin Luther King Jr. Way for up to two hours.</li>
  <li><strong>Motorcycle Parking:</strong> Free parking for motorcycles is located on the corner of Allston Way and Harold Street <span class="nowrap">(1/4 block from the school).</span></li>
  <li><strong>Parking Garages:</strong> There are several parking garages in the area. These rates and hours are not guaranteed -- Please contact the garage prior to your visit.
  <ul class="lots">
	  <li>
	    <div>Standard Parking</div>
	    <div>2020 Kittredge St between Harold and Milvia <a href="tel: +15106651662" class="nowrap">510-665-1662</a></div>
	    <div>$2.50 per hour. In by 8:30am, out by 6:00pm: $8.00 for the day.</div>
	    <div>Hours: Sun-Thurs 6am-12am, Fri-Sat 6am-2am</div>
	  </li>
	  <li>
	    <div>Allston Way Garage (Great Western)/Standard Parking</div>
	    <div>2061 Allston Way between Milvia and Shattuck <a href="tel: +15109819443" class="nowrap">510-981-9443</a></div>
	    <div>$2.50 per hour, $23 per day. In by 8:00am, out by 6:00pm: $15.00 for the day.</div>
	    <div>Hours: Mon-Thurs 6am-12am, Fri 6am-2am, Sat 8am-2am, <span class="nowrap">Sun 8am-12am</span></div>
	  </li>
	  <li>
	    <div>Oxford Street Surface Lot - Parking Concepts, Inc. (PCI)</div>
	    <div>Oxford St. between Allston Way and Kittredge St <a href="tel: +15108431788" class="nowrap">510-843-1788</a></div>
	    <div>$2.00 first hour, $4.00 second hour, $8.00 third hour. $17 max.</div>
	    <div>Hours: Mon-Thurs 7am-1am, Fri-Sat 7am-2am, <span class="nowrap">Sun 8am-10pm</span></div>
	  </li>
	  <li>
	    <div>Promenade Garage - Douglas Parking</div>
	    <div>1936 Addison St. between MLK Jr. Way and Milvia St. <a href="tel: +15108494959" class="nowrap">510-849-4959</a></div>
	    <div>$1.00 for each 20 minutes, $13.00 per day.</div>
	    <div>Hours: Mon-Sat 7:30am-7pm</div>
	  </li>
  </ul>
  </li>
</ul>
HTML;

$renderer = new TemplateRenderer();

print $renderer->render('base.twig', array(
  'title' => 'Fast Response School of Health Care Education', 
  'page_header' => 'Parking Information',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, sterile processing, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('contact.css'),
  'active' => 'contact',
  'content' => $content,
));
?>
