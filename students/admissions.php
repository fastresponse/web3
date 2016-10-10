<?php
require_once '../twig_loader.php';

$renderer = new TemplateRenderer();

$content = <<<'HTML'
<section>
<h2>School Course Information </h2>
<ul>
  <li><a href="/pdf/Fast Response Catalog 2016.pdf">School Catalog 2016</a></li>
  <li><a href="/pdf/course_packets/EMT - Course Info Packet.pdf">EMT Course Info Packet</a></li>
  <li><a href="/pdf/course_packets/Phlebotomy - Course Info Packet.pdf">Phlebotomy Course Info Packet</a></li>
  <li><a href="/pdf/course_packets/Pharmacy Technician - Course Info Packet.pdf">Pharmacy Technician Course Info Packet</a></li>
  <li><a href="/pdf/course_packets/Medical Assistant - Course Info Packet.pdf">Medical Assistant Course Info Packet</a></li>
</ul>
</section>

<hr>

<section>
<h2>Forms</h2>
<dl>
  <dt><a href="/pdf/admissions/Immunization Form - All Classes.pdf" target="_blank">Immunization Form - General</a></dt>
  <dd>Checklist for required immunizations. To be filled out by a licensed nurse or physician.</dd>

  <dt><a href="/pdf/admissions/Immunization Form - EMT.pdf" target="_blank">Immunization Form - EMT</a></dt>
  <dd>Checklist for required immunizations. To be filled out by a licensed nurse or physician.</dd>

  <dt><a href="/pdf/admissions/Immunization Requirements - Paramedic.pdf" target="_blank">Immunization Form - Paramedic</a></dt>
  <dd>Checklist for required immunizations. To be filled out by a licensed nurse or physician.</dd>

  <dt><a href="/pdf/admissions/Declination For Seasonal Influenza Vaccination.pdf" target="_blank">Declination For Seasonal Influenza Vaccination</a></dt>
  <dd>Form to be filled out to decline a flu vaccination.</dd>

  <dt><a href="/pdf/admissions/Declination For Hepatitis-B Vaccination.pdf" target="_blank">Declination For Hepatitis-B Vaccination</a></dt>
  <dd>Form to be filled out to decline a hepatitis-B vaccination.</dd>

  <dt><a href="/pdf/admissions/Immunizations - Clinics in Alameda County.pdf" target="_blank">Immunizations - Clinics in Alameda County</a></dt>
  <dd>A list of clinics in Alameda county that provide immunization services.</dd>

  <dt><a href="/pdf/admissions/Drug Screen Form.pdf" target="_blank">Drug Screen Form</a></dt>
  <dd>Used to sign up for mandatory drug screening.</dd>

  <dt><a href="/pdf/admissions/Registrar Request Form.pdf" target="_blank">Registrar Request Form</a></dt>
  <dd>Used for requesting copies of transcripts, immunization records, background checks, and other student information.</dd>

  <dt><a href="/pdf/admissions/Student Consent To Release Form.pdf" target="_blank">Student Consent To Release Form</a></dt>
  <dd>Used to allow the release of your educational records to third parties.</dd>

  <dt><a href="/pdf/externship/Externship_Requirements_Checklist.pdf" target="_blank">Externship Requirements Checklist</a></dt>
  <dd>To be filled out and turned in to the school registrar once externship is completed. This form can be used for EMT, Phlebotomy, Medical Assistant, and Sterile Processing courses.</dd>
</dl>
</section>
HTML;

print $renderer->render('images_right.twig', array(
  'title' => 'Fast Response Admissions Resources', 
  'page_header' => 'Admissions Resources',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('students.css'),
  'active' => 'students',
  'content' => $content,
  'right_images' => array('/img/tmp.png', '/img/tmp.png', '/img/tmp.png'),
));
?>
