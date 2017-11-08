<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Noticia Model
 *
 * @method \App\Model\Entity\Noticium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Noticium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Noticium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Noticium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Noticium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Noticium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Noticium findOrCreate($search, callable $callback = null, $options = [])
 */
class NoticiaTable extends Table
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

        $this->table('noticia');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('Descricao', 'create')
            ->notEmpty('Descricao');

        $validator
            ->date('Data')
            ->requirePresence('Data', 'create')
            ->notEmpty('Data');

        return $validator;
    }
}
