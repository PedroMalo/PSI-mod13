<!-- File: templates/Produto/add.php -->

<h1>Adicionar Produto</h1>
<?php
    echo $this->Form->create($produto);
	echo $this->Form->control('Designação');
	echo $this->Form->control('Preco');
	echo $this->Form->control('Prazo_Validade');
    echo $this->Form->button(__('Adicionar Produto'));
    echo $this->Form->end();
?>