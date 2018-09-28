<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Match Entity
 *
 * @property int $match_id
 * @property int $team_1
 * @property int $team_2
 * @property \Cake\I18n\FrozenTime $match_on
 * @property string $venue
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created_on
 * @property \Cake\I18n\FrozenTime $updated_on
 */
class Match extends Entity
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
        'team_1' => true,
        'team_2' => true,
        'match_on' => true,
        'venue' => true,
        'status' => true,
        'created_on' => true,
        'updated_on' => true
    ];
}
