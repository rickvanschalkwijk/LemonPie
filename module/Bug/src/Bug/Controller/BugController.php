<?php
namespace Bug\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Bug\Model\Bug;
use Bug\Form\BugForm;

class BugController extends AbstractActionController{
	
	protected $bugTable;
	
	public function indexAction() {
		return new ViewModel(array('bugs' => $this->getBugTable()->fetchAll()));
	}
	
	public function addAction() {
		 $bugForm = new BugForm();
		 $bugForm->get('submit')->setValue('Save');
		 
		 $request = $this->getRequest();
		 if($request->isPost()){
		 	$bug = new Bug();
		 	$bugForm->setInputFilter($bug->getInputFilter());
		 	$bugForm->setData($request->getPost());
		 	
		 	if($bugForm->isValid()){
		 		$bug->exchangeArray($bugForm->getData());
		 		$this->getBugTable()->saveBug($bug);
		 		return $this->redirect()->toRoute('bug');
		 	}
		 }
		 return array('bugForm' => $bugForm);
	}
	
	public function editAction($param) {
		;
	}
	
	public function deletedAction(){
		
	}
	
	public function userbugsAction($param) {
		;
	}
	
	public function getBugTable() {
		if(!$this->bugTable){
			$sm = $this->getServiceLocator();
			$this->bugTable = $sm->get('Bug\Model\BugTable');
		}
		return $this->bugTable;
	}
}