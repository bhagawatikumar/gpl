<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tournament Entity
 *
 * @property int $tournament_id
 * @property string $tournament_name
 * @property \Cake\I18n\FrozenDate $tournament_start_date
 * @property \Cake\I18n\FrozenDate $tournament_end_date
 * @property int $tournament_country_id
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created_on
 * @property \Cake\I18n\FrozenTime $updated_on
 *
 * @property \App\Model\Entity\Country $country
 */
class Tournament extends Entity
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
        'tournament_name' => true,
        'tournament_start_date' => true,
        'tournament_end_date' => true,
        'tournament_country_id' => true,
        'status' => true,
        'created_on' => true,
        'updated_on' => true,
        'country' => true
    ];
}
