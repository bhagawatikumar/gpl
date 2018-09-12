<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClubState Entity
 *
 * @property int $club_state_id
 * @property string $club_state_name
 * @property string $club_state_code
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created_on
 * @property \Cake\I18n\FrozenTime $updated_on
 */
class ClubState extends Entity
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
        'club_state_name' => true,
        'club_state_code' => true,
        'status' => true,
        'created_on' => true,
        'updated_on' => true
    ];
}
