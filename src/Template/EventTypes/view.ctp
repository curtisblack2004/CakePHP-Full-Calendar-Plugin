<?php
/*
 * Template/EventTypes/view.ctp
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
		<li><?= $this->Html->link(__('Edit Event Type', true), ['action' => 'edit', $eventType->id]); ?> </li>
		<li><?= $this->Html->link(__('Delete Event Type', true), ['action' => 'delete', $eventType->id], [], sprintf(__('Are you sure you want to delete %s?', true), $eventType->name)); ?> </li>
		<li><?= $this->Html->link(__('Manage Event Types', true), ['action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('Manage Events', true), ['controller' => 'events', 'action' => 'index']); ?></li>
		<li><?= $this->Html->link(__('View Calendar', true), ['controller' => 'full_calendar']); ?></li>
	</ul>
</div>
<div class="eventTypes small-12 medium-8 large-9 columns">
	<h2><?= __('Event Type');?></h2>
	<p>
		<span><?= __('Name') ?>: </span>
		<?= $eventType->name; ?>
	</p>
	<p>
		<span><?= __('Color') ?>: </span>
		<?= $eventType->color; ?>
	</p>
</div>
<div class="divider"></div>
<div class="related small-12">
	<?php if (!empty($eventType->events)):?>
	<h3><?= __('Related Events');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?= __('Title'); ?></th>
		<th><?= __('Status'); ?></th>
		<th><?= __('Start'); ?></th>
        <th><?= __('End'); ?></th>
        <th><?= __('All Day'); ?></th>
		<th><?= __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eventType->events as $event):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?= $class;?>>
			<td><?= $event->title;?></td>
			<td><?= $event->status;?></td>
			<td><?= $event->start;?></td>
            <td><?php if($event->all_day != 1) { echo $event['end']; } else { echo "N/A"; } ?></td>
            <td><?php if($event->all_day == 1) { echo "Yes"; } else { echo "No"; }?></td>
			<td><?= $event['modified'];?></td>
			<td class="actions">
				<?= $this->Html->link(__('View', true), ['controller' => 'events', 'action' => 'view', $event->id]); ?>
				<?= $this->Html->link(__('Edit', true), ['controller' => 'events', 'action' => 'edit', $event->id]); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>