<?php
namespace Bug\Controller;

use Zend\Mvc\Controller\Plugin\Redirect;

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
	
	public function editAction() {
		$id = (int) $this->params()->fromRoute($id, 0);
		if(!$id){
			return $this->redirect()->toRoute('Bug', 
					array(
						'action' => 'add'
						));
		}
		$bug = $this->getBugTable()->getBug($id);
		$form = new BugForm();
		$form->bind($bug);
		$form->get('submit')->setValue('value','Edit');
		
		$request = $this->getRequest();
		if($request->isPost()){
			$form->setInputFilter($bug->getInputFilter());
			$form->setData($request->getPost());
			if($form->isValid()){
				$this->getBugTable()->saveBug($form->getData());
				return $this->toRoute();
			}
		}
		
		return array(
				'id' 	=> $id,
				'form' 	=> $form
		);
	}
	
	public function deletedAction(){
		$id = (int) $this->params()->fromRoute($id,0);
		if(!$id){
			return $this->redirect()->toRoute(
					'Bug', array(
							'action',
							'bug'
					));
		}
		$request = $this->getRequest();
		if($request->isPost()){
			$boolConferm = $request->getPost('del', 'No');
			if($boolConferm == 'Yes'){
				$id = $request->getPost('id');
				$this->getBugTable()->delete($id);
			}
			return $this->redirect()->toRoute('bug');
		}
		return array(	
				'id' => $id, 
				'bug' => $this->getBugTable()->getBug($id)
		);
	}
	
	public function userbugsAction() {
		
	}
	
	public function getBugTable() {
		if(!$this->bugTable){
			$sm = $this->getServiceLocator();
			$this->bugTable = $sm->get('Bug\Model\BugTable');
		}
		return $this->bugTable;
	}
}