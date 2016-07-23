<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Machine Entity
 *
 * @property string $id
 * @property string $client_id
 * @property string $model
 * @property string $registration
 * @property int $init_inputs
 * @property int $init_outputs
 * @property int $taxes
 * @property int $gain
 * @property int $coin
 * @property int $tolva
 * @property bool $active
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Collection[] $collections
 */
class Machine extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
