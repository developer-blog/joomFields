<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.plugin.plugin' );

class plgSystemJoomfields extends JPlugin {
	function onContentPrepareForm($form, $data)
	{
		if($form->getName() == 'com_content.article') {
			$cfForm = new JXMLElement('<form />');
			$fields = $cfForm->addChild('fields');
			$fields->addAttribute('name', 'attribs');
			$fieldset = $fields->addChild('fieldset');
			$fieldset->addAttribute('name', 'joomfields');
			$fieldset->addAttribute('label', 'joomfields');

			$objFields = $this->getFields();
			foreach($objFields as $fieldItem):
				$field 	= $fieldset->addChild('field');
				$field->addAttribute('name', $fieldItem->name);
				$field->addAttribute('type', $fieldItem->type);
				$field->addAttribute('label', $fieldItem->label);
			endforeach;
			if(count($objFields)) $form->load($cfForm, false);
		}
	}

	private function getFields() {
		$db = JFactory::getDbo();
		$query = "SELECT id, name, type, label FROM #__joomfields_fields";
		$db->setQuery($query);
		$result = $db->loadObjectList();
		return $result;
	}
}