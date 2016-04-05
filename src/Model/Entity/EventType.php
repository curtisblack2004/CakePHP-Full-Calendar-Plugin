<?php
namespace FullCalendar\Model\Entity;

use Cake\ORM\Entity;

/**
 * EventType Entity.
 */
class EventType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'id' => false,
        'name' => true,
        'color' => true,
    ];
}
