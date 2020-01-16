<!-- File: templates/Fornecedor/edit.php -->

<h1>Editar Fornecedor</h1>
<?php
    echo $this->Form->create($fornecedor);
    echo $this->Form->control('Nome');
	echo $this->Form->control('Telefone');
	echo $this->Form->control('CodPostal');
    echo $this->Form->button(__('Editar Fornecedor'));
    echo $this->Form->end();
?>