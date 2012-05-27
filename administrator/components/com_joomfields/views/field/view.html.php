<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.view');

class JoomfieldsViewField extends JView
{
	public function display()
	{
		$model 			= $this->getModel('field');
		$this->item	= $model->getData();
		$this->types	= array("text");

		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		$this->addToolbar();
		parent::display();
	}

	protected function addToolbar()
	{
		JToolBarHelper::save('Field.save', 'JTOOLBAR_SAVE');
		JToolBarHelper::cancel('Field.cancel', 'JTOOLBAR_CANCEL');
		JToolBarHelper::title(JText::_('Joomfields'));

	}
}