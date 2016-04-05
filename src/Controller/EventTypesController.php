<?php
/*
 * Controllers/EventTypesController.php
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
 
namespace FullCalendar\Controller;

use FullCalendar\Controller\FullCalendarAppController;

/**
 * EventTypes Controller
 *
 * @property \FullCalendar\Model\Table\EventTypesTable $EventTypes
 */
class EventTypesController extends FullCalendarAppController
{
    public $name = 'EventTypes';
    public $paginate = ['limit' => 15];
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('eventTypes', $this->paginate($this->EventTypes));
        $this->set('_serialize', ['eventTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Event Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventType = $this->EventTypes->get($id, [
            'contain' => ['Events']
        ]);
        $this->set('eventType', $eventType);
        $this->set('_serialize', ['eventType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventType = $this->EventTypes->newEntity();
        if ($this->request->is('post')) {
            $eventType = $this->EventTypes->patchEntity($eventType, $this->request->data);
            if ($this->EventTypes->save($eventType)) {
                $this->Flash->success(__('The event type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The event type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('eventType'));
        $this->set('_serialize', ['eventType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventType = $this->EventTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if (!$id && empty($this->request->data)) {
                $this->Flash->error(__('Invalid event type', true));
                $this->redirect(['action' => 'index']);
            }
            if (!empty($this->request->data)) {
                $eventType = $this->EventTypes->patchEntity($eventType, $this->request->data);
                if ($this->EventTypes->save($eventType)) {
                    $this->Flash->success(__('The event type has been saved', true));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The event type could not be saved. Please, try again.', true));
                }
            }
            if (empty($this->request->data)) {
                $this->request->data = $this->EventTypes->read(null, $id);
            }
        }
        $this->set(compact('eventType'));
        $this->set('_serialize', ['eventType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventType = $this->EventTypes->get($id);
        if ($this->EventTypes->delete($eventType)) {
            $this->Flash->success(__('The event type has been deleted.'));
        } else {
            $this->Flash->error(__('The event type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
