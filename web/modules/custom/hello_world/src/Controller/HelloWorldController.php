<?php

// 声明命名空间，格式为 Drupal\[module_name]\Controller
namespace Drupal\hello_world\Controller;

// 导入内核提供的控制器基础类
use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Hello World module routes.
 */
class HelloWorldController extends ControllerBase {

  public function content() {
    return array(
      '#markup' => 'Hello, World!',
    );
  }

}