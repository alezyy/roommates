<?php

/**
 * @file
 * Contains the base row style plugin.
 */

/**
 * The basic 'fields' row plugin
 * @ingroup views_row_plugins
 */
class vertical_timeline_plugin_row_vertical_timelinefields extends views_plugin_row {
  /**
   * Set default options.
   */
  function option_definition() {
    $options = parent::option_definition();
    $options['dates_field'] = array('default' => '');
    $options['title_field'] = array('default' => '');
    $options['image_field'] = array('default' => '');
    $options['body_field'] = array('default' => '');
    $options['nodeid_field'] = array('default' => '');
    return $options;
  }
  /**
   * Show a form to edit the style options.
   */
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

    $fields = array('' => t('<none>'));
    foreach ($this->display->handler->get_handlers('field') as $field => $handler) {
      if ($label = $handler->label()) {
        $fields[$field] = $label;
      }
      else {
        $fields[$field] = $handler->ui_name();
      }
    }

    $form['nodeid_field'] = array(
      '#type' => 'select',
      '#required' => TRUE,
      '#title' => t('nodeid field'),
      '#options' => $fields,
      '#default_value' => $this->options['nodeid_field'],
      '#description' => t('Select the field that will be used as the unique id for vertical  timeline.'),
    );

    $form['dates_field'] = array(
      '#type' => 'select',
      '#required' => TRUE,
      '#title' => t('Date field'),
      '#options' => $fields,
      '#default_value' => $this->options['dates_field'],
      '#description' => t('Select the field that will be used as the date field for vertical timeline.'),
    );

    $form['title_field'] = array(
      '#type' => 'select',
      '#required' => TRUE,
      '#title' => t('Title field'),
      '#options' => $fields,
      '#default_value' => $this->options['title_field'],
      '#description' => t('Select the field that will be used as the title field.'),
    );

    $form['image_field'] = array(
      '#type' => 'select',
      '#title' => t('Image field'),
      '#options' => $fields,
      '#default_value' => $this->options['image_field'],
      '#description' => t('Select the field that will be used as the image field.'),
    );

    $form['body_field'] = array(
      '#type' => 'select',
      '#title' => t('Body field'),
      '#options' => $fields,
      '#default_value' => $this->options['body_field'],
      '#description' => t('Select the field that will be used as the body field.'),
    );
  }
}
