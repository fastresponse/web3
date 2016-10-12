<?php

$sources = array(
  'Google',
  'Facebook',
  'Yahoo / Bing',
  'Yelp',
  'East Bay Express',
  'Friend / Relative',
  'Coworker / Employer',
  'Flyer / Brochure',
  'Career Fair',
  'Other',
);

$source_hosts = array(
  'www.google.com' => 'Google',
  'www.facebook.com' => 'Facebook',
  'm.facebook.com' => 'Facebook',
  'www.bing.com' => 'Yahoo / Bing',
  'search.yahoo.com' => 'Yahoo / Bing',
  'www.yelp.com' => 'Yelp',
  'm.yelp.com' => 'Yelp',
);

function get_referring_source() {
  global $source_hosts;

  $refer = $_SERVER['HTTP_REFERER'];
  if (!$refer || $refer == '')
    return '';

  $host = parse_url($refer, PHP_URL_HOST);
  if (!$host || $host == '')
    return '';

  if (array_key_exists($host, $source_hosts))
    return $source_hosts[$host];

  /*
  // alternatively, if $source_hosts contains regex patterns:
  foreach ($source_hosts as $pattern => $src) {
    if (preg_match($pattern, $host)) {
      return $src;
    }
  }
  */

  return '';
}

?>
