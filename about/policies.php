<?php
require_once '../twig_loader.php';

$left = <<<'HTML'
<div id="details_ceu_policy">
<h2><a name="ceu"></a>Continuing Education Class Policies</h2>

<h3>CEU Classes Cancellation Policy</h3>
<p><span class="red">We do not issue refunds for course fees.</span> All registrations are final.</p>
<p>If you cancel or fail to attend the class you have registered for, <span class="red">you will forfeit your entire course fee.</span></p>

<h3>CEU Classes Reschedule Policy</h3>
<p>You may reschedule your course by calling us at least 2 business days prior to your scheduled course date. A $5.00 rescheduling fee will be applied.</p>
<p>If you reschedule your course within 2 business days prior to the course start date, you will be charged 50% of your course fees.</p>
<p>A maximum of 2 reschedule requests will be honored per course.</p>
<p>Our Administrative Offices are closed on weekends and holidays. We do not accept rescheduling requests on weekends or holidays.</p>
<p>We do not accept requests left on the answering machine.</p>

<h3>CEU Classes Late Arrival Policy</h3>
<p>Our classes start on time. Please plan your trip accordingly and remember to allow time for parking.</p>
<p>If you are late for your scheduled class, you will be not be admitted into class and you must reschedule (reschedule fee applies).</p>
</div>

<hr>

<div id="details_privacy_policy">
<h2><a name="privacy_policy"></a>Fast Response Privacy Policy</h2>

<h3>What information do we collect?</h3>
<p>We collect information from you when you register on our site or place an order.</p>
<p>When ordering or registering on our site, as appropriate, you may be asked to enter your name, e-mail address, mailing address, phone number or credit card information. You may, however, visit our site anonymously.</p>

<h3>What do we use your information for?</h3>
<p>Any of the information we collect from you may be used in one of the following ways:</p>
<ul>
  <li>To process transactions: Your information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without your consent, other than for the express purpose of delivering the purchased product or service requested.</li>
  <li>To send periodic emails: The email address you provide for order processing, will only be used to send you information and updates pertaining to your order.</li>
</ul>

<h3>How do we protect your information?</h3>
<p>We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our Payment gateway providers database only to be accessible by those authorized with special access rights to such systems, and are required to keep the information confidential.</p>
<p>After a transaction, your financial information (credit cards, social security numbers, etc.) will not be stored on our servers.</p>

<h3>Do we use cookies?</h3>
<p>Yes, we use cookies to help us remember and process the items in your shopping cart.</p>

<h3>Do we disclose any information to outside parties?</h3>
<p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>

<h3>Your Consent</h3>
<p>By using our site, you consent to our web site privacy policy.</p>

<h3>Changes to our Privacy Policy</h3>
<p>We may update and change our Policies and Terms and Conditions without notice.</p>

<h3>Contacting Us</h3>
<p>If there are any questions regarding this Privacy Policy, you may contact us <a href="/contact/">here</a>.</p>
</div>
HTML;

$right = <<<'HTML'
<div id="details_website_terms">
<h2><a name="website_terms"></a>Website Terms And Conditions</h2>

<h3>Acknowledging our Terms and Conditions Agreement</h3>
<p>These Terms and Conditions govern your viewing and use of our website. By visiting and utilizing our site, using any of the tools and services provided via our site, or registering an account, you thereby agree to be bound by each of the Terms and Conditions of this Agreement and you accept these Terms and Conditions in full. If you disagree with these Terms and Conditions, you should not use our site. Fast Response School of Health Care Education provides this site as a service for our users, site visitors, registered and prospective students and account holders.</p>
<p>This website uses cookies. By using this website and agreeing to these Terms and Conditions, you consent to Fast Response School of Health Care Education's use of cookies in accordance with the terms of Fast Response School of Health Care Education's privacy policy.</p>

<h3>Website Access</h3>
<p>Fast Response may make changes to the Terms and Conditions at any time without notice. The modified Terms and Conditions of this Agreement are effective and in force when posted on our website. It is the responsibility of the site users to read these Terms and Conditions each time they access any portion of our site. Any usage of this site by you, including merely viewing our home page or any page published on our site, as an unregistered user, means that you agree to be bound by each and every one of the Terms and Conditions of this Agreement.</p>

