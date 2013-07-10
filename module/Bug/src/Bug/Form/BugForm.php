<?php
namespace Bug\Form;

use Zend\Form\Element;

use Zend\Form\Form;
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\ServiceManagerAwareInterface;

class BugForm extends Form implements ServiceManagerAwareInterface{
	
	protected $serviceManager;
	
	public function __construct($name = null){
		$this->setServiceManager($this->serviceManager = new ServiceManager());
		parent::__construct('bug');
		$this->setAttribute('method', 'post');
		
		$this->add(array(
				'name' => 'id',
				'attributes' => array(
					'type' => 'hidden'
				),
		));
		$this->add(array(
				'name' => 'name',
				'attributes' => array(
					'type' => 'text',
					'required' => 'required',
					'pattern'  => '^0[1-68]([-. ]?[0-9]{2}){4}$'
				),
				'options' => array(
					'label' => 'Name: '
				),
		));
		$this->add(array(
        	'type' => 'Zend\Form\Element\Select',
        	'name' => 'priority', 
        	'options' => array( 
                'label' => 'Priority: ', 
        		'required' => 'required',
        		'pattern'  => '^0[1-68]([-. ]?[0-9]{2}){4}$',
        		'empty_option' => 'Select the priority',
        		'value_options' => array(
        					'1' => 'High',
        					'2' => 'Medium',
        					'3' => 'Low'
        				)
        	), 
		));
		$this->add(array(
				'type' => 'Zend\Form\Element\Textarea',
				'name' => 'description',
				'options' => array(
						'label' => 'Description: '
				),
		));
		$this->add(array(
				'type' => 'Zend\Form\Element\Textarea',
				'name' => 'summery',
				'options' => array(
						'label' => 'Summery: '
				),
		));
		$this->add(array(
				'name' => 'submit',
				'attributes' => array(
						'type' => 'submit',
						'value' => 'Save',
						'id'	=> 'submitbutton'
				),
		));
		//$this->get('priority')->setValueOptions($this->initFormOptions());
		$this->initFormOptions();
	}
	
	public function initFormOptions() {
		var_dump($this->getServiceManager()->get('BugTable'));	
	}
	
	public function setServiceManager(ServiceManager $serviceManager){
		$this->serviceManager = $serviceManager;
	}
	
	public function getServiceManager(){
		if ( is_null($this->serviceManager) ) {
			throw new \Exception('The ServiceManager has not been set.');
		}
		return $this->serviceManager;
	}
}