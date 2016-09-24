<?php
require_once '../twig_loader.php';

$renderer = new TemplateRenderer();

$emt = <<<'HTML'
<h2>Emergency Medical Technician Resources</h2>
<dl>
  <dt><h3>Ambulance Driver Certificate Information</h3></dt>
  <dd tabindex="0" class="slidefade">If you wish to drive an ambulance used commercially in emergency service, you may apply at any DMV office for an Ambulance Driver certificate. You may also purchase an 'Ambulance Driver Handbook' for $5.<br><span class="indicator-left"></span> View <span class="indicator-right"></span><br>
    <dl class="hiddencontent">
      <dt>The following requirements must be met before applying:</dt>
      <dd>Be at least 18 years of age.</dd>
      <dd>Hold a valid CA driver license that is not on departmental probation.</dd>
      <dd>Pay an application fee of $25 for an original certificate or $12 for a renewal, duplicate, or name change.</dd>
      <dd>Pass an Ambulance Driver written examination.</dd>
      <dd>Submit a completed <a href="https://www.dmv.ca.gov/portal/dmv/?1dmy&urile=wcm:path:/dmv_content_en/dmv/dl/ambu_drvr_cert#livescan">Request For Live Scan Service</a> form.</dd>
      <dd>Submit a <a href="https://www.fmcsa.dot.gov/sites/fmcsa.dot.gov/files/docs/MedicalExaminationReportFormMCSA5875.pdf">Medical Examination Report - MCSA-5875</a> with a revision date of Jan 2016 or later for medical examinations completed on or after April 21, 2016.</dd>
      <dd>For further information, see <a href="https://www.dmv.ca.gov/portal/dmv/?1dmy&urile=wcm:path:/dmv_content_en/dmv/dl/ambu_drvr_cert">California Ambulance Driver Certificate</a>.</dd>
      
      <dt>Effective January 1st, 2014, form DL-51A / Medical Examiner Certificate (the "Green Card") is obsolete. If you already have a valid DL-51A Green Card, then that card is still valid until its expiration date.</dt>

      <dt>What we require for externships</dt>
      <dd>We do NOT require an Ambulance Driver Certificate in order to schedule externships. However, <strong>we highly recommend it</strong>, especially for students who will be seeking ambulance work.</dd>
      <dd>What is required is a note from an MD, DO, PA, NP, DC, or RN stating that they have examined you and have found you physically fit for work in an emergency room in the capacity of an ED Technician, and that your vision is not seriously impaired (correctable to at least 20/40 vision and able to differentiate between standard traffic signal colors).</dd>
      <dd>A photocopy of the completed Medical Examination Report, DL-51, DL-51A ("Green Card"), or a handwritten or typed note signed by the above medical professionals are all acceptable and sufficient to meet our externship requirements.</dd>
    </dl>
  </dd>

  <dt><h3>Greater Bay Area EMS Agencies</h3></dt>
  <dd tabindex="0" class="agencies slidefade"><span class="indicator-left"></span> View <span class="indicator-right"></span><br>
    <dl class="hiddencontent">
      <dt>Alameda County</dt>
      <dd><ul>
        <li><a href="http://www.acphd.org/ems.aspx">Agency Website</a></li>
        <li><a href="http://www.acphd.org/emtpara/certification-and-accreditation/emtcert.aspx">Initial Certification Application / FAQs</a></li>
        <li><a href="http://www.acphd.org/ems/manual_policies_plans.aspx">Protocols</a></li>
      </ul></dd>

      <dt>Contra Costa County</dt>
      <dd><ul>
        <li><a href="http://cchealth.org/ems/">Agency Website</a></li>
        <li><a href="http://cchealth.org/ems/certification.php">Initial Certification Application / FAQs</a></li>
        <li><a href="http://cchealth.org/ems/phc-manual.php">Protocols</a></li>
      </ul></dd>

      <dt>Marin County</dt>
      <dd><ul>
        <li><a href="https://ems.marinhhs.org/">Agency Website</a></li>
        <li><a href="https://ems.marinhhs.org/ems-personnel">Initial Certification Application / FAQs</a></li>
        <li><a href="https://ems.marinhhs.org/policies-and-procedures">Protocols</a></li>
      </ul></dd>

      <dt>Monterey County</dt>
      <dd><ul>
        <li><a href="http://www.mtyhd.org/">Agency Website</a></li>
        <li><a href="http://www.mtyhd.org/index.php/for-providers/emergency/emts/">Initial Certification Application / FAQs</a></li>
        <li><a href="http://www.mtyhd.org/index.php/for-providers/emergency/adult-protocols/">Protocols</a></li>
      </ul></dd>

      <dt>Napa County</dt>
      <dd><ul>
        <li><a href="http://www.countyofnapa.org/ems/">Agency Website</a></li>
        <li><a href="http://www.countyofnapa.org/EMTCertification/">Initial Certification Application / FAQs</a></li>
        <li><a href="http://www.countyofnapa.org/TreatmentGuidelines/">Protocols</a></li>
      </ul></dd>

      <dt>Sacramento County</dt>
      <dd><ul>
        <li><a href="http://www.dhhs.saccounty.net/PRI/EMS/Pages/EMS-Home.aspx">Agency Website</a></li>
        <li><a href="http://www.dhhs.saccounty.net/PRI/EMS/Pages/Certification%20Pages/SP-EMT-Certification-and-Recertification.aspx">Initial Certification Application / FAQs</a></li>
        <li><a href="http://www.dhhs.saccounty.net/PRI/EMS/Pages/Policy%20Pages/Policies.aspx">Protocols</a></li>
      </ul></dd>

      <dt>San Francisco County</dt>
      <dd><ul>
        <li><a href="http://sfdem.org/ems-agency">Agency Website</a></li>
        <li><a href="http://sfdem.org/emt-paramedic-info">Initial Certification Application / FAQs</a></li>
        <li><a href="http://sfdem.org/POLICY-PROTOCOL-MANUALS">Protocols</a></li>
      </ul></dd>

      <dt>San Joaquin County</dt>
      <dd><ul>
        <li><a href="https://www.sjgov.org/ems/">Agency Website</a></li>
        <li><a href="https://www.sjgov.org/ems/certification.htm">Initial Certification Application / FAQs</a></li>
        <li><a href="https://www.sjgov.org/ems/policies.htm">Protocols</a></li>
      </ul></dd>

      <dt>San Mateo County</dt>
      <dd><ul>
        <li><a href="http://smchealth.org/EMS">Agency Website</a></li>
        <li><a href="http://smchealth.org/EMS/CertificationAccreditation">Initial Certification Application / FAQs</a></li>
        <li><a href="http://smchealth.org/EMS/Protocols">Protocols</a></li>
      </ul></dd>

      <dt>Santa Clara County</dt>
      <dd><ul>
        <li><a href="https://www.sccgov.org/sites/ems/Pages/ems.aspx">Agency Website</a></li>
        <li><a href="https://www.sccgov.org/sites/ems/Pages/cert1.aspx">Initial Certification Application / FAQs</a></li>
        <li><a href="https://www.sccgov.org/sites/ems/Pages/manual.aspx">Protocols</a></li>
      </ul></dd>

      <dt>Santa Cruz County</dt>
      <dd><ul>
        <li><a href="http://www.santacruzhealth.org/HSAHome/HSADivisions/PublicHealth/EmergencyMedicalServices.aspx">Agency Website</a></li>
        <li><a href="http://www.santacruzhealth.org/HSAHome/HSADivisions/PublicHealth/EmergencyMedicalServices.aspx#Paramedic Certification">Initial Certification Application / FAQs</a></li>
        <li><a href="http://www.santacruzhealth.org/HSAHome/HSADivisions/PublicHealth/EmergencyMedicalServices/EMSPolicies,ProtocolsandProcedures.aspx">Protocols</a></li>
      </ul></dd>

      <dt>Solano County</dt>
      <dd><ul>
        <li><a href="https://www.solanocounty.com/depts/ems/">Agency Website</a></li>
        <li><a href="http://solanocounty.com/depts/ems/protocols/default.asp">Protocols</a></li>
      </ul></dd>

      <dt>Yolo County</dt>
      <dd><ul>
        <li><a href="http://www.yolocounty.org/health-human-services/community-health/emergency-medical-services-ems">Agency Website</a></li>
        <li><a href="http://www.yolocounty.org/health-human-services/community-health/emergency-medical-services-ems/accreditation-certifications">Initial Certification Application / FAQs</a></li>
        <li><a href="http://www.yolocounty.org/health-human-services/community-health/emergency-medical-services-ems/policies-protocols">Protocols</a></li>
      </ul></dd>

    </dl>
  </dd>
