<?php
// src/Model/Table/EmpregadoTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class EmpregadoTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator):validator
    {
        $validator
            ->notEmpty('Nome')
            ->requirePresence('Nome')
            ->notEmpty('Idade')
            ->requirePresence('Idade')
			->notEmpty('Telefone')
            ->requirePresence('Telefone')
			->notEmpty('CodPostal')
            ->requirePresence('CodPostal');

        return $validator;
    }
}
?>