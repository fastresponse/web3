<?php
require_once '../twig_loader.php';

$content = <<<'HTML'
<dl>
  <dt>Firstname Lastname - Graduate, 2015</dt>
  <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi ante, vulputate eu rutrum non, euismod sed lectus. Ut ac mi augue, semper molestie lectus.</dd>

  <dt>Person McHuman - Director, Crazy Ambulance Co</dt>
  <dd>Nam a nulla vitae justo porta lobortis. Etiam cursus dictum auctor. Nam eu lacus ante. Ut at nibh et leo volutpat adipiscing at at diam. Sed sit amet congue enim. Fusce purus mi, accumsan ac ultrices eu, mollis in risus.</dd>

  <dt>Robot Testdata - Graduate, 2014</dt>
  <dd>Fusce ac lectus luctus lorem tincidunt tristique. Duis interdum fermentum vehicula. Phasellus dui tortor, tristique rutrum consectetur vel, molestie ut quam. Suspendisse non enim sit amet lorem eleifend facilisis.</dd>
</dl>
HTML;

$left_images = array(
  '/img/testimonials/anjani_a.jpg',
  '/img/testimonials/anthea_m.jpg',
  '/img/testimonials/jeffrey_s.jpg',
);
$right_images = array(
  '/img/testimonials/jordan_p.jpg',
  '/img/testimonials/breanna_h.jpg',
  '/img/testimonials/joseph_b.jpg',
);


$renderer = new TemplateRenderer();

print $renderer->render('postsec.twig', array(
  'title' => 'Testimonials', 
  'page_header' => 'Student and Employer Testimonials',
  'description' => '',
  'keywords' => '',
  'canonical' => 'http://www.fastresponse.org/testimonials/',
  'content' => $content,
  'left_images' => $left_images,
  'right_images' => $right_images,
));
?>
