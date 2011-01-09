<div class="settings form">
<?php echo $form->create('Setting');?>
	<fieldset>
 		<legend><?php __('Edit Setting');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('type_id', array('label' => $html->link('Type', '/admin/enumerations/add')));
		echo $form->input('name');
		echo $form->input('value');
		echo $form->input('description');
		echo $form->input('plugin', array('after' => 'Convenience limiter'));
		echo $form->input('model', array('after' => 'Convenience limiter'));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Setting.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Setting.id'))); ?></li>
		<li><?php echo $html->link(__('List Settings', true), array('action' => 'index'));?></li>
	</ul>
</div>
