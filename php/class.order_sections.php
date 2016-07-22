<?php

class Section {

  const DEF_CLASS_ATTR = 'collapsible-mobile-start collapsible-tablet';
  const DEF_MAX_COLS_PER_ROW = 2;
  const DEF_TABLET_ROWS = 1;
  const DEF_CONTAINER = 'aside';
  const DEF_AUTO_HEADER = true;

  private $class_attr;
  private $max_cols_per_row;
  private $tablet_rows;
  private $container;
  private $id_attr;
  private $name;
  private $pre_content;
  private $content;
  private $post_content;
  private $auto_header;

  public function __construct($content) {
    $this->set_default_values();
    $this->set_content($content);
  }

  public function set_default_values() {
    $class_attr = self::DEF_CLASS_ATTR ;
    $max_cols_per_row = self::DEF_MAX_COLS_PER_ROW;
    $tablet_rows = self::DEF_TABLET_ROWS;
    $container = self::DEF_CONTAINER;
    $id_attr = '';
    $name = '';
    $pre_content = '';
    $content = '';
    $post_content = '';
    $auto_header = self::DEF_AUTO_HEADER;
  }

  public function set_container($container) {
    $this->container = $container;
  }
  public function set_auto_header($auto_header) {
    $this->auto_header = $auto_header;
  }
  public function set_id($id, $auto_name = false) {
    $this->id_attr = str_replace(' ', '_', strtolower($id));
    if ($auto_name) $this->set_name($id);
  }
  public function set_name($name, $auto_id = false) {
    $this->name = $name;
    if ($auto_id) $this->set_id($name);
  }
  public function set_class($class) {
    $this->class_attr = $class;
  }
  public function set_content($content) {
    if ($content) $this->content = $content;
  }
  public function set_pre($pre) {
    $this->pre_content = $pre;
  }
  public function set_post($post) {
    $this->post_content = $post;
  }

  public function get_section() {
    $output = "<{$this->container} id=\"{$this->id_attr}\" class=\"{$this->class_attr} tablet-row-{$this->tablet_rows}\">\n";
    if ($this->auto_header) {
      $output .= "<header class=\"stay-open\"><h3 class=\"trigger\">" .
        ucwords($this->name) . "</h3></header>\n";
    }
    $output .= "{$this->content}\n";
    $output .= "</{$this->container}>";
    return $output;
  }
  public function get_output() {
    return $this->get_section();
  }
};

class Row {

  const DEF_NUM_COLS = 2;
  const DEF_CONTAINER = 'aside';

  private $num_cols;
  private $sections;
  private $container;

  private function filler() {
    return
      '<' . $this->container . ' style="display:none;"></' . $this->container . '>'
    ;
  }

  public function __construct($cols) {
    $this->set_default_values();
    if ($cols) $this->num_cols = $cols;
  }

  public function set_default_values() {
    $this->num_cols = self::DEF_NUM_COLS;
    $this->sections = array();
  }

  public function add_section($new_section) {
    if (count($this->sections) < $this->num_cols) {
      $this->sections[] = $new_section;
      return true;
    }
    return false;
  }

  public function get_sections() {
    return $this->sections;
  }

  public function get_row() {
    $output = implode("\n", $this->sections);
    for ($i = count($this->sections); $i < $this->num_cols; $i++) {
      $output .= "\n" . $this->filler();
    }
    return $output;
  }
  public function get_output() {
    return $this->get_row();
  }
};

class Column {

  private $rows;

  public function __construct($rows) {
    if ($rows) $this->rows = $rows;
    else $rows = array();
  }

  public function add_row($item) {
    $this->rows[] = $item;
  }

  public function get_column() {
    $output = '';
    foreach ($rows as $r) {
      $output .= $r->get_output() . "\n";
    }
    return $output;
  }
};

?>
