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

namespace LpBug\Controller;

use Zend\Form\Form;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Stdlib\ResponseInterface as Response;
use Zend\Stdlib\Parameters;
use Zend\View\Model\ViewModel;

class BugController extends AbstractActionController{
	
	/**
	 * var BugSerivce
	 */
	protected $BugSerivce;
	
	/**
	 * User page
	 */
	public function indexAction(){
		if (!$this->zfcUserAuthentication()->hasIdentity()) {
			return $this->redirect()->toRoute('zfcuser/login');
		}
		return new ViewModel();
	}
	
	public function addAction(){
		
	}
	
	public function userbugsAction(){
		
	}
	
	/**
	 * Getters and setter voor DI stuff
	 * 
	 */
	public function getBugService() {
		if(!$this->BugSerivce){
			$this->BugSerivce = $this->getServiceLocator()->get('lpbug_service_bugservice');
		}
	}
	
	public function setBugSerice(){
		
	}
}