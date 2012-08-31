<?php

/**
 * @file
 * Implimentation of hook_form_system_theme_settings_alter()
 *
 * To use replace "adaptivetheme_subtheme" with your themeName and uncomment by
 * deleting the comment line to enable.
 *
 * @param $form: Nested array of form elements that comprise the form.
 * @param $form_state: A keyed array containing the current state of the form.
 */
 
function ovpr_common_form_system_theme_settings_alter(&$form, &$form_state)  {

  $form['at-settings']['ovpr'] = array(
    '#type' => 'fieldset',
    '#title' => t('OVPR Branding'),
    '#description' => t('<h3>OVPR Branding Bar</h3><p>These settings allow you to configure the OVPR branded bar.</p>'),
  );
  $form['at-settings']['ovpr']['ovpr_branding_bar'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable OVPR Branding Bar'),
    '#default_value' => theme_get_setting('ovpr_branding_bar'),
    '#description' => t('The OVPR Branding Bar is the gray bar above the yellow breadcrumbs bar.'),
  );
  $form['at-settings']['ovpr']['ovpr_depts_name'] = array(
    '#type' => 'textfield',
    '#title' => t('Department Name'),
    '#default_value' => theme_get_setting('ovpr_depts_name'),
    '#description' => t('Enter the name of the department. This is used on the left side of the OVPR branding bar.'),
    '#states' => array(
      'visible' => array(   // action to take.
        ':input[name="ovpr_branding_bar"]' => array('checked' => TRUE),
      ),
    ),
  );
  $form['at-settings']['ovpr']['ovpr_depts_links'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable OVPR Department Links'),
    '#default_value' => theme_get_setting('ovpr_depts_links'),
    '#description' => t('OVPR Department links are on the right side of the OVPR Branding Bar.'),
    '#states' => array(
      'visible' => array(   // action to take.
        ':input[name="ovpr_branding_bar"]' => array('checked' => TRUE),
      ),
    ),
  );
}
/*<div id="research-link"><a href="http://research.uiowa.edu">UNIVERSITY OF IOWA &nbsp;</a></div>
<div id="current-dept-link">
  <a class="dept-link" href="<?php echo $GLOBALS['base_url']; ?>"><?php echo $ovpr_full_name; ?> <!--Researcher Handbook--></a>
</div>
    	<ul id="depts-links-top">
        <li class="first"><a title="Conflict Of Interest" href="http://research.uiowa.edu/coi">COI</a></li>
        <li><a title="Division of Sponsored Programs" href="http://research.uiowa.edu/dsp">DSP</a></li>
        <li><a title="Environmental Health & Safety" href="http://research.uiowa.edu/ehs">EHS</a></li>
        <li><a title="Human Subjects Office / IRB" href="http://research.uiowa.edu/hso">HSO/IRB</a></li>
        <li><a title="Office of Animal Resources / Institutional Animal Care and USe Committee" href="http://animal.research.uiowa.edu">OAR/IACUC</a></li>
        <li><a title="Research Information Systems" href="http://research.uiowa.edu/ris">RIS</a></li>
    		<li><a title="Office of the Vice President for Research" href="http://research.uiowa.edu">VPR</a></li>  		
    		<li class="last"><a title="See More Units..." href="https://research.uiowa.edu/ovpr/ovpr-research-units-facilities-and-centers-directory">MORE UNITS</a></li>
    	</ul>*/