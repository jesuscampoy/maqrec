<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Collection Entity
 *
 * @property string $id
 * @property string $client_id
 * @property string $machine_id
 * @property \Cake\I18n\Time $date
 * @property int $inputs
 * @property int $outputs
 * @property int $bruto_recaudado
 * @property int $tolva
 * @property int $donation
 * @property string $comments
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Machine $machine
 */
class Collection extends Entity
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
