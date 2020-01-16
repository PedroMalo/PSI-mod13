<!-- File: templates/Produto/edit.php -->

<h1>Editar Produto</h1>
<?php
    echo $this->Form->create($produto);
	echo $this->Form->control('Designação');
	echo $this->Form->control('Preco');
	echo $this->Form->control('Prazo_Validade');
    echo $this->Form->button(__('Editar Produto'));
    echo $this->Form->end();
?>