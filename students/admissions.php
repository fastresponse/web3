<?php
require_once '../twig_loader.php';

$renderer = new TemplateRenderer();

$content = <<<'HTML'
<h2>School Course Information </h2>
<ul>
  <li><a href="/pdf/Fast Response Catalog 2016.pdf">School Catalog 2016</a></li>
  <li><a href="/pdf/course_packets/EMT - Course Info Packet.pdf">EMT Course Info Packet</a></li>
  <li><a href="/pdf/course_packets/Phlebotomy - Course Info Packet.pdf">Phlebotomy Course Info Packet</a></li>
  <li><a href="/pdf/course_packets/Pharmacy Technician - Course Info Packet.pdf">Pharmacy Technician Course Info Packet</a></li>
  <li><a href="/pdf/course_packets/Medical Assistant - Course Info Packet.pdf">Medical Assistant Course Info Packet</a></li>
</ul>

<hr>

<h2>Forms</h2>
<dl>
  <dt><a href="/pdf/admissions/Immunization Form - All Classes.pdf" target="_blank">Immunization Form - General</a></dt>
  <dd>Checklist for required immunizations. To be filled out by a licensed nurse or physician.</dd>

  <dt><a href="/pdf/admissions/Immunization Form - EMT.pdf" target="_blank">Immunization Form - EMT</a></dt>
  <dd>Checklist for required immunizations. To be filled out by a licensed nurse or physician.</dd>

  <dt><a href="/pdf/admissions/Immunization Requirements - Paramedic.pdf" target="_blank">Immunization Form - Paramedic</a></dt>
  <dd>Checklist for required immunizations. To be filled out by a licensed nurse or physician.</dd>

  <dt><a href="/pdf/admissions/Immunizations - Clinics in Alameda County.pdf" target="_blank">Immunizations - Clinics in Alameda County</a></dt>
  <dd>A list of clinics in Alameda county that provide immunization services.</dd>

  <dt><a href="/pdf/admissions/Drug Screen Form.pdf" target="_blank">Drug Screen Form</a></dt>
  <dd>Used to sign up for mandatory drug screening.</dd>

  <dt><a href="/pdf/admissions/Registrar Request Form.pdf" target="_blank">Registrar Request Form</a></dt>
  <dd>Used for requesting copies of transcripts, immunization records, background checks, and other student information.</dd>

  <dt><a href="/pdf/admissions/FERPA Form.pdf" target="_blank">FERPA Student Information Release Form</a></dt>
  <dd>Used to send a copy of your student information to a third party. Commonly used for academic and immunization records.</dd>

  <dt><a href="/pdf/externship/Externship_Requirements_Checklist.pdf" target="_blank">Externship Requirements Checklist</a></dt>
  <dd>To be filled out and turned in to the school registrar once externship is completed. This form can be used for EMT, Phlebotomy, Medical Assistant, and Sterile Processing courses.</dd>
</dl>
HTML;

print $renderer->render('base.twig', array(
  'title' => 'Fast Response Admissions Resources', 
  'page_header' => 'Admissions Resources',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('students.css'),
  'active' => 'students',
  'content' => $content,
));
?>