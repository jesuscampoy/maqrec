<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Loan Entity
 *
 * @property string $id
 * @property string $client_id
 * @property int $quantity
 * @property \Cake\I18n\Time $loan_date
 * @property \Cake\I18n\Time $due_date
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Client $client
 */
class Loan extends Entity
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
