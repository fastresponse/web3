<?php
require_once '../twig_loader.php';

$content = <<<'HTML'
<h2>We are approved by the <a href="http://www.bppe.ca.gov/about_us/contact.shtml" class="underline">Bureau of Private and Postsecondary Education</a></h2>

<blockquote>A student or any member of the public may contact the Bureau of Private Postsecondary Education at any time about this institution by calling toll free: 888-370-7589, writing to Bureau for Private Postsecondary Education, P.O. Box 980818, West Sacramento, CA 95798-0818 or 2535 Capitol Oaks Drive, Suite 400, Sacramento, CA 95833, or by completing a complaint form, which can be obtained on the Bureau's internet website: <a href="http://www.bppe.ca.gov" class="underline">http://www.bppe.ca.gov</a>.</blockquote>

<p class="bold italic">Fast Response School of Health Care Education is a private postsecondary educational school.</p>
<p>We are an American Heart Association (AHA), American Safety and Health Institute (ASHI) and American Academy of Pediatrics (AAP) affiliated training facility. We provide CEUs (Continuing Education Units) for EMS personnel, Nurses and other medical professionals.</p>
<p>Our Phlebotomy Technician program is approved by the State of California Department of Health Services, and our Emergency Medical Technician program is approved by the State of California Emergency Medical Services Authority.</p>
<p>As a School of Health Care Education, our curriculum is approved by The Department of Health Services California Laboratory Field Services, California Emergency Medical Services Authority (EMSA), and registered with The Bureau of Private Postsecondary Vocational Education. To maintain this status, we must uphold the same standards as a Junior College, University or Vocational School, but we can offer comparable training in a shorter period of time, providing you with superior training while you begin or augment your career in the medical field.</p>
<p>In addition to providing training at our main campus in Berkeley, we also teach in a variety of healthcare and corporate settings in the greater Bay Area. We contract with hospitals, businesses, schools, daycares, community organizations, and individuals.</p>
<p>Since 1989, Fast Response School of Health Care Education has been the Bay Area's premier community and professional training center, offering certifications in many postsecondary and continuing education courses.</p>
<p>We promote an energetic, diverse, and challenging atmosphere where you are given the attention needed to lay the groundwork for success in today's exciting healthcare industry.  Our Instructors are all certified or licensed medical professionals with years of field and teaching experience. Our school administrators are invested in the success of every student.</p>
<p>Fast Response is a fifty percent woman-owned (and family-owned), equal opportunity business, with women and minorities making up a large percentage of our staff.</p>
<hr>
<h2>Our Mission</h2>
<p>To create a highly stimulating and supportive learning environment which will enable our students to obtain the necessary career skills to achieve their life goals. We sincerely believe that a learning environment which is challenging, accepting and lively inspires confidence and motivates our students to succeed. Together, we can be a driving factor in improving the quality of Health Care in our community.</p>
HTML;

$renderer = new TemplateRenderer();

print $renderer->render('images_right.twig', array(
  'title' => 'Fast Response School of Health Care Education', 
  'page_header' => 'About Fast Response',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('about.css'),
  'active' => 'about',
  'content' => $content,
  'right_images' => array('/img/tmp.png', '/img/tmp.png', '/img/tmp.png'),
  'right_captions' => array('Fast Response', null, null),
));
?>
