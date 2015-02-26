<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal, often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 *
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "adaptivetheme_subtheme" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "adaptivetheme_subtheme".
 * 2. Uncomment the required function to use.
 */

/**
 * Override or insert variables for the page templates.
 */
function ovpr_common_preprocess_page(&$vars) {
    $departmentname = theme_get_setting('ovpr_depts_name');
    $sitepath = $GLOBALS['base_url'];
    $vars['ovpr_branding'] = '<a id="research-link" href="http://www.uiowa.edu/">University of Iowa</a>'
    . l($departmentname, $sitepath, array('attributes' => array('id' => array('current-department-link'))));
    if(theme_get_setting('ovpr_depts_links') === 1) {
    $vars['ovpr_branding'] .=
  	'<ul id="depts-links-top">
      <li class="first"><a title="Conflict Of Interest" href="http://coi.research.uiowa.edu">COI</a></li>
      <li><a title="Division of Sponsored Programs" href="http://dsp.research.uiowa.edu">DSP</a></li>
      <li><a title="Environmental Health & Safety" href="http://ehs.research.uiowa.edu">EHS</a></li>
      <li><a title="Human Subjects Office / IRB" href="http://hso.research.uiowa.edu">HSO/IRB</a></li>
      <li><a title="Office of Animal Resources / Institutional Animal Care and USe Committee" href="http://animal.research.uiowa.edu">OAR/IACUC</a></li>
      <li><a title="Research Information Systems" href="http://ris.research.uiowa.edu">RIS</a></li>
  		<li><a title="Office of the Vice President for Research" href="http://research.uiowa.edu">VPR</a></li>
  		<li class="last"><a title="See More Units..." href="http://research.uiowa.edu/ovpr-research-units-facilities-and-centers-directory">MORE UNITS</a></li>
  	</ul>';
  	}
}

/**
 * Return empty string for webform results, if there is no value.
 */
function ovpr_common_webform_element_text($variables) {
  $element = $variables['element'];
  $value = $variables['element']['#children'];

  // Check if there is any value to print out at all.
  // If not, return an empty string.
  if (strlen(trim($value)) == 0) {
    return '';
  }
  // Call the default theme function if there is a value.
  return theme_webform_element_text($variables);
}
