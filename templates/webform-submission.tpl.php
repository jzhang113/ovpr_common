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

// function webform_render_children(&$element, $children_keys = NULL) {
//   if ($children_keys === NULL) {
//     $children_keys = element_children($element);
//   }
//   $output = '';
//   foreach ($children_keys as $key) {
//     if (!empty($element[$key])) {
//       $output .= '<br/><br/>------'.$key.'OUTPUT LOOP-----<br/>';
//       $tmp = explode( "==" , drupal_render($element[$key]));
//       $output .= '<br/>tmp1: <span style="font-weight:bold;">'.$tmp[1].'</span>';
//       $output .= '<br/>tmp2:'.$tmp[2].'<br/>------END OUTPUT LOOP-----<br/><br/>';
//       //$output .= drupal_render($element[$key]);
//     }
//   }
//   return $output;
// }

// print '<strong>'.webform_render_children($renderable).'</strong>'; 

// $renderable['cid']["#theme"]['#weight']='bold';
// $renderable['node']["#webform"]["#emails"]['#html']='1';
// echo '---cidthemeweight----'.$renderable['cid']["#theme"]['#weight'].'--------';
// echo '---cidthemeweight----'.$renderable['node']["#webform"]["#emails"]['#html'].'--------';
// var_dump($renderable['node']);
print drupal_render_children($renderable); ?>
