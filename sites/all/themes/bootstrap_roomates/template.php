<?php

/**
 * @file
 * template.php
 */

function bootstrap_buildmax_preprocess_page(&$variables, $hook) {   
    //Add custom page.tpl.php based on content type 
    if (isset($variables['node']->type) && !empty($variables['node']->type) && ($variables['node']->type == 'aboutus')){
    // (underscores used in page__ )
    $variables['theme_hook_suggestions'][] =  'page__' .  $variables['node']->type;
    }
}
