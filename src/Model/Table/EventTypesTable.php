<?php

namespace FullCalendar\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use FullCalendar\Model\Entity\EventType;

/**
 * EventTypes Model
 */
class EventTypesTable extends Table
{
    public $name = "EventType";
    public $displayField = "name";

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('event_types');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Events', [
            'foreignKey' => 'event_type_id',
            'className' => 'FullCalendar.Events'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->requirePresence('color', 'create')
            ->notEmpty('color');

        return $validator;
    }
}
