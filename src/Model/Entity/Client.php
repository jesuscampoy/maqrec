<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property string $id
 * @property string $area_id
 * @property string $user_id
 * @property string $name
 * @property string $contact_name
 * @property string $address
 * @property int $telephone
 * @property \Cake\I18n\Time $contract_end
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Area $area
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Collection[] $collections
 * @property \App\Model\Entity\Donation[] $donations
 * @property \App\Model\Entity\Loan[] $loans
 * @property \App\Model\Entity\Machine[] $machines
 * @property \App\Model\Entity\Refund[] $refunds
 */
class Client extends Entity
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
