<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Censuses Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Areas
 *
 * @method \App\Model\Entity\Census get($primaryKey, $options = [])
 * @method \App\Model\Entity\Census newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Census[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Census|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Census patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Census[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Census findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CensusesTable extends Table
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

        $this->table('censuses');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Areas', [
            'foreignKey' => 'area_id',
            'joinType' => 'INNER'
        ]);
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('contact_name', 'create')
            ->notEmpty('contact_name');

        $validator
            ->allowEmpty('address');

        $validator
            ->integer('telephone')
            ->allowEmpty('telephone');

        $validator
            ->integer('number_of_machines')
            ->allowEmpty('number_of_machines');

        $validator
            ->allowEmpty('current_provider');

        $validator
            ->date('contract_end')
            ->allowEmpty('contract_end');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['area_id'], 'Areas'));
        return $rules;
    }
}
