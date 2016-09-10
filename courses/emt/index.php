<?php
require_once '../../twig_loader.php';

$course_code = 'EMT';
$form_course_code = 'EMT';
$course_color = '#144995';

$center = <<<'HTML'
<h2>Five Reasons to Enroll</h2>
<ol>
  <li>NREMT pass rate is higher than the national pass rate</li>
  <li>Externships with 7 major ambulance companies</li>
  <li>Our students are well-known by our externship sites, which provides a direct pipeline to jobs</li>
  <li>90% of our students find jobs!</li>
  <li>Real world experience - most of our instructors are active EMTs</li>
</ol>

<p id="testimonial-link"><a href="/testimonials/emt/">Read what our students have to say</a></p>

<h2>Training that will set you apart from the rest!</h2>

<p>In only 5 weeks, you can become one of the best EMTs in the Bay Area. After your guaranteed externship you'll have the education and experience to take the National Registry EMT exam, where Fast Response students outperform the national average by a significant margin. Our graduates are highly sought-after by leading Bay Area ambulance companies, making you fully-qualified, job ready, and exceedingly employable.</p>
<p>Master the life-saving skills of an EMT and become somebody's hero!</p>
<p>Emergency Medical Technicians (EMTs) are health care professionals who critically assess, evaluate and treat medical and trauma patients. EMTs may work on ambulances, in fire departments or hospital emergency departments, or on search and rescue teams.</p>
<p>EMT is considered an entry-level medical responder. While some EMTs may choose to remain at this level of certification, we view the EMT certification as the first step into a broad array of career options. An EMT certification is required prior to obtaining a paramedic license and also may be required for certain fire service positions. EMT patient contact experience is also considered highly desirable when applying for Physician's Assistant (PA) programs. EMT certification is a fast and accessible option for individuals who are interested in medicine but not sure where to start.</p>
<p>Our extensive, five-week EMT course provides the most effective and expedient platform for our graduates to excel as compassionate, critical-thinking EMTs. Students immediately put their skills into practice in our simulated clinical, residential, and ambulance settings. Students will receive hands-on training with actual field medical equipment, supervised by an experienced cadre of paramedics and EMTs. These instructors bring a wide variety of EMT experience to the classroom and skills lab to expand our students' learning opportunities.</p>
<p>We've contracted with local ambulance companies and hospital emergency departments to provide a guaranteed 24-hour clinical and field externship to every student. Externship is a great way to gain more experience and confidence with patient contact in the field. In addition, students will often have the opportunity to participate in mass casualty incident (MCI) or active shooter drills, arranged in conjunction with local EMS agencies and hospitals.</p>
<p>The Fast Response EMT course features Basic Life Support (BLS / CPR) certification, free tutoring, NREMT test preparation, and a maximum student to instructor skills training ratio of 9:1.</p>
HTML;

$left = array(
  array('image', '/img/emt/intubation_demo.jpg'),
  array('image', '/img/emt/bvm_backboard.jpg'),
  array('image', '/img/emt/sitting_spinal_immobile.jpg'),
);
$right = array(
  array('video', 'http://view.vzaar.com/1399035/player?apiOn=true'),
  array('image', '/img/emt/arm_bandage.jpg'),
  array('image', '/img/emt/car_accident.jpg'),
);


$renderer = new TemplateRenderer();

print $renderer->render('postsec.twig', array(
  'title' => 'EMT at Fast Response', 
  'page_header' => 'EMT Program',
  'description' => 'The Emergency Medical Technician course at Fast Response is designed to teach students the skills needed to become exceptional certified EMTs.',
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emergency medical technician, emt, emt school, emt course, emt class',
  'canonical' => 'http://www.fastresponse.org/courses/emt/',
  'course_code' => $course_code,
  'form_course_code' => $form_course_code,
  'course_color' => $course_color,
  'center' => $center,
  'left' => $left,
  'right' => $right,
));
?>
