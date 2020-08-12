<?php

namespace Drupal\task1\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
/**
 * Class links.
 *
 * @package Drupal\task1\Form
 */
class links extends FormBase {
  
  

  public function getFormId() {
    return 'links';
  }
  public function buildForm(array $form, FormStateInterface $form_state) {



		$form['child']= array(
			  '#type' => 'link',
			  '#title' => $this->t('Child Details Form<br>'),
			  '#url' => Url::fromRoute('task1.child'),
        );		
		$form['parent']= array(
			  '#type' => 'link',
			  '#title' => $this->t('Parent Signup<br>'),
			  '#url' => Url::fromRoute('task1.parent'),
        );



/* 	$form['buttons']['submit'] = array(
		'#type' => 'submit',
		'#value' => t('Update'),		
		);
    $form['buttons']['cancel'] = array(
	    '#type' => 'button',
	    '#value' => t('Cancel'),
	    '#attributes' => array('onClick' => 'history.go(-1); event.preventDefault();'),
	); */
    
	$form['#theme'] = array('contactdetails_form');	

	return $form;
  }
   
   
   public function submitForm(array &$form, FormStateInterface $form_state) {       

   
	}
}	
	