<h3>Copyright</h3>
<p>The information and content on this website is protected by copyright.</p>
<p>Copyright 1989-2013 Fast Response School of Health Care Education. All Rights Reserved.</p>
<p>No portion of the content or information on this Web site may be reproduced in any form or by any means without prior written permission from Fast Response School of Health Care Education.</p>
<p>Unless otherwise stated, Fast Response School of Health Care Education and/or its licensors own the intellectual property rights in the website and material on the website. Subject to the license below, all these intellectual property rights are reserved.</p>
<p>No portion of the content or information on this Web site may be reproduced in any form or by any means without prior written permission from Fast Response School of Health Care Education.</p>
<p>You may view, download for caching purposes only, and print pages or images from the website for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.</p>

<h3>You must not:</h3>
<ul>
  <li>Republish material from this website (including republication on another website);</li>
  <li>Sell, rent or sub-license material from the website;</li>
  <li>Show any material from the website in public;</li>
  <li>Reproduce, duplicate, copy or otherwise exploit material on this website for a commercial purpose;</li>
  <li>Redistribute material from this website (except for content specifically and expressly made available for redistribution).</li>
</ul>

<h3>Acceptable Use</h3>
<p>You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way, which is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.</p>
<p>You must not use this website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any malicious or unauthorized computer software.</p>
<p>You must not conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to this website without Fast Response School of Health Care Education's express written consent.</p>
<p>You must not use this website for any purposes related to marketing without Fast Response School of Health Care Education's express written consent.</p>

<h3>Third-Party Links</h3>
<p>Links to third-party websites on this website are provided solely as a convenience to our students. If you utilize these links, you will leave the Fast Response School of Health Care Education School of Health Care Education website. We cannot and do not review all third-party sites, therefore we will not be responsible for the terms and conditions, privacy practices or the content of any third-party web site.</p>

<h3>Restricted Access</h3>
<p>Access to certain areas of this website is restricted. Fast Response School of Health Care Education reserves the right to restrict access to areas of this website, or indeed this entire website, at Fast Response School of Health Care Education's discretion.</p>
<p>If Fast Response School of Health Care Education provides you with a user ID and password to enable you to access restricted areas of this website or other content or services, you must ensure that the user ID and password are kept confidential.</p>
<p>Fast Response School of Health Care Education may disable your user ID and password at Fast Response School of Health Care Education's sole discretion without notice or explanation.</p>

<h3>No Warranties</h3>
<p>This website is provided "as is" without any representations or warranties of any kind, express or implied. Fast Response School of Health Care Education makes no representations or warranties in relation to this website or the information and materials provided on this website.</p>
<p>Without prejudice to the generality of the foregoing paragraph, Fast Response School of Health Care Education does not warrant that:</p>
<ul>
  <li>This website will be constantly available, or available at all; or</li>
  <li>The information on this website is complete, true, accurate or non-misleading.</li>
  <li>Nothing on this website constitutes, or is meant to constitute, advice of any kind. If you require advice in relation to any legal, financial or medical matter, you should consult an appropriate professional.</li>
  <li>In no event will Fast Response School of Health Care Education be liable to you for any incidental, indirect, special or consequential damages (even if  Fast Response School of Health Care Education has been advised of the possibility of such damages), arising out of your use or inability to use our website. Fast Response School of Health Care Education reserves the right to change regulations, policies, fees, calendars, and to revise our curricula as we deem necessary. All information and content in this website is subject to change, and should not be considered a contract between Fast Response School of Health Care Education and our students.</li>
</ul>

<h3>Limitations of Liability</h3>
<p>Fast Response School of Health Care Education will not be liable to you (whether under the law of contact, the law of torts or otherwise) in relation to the contents of, or use of, or otherwise in connection with, this website:</p>
<ul>
  <li>To the extent that the website is provided free-of-charge, for any direct loss;</li>
  <li>For any indirect, special or consequential loss; or</li>
  <li>For any business losses, loss of revenue, income, profits or anticipated savings, loss of contracts or business relationships, loss of reputation or goodwill, or loss or corruption of information or data.</li>
</ul>
<p>These limitations of liability apply even if Fast Response School of Health Care Education has been expressly advised of the potential loss.</p>

<h3>Exceptions</h3>
<p>Nothing in this website disclaimer will exclude or limit any warranty implied by law that it would be unlawful to exclude or limit; and nothing in this website disclaimer will exclude or limit Fast Response School of Health Care Education's liability in respect of any:</p>
<ul>
  <li>Death or personal injury caused by Fast Response School of Health Care Education's negligence;</li>
  <li>Fraud or fraudulent misrepresentation on the part of Fast Response School of Health Care Education; or</li>
  <li>Matter which it would be illegal or unlawful for Fast Response School of Health Care Education to exclude or limit, or to attempt or purport to exclude or limit, its liability.</li>
