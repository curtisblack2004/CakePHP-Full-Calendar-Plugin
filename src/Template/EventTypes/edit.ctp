<?php
/*
 * Template/EventTypes/edit.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>

<div class="actions small-12 medium-4 large-3 columns">
	<h4>Actions</h4>
	<ul class="no-bullet">
		<li><?= $this->Html->link(__('Add an Event Type', true), ['action' => 'add']); ?></li>
		<li><?= $this->Html->link(__('View Event Type', true), ['action' => 'view', $eventType->id]); ?></li>
		<li><?= $this->Html->link(__('Delete Event Type', true), ['action' => 'delete', $eventType->id], [], sprintf(__('Are you sure you want to delete %s?', true), $eventType->name)); ?> </li>
		<li><?= $this->Html->link(__('Manage Event Types', true), ['action' => 'index']);?></li>
		<li><?= $this->Html->link(__('Manage Events', true), ['controller' => 'events', 'action' => 'index']); ?></li>
		<li><li><?= $this->Html->link(__('View Calendar', true), ['controller' => 'full_calendar']); ?></li>
	</ul>
</div>
<div class="float-none form small-12 medium-8 large-9 columns">
<?= $this->Form->create($eventType);?>
	<fieldset>
 		<legend><?= __('Edit Event Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('color', 
					['options' => [
						'Blue' => 'Blue',
						'Red' => 'Red',
						'Pink' => 'Pink',
						'Purple' => 'Purple',
						'Orange' => 'Orange',
						'Green' => 'Green',
						'Gray' => 'Gray',
						'Black' => 'Black',
						'Brown' => 'Brown'
					]]);

	?>
	</fieldset>
<?= $this->Form->button(__('Submit', true));?>
<?= $this->Form->end(); ?>
</div>