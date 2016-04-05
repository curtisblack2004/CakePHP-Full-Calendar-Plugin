<?php
/*
 * Template/Events/add.ctp
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
		<li><?= $this->Html->link(__('Manage Events', true), ['action' => 'index']);?></li>
		<li><?= $this->Html->link(__('Manage Event Types', true), ['controller' => 'event_types', 'action' => 'index']);?></li>
		<li><?= $this->Html->link(__('View Calendar', true), ['controller' => 'full_calendar']); ?></li>
	</ul>
</div>
<div class="float-none form small-12 medium-8 large-9 columns">
<?= $this->Form->create($event);?>
	<fieldset>
 		<legend><?= __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('event_type_id');
		echo $this->Form->input('title');
		echo $this->Form->input('details');
		echo $this->Form->input('start', ['timeFormat' => 12]);
		echo $this->Form->input('end', ['timeFormat' => 12]);
		echo $this->Form->input('all_day');
		echo $this->Form->input('status', ['options' => [
					'Scheduled' => 'Scheduled','Confirmed' => 'Confirmed','In Progress' => 'In Progress',
					'Rescheduled' => 'Rescheduled','Completed' => 'Completed'
				]
			]
		);
	?>
	</fieldset>
<?= $this->Form->button(__('Submit', true));?>
<?= $this->Form->end(); ?>
</div>