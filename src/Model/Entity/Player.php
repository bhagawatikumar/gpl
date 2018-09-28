<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Player Entity
 *
 * @property int $player_id
 * @property string $player_name
 * @property string $player_image
 * @property int $player_jersey_number
 * @property int $player_country_id
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created_on
 * @property \Cake\I18n\FrozenTime $updated_on
 *
 * @property \App\Model\Entity\Country $country
 */
class Player extends Entity
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
        'player_name' => true,
        'player_image' => true,
        'player_jersey_number' => true,
        'player_country_id' => true,
        'status' => true,
        'created_on' => true,
        'updated_on' => true,
        'country' => true
    ];
}
