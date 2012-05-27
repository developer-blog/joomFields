<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.controller');

$controller = JController::getInstance('joomfields');
$controller->execute(JRequest::getVar('task'));
$controller->redirect();