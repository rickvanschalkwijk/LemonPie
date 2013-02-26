<?php
# LemonPie - a php based bugtracking system

# LemonPie is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# LemonPie is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with LemonPie. If not, see <http://www.gnu.org/licenses/>.

/*
 * @filename 	Bug.php
 * @author 		rick van schalkwijk
 * @email  		rickvschalkwijk@gmail.com
 * @date 		25-02-2013
 * @version 	0.1
 */

namespace Lpbug\Entity;

class Bug implements BugInterface{
	
	/**
	 * @var int
	 */
	protected $id;
	
	/**
	 * @var string
	 */
	protected $name;
	
	/**
	 * @var string
	 */
	protected $content;
	
	/**
	 * Get the id
	 * @return int id
	 */
	public function getid(){
		return $this->id;
	}
	
	/**
	 * Set the id
	 * @param id
	 * @return BugInterface
	 */
	public function setid($id){
		$this->id = (int) $id;
		return $this;
	}
	
	/**
	 * Get bug name
	 * @return string name
	 */
	public function getname(){
		return $this->name;
	}
	
	/**
	 * Set bug name
	 * @param string name
	 * @return BugInterface
	 */
	public function setname($name){
		$this->name = $name;
		return $this;
	}
	
	/**
	 * Get bug content
	 * @return string content
	 * @return BugInterface
	 */
	public function getcontent(){
		return $this->content;
	}
	
	/**
	 * Set bug content
	 * @param string $content
	 * @return BugInterface
	 */
	public function setcontent($content){
		$this->content = $content;
		return $this;
	}
}
