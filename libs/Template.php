<?php
use Pug\Pug;

class Template {
  protected $root;
  public function __construct($srcPath, $root) {
    $this->root = isset($root) ? ltrim($root, '/') : '/';

    spl_autoload_register(function($class) use($srcPath) {
      if (strstr($class, 'Pug') || strstr($class, 'Jade')) {
        include($srcPath . str_replace("\\", DIRECTORY_SEPARATOR, $class) . '.php');
      }
    });
  }

  public function render($path, $vars = array()) {
    $pug = new Pug;
    echo $pug->render($this->root . $path . '/template.jade', $vars);
  }
}