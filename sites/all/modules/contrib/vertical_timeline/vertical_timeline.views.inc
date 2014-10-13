<?php

/**
 * @file
 * Defines the View Style Plugins for Timeline module.
 */

/**
 * Implements hook_views_style_plugins().
 */
function vertical_timeline_views_plugins() {
  return array(
    'module' => 'vertical_timeline',
    'style' => array(
      'vertical_timeline' => array(
        'title' => t('Views Vertical Timeline'),
        'help' => t('Displays content on jQuery Vertical timeline.'),
        'handler' => 'vertical_timeline_views_plugin_style',
        'uses options' => TRUE,
        'uses row plugin' => TRUE,
        'uses fields' => TRUE,
        'type' => 'normal',
        'theme' => 'views_view_vertical_timeline',
        'theme file' => 'vertical_timeline.theme.inc',
      ),
    ),
    'row' => array(
      'vertical_timeline' => array(
        'title' => t('Views Vertical Timeline'),
        'help' => t('Choose the fields to display in Views Vertical Timeline.'),
        'handler' => 'vertical_timeline_plugin_row_vertical_timelinefields',
        'theme' => 'vertical_timeline_view_vertical_timelinefields',
        'theme file' => 'vertical_timeline.theme.inc',
        'uses fields' => TRUE,
        'uses options' => TRUE,
        'type' => 'normal',
      ),
    ),
  );
}
