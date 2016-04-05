<?php
/*
 * Template/Events/index.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>

<div class="events small-12 medium-8 large-12 columns">
	<h2 class="inline-block"><?= __('Events');?></h2>
	<ul class="no-bullet inline-list inline-block">
		<li><?= $this->Html->link(__('Add an Event', true), ['action' => 'add']); ?></li>
		<li><?= $this->Html->link(__('Manage Event Types', true), ['controller' => 'event_types', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('View Calendar', true), ['controller' => 'full_calendar']); ?></li>
	</ul>
	<table cellpadding="0" cellspacing="0" class="small-12 columns">
		<tr>
				<th><?= $this->Paginator->sort('event_type_id');?></th>
				<th><?= $this->Paginator->sort('title');?></th>
				<th><?= $this->Paginator->sort('status');?></th>
				<th><?= $this->Paginator->sort('start');?></th>
	            <th><?= $this->Paginator->sort('end');?></th>
	            <th><?= $this->Paginator->sort('all_day');?></th>
				<th class="actions"></th>
		</tr>
		<?php
			$i = 0;
			foreach ($events as $event):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
		?>
			<tr<?= $class;?>>
				<td>
					<?= $this->Html->link($event->event_type->name, ['controller' => 'event_types', 'action' => 'view', $event->event_type->id]); ?>
				</td>
				<td><?= $event->title ?></td>
				<td><?= $event->status ?></td>
				<td><?= $event->start ?></td>
		        <?php if($event->all_day == 0): ?>
		   			<td><?= $event->end ?></td>
		    	<?php else: ?>
				<td>N/A</td>
		        <?php endif; ?>
		        <td><?php if($event->all_day == 1) { echo "Yes"; } else { echo "No"; } ?></td>
				<td class="actions">
					<?= $this->Html->link(__('View', true), ['action' => 'view', $event->id]); ?>
					<?= $this->Html->link(__('Edit', true), ['action' => 'edit', $event->id]); ?>
					<?= $this->Form->postLink('Delete', ['action' => 'delete', $event->id], ['confirm' => 'Are you sure?']); ?>
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