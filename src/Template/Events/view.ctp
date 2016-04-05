<?php
/*
 * Template/Events/view.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>

<div class="small-12 columns">
	<h1 class="inline-block"><?= __('Event'); ?> - </h1>
		<p class="inline-block"><?= $this->Html->link($event->event_type->name, ['controller' => 'event_types', 'action' => 'view', $event->event_type->id]); ?></p>
	<ul class="inline-list">
		<li><?= $this->Html->link(__('Edit Event', true), ['action' => 'edit', $event->id]); ?> </li>
		<li><?= $this->Html->link(__('Delete Event', true), ['action' => 'delete', $event->id], [], sprintf(__('Are you sure you want to delete this %s event?', true), $event->event_type->name)); ?> </li>
		<li><?= $this->Html->link(__('Manage Events', true), ['action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('Manage Event Types', true), ['controller' => 'event_types', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('Add an Event', true), ['action' => 'add']); ?></li>
		<li><?= $this->Html->link(__('View Calendar', true), ['controller' => 'full_calendar']); ?></li>
	</ul>
	<h2><?= $event->title; ?></h2>
	<h3><?= $event->start->format('F jS @ g:ia'); ?> - <?= $event->end->format('g:ia'); ?></h3>
	<p>
		<?= $event->details; ?>
	</p>
	<p>
		<span><?= __('EVENT DETAILS: '); ?></span>
	</p>
	<p>
		<span><?= __('DATE: '); ?></span>
		<?= $event->start->format('l, F jS'); ?>
	</p>
	<p>
		<span><?= __('TIME: '); ?></span>
		<?php if($event->all_day != 1): ?>
			<?= $event->start->format('g:ia'); ?> - <?= $event->end->format('g:ia'); ?>
		<?php else: ?>
			<?= "N/A"; ?>
		<?php endif; ?> 
	</p>
</div>