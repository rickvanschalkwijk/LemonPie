<?php

namespace Lpbug\Entity;

interface BugInterface{
	
	/**
	 * Get the id
	 * @return int id
	 */
	public function getid();
	
	/**
	 * Set the id
	 * @param id
	 * @return BugInterface
	 */
	public function setid($id);
	
	/**
	 * Get bug name
	 * @return string name
	 */
	public function getname();
	
	/**
	 * Set bug name
	 * @param string name
	 * @return BugInterface
	 */
	public function setname($name);
	
	/**
	 * Get bug content
	 * @return string content 
	 * @return BugInterface
	 */
	public function getcontent();
	
	/**
	 * Set bug content
	 * @param string $content
	 * @return BugInterface
	 */
	public function setcontent($content);
}