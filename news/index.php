<?php
require_once '../twig_loader.php';

$renderer = new TemplateRenderer();

$content = <<<'HTML'
<div id="fb-feed" style="margin: 0 auto; width: 500px;">
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <div class="fb-page"
       data-href="https://www.facebook.com/FastResponseSchool"
       data-small-header="true"
       data-adapt-container-width="true"
       data-hide-cover="false"
       data-show-facepile="false"
       data-show-posts="true"
       data-hide-cta="true"
       data-width="500"
       data-height="600"
  >
    <div class="fb-xfbml-parse-ignore">
      <blockquote cite="https://www.facebook.com/FastResponseSchool">
        <a href="https://www.facebook.com/FastResponseSchool">
          Fast Response School of Health Care Education
        </a>
      </blockquote>
    </div>
  </div>
</div>
HTML;

print $renderer->render('base.twig', array(
  'title' => 'Fast Response News', 
  'page_header' => 'Fast Response News',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('news.css'),
  'active' => 'news',
  'content' => $content,
));
?>
