<?php
// src/Model/Table/ProdutoTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProdutoTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator):validator
    {
        $validator
            ->notEmpty('Designação')
            ->requirePresence('Designação')
			->notEmpty('Preco')
            ->requirePresence('Preco')
			->notEmpty('Prazo_Validade')
            ->requirePresence('Prazo_Validade');

        return $validator;
    }
}
?>