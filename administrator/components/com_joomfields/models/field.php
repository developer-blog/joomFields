<?php
jimport('joomla.application.component.model');
class JoomfieldsModelField extends JModel
{
	function save() {
		$application	=& JFactory::getApplication();
		$db 			=& JFactory::getDBO();

		$id		= JRequest::getInt('id');
		$label	= $db->quote( $db->getEscaped(JRequest::getVar('name') ) );
		$type	= $db->quote( $db->getEscaped(JRequest::getVar( 'type') ) );
		$name	= $db->quote( JFilterOutput::stringURLSafe($label) );

		$query 	= ( !empty($id) ? "UPDATE #__joomfields_fields SET label = $label, type = $type WHERE id = $id;" : "INSERT INTO #__joomfields_fields (name, label, type) VALUES ($name, $label, $type);" );
		$db->setQuery($query);
		$db->query();

		$redirect = 'index.php?option=com_joomfields&view=fields';
		$msg = JText::_('Saved');
		error_log($query);
		$application->redirect( $redirect, $msg );
	}

	function getData() {
		$id		= JRequest::getInt('id');
		$db		= $this->getDbo();

		$query 	= "SELECT id, name, type FROM #__joomfields_fields WHERE id = $id;";
		$db->setQuery($query);

		$result = $db->loadObject();
		return $result;
	}
}