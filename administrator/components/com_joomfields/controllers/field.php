<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class JoomfieldsControllerField extends JControllerAdmin {
	function save() {
		JRequest::checkToken() or jexit('Invalid Token');
		$model = & $this->getModel('field');
		$model->save();
	}
	function cancel() {
		$link	= JRoute::_('index.php?option=com_joomfields&view=fields', false);
		$this->setRedirect($link);
	}
}

