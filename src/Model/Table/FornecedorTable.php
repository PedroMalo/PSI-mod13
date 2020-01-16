<?php
// src/Model/Table/FornecedorTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class FornecedorTable extends Table
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
			->notEmpty('Telefone')
            ->requirePresence('Telefone')
			->notEmpty('CodPostal')
            ->requirePresence('CodPostal');

        return $validator;
    }
}
?>