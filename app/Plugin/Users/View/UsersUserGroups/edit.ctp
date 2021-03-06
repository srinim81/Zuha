<div class="UsersUserGroups form">
<?php echo $this->Form->create('UsersUserGroup');?>
	<fieldset>
 		<legend><?php echo __('Edit Users User Goup'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('user_group_id');
		echo $this->Form->input('is_approved');
		echo $this->Form->input('is_moderator');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php 
// set the contextual menu items
$this->set('context_menu', array('menus' => array(
	array(
		'heading' => 'Users User Goups',
		'items' => array(
			$this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('UsersUserGroup.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('UsersUserGroup.id'))),
			$this->Html->link(__('List Users User Goups', true), array('action' => 'index')),
			$this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')),
			$this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')),
			$this->Html->link(__('List User Groups', true), array('controller' => 'user_groups', 'action' => 'index')),
			$this->Html->link(__('New User Group', true), array('controller' => 'user_groups', 'action' => 'add')),
			)
		),
	)));
?>