<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.view');

class JoomfieldsViewFields extends JView
{
	public function display()
	{
		$model 			= $this->getModel('fields');
		$this->items	= $model->getItems();

		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		$this->addToolbar();
		parent::display();
	}

	protected function addToolbar()
	{
		JToolBarHelper::title(JText::_('Joomfields'));
		JToolBarHelper::addNew('fields.add', 'JTOOLBAR_NEW');
		JToolBarHelper::deleteList('Remove fields?', 'fields.remove','JTOOLBAR_DELETE');
	}
}