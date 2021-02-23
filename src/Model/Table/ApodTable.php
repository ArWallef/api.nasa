<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Apod Model
 *
 * @method \App\Model\Entity\Apod newEmptyEntity()
 * @method \App\Model\Entity\Apod newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Apod[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Apod get($primaryKey, $options = [])
 * @method \App\Model\Entity\Apod findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Apod patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Apod[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Apod|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Apod saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Apod[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Apod[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Apod[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Apod[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ApodTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('apod');
        $this->setDisplayField('title');
        $this->setPrimaryKey('date');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->date('date')
            ->allowEmptyDate('date', null, 'create');

        $validator
            ->scalar('copyright')
            ->maxLength('copyright', 255)
            ->allowEmptyString('copyright');

        $validator
            ->scalar('explanation')
            ->allowEmptyString('explanation');

        $validator
            ->scalar('hdurl')
            ->maxLength('hdurl', 255)
            ->allowEmptyString('hdurl');

        $validator
            ->scalar('media_type')
            ->maxLength('media_type', 45)
            ->allowEmptyString('media_type');

        $validator
            ->scalar('service_version')
            ->maxLength('service_version', 45)
            ->allowEmptyString('service_version');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->allowEmptyString('title');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmptyString('url');

        return $validator;
    }
}
