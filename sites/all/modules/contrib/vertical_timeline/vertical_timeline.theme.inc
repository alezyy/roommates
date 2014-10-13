<?php

/**
 * @file
 * Theme functions for vertical timeline.
 */

/**
 * Implementation of template_process for views-view-vertical-timeline().
 */
function template_preprocess_views_view_vertical_timeline(&$vars) {
  if (!empty($vars['view']->live_preview)) {
    drupal_set_message(t('The timeline cannot be viewed in the preview.'), 'warning');
    return;
  }
  $view = $vars['view'];

  // Check if data is available.
  if (count($view->result) >= 1) {
    // Create actual timeline.
    $vars['vertical_timeline_id'] = 'vertical_timeline-' . $view->name . '-' . $view->current_display;
    $vars['vertical_timeline_dates_id'] = 'vertical_timeline-dates-' . $view->name . '-' . $view->current_display;
    $vars['vertical_timeline_issues_id'] = 'vertical_timeline-issues-' . $view->name . '-' . $view->current_display;

    $params = array(
      'orientation' => $vars['options']['orientation'],
      'containerDiv' => '#' . $vars['vertical_timeline_id'],
      'timeline_container' => '#' . $vars['options']['timeline_container'],
      'start_state' => $vars['options']['start_state'],
      'base_speed' => $vars['options']['base_speed'],
      'speed' => $vars['options']['speed'],
      'font_open' => $vars['options']['font_open'],
      'font_closed' => $vars['options']['font_closed'],
      'expand_all_text' => $vars['options']['expand_all_text'],
      'collapse_all_text' => $vars['options']['collapse_all_text'],
    );

    $row_options       = $view->style_plugin->row_plugin->options;
    $i                 = 1;
    $vars['items'] = array();

    foreach ($view->style_plugin->rendered_fields as $row) {
      $field_value = strip_tags($row[$row_options['dates_field']]);
      $vars['container_div'] = '#' . $vars['vertical_timeline_id'];
      $vars['items'][$i]['dates_field'] = $field_value;
      $vars['items'][$i]['nodeid'] = $row[$row_options['nodeid_field']];
      $vars['items'][$i]['body'] = $row[$row_options['body_field']];
      $vars['items'][$i]['title'] = $row[$row_options['title_field']];
      $vars['items'][$i]['image'] = $row[$row_options['image_field']];
      $vars['dates_array'][$i] = $field_value;
      $i++;
    }

    $vars['years'] = array_unique($vars['dates_array']);
    $lib_path = libraries_get_path('vertical_timeline');
    drupal_add_css($lib_path . '/css/responsive.css');
    drupal_add_css($lib_path . '/css/screen.css');
    drupal_add_js($lib_path . '/js/timeliner.js');
    drupal_add_js(drupal_get_path('module', 'vertical_timeline') . '/js/vertical_timeline.js');
    drupal_add_js(array('vertical_timeline' => $params), 'setting');
  }
  else {
    theme('vertical_timeline_nodata', array());
  }
}

/**
 * Overridable theme function displays warning if theres no data.
 */
function theme_vertical_timeline_nodata() {
  drupal_set_message(t('There is now avaialable data in the timeline'), 'warning');
}
