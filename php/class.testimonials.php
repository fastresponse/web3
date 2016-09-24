<?php

require_once('dbconn.php');

class TestimonialList {
  /* consts */
  const DEF_LIMIT = 0;
  const DATE_FORMAT = "%M %D, %Y";

  /* public vars */
  // none

  /* private vars */
  private $handle = null;
  private $categories = null;
  private $limit = null;

  private $category_values = null;

  private $testimonial_results = null;

  /* public funcs */

  public function __construct(
    $handle = null, $categories = null, $limit = null
  ) {
    $this->set_default_values();

    if (!empty($handle)) $this->handle = $handle;
    else $this->handle = db_connect();

    $this->categories = $categories;
    $this->limit = $limit;
  }

  public function set_default_values() {
  }

  public function set_categories($categories) {
    $this->categories = $categories;
  }

  public function set_limit($limit) {
    $this->limit = $limit;
  }

  public function do_testimonial_query() {
    if (!$this->get_category_values()) return null;

    $bitmask = $this->calc_categories_bitmask($this->categories);
    if ($bitmask === null) return null;

    $this->testimonial_results = basic_query($this->handle,
      array('name', 'title',
            'DATE_FORMAT(date, "' . self::DATE_FORMAT . '") AS date',
            'quote', 'image', 'video', 'categories'), # select
      'testimonials', # from
      array('(categories & :catnuma) = :catnumb'), # where
      null, # order by
      ($this->limit || self::DEF_LIMIT), # limit
      array(':catnuma' => $bitmask,
            ':catnumb' => $bitmask) # replacement parameters
    );

    shuffle($this->testimonial_results);

    return true;
  }

  public function get_testimonial_results() {
    return $this->testimonial_results;
  }

  /* private funcs */

  private function get_category_values() {
    if (empty($this->handle) || empty($this->categories)) return null;
    $this->category_values =
      query_set_value_bit_array($this->handle, 'categories', 'testimonials')
    ;
    return true;
  }

  private function calc_categories_bitmask($wanted_cats) {
    if (empty($this->category_values)) return null;

    $wanted_cats = array_unique($wanted_cats);
    $category_num = 0;
    foreach ($wanted_cats as $cat) {
      $category_num += $this->category_values[$cat];
    }

    return $category_num;
  }

}

?>
