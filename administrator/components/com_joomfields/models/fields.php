<?php
// No direct access
defined('_JEXEC') or die;
jimport('joomla.application.component.modellist');

class JoomfieldsModelFields extends JModelList
{
	function remove() {
		$application	=& JFactory::getApplication();
		$cid = JRequest::getVar('cid');
		JArrayHelper::toInteger($cid);

		foreach($cid as $id) {
			$db =& JFactory::getDBO();
			$id = intval($id);

			$query = "DELETE FROM #__joomfields_fields WHERE id = $id";
			$db->setQuery($query);
			$db->query();
		}
		$application->redirect("index.php?option=com_joomfields&view=fields");
	}

	public function getItems()
	{
		$db		= $this->getDbo();
		$query 	= "SELECT id, name, label, type FROM #__joomfields_fields";
		$db->setQuery($query);
		$result = $db->loadObjectList();
		return $result;
	}

}