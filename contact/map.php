<?php
require_once '../twig_loader.php';

$content = <<<'HTML'
<div id="map_col">
  <a class="map" target="_blank" href="https://www.google.com/maps/place/Fast+Response+School+of+Health+Care+Education,+2075+Allston+Way,+Berkeley,+CA+94704/">
    <!--<img src="http://maps.googleapis.com/maps/api/staticmap?center=2075+Allston+Way,Suite+B,Berkeley,CA,94704&amp;zoom=14&amp;markers=color:red%7Clabel:F%7C2075+Allston+Way,Berkeley,CA&amp;size=400x350&amp;sensor=false" alt="Map of our area" data-width="400" data-height="350" />-->
    <img src="/img/map_tmp.png">
  </a>
</div>
<div id="directions_col">
  <div id="google_directions">
    <form action="http://maps.google.com/maps" method="get" target="_blank">
      <label>From:</label>
      <input type="text" name="saddr" placeholder="Starting address" />
      <label>To:</label>
      <input type="text" name="daddr" readonly="readonly" value="2075 Allston Way, Suite B, Berkeley, CA 94704" />
      <input type="submit" value="Google Directions" />
    </form>
  </div>

  <div id="mapquest_directions">
    <form action="http://mapq.st/directions" method="get" target="_blank">
      <label>From:</label>
      <input type="text" name="saddr" placeholder="Starting address" />
      <label>To:</label>
      <input type="text" name="daddr" readonly="readonly" value="2075 Allston Way, Suite B, Berkeley, CA 94704" />
      <input type="submit" value="Mapquest Directions" />
    </form>
  </div>
</div>
HTML;

$renderer = new TemplateRenderer();

print $renderer->render('base.twig', array(
  'title' => 'Fast Response School of Health Care Education', 
  'page_header' => 'Map & Directions',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, sterile processing, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('contact.css'),
  'active' => 'contact',
  'content' => $content,
));
?>
