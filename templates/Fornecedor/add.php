<!-- File: templates/Fornecedor/add.php -->

<h1>Adicionar Fornecedor</h1>
<?php
    echo $this->Form->create($fornecedor);
	echo $this->Form->control('Nome');
	echo $this->Form->control('Telefone');
	echo $this->Form->control('CodPostal');
    echo $this->Form->button(__('Adicionar Fornecedor'));
    echo $this->Form->end();
?>