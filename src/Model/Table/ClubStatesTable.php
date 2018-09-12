<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClubStates Model
 *
 * @method \App\Model\Entity\ClubState get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClubState newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ClubState[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClubState|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClubState|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClubState patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClubState[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClubState findOrCreate($search, callable $callback = null, $options = [])
 */
class ClubStatesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('club_states');
        $this->setDisplayField('club_state_id');
        $this->setPrimaryKey('club_state_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('club_state_id')
            ->allowEmpty('club_state_id', 'create');

        $validator
            ->scalar('club_state_name')
            ->maxLength('club_state_name', 150)
            ->requirePresence('club_state_name', 'create')
            ->notEmpty('club_state_name');

        $validator
            ->scalar('club_state_code')
            ->maxLength('club_state_code', 5)
            ->allowEmpty('club_state_code');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->dateTime('created_on')
            ->requirePresence('created_on', 'create')
            ->notEmpty('created_on');

        $validator
            ->dateTime('updated_on')
            ->allowEmpty('updated_on');

        return $validator;
    }
}
