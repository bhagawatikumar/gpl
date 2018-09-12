<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Team Entity
 *
 * @property int $team_id
 * @property string $team_name
 * @property string $team_logo
 * @property int $team_club_state
 * @property \Cake\I18n\FrozenTime $created_on
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $updated_on
 */
class Team extends Entity
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
        'team_name' => true,
        'team_logo' => true,
        'team_club_state' => true,
        'created_on' => true,
        'status' => true,
        'updated_on' => true
    ];
}
