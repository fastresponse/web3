<?php
require_once '../twig_loader.php';

$left = <<<'HTML'
<h3>Front Desk<br />Continuing Education<br />General Inquiries</h3>
<dl>
	<dt>Hours</dt>
    <dd>Mon - Thu: 8 AM - 6 PM</dd>
    <dd>Fri: 8 AM - 5 PM</dd>
	<dt>Phone</dt>
    <dd><a href="tel: +15108494009" class="nowrap">510-849-4009</a></dd>
	<dt>Fax</dt>
    <dd>866-290-2739</dd>
	<dt>Email</dt>
    <dd><a href="mailto: info@fastresponse.org">info@fastresponse.org</a></dd>
	<dt>Address</dt>
		<dd>
		  <span class="nowrap">Fast Response School of</span><br />
		  <span class="nowrap">Health Care Education</span><br />
		  <span class="nowrap">2075 Allston Way, Suite B</span><br />
		  <span class="nowrap">Berkeley, CA 94704</span><br />
		</dd>
</dl>
HTML;

$center = <<<'HTML'
<h3>Admissions<br />Career Courses<br />Postsecondary Education</h3>
<dl>
	<dt>Hours</dt>
    <dd>Mon - Thu: 8 AM - 6 PM</dd>
    <dd>Fri: 8 AM - 5 PM</dd>
    <dd>Sat: 9 AM - 5 PM</dd>
	<dt>Phone</dt>
    <dd><a href="tel: +15108093654" class="nowrap">510-809-3654</a></dd>
	<dt>Toll Free</dt>
    <dd><a href="tel: +18006377387" class="nowrap">800-637-7387</a></dd>
	<dt>Fax</dt>
    <dd>866-572-3363</dd>
	<dt>Email</dt>
    <dd><a href="mailto: admissions@fastresponse.org">admissions@fastresponse.org</a></dd>
</dl>
HTML;

$right = <<<'HTML'
<h3>Departments</h3>
<dl>
	<dt>EMT</dt>
    <dd><a href="mailto: emt@fastresponse.org">emt@fastresponse.org</a></dd>
	<dt>Phlebotomy</dt>
    <dd><a href="mailto: phlebotomy@fastresponse.org">phlebotomy@fastresponse.org</a></dd>
	<dt>Paramedic</dt>
    <dd><a href="mailto: paramedic@fastresponse.org">paramedic@fastresponse.org</a></dd>
	<dt>Pharmacy Technician</dt>
    <dd><a href="mailto: pharmacy@fastresponse.org">pharmacy@fastresponse.org</a></dd>
	<dt>Medical Assisting</dt>
    <dd><a href="mailto: ma@fastresponse.org">ma@fastresponse.org</a></dd>
	<dt>Continuing Education</dt>
    <dd><a href="mailto: ceu@fastresponse.org">ceu@fastresponse.org</a></dd>
</dl>
HTML;

$renderer = new TemplateRenderer();

print $renderer->render('3cols.twig', array(
  'title' => 'Fast Response School of Health Care Education', 
  'page_header' => 'Hours & Information',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('contact.css'),
  'active' => 'contact',
  'left' => $left,
  'center' => $center,
  'right' => $right,
));
?>
