<!-- File: templates/Cliente/add.php -->

<h1>Adicionar Cliente</h1>
<?php
    echo $this->Form->create($cliente);
	echo $this->Form->control('Nome');
	echo $this->Form->control('Idade');
	echo $this->Form->control('Telefone');
	echo $this->Form->control('CodPostal');
    echo $this->Form->button(__('Adicionar Cliente'));
    echo $this->Form->end();
?>