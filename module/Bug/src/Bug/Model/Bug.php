<?php
namespace Bug\Model;

class Bug {
	public $id;
	public $name;
	public $description;
	public $category;
	public $priority;
	public $status;
	public $created;
	public $createdBy;
	public $changed;
	public $changedBy;
	public $assignedTo;
	public $operatingSystem;
	public $summery;
	public $files;
	
	public function exchangeArray($data) {
		$this->id				=	(isset($data['id'])) ? $data['id'] : null;
		$this->name				=	(isset($data['name'])) ? $data['name'] : null;
		$this->description		= 	(isset($data['description'])) ? $data['description'] : null;
		$this->category			= 	(isset($data['categroy'])) ? $data['category'] : null;
		$this->priority			=	(isset($data['priority'])) ? $data['priority'] : null;
		$this->status			=	(isset($data['status'])) ? $data['status'] : null;
		$this->created			=	(isset($data['created'])) ? $data['created'] : null;
		$this->createdBy		=	(isset($data['createdBy'])) ? $data['createdBy'] : null;
		$this->changed			=	(isset($data['changed'])) ? $data['changed'] : null;
		$this->changedBy		=	(isset($data['changedBy'])) ? $data['changedBy'] : null;
		$this->assignedTo		=	(isset($data['assignedTo'])) ? $data['assignedTo'] : null;
		$this->operatingSystem	=	(isset($data['operatingSystem'])) ? $data['operatingSystem'] : null;
		$this->summery			=	(isset($data['summery'])) ? $data['summery'] : null;
		$this->files			=	(isset($data['files'])) ? $data['files'] : null;
	}
	
}