<!-- File: templates/Empregado/edit.php -->

<h1>Editar Empregado</h1>
<?php
    echo $this->Form->create($empregado);
    echo $this->Form->control('Nome');
	echo $this->Form->control('Idade');
	echo $this->Form->control('Telefone');
	echo $this->Form->control('CodPostal');
    echo $this->Form->button(__('Editar Cliente'));
    echo $this->Form->end();
?>