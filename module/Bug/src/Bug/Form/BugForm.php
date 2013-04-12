<?php
namespace Bug\Form;

use Zend\Form\Form;
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\ServiceManagerAwareInterface;

class BugForm extends Form implements ServiceManagerAwareInterface{
	
	protected $serviceManager;
	
	public function __construct($name = null){
		
		parent::__construct('bug');
		$this->setAttribute('method', 'post');
		
		$this->add(array(
				'name' => 'id',
				'attribites' => array(
					'type' => 'hidden'
				),
		));
		$this->add(array(
				'name' => 'name',
				'attribites' => array(
					'type' => 'text'
				),
				'options' => array(
					'label' => 'Name'
				),
		));
		$this->add(array(
				'name' => 'Description',
				'attribites' => array(
						'type' => 'textarea'
				),
				'options' => array(
						'label' => 'Description'
				),
		));
		$this->add(array(
				'name' => 'summery',
				'attribites' => array(
						'type' => 'textarea'
				),
				'options' => array(
						'label' => 'Summery'
				),
		));
		$this->add(array(
				'name' => 'priority',
				'attribites' => array(
						'type' => 'select'
				),
		));
		$this->add(array(
				'name' => 'summery',
				'attribites' => array(
						'type' => 'textarea'
				),
				'options' => array(
						'label' => 'Summery'
				),
		));
		$this->add(array(
				'name' => 'summery',
				'attribites' => array(
						'type' => 'textarea'
				),
				'options' => array(
						'label' => 'Summery'
				),
		));
		$this->add(array(
				'name' => 'summery',
				'attribites' => array(
						'type' => 'textarea'
				),
				'options' => array(
						'label' => 'Summery'
				),
		));
		$this->add(array(
				'name' => 'submit',
				'attribites' => array(
						'type' => 'submit',
						'value' => 'Save',
						'id'	=> 'submitbutton'
				),
		));
	}
	
	public function initFormOptions() {
		$this->get('priority')->setAttribute('options', array('hight' => 'High', 'low' => 'Low'));
	}
	
	public function getServiceManager(){
		if ( is_null($this->serviceManager) ) {
			throw new \Exception('The ServiceManager has not been set.');
		}
	
		return $this->serviceManager;
	}
	
	public function setServiceManager(ServiceManager $serviceManager){
		$this->serviceManager = $serviceManager;
	}
}