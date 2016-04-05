<?php
/*
 * Template/EventTypes/index.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>

<div class="eventTypes small-6 small-centered columns">
	<h2 class="inline-block"><?= __('Event Types');?></h2>
	<ul class="no-bullet inline-list inline-block">
		<li><?= $this->Html->link(__('Add an Event Type', true), ['action' => 'add']); ?></li>
		<li><?= $this->Html->link(__('Manage Events', true), ['controller' => 'events', 'action' => 'index']); ?></li>
        <li><?= $this->Html->link(__('View Calendar', true), ['controller' => 'full_calendar']); ?></li>
	</ul>
	<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?= $this->Paginator->sort('name');?></th>
	            <th><?= $this->Paginator->sort('color');?></th>
				<th class="actions"></th>
		</tr>
	<?php
		$i = 0;
		foreach ($eventTypes as $eventType):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
	?>
		<tr<?= $class;?>>
			<td><?= $eventType->name; ?></td>
	        <td><?= $eventType->color; ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View', true), ['action' => 'view', $eventType->id]); ?>
				<?= $this->Html->link(__('Edit', true), ['action' => 'edit', $eventType->id]); ?>
				<?= $this->Form->postLink('Delete', ['action' => 'delete', $eventType->id], ['confirm' => 'Are you sure?']); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<div class="paginator small-12 small-centered medium-8 medium-centered large-6 large-centered columns text-center">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>