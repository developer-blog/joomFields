<?php

defined('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class JoomfieldsControllerFields extends JControllerAdmin

{
	function remove() {
		JRequest::checkToken() or jexit('Invalid Token');
		$model = & $this->getModel('fields');
		$model->remove();
	}

	function add() {
		$application 	= &JFactory::getApplication();
		$link 			= JRoute::_('index.php?option=com_joomfields&view=field', false);
		$application->redirect($link);
	}
}