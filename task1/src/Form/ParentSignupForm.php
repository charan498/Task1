<?php

namespace Drupal\task1\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
/**
 * Class ParentSignupForm.
 *
 * @package Drupal\task1\Form
 */
class ParentSignupForm extends FormBase {
  
  

  public function getFormId() {
    return 'ParentSignup_Form';
  }
  public function buildForm(array $form, FormStateInterface $form_state) {
	$form['#attached'] = array(
			'library' => array(
				'task1/formValidation',
				),
	);	
		$form['pfname'] = array(
			'#type' => 'textfield',
			'#title' => t(''),
			//'#size' => 7,
			'#id' => 'pfirstname',
			'#placeholder' => 'First Name',	
		);	
		
		$form['plname'] = array(
			'#type' => 'textfield',
			'#title' => t(''),
			//'#size' => 7,
			'#id' => 'plastname',
			'#placeholder' => 'Last Name',
		);				
		$form['email'] = array(
			'#type' => 'textfield',
			'#title' => t(''),
			//'#size' => 7,
			'#id' => 'email',
			'#placeholder' => 'Enter your email',
		);			
		$form['password'] = array(
			'#type' => 'password',
			'#title' => t(''),
			//'#size' => 7,
			'#id' => 'password',
			'#placeholder' => 'Type Your password',
		);			

		$form['buttons']['submit'] = array(
			'#type' => 'submit',
			'#value' => t('SIGN UP'),		
		);
		$form['buttons']['cancel'] = array(
			'#type' => 'button',
			'#value' => t('Cancel'),
			'#attributes' => array('onClick' => 'history.go(-1); event.preventDefault();'),
		);
    
		$assessment_url = Url::fromRoute('task1.List');
		$link = $this->l('	Take our assessment.',$assessment_url);
		$form['account'] = array(		
			'#markup' => t("<br><br>Don't have an account?".$link),
		);	
	return $form;
  }
   
   
   public function submitForm(array &$form, FormStateInterface $form_state) {       

   
	}
}	
	
