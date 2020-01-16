<!-- File: templates/Empregado/add.php -->

<h1>Adicionar Empregado</h1>
<?php
    echo $this->Form->create($empregado);
	echo $this->Form->control('Nome');
	echo $this->Form->control('Idade');
	echo $this->Form->control('Telefone');
	echo $this->Form->control('CodPostal');
    echo $this->Form->button(__('Adicionar Empregado'));
    echo $this->Form->end();
?>