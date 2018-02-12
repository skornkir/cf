<?php
/**
 * @file
 * transform_content.features.inc
 */

/**
 * Implements hook_views_api().
 */
function transform_content_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function transform_content_node_info() {
  $items = array(
    'tasks' => array(
      'name' => t('Задачи'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'transalte' => array(
      'name' => t('Переводы'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
