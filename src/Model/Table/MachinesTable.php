<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Machines Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Clients
 * @property \Cake\ORM\Association\HasMany $Collections
 *
 * @method \App\Model\Entity\Machine get($primaryKey, $options = [])
 * @method \App\Model\Entity\Machine newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Machine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Machine|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Machine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Machine[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Machine findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MachinesTable extends Table
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

        $this->table('machines');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Collections', [
            'foreignKey' => 'machine_id'
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
            ->requirePresence('model', 'create')
            ->notEmpty('model');

        $validator
            ->requirePresence('registration', 'create')
            ->notEmpty('registration');

        $validator
            ->integer('init_inputs')
            ->requirePresence('init_inputs', 'create')
            ->notEmpty('init_inputs');

        $validator
            ->integer('init_outputs')
            ->requirePresence('init_outputs', 'create')
            ->notEmpty('init_outputs');

        $validator
            ->integer('taxes')
            ->requirePresence('taxes', 'create')
            ->notEmpty('taxes');

        $validator
            ->integer('gain')
            ->requirePresence('gain', 'create')
            ->notEmpty('gain');

        $validator
            ->integer('coin')
            ->requirePresence('coin', 'create')
            ->notEmpty('coin');

        $validator
            ->integer('tolva')
            ->requirePresence('tolva', 'create')
            ->notEmpty('tolva');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

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
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        return $rules;
    }
}
