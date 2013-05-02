<?php
namespace Bug\Model;

use Zend\Db\TableGateway\TableGateway;

class BugTable {
	protected $tableGateway;
	
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function fetchAll() {
		$resultSet = $this->tableGateway->select();
		return $resultSet;
	}
	
	public function getBug($id) {
		$id = (int)$id;
		$rowset = $this->tableGateway->select(array('id'=>$id));
		$row = $rowset->current();
		if (!$row){
			throw new Exception ( "Could not find bug with id " . $id );
		}
		return $row;
	}
	
	public function saveBug(Bug $bug) {
		$data =  array(
					$this->id				=>	$bug->id,
					$this->name				=>	$bug->name,
					$this->description		=> 	$bug->description,
					$this->category			=>	$bug->category,
					$this->priority			=>	$bug->priority,
					$this->status			=>	$bug->status,
					$this->created			=>	$bug->created,
					$this->createdBy		=>	$bug->createdBy,
					$this->changed			=>	$bug->changed,
					$this->changedBy		=>	$bug->changedBy,
					$this->assignedTo		=>	$bug->assignedTo,
					$this->operatingSystem	=>	$bug->operatingSystem,
					$this->summery			=>	$bug->summery
				);
		
		$id = (int)$bug->id;
		if($id == 0){
			$this->tableGateway->insert($data);
		}else{
			if($this->getBug($id)){
				$this->tableGateway->update($data, array('id' => $id));
			}else{
				throw new Exception('Form id does not exist');
			}
		}
	}
	
	public function delete($id){
		$this->tableGateway->delete(array('id' => $id));
	}
}