<?php
require_once '../../twig_loader.php';

$course_code = 'PHM';
$form_course_code = 'PHM';
$course_color = '#43c2bb';

$center = <<<'HTML'
<h2>Five Reasons to Enroll</h2>
<ol>
  <li>Our program is accredited by the American Society of Health-System Pharmacists (ASHP).</li>
  <li>Guaranteed externships for all students!</li>
  <li>Great job outlook.</li>
  <li>We provide a convenient, safe, and comfortable learning environment.</li>
  <li>Faculty and staff are committed to your success!</li>
</ol>

<p id="testimonial-link"><a href="/testimonials/phm/">Read what our students have to say</a></p>

<h2>A Dependable Career</h2>

<p>Pharmacy Technicians (CPhTs) serve as a liaison between a patient and a pharmacist. Under the supervision of a pharmacist, they supply medicines to patients, assemble medications for prescriptions, and provide information to patients and other health care professionals. They also manage areas of medicines supply, produce medicines in hospitals and they may supervise other pharmacy staff.</p>

<p>Pharmacy Technicians work in the retail, hospital and specialty areas of pharmacy services like Oncology, Pediatrics and Geriatrics. They work in community pharmacies, hospitals, in pharmaceutical production, pharmacy sales, prisons, primary care organizations, education and training and in veterinary services.</p>

<p>There is strong demand for competent, qualified, and well-trained Pharmacy Technicians in the Bay Area, as well as excellent job outlook. According to the United States Bureau of Labor Statistics, Employment of pharmacy technicians is projected to grow 20 percent from 2012 to 2022, faster than the average for all occupations. It is a great time to get into heath care and get a career in a field you can count on.</p>

<p>Our instructors are highly-trained and experienced California Registered Pharmacy Technicians. Come and learn in a dynamic and engaging classroom setting and in our up-to-date skills lab where you will train for both hospital and retail pharmacy jobs. On your clinical externship you will learn from pharmacists and gain confidence while interacting with real patients.</p>

<p>If you want to become a highly-skilled health care professional, capable of competing in the job market, come to Fast Response.</p>
HTML;

$left = array(
  array('image', '/img/phm/PHM Meds 001-01.jpg'),
  array('image', '/img/phm/PHM Meds Transfer 001-01.jpg'),
  array('image', '/img/phm/PHM Tech EMPLOYEE 001-01.jpg'),
);
$right = array(
  array('image', '/img/phm/PHM Face and Transfer 001-01.jpg'),
  array('image', '/img/phm/PHM Meds Mortar 001-01.jpg'),
  array('image', '/img/phm/PHM Tech 002-01.jpg'),
);


$renderer = new TemplateRenderer();

print $renderer->render('postsec.twig', array(
  'title' => 'Pharmacy Technician Course at Fast Response', 
  'page_header' => 'Pharmacy Technician Program',
  'description' => '',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification',
  'canonical' => 'http://www.fastresponse.org/courses/phm/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'course_color' => $course_color,
  'center' => $center,
  'left' => $left,
  'right' => $right,
));
?>
