<?php

/**
 * @file
 * Defines the View Style Plugins for Vertical Timeline module.
 */

/**
 * Extending the view_plugin_style class to provide a vertical timeline view
 * style.
 */
class vertical_timeline_views_plugin_style extends views_plugin_style {
  /**
   * Set default options.
   */
  function option_definition() {
    $options = parent::option_definition();

    $options['timeline_container'] = array('default' => 'timelineContainer');
    $options['start_state'] = array('default' => 'closed');
    $options['base_speed'] = array('default' => '200');
    $options['speed'] = array('default' => '4');
    $options['font_open'] = array('default' => '1.2em');
    $options['font_closed'] = array('default' => '1em');
    $options['expand_all_text'] = array('default' => '+ expand all');
    $options['collapse_all_text'] = array('default' => '- collapse all');

    return $options;
  }


  /**
   * Show a form to edit the style options.
   */
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

    // Appearance settings.
    $vertical_timeline_orientation_select = array(
      'vertical' => t('Vertical Style'),
    );

    $form['orientation'] = array(
      '#type' => 'select',
      '#title' => t('Orientation'),
      '#default_value' => $this->options['orientation'],
      '#options' => $vertical_timeline_orientation_select,
      '#required' => TRUE,
      '#description' => t('Select a orientation for slider.'),
    );

    $form['adv'] = array(
      '#type' => 'fieldset',
      '#title' => t('Advanced settings'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
      '#description' => t('Configure advanced settings'),
    );

    $form['adv']['timeline_container'] = array(
      '#type' => 'textfield',
      '#title' => t('timeline container'),
      '#default_value' => $this->options['timeline_container'],
      '#description' => t('Timeline Container'),
    );

    $form['adv']['start_state'] = array(
      '#type' => 'textfield',
      '#title' => t('start state'),
      '#default_value' => $this->options['start_state'],
      '#description' => t('Start State'),
    );

    $vertical_timeline_base_speed_select = array(
      '100' => '100',
      '200' => '200',
      '300' => '300',
      '400' => '400',
      '500' => '500',
    );

    $form['adv']['base_speed'] = array(
      '#type' => 'select',
      '#title' => t('base speed'),
      '#default_value' => $this->options['base_speed'],
      '#options' => $vertical_timeline_base_speed_select,
      '#description' => t('Select a base speed'),
    );

    $vertical_timeline_speed_select = array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10',
    );

    $form['adv']['speed'] = array(
      '#type' => 'select',
      '#title' => t('speed'),
      '#default_value' => $this->options['speed'],
      '#options' => $vertical_timeline_speed_select,
      '#description' => t('Select a speed'),
    );

    $form['adv']['font_open'] = array(
      '#type' => 'textfield',
      '#title' => t('font_open'),
      '#default_value' => $this->options['font_open'],
      '#description' => t('font open in em'),
    );

    $form['adv']['font_closed'] = array(
      '#type' => 'textfield',
      '#title' => t('font_closed'),
      '#default_value' => $this->options['font_closed'],
      '#description' => t('font closed in em'),
    );

    $form['adv']['expand_all_text'] = array(
      '#type' => 'textfield',
      '#title' => t('expand_all_text'),
      '#default_value' => $this->options['expand_all_text'],
      '#description' => t('expand all text'),
    );

    $form['adv']['collapse_all_text'] = array(
      '#type' => 'textfield',
      '#title' => t('collapse_all_text'),
      '#default_value' => $this->options['collapse_all_text'],
      '#description' => t('collapse all text'),
    );

  }
}
