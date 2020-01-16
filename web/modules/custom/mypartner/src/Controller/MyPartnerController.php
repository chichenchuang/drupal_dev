<?php

// 声明命名空间，格式为 Drupal\[module_name]\Controller
namespace Drupal\MyPartner\Controller;

// 导入内核提供的控制器基础类
use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Hello World module routes.
 */
class MyPartnerController extends ControllerBase {

  public function content() {

    $database = \Drupal::database();
    $query = $database->query("SELECT * FROM mydata ORDER BY id DESC");
    $result = $query->fetchAll();
    
    return array(
      '#theme' => 'mypartner_theme',
      '#data' => $result,
      '#var1' => 'test 變量',
    );
  }

  public function addContentForm() {
    $request = \Drupal::request();
    $request_method = $request->server->get('REQUEST_METHOD');
    if($request_method == 'POST') {
      $formName = $request->request->all();
      $database = \Drupal::database();
      $result = $database->insert("mydata")->fields($formName)->execute();
      
      return $this->redirect('mypartner.content');
    }
    
    
    return array(
      '#theme' => 'mypartner_add_theme',
      '#var1' => 'test 變量',
    );
  }

  public function editContentForm($id=NULL) {
    $request = \Drupal::request();
    $database = \Drupal::database();
    $request_method = $request->server->get('REQUEST_METHOD');
    if($request_method == 'POST') {
      $formName = $request->request->all();
      $result = $database->update("mydata")->fields($formName)->condition('id', $id ,'=')->execute();
      
      return $this->redirect('mypartner.edit_content',['id' => $id]);
    }

    $query = $database->query("SELECT * FROM mydata WHERE id = :id", [':id' => $id]);
    $result = $query->fetch();
    
    return array(
      '#theme' => 'mypartner_edit_theme',
      '#data' => $result,
      '#var1' => 'test 變量',
    );
  }

  public function deleteContentForm($id=NULL) {
    
    $database = \Drupal::database();

    $result = $database->delete("mydata")->condition('id', $id)->execute();
    
    return $this->redirect('mypartner.content');
  }

}