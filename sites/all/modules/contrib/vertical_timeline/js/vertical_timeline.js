(function ($) {

Drupal.behaviors.vertical_timeline = {
  attach:  function(context) {
    if(Drupal.settings.vertical_timeline) {
    }
    $.timeliner({
    // value: selector of the main element holding the timeline's content, default to #timelineContainer
    timelineContainer: Drupal.settings.vertical_timeline.timeline_container,
    // value: closed | open, default to closed; determines whether the timeline is initially collapsed or fully expanded
    startState: Drupal.settings.vertical_timeline.start_state,
    // value: any integer, default to 200; determines the base speed, some animations are a multiple (4x) of the base speed
    baseSpeed: Drupal.settings.vertical_timeline.base_speed,
    // value: numeric, defalut to 4; a multiplier applied to the base speed that sets the speed at which an event's conents are displayed and hidden
    speed: 4,
    // value: any valid CSS font-size value, defaults to 1em; sets the font size of an event after it is opened
    fontOpen: Drupal.settings.vertical_timeline.font_open,
    // value: any valid CSS font-size value, defaults to 1em; sets the font size of an event after it is closed
    fontClosed: Drupal.settings.vertical_timeline.font_closed,
    // value: string; defaults to '+ expand all'
    expandAllText: Drupal.settings.vertical_timeline.expand_all_text,
    // value: string; defaults to '- collapse all'
    collapseAllText: Drupal.settings.vertical_timeline.collapse_all_text,
    });
  }
};

})(jQuery);