</dl>
HTML;

$cpt = <<<'HTML'
<h2>Phlebotomy Technician Resources</h2>
HTML;

$phm = <<<'HTML'
<h2>Pharmacy Technician Resources</h2>
<dl>
  <dt><a href="http://www.ptcb.org">Pharmacy Technician Certification Board</a></dt>
  <dd>The PTCB is the primary certifying body for pharmacy technicians. They administer the Pharmacy Technician Certification Exam which is recognized in all 50 states and by the federal government.</dd>

  <dt><a href="https://www2.pearsonvue.com/testtaker/registration/SelectTestCenterProximity/PHA/826880">Pharmacy Technician Certification Exam testing sites</a></dt>
  <dd>Sites where the PTCE is administered.</dd>

  <dt><a href="http://www.pharmacy.ca.gov/forms/tch_app_pkt.pdf">Board of Pharmacy Technician Application</a></dt>
  
  <dt><a href="https://www.youtube.com/watch?v=aTDWlNTxxYg">BOP Technician Application Process Video</a></dt>

  <dt><a href="http://www.ashp.org/menu/Technicians/Technician-Accreditation/Accreditation-Standards-for-Pharmacy-Technician-Education.aspx">ASHP / ACPE Standards of Accreditation</a></dt>
</dl>
HTML;

$cma = <<<'HTML'
<h2>Medical Assistant Resources</h2>
HTML;

$para = <<<'HTML'
<h2>Paramedic Resources</h2>
HTML;

print $renderer->render('entry_list.twig', array(
  'title' => 'Fast Response Student Resources', 
  'page_header' => 'Program Resources',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/students/program_resources.php',
  'css' => array('slidefade.css', 'students.css'),
  'active' => 'students',
  'entries' => array($emt, $cpt, $phm, $cma, $para),
  'right_images' => array('/img/tmp.png', '/img/tmp.png', '/img/tmp.png'),
));
?>
