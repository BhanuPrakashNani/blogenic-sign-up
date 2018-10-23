<?php
/**
* @file
* Contains \Drupal\blogenic_signup\Controller\blogenic_signupController.
*/

namespace Drupal\blogenic_signup\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse; 

class blogenic_signupController extends ControllerBase{
	public function signup(){

		$form_class = '\Drupal\blogenic_signup\Form\blogenic_signupForm';
		$build['form'] = \Drupal::formBuilder()->getForm('\Drupal\blogenic_signup\Form\blogenic_signupForm');
		$markup = $form;
		
		return[
			'type' => 'markup', 'markup' => $markup,];
	}
	
	function blogenic_signup_user_login(\Drupal\user\UserInterface $account) {
  drupal_set_message(t('Hi %name! Welcome to our website', ['%name' => $account->getDisplayName()]));
  return new RedirectResponse(\Drupal::url('<front>', [], ['absolute' => TRUE]));
}
}
