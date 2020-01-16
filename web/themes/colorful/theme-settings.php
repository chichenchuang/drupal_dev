<?php
/**
 * @file
 * Theme settings in this file.
 */
/**
 * Implements hook_form_system_theme_settings_alter().
 */
function colorful_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id = NULL) {
  if (isset($form_id)) {
    return;
  }

  $form['colorful_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Colorful Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );

  $form['colorful_settings']['slideshow'] = array(
    '#type' => 'fieldset',
    '#title' => t('Front Page Slideshow'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    'slide' => array(
        '#markup' => t('You can change the description and URL of each slide in the following Slide Setting fieldsets.'),
    ),
  );

  /**Slide1 settings**/
  $form['colorful_settings']['slideshow']['slide1'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 1'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['colorful_settings']['slideshow']['slide1']['slide1_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide1_head','colorful'),
  );
  $form['colorful_settings']['slideshow']['slide1']['slide1_slogan'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Slogan'),
    '#default_value' => theme_get_setting('slide1_slogan','colorful'),
  );
  $form['colorful_settings']['slideshow']['slide1']['slide1_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide1_url','colorful'),
  );
  $form['colorful_settings']['slideshow']['slide1']['slide1_image'] = array(
    '#type' => 'managed_file',
    '#title' => t('Image 1'),
    '#default_value' => theme_get_setting('slide1_image','colorful'),
    '#upload_location' => 'public://',
  );

  /**Slide2 settings**/
  $form['colorful_settings']['slideshow']['slide2'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 2'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['colorful_settings']['slideshow']['slide2']['slide2_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide2_head','colorful'),
  );
  $form['colorful_settings']['slideshow']['slide2']['slide2_slogan'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Slogan'),
    '#default_value' => theme_get_setting('slide2_slogan','colorful'),
  );
  $form['colorful_settings']['slideshow']['slide2']['slide2_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide1_ur2','colorful'),
  );
  $form['colorful_settings']['slideshow']['slide2']['slide2_image'] = array(
    '#type' => 'managed_file',
    '#title' => t('Image 2'),
    '#default_value' => theme_get_setting('slide2_image','colorful'),
    '#upload_location' => 'public://',
  );

  /**Slide3 settings**/
  $form['colorful_settings']['slideshow']['slide3'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 3'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['colorful_settings']['slideshow']['slide3']['slide3_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide3_head','colorful'),
  );
  $form['colorful_settings']['slideshow']['slide3']['slide3_slogan'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Slogan'),
    '#default_value' => theme_get_setting('slide3_slogan','colorful'),
  );
  $form['colorful_settings']['slideshow']['slide3']['slide3_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide3_url','colorful'),
  );
  $form['colorful_settings']['slideshow']['slide3']['slide3_image'] = array(
    '#type' => 'managed_file',
    '#title' => t('Image 3'),
    '#default_value' => theme_get_setting('slide3_image','colorful'),
    '#upload_location' => 'public://',
  );
}