<?php
require_once 'base.php';
require_once 'Twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();


// create an "ondisk" test for Twig
$test_ondisk = new Twig_SimpleTest('ondisk', function ($file) {
  return file_exists($file);
});


class TemplateRenderer {

  public $loader;
  public $environment;

  public function __construct( $envOptions = array(), $templateDirs = array()) {
    global $test_ondisk;
    $envOptions += array(
      //'cache' => BASE_PATH . '/cache',
      'debug' => false,
      'charset' => 'utf-8',
      'strict_variables' => false,
      'auto_load' => true,
    );
    $templateDirs = array_merge(
      array(BASE_PATH . '/templates'),
      $templateDirs
    );
    $this->loader = new Twig_Loader_Filesystem($templateDirs);
    $this->environment = new Twig_Environment($this->loader, $envOptions);
    $this->environment->addExtension(new Twig_Extension_Debug());
    $this->environment->addTest($test_ondisk);
  }

  public function render($templateFile, array $variables) {
    return $this->environment->render($templateFile, $variables);
  }

  public function display($templateFile, array $variables, array $blocks = array()) {
    $this->environment->display($templateFile, $variables, $blocks);
  }
}

?>
