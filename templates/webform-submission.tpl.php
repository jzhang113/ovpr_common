<?php

/**
 * @file
 * Customize the display of a webform submission.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $submission: The Webform submission array.
 * - $email: If sending this submission in an e-mail, the e-mail configuration
 *   options.
 * - $format: The format of the submission being printed, either "html" or
 *   "text".
 * - $renderable: The renderable submission array, used to print out individual
 *   parts of the submission, just like a $form array.
 */
?>

<?php 

function webform_render_children(&$element, $children_keys = NULL) {
  if ($children_keys === NULL) {
    $children_keys = element_children($element);
  }
  $output = '';
  foreach ($children_keys as $key) {
    if (!empty($element[$key])) {
      //$output .= "<strong>".drupal_render($element[$key])."</strong>";
      $tmp = explode("==",drupal_render($element[$key]));
      
	  $output .="<strong>";
      $output .= $tmp[0];
      $output .="</strong>";
      $output .="--------------";
      $output .=$tmp[1];
      $output .="--------------";
      $output .=$tmp[2];
    }
  }
  return $output;
}

print '<br/>------TEST-----<br/>'.webform_render_children($renderable).'<br/>------END TEST-----<br/>'; ?>
