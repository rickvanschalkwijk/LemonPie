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
	
	/*
	 * 
	 */
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
	
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * @return the $description
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 * @return the $category
	 */
	public function getCategory() {
		return $this->category;
	}
	
	/**
	 * @return the $priority
	 */
	public function getPriority() {
		return $this->priority;
	}
	
	/**
	 * @return the $status
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 * @return the $created
	 */
	public function getCreated() {
		return $this->created;
	}
	
	/**
	 * @return the $createdBy
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}
	
	/**
	 * @return the $changed
	 */
	public function getChanged() {
		return $this->changed;
	}
	
	/**
	 * @return the $changedBy
	 */
	public function getChangedBy() {
		return $this->changedBy;
	}
	
	/**
	 * @return the $assignedTo
	 */
	public function getAssignedTo() {
		return $this->assignedTo;
	}
	
	/**
	 * @return the $operatingSystem
	 */
	public function getOperatingSystem() {
		return $this->operatingSystem;
	}
	
	/**
	 * @return the $summery
	 */
	public function getSummery() {
		return $this->summery;
	}
	
	/**
	 * @return the $files
	 */
	public function getFiles() {
		return $this->files;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $id
	 */
	public function setId($id) {
		$this->id = $id;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $name
	 */
	public function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $category
	 */
	public function setCategory($category) {
		$this->category = $category;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $priority
	 */
	public function setPriority($priority) {
		$this->priority = $priority;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $created
	 */
	public function setCreated($created) {
		$this->created = $created;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $createdBy
	 */
	public function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $changed
	 */
	public function setChanged($changed) {
		$this->changed = $changed;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $changedBy
	 */
	public function setChangedBy($changedBy) {
		$this->changedBy = $changedBy;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $assignedTo
	 */
	public function setAssignedTo($assignedTo) {
		$this->assignedTo = $assignedTo;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $operatingSystem
	 */
	public function setOperatingSystem($operatingSystem) {
		$this->operatingSystem = $operatingSystem;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $summery
	 */
	public function setSummery($summery) {
		$this->summery = $summery;
	}
	
	/**
	 * @param Ambigous <NULL, unknown> $files
	 */
	public function setFiles($files) {
		$this->files = $files;
	}
	
}