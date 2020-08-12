<?php

/**
 * @file
 * Preprocessors and theme functions for the Views UI.
 */
use Drupal\Component\Utility\SafeMarkup;
use Drupal\Core\Form\FormState;
use Drupal\Core\Render\Element;
use Drupal\Core\Url;
/**
 * Prepares variables for style plugin table templates.
 *
 * Default template: views-ui-style-plugin-table.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - form: A render element representing the form.
 */
 function template_preprocess_ChildDetails_Form(&$variables) {
  $form = $variables['form'];
    $row1[] = array(
      array('data' =>  drupal_render($form['fname'])),
      array('data' =>  drupal_render($form['lname'])),
    );    
	$row1[] = array(
      array('data' =>  drupal_render($form['dob'])),
      array('data' =>  drupal_render($form['age'])),
      array('data' =>  drupal_render($form['height'])),
      array('data' =>  drupal_render($form['weight'])),
      array('data' =>  drupal_render($form['sex'])),
    );
    $row1[] = array(
      array('data' =>  drupal_render($form['address']),'colspan' => 6),
    );     
	$row1[] = array(
      array('data' =>  drupal_render($form['state'])),
      array('data' =>  drupal_render($form['pcode'])),
    );
	$row1[] = array(
      array('data' =>  drupal_render($form['h1']),'colspan' => 6),
    );		
	$row1[] = array(
      array('data' =>  drupal_render($form['q1']),'colspan' => 6),
    );		
	$row1[] = array(
      array('data' =>  drupal_render($form['q2']),'colspan' => 6),
    );		
	$row1[] = array(
      array('data' =>  drupal_render($form['q3']),'colspan' => 6),
    );		
	$row1[] = array(
      array('data' =>  drupal_render($form['q4']),'colspan' => 6),
    );
	$row1[] = array(
      array('data' =>  drupal_render($form['h2']),'colspan' => 6),
    );		

  $form['childform'] = array(
    '#type' => 'table',
    '#header' => '',
    '#rows' => $row1,
    '#weight' => -1000,
    );
	$variables['action_submit'] = drupal_render($form['buttons']['submit']);
	$variables['action_cancel'] = drupal_render($form['buttons']['cancel']);
  $variables['form'] = $form;
}

function template_preprocess_ParentSignup_Form(&$variables) {
	$form = $variables['form'];
    $row2[] = array(
      array('data' =>  drupal_render($form['pfname'])),
      array('data' =>  drupal_render($form['plname'])),
    );    
    $row2[] = array(
      array('data' =>  drupal_render($form['email'])),
    );     
	$row2[] = array(
      array('data' =>  drupal_render($form['password']),'colspan' => 6),
    );		
	$row2[] = array(
      array('data' =>  drupal_render($form['account']),'colspan' => 6),
    );		


	$form['parentform'] = array(
		'#type' => 'table',
		'#header' => '',
		'#rows' => $row2,
		'#weight' => -1000,
	);
	$variables['action_submit'] = drupal_render($form['buttons']['submit']);
	$variables['action_cancel'] = drupal_render($form['buttons']['cancel']);
  $variables['form'] = $form;
}
