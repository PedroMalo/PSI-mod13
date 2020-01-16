<!-- File: templates/Cliente/edit.php -->

<h1>Editar Cliente</h1>
<?php
    echo $this->Form->create($cliente);
    echo $this->Form->control('Nome');
	echo $this->Form->control('Idade');
	echo $this->Form->control('Telefone');
	echo $this->Form->control('CodPostal');
    echo $this->Form->button(__('Editar Cliente'));
    echo $this->Form->end();
?>