</ul>

<h3>Reasonableness</h3>
<p>By using this website, you agree that the exclusions and limitations of liability set out in this website disclaimer are reasonable.</p>
<p>If you do not think they are reasonable, you must not use this website.</p>

<h3>Other Parties</h3>
<p>You accept that, as a limited liability entity, Fast Response School of Health Care Education has an interest in limiting the personal liability of its officers and employees. You agree that you will not bring any claim personally against Fast Response School of Health Care Education's officers or employees in respect of any losses you suffer in connection with the website.</p>
<p>Without prejudice to the foregoing paragraph, you agree that the limitations of warranties and liability set out in this website disclaimer will protect Fast Response School of Health Care Education's officers, employees, agents, subsidiaries, successors, assigns and sub-contractors as well as Fast Response School of Health Care Education.</p>

<h3>Unenforceable provisions</h3>
<p>If any provision of this website disclaimer is, or is found to be, unenforceable under applicable law, that will not affect the enforceability of the other provisions of this website disclaimer.</p>

<h3>Indemnity</h3>
<p>You hereby indemnify Fast Response School of Health Care Education and undertake to keep Fast Response School of Health Care Education indemnified against any losses, damages, costs, liabilities and expenses (including without limitation legal expenses and any amounts paid by Fast Response School of Health Care Education to a third party in settlement of a claim or dispute on the advice of Fast Response School of Health Care Education's legal advisers) incurred or suffered by Fast Response School of Health Care Education arising out of any breach by you of any provision of these terms and conditions, or arising out of any claim that you have breached any provision of these terms and conditions.</p>

<h3>Breaches of these Terms and Conditions</h3>
<p>Without prejudice to Fast Response School of Health Care Education's other rights under these Terms and Conditions, if you breach these Terms and Conditions in any way, Fast Response School of Health Care Education may take such action as Fast Response School of Health Care Education deems appropriate to deal with the breach, including suspending your access to the website, prohibiting you from accessing the website, blocking computers using your IP address from accessing the website, contacting your internet service provider to request that they block your access to the website and/or bringing court proceedings against you.</p>

<h3>Variation</h3>
<p>Fast Response School of Health Care Education may revise these Terms and Conditions from time-to-time. Revised Terms and Conditions will apply to the use of this website from the date of the publication of the revised Terms and Conditions on this website. Please check this page regularly to ensure you are familiar with the current version.</p>

<h3>Assignment</h3>
<p>Fast Response School of Health Care Education may transfer, sub-contract or otherwise deal with Fast Response School of Health Care Education's rights and/or obligations under these Terms and Conditions without notifying you or obtaining your consent.</p>
<p>You may not transfer, sub-contract or otherwise deal with your rights and/or obligations under these terms and conditions.</p>

<h3>Severability</h3>
<p>If a provision of these Terms and Conditions is determined by any court or other competent authority to be unlawful and/or unenforceable, the other provisions will continue in effect. If any unlawful and/or unenforceable provision would be lawful or enforceable if part of it were deleted, that part will be deemed to be deleted, and the rest of the provision will continue in effect.</p>

<h3>Entire agreement</h3>
<p>These Terms and Conditions constitute the entire agreement between you and Fast Response School of Health Care Education in relation to your use of this website, and supersede all previous agreements in respect of your use of this website.</p>

<h3>Law and jurisdiction</h3>
<p>These Terms and Conditions will be governed by and construed in accordance with California, USA, and any disputes relating to these Terms and Conditions will be subject to the non-exclusive jurisdiction of the courts of Berkeley, (Alameda County), California, USA. </p>

<h3>Fast Response School of Health Care Education's details</h3>
<p>The full name of Fast Response School of Health Care Education is:</p>
<p>Fast Response Safety Training Center, Inc.</p>
<p>DBA: Fast Response School of Health Care Education </p>
<p>Fast Response School of Health Care Education's address is:</p>
<p>2075 Allston Way, Suite B, Berkeley, CA 94704.</p>
 
<h3>Questions, Concerns or Complaints</h3>
<p>Please feel free to contact Fast Response School of Health Care Education <a href="/contact/">here</a>.</p>
</div>
HTML;

$renderer = new TemplateRenderer();

print $renderer->render('2cols.twig', array(
  'title' => 'Fast Response School of Health Care Education', 
  'page_header' => 'Fast Response Policies and Terms',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('about.css'),
  'active' => 'about',
  'left' => $left,
  'right' => $right,
));
?>
