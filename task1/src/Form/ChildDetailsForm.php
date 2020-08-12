<?php

namespace Drupal\task1\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ChildDetailsForm.
 *
 * @package Drupal\task1\Form
 */
class ChildDetailsForm extends FormBase {
  
  

  public function getFormId() {
    return 'ChildDetails_Form';
  }
  public function buildForm(array $form, FormStateInterface $form_state) {
	$form['#attached'] = array(
			'library' => array(
				'task1/formValidation',
				),
	);	
	$form['fname'] = array(
		'#type' => 'textfield',
		'#title' => t(''),
		'#size' => 30,
		'#id' => 'firstname',
		'#placeholder' => 'First Name',		
		);	
		
		$form['lname'] = array(
		'#type' => 'textfield',
		'#title' => t(''),
		'#size' => 30,
		'#id' => 'lastname',
		'#placeholder' => 'Last Name',
		//'#suffiix' => '</div><br><pre>',
		);			
		
		$form['dob'] = array(
		'#type' => 'date',
		'#title' => t('Birth Date'),
		'#size' => 30,
		'#id' => 'datepicker',
		);	
		
		$form['age'] = array(
			'#type' => 'textfield',
			'#title' => t('Age'),
			'#size' => 7,
			'#textsize' => 1,
			'#id' => 'age',
		);
		$form['height'] = array(
			'#type' => 'textfield',
			'#title' => t('Height'),
			'#size' => 7,
			'#id' => 'height',
			'#placeholder' => 'cms',
		);		
		$form['weight'] = array(
			'#type' => 'textfield',
			'#title' => t('Weight'),
			'#size' => 7,
			'#id' => 'weight',
			'#placeholder' => 'kgs',			
		);
		$form['sex'] = array(
			'#type' => 'radios',
			'#title' => t('<label>Sex</label>'),
			'#options' => array('male' => t('Male'), 'female' => t('Female')),
			'#attributes'=> array('class'=>array('container-inline', 'label_left')),

		);
		$form['address'] = array(
			'#type' => 'textfield',
			'#title' => t('Address'),
			'#size' => 50,
			'#id' => 'address',
			'#placeholder' => 'Type Your Address',
		);		
		$form['state'] = array(
			'#type' => 'textfield',
			'#title' => t('State / Country'),
			'#size' => 30,
			'#id' => 'state',
			'#placeholder' => 'Select State / Country',
		);		
		$form['pcode'] = array(
			'#type' => 'textfield',
			'#title' => t('Postal Code'),
			'#size' => 20,
			'#id' => 'pcode',
			'#placeholder' => 'Enter Post Code',
		);
		$form['h1'] = array(
			'#markup' => t("<h1><b><label>
					Dietary Intake</label></b></h1><hr>"),
			'#type'=>'item',
		);
		$form['q1'] = array(
			'#type' => 'radios',
			'#title' => t('<label>1. How often does your child usually eat potato crisps or other salty snacks?</label>'),
			'#options' => array('0' => t('Never or rarely'), '1' => t('1-2 times per week'), '2' => t('3-4 times per week')),
			//'#attributes'=> array('class'=>array('container-inline', 'label_left')),
		);		
		$form['q2'] = array(
			'#type' => 'radios',
			'#title' => t('<label>2. How often does your child usually eat confectionery, such as lollies and chocolate?</label>'),
			'#options' => array('0' => t('Never or rarely'), '1' => t('1-2 times per week'), '2' => t('3-4 times per week')),
			//'#attributes'=> array('class'=>array('container-inline', 'label_left')),
		);		
		$form['q3'] = array(
			'#type' => 'radios',
			'#title' => t('<label>3. How many serves of vegetables does your child USUALLY eat each day?</label>'),
			'#options' => array('0' => t("My child doesn't eat vegetables"), '1' => t('1 serve or less'), '2' => t('2 serves')),
			//'#attributes'=> array('class'=>array('container-inline', 'label_left')),
		);		
		$form['q4'] = array(
			'#type' => 'radios',
			'#title' => t('<label>4. How much water does your child usually drink each day?</label>'),
			'#options' => array('0' => t('1-2lts per day'), '1' => t('3-4lts per day'), '2' => t('4-5lts per day')),
			//'#attributes'=> array('class'=>array('container-inline', 'label_left')),
		);
		$form['h2'] = array(
			'#markup' => t('<hr>'),
		);
	$form['buttons']['submit'] = array(
		'#type' => 'submit',
		'#value' => t('<b>PROCEED TO CHECKOUT</b>'),		
		);
    $form['buttons']['cancel'] = array(
	    '#type' => 'button',
	    '#value' => t('Cancel'),
	    '#attributes' => array('onClick' => 'history.go(-1); event.preventDefault();'),
	);
	$form['#theme'] = 'ChildDetails_Form';
	return $form;
  }
   
   
   public function submitForm(array &$form, FormStateInterface $form_state) {       

   
	}
}	
	
