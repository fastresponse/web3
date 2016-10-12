<?php

class ParseQueryString {
  private $requested_args = null;
  private $existing_args = null;


  private function initialize_existing_args() {
    parse_str($_SERVER['QUERY_STRING'], $this->existing_args);
  }

  public function __construct($requested_args = null) {
    initialize_existing_args();
    set_requested_args($requested_args);
  }

  public function set_requested_args($requested_args = null) {
    if (isset($requested_args) && is_array($requested_args)) {
      $this->requested_args = requested_args;
    }
  }
  public function add_requested_args($requested_args = null) {
    if (isset($requested_args) && is_array($requested_args)) {
      $this->requested_args = array_merge($this->requested_args, $requested_args);
    }
  }
  public function get_requested_args($requested_args = null) {
    if (!isset($requested_args) || !is_array($requested_args)) {
      $requested_args = $this->requested_args;
    }
    if (!isset($requested_args) || !is_array($requested_args)) {
      return array();
    }

    $out_args = array();
    foreach ($requested_args as $arg) {
      if (!array_key_exists($arg, $existing_args)) continue;
      $out_args[$arg] = filter_var(
        $existing_args[$arg],
        FILTER_SANITIZE_STRING,
        FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK
      );
    }
    return $out_args;
  }
}

?>
