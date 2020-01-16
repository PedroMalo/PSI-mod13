<!-- File: templates/Cliente/index.php (delete links added) -->

<h1>Tabela Cliente</h1>
<p><?= $this->Html->link('Adicionar Cliente', ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>NIF</th>
        <th>Nome</th>
		<th>Idade</th>
        <th>Telefone</th>
        <th>CodPostal</th>
		<th>Ações</th>
    </tr>

<!-- Here's where we loop through our $articles query object, printing out article info -->

    <?php foreach ($cliente as $cliente): ?>
    <tr>
        <td><?= $cliente->NIF?></td>
		<td><?= $this->Html->link($cliente->Nome, ['action' => 'view', $cliente->NIF]) ?></td>
		<td><?= $cliente->Idade?></td>
		<td><?= $cliente->Telefone?></td>
		<td><?= $cliente->CodPostal?></td>
		<td><?= $this->Form->postLink(
            'Delete',
            ['action' => 'delete', $cliente->NIF],
            ['confirm' => 'Are you sure?'])?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $cliente->NIF]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="http://localhost/CakeComposer/projeto_mod13/empregado">Empregado</a> | 
<a href="http://localhost/CakeComposer/projeto_mod13/fornecedor">Fornecedor</a> | 
<a href="http://localhost/CakeComposer/projeto_mod13/produto">Produto</a>