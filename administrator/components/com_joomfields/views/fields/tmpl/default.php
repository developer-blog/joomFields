<?php
defined('_JEXEC') or die;
?>
<form action="<?php echo JRoute::_('index.php?option=com_joomfields&view=fields');?>" method="post" name="adminForm">

	<table class="adminlist">
		<thead>
		<tr>
			<th width="1%">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(this)" />
			</th>
			<th width="20">
				<?php echo JText::_('id'); ?>
			</th>
			<th>
				<?php echo JText::_('Name'); ?>
			</th>
			<th>
				<?php echo JText::_('Label'); ?>
			</th>
			<th width="5%">
				<?php echo JText::_('Type'); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
		<tr>
			<td colspan="5"></td>
		</tr>
		</tfoot>
		<tbody>
		<?php foreach ($this->items as $i => $item) : ?>
			<tr class="row<?php echo $i % 2; ?>" id="item_<?=$item->id?>">
				<td class="center">
					<?php echo JHtml::_('grid.id', $i, $item->id); ?>
				</td>
				<td class="center">
					<?php echo $item->id;?>
				</td>
				<td>
					<a href="index.php?option=com_joomfields&view=field&id=<?php echo $item->id ?>"><?php echo $item->name ?></a>
				</td>
				<td>
					<a href="index.php?option=com_joomfields&view=field&id=<?php echo $item->id ?>"><?php echo $item->label ?></a>
				</td>
				<td>
					<?php echo $item->type; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<?php echo JHtml::_('form.token'); ?>
</form>
