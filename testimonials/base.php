<?php
// note: this path is relative to where the final pages are
// NOT where this file is located
require_once '../../twig_loader.php';

/*
 * Expected vars:
 * $canonical
 * $title
 * $page_header
 * $course_code
 */

$testimonials = array(
  array(
    'name' => 'Firstname Lastname',
    'title' => 'Graduate',
    'date' => '2015-04-18',
    'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi ante, vulputate eu rutrum non, euismod sed lectus. Ut ac mi augue, semper molestie lectus.',
    'image' => '/img/testimonials/anjani_a.jpg',
  ),
  array(
    'name' => 'Person McHuman',
    'title' => 'Director, Crazy Ambulance Co',
    'date' => '2016-02-07',
    'quote' => 'Nam a nulla vitae justo porta lobortis. Etiam cursus dictum auctor. Nam eu lacus ante. Ut at nibh et leo volutpat adipiscing at at diam. Sed sit amet congue enim. Fusce purus mi, accumsan ac ultrices eu, mollis in risus.',
    'image' => '/img/testimonials/anthea_m.jpg',
  ),
  array(
    'name' => 'Robot Testdata',
    'title' => 'Graduate',
    'date' => '2014-10-17',
    'quote' => 'Fusce ac lectus luctus lorem tincidunt tristique. Duis interdum fermentum vehicula. Phasellus dui tortor, tristique rutrum consectetur vel, molestie ut quam. Suspendisse non enim sit amet lorem eleifend facilisis.',
    'image' => '/img/testimonials/jeffrey_s.jpg',
  ),
  array(
    'name' => 'Another Sample',
    'title' => 'Student',
    'date' => '2016-10-17',
    'quote' => 'The quick brown fox jumped over the lazy dogs.',
    'image' => '/img/testimonials/evan_k.jpg',
  ),
);

$right_images = array(
  '/img/tmp.png',
  '/img/tmp.png',
  '/img/tmp.png',
);


$renderer = new TemplateRenderer();

print $renderer->render('testimonials.twig', array(
  'title' => $title ? $title : 'Testimonials',
  'page_header' => $page_header ? $page_header : 'Testimonials',
  'description' => '',
  'keywords' => '',
  'canonical' => $canonical ? $canonical : 'http://www.fastresponse.org',
  'css' => array('testimonials.css'),
  'active' => 'postsec',
  'testimonials' => $testimonials,
  'right_images' => $right_images,
));
?>