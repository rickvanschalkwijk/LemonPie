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