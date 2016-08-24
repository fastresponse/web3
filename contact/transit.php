<?php
require_once '../twig_loader.php';

$content = <<<'HTML'
<ul class="transit">
  <li><strong>BART:</strong> Fast Response is located a quarter of a block from the <a href="http://www.bart.gov/stations/dbrk/index.aspx">Downtown Berkeley</a> BART station. This station is served by the Red and Orange lines, with trains arriving every 15 minutes or less through most of the day. Taking BART is the best option to avoid parking hassles!</li>
  <li><strong>AC Transit:</strong> The Alameda County Transit system has many buses that can bring you to Fast Response. Currently there are 14 lines that pass through Downtown Berkeley. <a href="http://www.actransit.org/maps/">Check their maps and schedules</a> for the following lines: 1, 1R, 7, 18, 25, 49, 51B, 52, 65, 67, 88, 800, 851, or F.</li>
  <li><strong>Amtrak:</strong> The <a href="http://www.amtrak.com/capitol-corridor-train">Capitol Corridor</a> route, which travels between Sparks, NV and San Jose, CA, makes a stop at the <a href="http://www.amtrak.com/servlet/ContentServer?c=am2Station&pagename=am%2Fam2Station%2FStation_Page&p=1237405732508&cid=1229726270736">Berkeley (BKY)</a> Amtrak station. From here, AC Transit route <a href="http://maps.google.com/maps?saddr=700+University+Avenue,+Berkeley,+CA&daddr=2075+Allston+Way,+Berkeley,+CA&hl=en&sll=37.269174,-119.306607&sspn=8.721303,14.040527&geocode=FX7PQQIdE9m1-ClrhgY63X6FgDGlDfIEekDRgg%3BFTDXQQIdclO2-CkbMfZInH6FgDHB1sg-vD-NEA&oq=2075+allston+way+&dirflg=r&ttype=now&noexp=0&noal=0&sort=def&mra=ls&t=m&z=14&start=0">51B</a> can bring you down to the school. Sacramento residents can expect a 2.5 hour commute.</li>
  <li><strong>511:</strong> The <a href="http://www.511.org">511.org</a> website provides an excellent tool for planning complicated bay area trips by bus and train, including transferring between agencies at discounted prices.</li>
</ul>
HTML;

$renderer = new TemplateRenderer();

print $renderer->render('base.twig', array(
  'title' => 'Fast Response School of Health Care Education', 
  'page_header' => 'Public Transit Information',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, sterile processing, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('contact.css'),
  'active' => 'contact',
  'content' => $content,
));
?>
