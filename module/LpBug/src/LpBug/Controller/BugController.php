<?php

namespace LpBug\Controller;

use Zend\Form\Form;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Stdlib\ResponseInterface as Response;
use Zend\Stdlib\Parameters;
use Zend\View\Model\ViewModel;

class BugController extends AbstractActionController{
	
	/**
	 * var BugSerivce
	 */
	protected $BugSerivce;
	
	/**
	 * User page
	 */
	public function indexAction(){
		if (!$this->zfcUserAuthentication()->hasIdentity()) {
			return $this->redirect()->toRoute('zfcuser/login');
		}
		return new ViewModel();
	}
	
	public function addAction(Bug $bug){
		
	}
	
	/**
	 * Getters and setter voor DI stuff
	 * 
	 */
	public function getBugService() {
		if(!$this->BugSerivce){
			$this->BugSerivce = $this->getServiceLocator()->get('lpbug_service_bugservice');
		}
	}
	
	public function setBugSerice(){
		
	}
}