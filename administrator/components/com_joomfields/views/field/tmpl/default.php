<?php
defined('_JEXEC') or die;
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.keepalive');
JHTML::_('behavior.modal');
?>

<form action="<?php echo JRoute::_('index.php?option=com_joomfields&view=field'); ?>"
	  method="post" name="adminForm" class="form-validate">
	<div class="width-100 fltlft">
		<fieldset class="adminform">
			<legend>Field</legend>
			<ul class="adminformlist">
				<li>
					<label class="required"><?php echo JText::_('Label'); ?></label>
					<input type="text" name="name" value="<?php echo ( isset($this->item->name) ? $this->item->name : '' ); ?>" />
				</li>
				<li>
					<label><?php echo JText::_('Type'); ?></label>
					<select name="type">
						<?php foreach($this->types as $type): ?>
							<?php $selected	=	( isset($this->item->type) && $type == $this->item->type ? 'selected="selected"' : '' ); ?>
							<option value="<?php echo $type; ?>" <?php echo $selected; ?>><?php echo $type; ?></option>
						<?php endforeach; ?>
					</select>
				</li>
			</ul>
		</fieldset>
	</div>

	<div class="clr"></div>
	<input type="hidden" name="id" value="<?php echo ( isset($this->item->id) ? $this->item->id : '' ); ?>" />
	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
</form>
