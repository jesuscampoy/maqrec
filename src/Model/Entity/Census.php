<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Census Entity
 *
 * @property string $id
 * @property string $area_id
 * @property string $name
 * @property string $contact_name
 * @property string $address
 * @property int $telephone
 * @property int $number_of_machines
 * @property string $current_provider
 * @property \Cake\I18n\Time $contract_end
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Area $area
 */
class Census extends Entity
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
